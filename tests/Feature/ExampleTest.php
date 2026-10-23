<?php

namespace Tests\Feature;

use App\Http\Middleware\RedirectTrailingSlash;
use App\Models\Blog;
use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // the test client drops the trailing slash every public URL has
        $this->withoutMiddleware(RedirectTrailingSlash::class);
        $this->artisan('content:import')->assertSuccessful();
    }

    public function test_pages_and_posts_render_from_the_database(): void
    {
        $this->get('/')->assertOk()->assertSee('<link rel="canonical" href="https://dubaifotographer.com/"/>', false);
        $this->get('/about-us/')->assertOk();
        $this->get('/locations/photographer-in-ajman/')->assertOk();
        $this->get('/privacy-policy/')->assertOk();
        $this->get('/brief-your-event-photographer-uae/')->assertOk()->assertSee('application/ld+json', false);
    }

    public function test_redirects_table_and_unknown_paths(): void
    {
        $this->get('/portfolio-2/')->assertRedirect('http://localhost/portfolio/')->assertStatus(301);
        $this->get('/no-such-page/')->assertNotFound();
    }

    public function test_drafts_are_not_public(): void
    {
        Blog::query()->where('slug', 'brief-your-event-photographer-uae')->update(['status' => 'draft']);

        $this->get('/brief-your-event-photographer-uae/')->assertNotFound();
    }

    public function test_page_h1_comes_from_the_database(): void
    {
        Page::query()->where('slug', 'about-us')->update(['h1' => 'About Dubai Fotographer']);

        $html = $this->get('/about-us/')->assertOk()->getContent();
        $this->assertSame(1, substr_count($html, '<h1'));
        $this->assertStringContainsString('About Dubai Fotographer</h1>', $html);
    }
}
