<?php

namespace Tests\Feature;

use App\Http\Middleware\RedirectTrailingSlash;
use App\Models\ActivityLog;
use App\Models\Blog;
use App\Models\McpToken;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class McpServerTest extends TestCase
{
    use RefreshDatabase;

    private const TOKEN = 'test-token-0123456789-0123456789-0123456789';

    // tokens from mcp:token --generate are letters and digits, so they fit in a URL
    private const TOKEN_URL_SAFE = 'TestToken0123456789abcdefghijklmnopqrstuvwxyz';

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(RedirectTrailingSlash::class);
        $this->artisan('content:import')->assertSuccessful();
        McpToken::query()->create(['name' => 'test', 'token_hash' => McpToken::hash(self::TOKEN)]);
        McpToken::query()->create(['name' => 'test-url', 'token_hash' => McpToken::hash(self::TOKEN_URL_SAFE)]);
    }

    private function rpc(string $method, array $params = [], ?string $token = self::TOKEN)
    {
        return $this->withHeaders(array_filter([
            'Accept' => 'application/json, text/event-stream',
            'Authorization' => $token ? "Bearer $token" : null,
        ]))->postJson('/api/mcp', ['jsonrpc' => '2.0', 'id' => 1, 'method' => $method, 'params' => (object) $params]);
    }

    private function tool(string $name, array $arguments = []): array
    {
        $result = $this->rpc('tools/call', ['name' => $name, 'arguments' => (object) $arguments])->assertOk()->json('result');

        return ['error' => $result['isError'] ?? false, 'data' => json_decode($result['content'][0]['text'], true), 'text' => $result['content'][0]['text']];
    }

    public function test_a_bearer_token_is_required(): void
    {
        $this->rpc('tools/list', [], null)->assertStatus(401);
        $this->rpc('tools/list', [], 'wrong')->assertStatus(401);
    }

    public function test_the_token_can_be_part_of_the_url_for_claude_ai(): void
    {
        $body = ['jsonrpc' => '2.0', 'id' => 1, 'method' => 'tools/list', 'params' => (object) []];
        $headers = ['Accept' => 'application/json, text/event-stream'];

        $this->withHeaders($headers)->postJson('/api/mcp/'.self::TOKEN_URL_SAFE, $body)->assertOk();
        $this->withHeaders($headers)->postJson('/api/mcp/'.str_repeat('x', 40), $body)->assertStatus(401);
    }

    public function test_all_tools_are_listed(): void
    {
        $tools = $this->rpc('tools/list')->assertOk()->json('result.tools');

        $this->assertCount(35, $tools);
        $this->assertContains('update_seo', array_column($tools, 'name'));
    }

    public function test_new_posts_are_drafts_and_updates_need_the_current_version(): void
    {
        $created = $this->tool('create_blog', ['slug' => 'test-post', 'title' => 'Test post', 'content' => '<p>Body</p>']);
        $this->assertFalse($created['error']);
        $this->assertSame('draft', $created['data']['created']['status']);
        $this->get('/test-post/')->assertNotFound();

        $id = $created['data']['created']['id'];
        $this->assertTrue($this->tool('update_blog', ['id' => $id, 'version' => 'old', 'status' => 'published'])['error']);

        $version = $this->tool('get_blog', ['id' => $id])['data']['version'];
        $this->assertFalse($this->tool('update_blog', ['id' => $id, 'version' => $version, 'status' => 'published'])['error']);
        $this->get('/test-post/')->assertOk();
        // the two writes that went through are logged; the refused update and the reads are not
        $this->assertSame(['create_blog', 'update_blog'], ActivityLog::query()->orderBy('id')->pluck('tool')->all());
    }

    public function test_delete_needs_confirmation_and_goes_to_the_trash(): void
    {
        $id = Blog::query()->where('slug', 'brief-your-event-photographer-uae')->value('id');

        $this->assertTrue($this->tool('delete_blog', ['id' => $id])['error']);
        $this->assertFalse($this->tool('delete_blog', ['id' => $id, 'confirm' => true])['error']);
        $this->assertSoftDeleted('blogs', ['id' => $id]);
        $this->assertFalse($this->tool('restore_item', ['type' => 'blog', 'id' => $id])['error']);
        $this->get('/brief-your-event-photographer-uae/')->assertOk();
    }

    public function test_slug_change_adds_a_redirect(): void
    {
        $page = $this->tool('get_page', ['slug' => 'portfolio'])['data'];
        $this->tool('update_page', ['id' => $page['id'], 'version' => $page['version'], 'slug' => 'our-work']);

        $this->get('/portfolio/')->assertRedirect('http://localhost/our-work/');
        $this->get('/our-work/')->assertOk();
    }
}
