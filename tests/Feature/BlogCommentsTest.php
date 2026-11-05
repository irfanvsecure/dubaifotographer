<?php

namespace Tests\Feature;

use App\Http\Middleware\RedirectTrailingSlash;
use App\Mail\BookingRequestMail;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class BlogCommentsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // the test client drops the trailing slash every public URL has
        $this->withoutMiddleware(RedirectTrailingSlash::class);
    }

    private function blog(array $attributes = []): Blog
    {
        return Blog::create($attributes + [
            'slug' => 'test-post',
            'title' => 'Test post',
            'content' => '<p>Body</p>',
            'status' => 'published',
            'published_at' => now()->subDay(),
            'layout' => ['comments' => '1'],
        ]);
    }

    private function send(Blog $blog, array $extra = [])
    {
        return $this->postJson('/comments', $extra + [
            'blog_id' => $blog->id,
            'author' => 'Sara',
            'email' => 'sara@example.com',
            'comment' => 'Great <script>alert(1)</script> post',
        ]);
    }

    public function test_a_comment_waits_for_approval_and_the_owner_is_emailed(): void
    {
        Mail::fake();
        $blog = $this->blog();

        $this->send($blog)->assertOk();

        $this->assertSame('pending', Comment::query()->first()->status);
        Mail::assertSent(BookingRequestMail::class);
        $this->get('/test-post/')->assertOk()->assertDontSee('Sara');
    }

    public function test_an_approved_comment_shows_with_its_text_escaped_and_no_email(): void
    {
        $blog = $this->blog();
        $blog->comments()->create(['author' => 'Sara', 'email' => 'sara@example.com', 'body' => 'Great <script>alert(1)</script> post', 'status' => 'approved']);

        $this->get('/test-post/')->assertOk()
            ->assertSee('Sara')
            ->assertSee('&lt;script&gt;alert(1)', false)
            ->assertDontSee('<script>alert(1)', false)
            ->assertDontSee('sara@example.com');
    }

    public function test_the_form_is_on_the_post_and_posts_to_the_comments_route(): void
    {
        $this->blog();

        $this->get('/test-post/')->assertOk()->assertSee('/comments/"', false)->assertDontSee('wp-comments-post');
    }

    public function test_missing_fields_are_refused(): void
    {
        $this->send($this->blog(), ['email' => 'nope'])->assertStatus(422);

        $this->assertSame(0, Comment::query()->count());
    }

    public function test_a_draft_or_a_post_without_comments_takes_none(): void
    {
        Mail::fake();

        $this->send($this->blog(['slug' => 'draft', 'status' => 'draft']))->assertNotFound();
        $this->send($this->blog(['slug' => 'closed', 'layout' => []]))->assertNotFound();

        $this->assertSame(0, Comment::query()->count());
    }

    public function test_the_captcha_is_checked_when_keys_are_set(): void
    {
        config(['services.turnstile.site_key' => 'site', 'services.turnstile.secret_key' => 'secret']);
        Http::fake(['*' => Http::response(['success' => false])]);

        $this->send($this->blog(), ['cf-turnstile-response' => 'bad'])->assertStatus(422);

        $this->assertSame(0, Comment::query()->count());
    }

    public function test_too_many_comments_are_throttled(): void
    {
        Mail::fake();
        $blog = $this->blog();

        foreach (range(1, 5) as $i) {
            $this->send($blog)->assertOk();
        }
        $this->send($blog)->assertStatus(429);
    }
}
