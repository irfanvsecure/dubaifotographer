<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Media;
use App\Models\Page;
use App\Models\Redirect;
use App\Models\Setting;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * One-time move of the hand-written site into the database: every Blade page and blog post,
 * its SEO tags (resources/views/seo), the old-URL redirects, the images in use and the site
 * settings. Rows that already exist (same slug / path / key) are left as they are, so running
 * it again never overwrites edits made since.
 */
class ImportContent extends Command
{
    protected $signature = 'content:import
        {--dry-run : Run the import inside a transaction, report it, then roll everything back}
        {--force : Skip the backup confirmation (MySQL)}';

    protected $description = 'Import the Blade pages, blog posts, SEO tags, redirects and images into the database';

    // view name => URL path, where the two differ
    private const SLUG_FOR_VIEW = [
        'index' => '',
        'how-live-photo0-booths-work-at-weddings' => 'how-live-photo-booths-work-at-weddings',
        'multi-camera-event-recording-for-conferences-concerts-and-large-scale-events' => 'multi-camera-event-recording',
    ];

    // views that are not served at their own URL
    private const SKIP_VIEWS = ['services-2'];

    // old URLs (live WordPress site) => new path; these were closures in routes/web.php
    private const REDIRECTS = [
        '/areas-we-serve' => '/locations/',
        '/portfolio-2' => '/portfolio/',
        '/services-2' => '/services/',
        '/multi-camera-coverage-for-weddings-in-the-uae-is-it-worth-it' => '/multi-camera-wedding-coverage-uae/',
        '/how-live-photo0-booths-work-at-weddings' => '/how-live-photo-booths-work-at-weddings/',
        '/multi-camera-event-recording-for-conferences-concerts-and-large-scale-events' => '/multi-camera-event-recording/',
        '/photographer-in-ajman' => '/locations/photographer-in-ajman/',
        '/photographer-in-al-ain' => '/locations/photographer-in-al-ain/',
        '/photographer-in-fujairah' => '/locations/photographer-in-fujairah/',
        '/photographer-in-ras-al-khaimah' => '/locations/photographer-in-ras-al-khaimah/',
        '/photographer-in-sharjah' => '/locations/photographer-in-sharjah/',
        '/photographer-in-umm-al-quwain' => '/locations/photographer-in-umm-al-quwain/',
    ];

    private array $counts = [];

    private array $warnings = [];

    private array $images = [];

    public function handle(): int
    {
        $dry = (bool) $this->option('dry-run');
        if (! $dry && ! $this->backup()) {
            return self::FAILURE;
        }

        DB::beginTransaction();
        try {
            $this->importSettings();
            $this->importViews();
            $this->importRedirects();
            $this->importMedia();
        } catch (\Throwable $e) {
            DB::rollBack();
            $this->error($e->getMessage());

            return self::FAILURE;
        }
        $dry ? DB::rollBack() : DB::commit();

        $this->table(['what', 'created', 'already there'], collect($this->counts)
            ->map(fn ($c, $k) => [$k, $c['created'] ?? 0, $c['skipped'] ?? 0])->values()->all());
        foreach ($this->warnings as $warning) {
            $this->warn($warning);
        }
        $this->info($dry ? 'Dry run: nothing was saved.' : 'Import finished.');

        return self::SUCCESS;
    }

    private function backup(): bool
    {
        $connection = DB::connection();
        if ($connection->getDriverName() === 'sqlite') {
            $file = $connection->getDatabaseName();
            if ($file === ':memory:') {
                return true;
            }
            $copy = storage_path('app/backups/database-'.date('Ymd-His').'.sqlite');
            File::ensureDirectoryExists(dirname($copy));
            File::copy($file, $copy);
            $this->info("Backup: $copy");

            return true;
        }

        $c = $connection->getConfig();
        $this->line('Back up the database first:');
        $this->line(sprintf('  mysqldump -h %s -P %s -u %s -p %s > backup-%s.sql', $c['host'], $c['port'], $c['username'], $c['database'], date('Ymd-His')));

        return $this->option('force') || $this->confirm('Is the backup done?');
    }

    private function count(string $what, bool $created): void
    {
        $this->counts[$what][$created ? 'created' : 'skipped'] = ($this->counts[$what][$created ? 'created' : 'skipped'] ?? 0) + 1;
    }

    private function importSettings(): void
    {
        $defaults = [
            'site_name' => 'dubaifotographer',
            'default_meta_description' => 'Professional photography and videography in Dubai and across the UAE: corporate events, products, real estate, weddings and portraits.',
            'default_og_image' => 'assets/images/2026/04/dubaifotographer-logo-e1782899876206.png',
            // the old public/robots.txt; the Sitemap line is added when it is served
            'robots_txt' => "User-agent: *\nDisallow: /thank-you/\n",
            'social_links' => [
                'facebook' => 'https://www.facebook.com/100050331586482/',
                'instagram' => 'https://www.instagram.com/dubaifotographer_event/',
                'youtube' => 'https://www.youtube.com/@maniwapzstudio',
            ],
            'contact' => [
                'phone' => '+971 52 294 6276',
                'phone_link' => '+971522946276',
                'whatsapp' => '971522946276',
                'email' => 'info@dubaifotographer.com',
                'address' => 'Business Bay - Dubai Design District - Dubai - United Arab Emirates',
                'maps_url' => 'https://maps.app.goo.gl/W4PeNmG4U9xjLbFs8',
            ],
        ];
        foreach ($defaults as $key => $value) {
            $setting = Setting::query()->firstOrCreate(['key' => $key], ['value' => $value]);
            $this->count('settings', $setting->wasRecentlyCreated);
        }
    }

    private function importViews(): void
    {
        $cards = [];
        foreach (require resource_path('data/blog-posts.php') as $position => [$slug, $image, $alt, $title, $date, $topic]) {
            $cards[$slug] = compact('image', 'alt', 'title', 'date', 'topic', 'position');
        }

        $files = array_merge(glob(resource_path('views/*.blade.php')), glob(resource_path('views/locations/*.blade.php')));
        $sort = 0;
        foreach ($files as $file) {
            $view = basename($file, '.blade.php');
            if (str_contains($file, DIRECTORY_SEPARATOR.'locations'.DIRECTORY_SEPARATOR) || str_contains($file, '/locations/')) {
                $view = 'locations.'.$view;
            }
            if (in_array($view, self::SKIP_VIEWS, true)) {
                continue;
            }
            $slug = self::SLUG_FOR_VIEW[$view] ?? str_replace('.', '/', $view);
            $source = file_get_contents($file);
            $seo = $this->parseSeo($view, $slug, $source);

            if (preg_match('#<x-article\b(.*?)>#s', $source, $tag)) {
                $this->importArticle($view, $slug, $source, $tag[1], $seo, $cards[$slug] ?? null, $sort++);
            } else {
                $this->importDesignedPage($view, $slug, $seo, $sort++);
            }
        }
    }

    /** Blog posts (variant post / boxed / full) and text pages (variant page) */
    private function importArticle(string $view, string $slug, string $source, string $tag, array $seo, ?array $card, int $sort): void
    {
        $vars = $this->phpVars($source);
        $attrs = [];
        preg_match_all('#(:?)([\w-]+)="([^"]*)"#', $tag, $found, PREG_SET_ORDER);
        foreach ($found as [, $bound, $name, $value]) {
            $attrs[Str::snake(Str::camel($name))] = $bound ? ($vars[ltrim($value, '$')] ?? null) : $value;
        }
        $title = $attrs['title'] ?? $view;
        unset($attrs['title']);

        $inner = Str::between($source, $tag.'>', '</x-article>');
        $media = preg_match('#<x-slot:media>(.*?)</x-slot:media>#s', $inner, $m) ? trim($m[1]) : null;
        $body = preg_match('#@verbatim(.*?)@endverbatim#s', $inner, $m) ? trim($m[1]) : '';
        if ($body === '') {
            $this->warnings[] = "$view: no @verbatim body found";
        }

        if (($attrs['variant'] ?? '') === 'page') {
            $this->savePage($slug, [
                'title' => $title, 'h1' => null, 'content' => $body, 'template' => 'page', 'sort_order' => $sort,
            ], $seo);

            return;
        }

        if (! $card) {
            $this->warnings[] = "$view: not in resources/data/blog-posts.php (no listing image or topic)";
        }
        $layout = $attrs + ['date' => null];
        if ($media) {
            $layout['media'] = $media;
        }
        if ($card && $card['title'] !== $title) {
            $layout['card_title'] = $card['title'];
        }
        $date = $attrs['date'] ?? $card['date'] ?? null;

        if (Blog::withTrashed()->where('slug', $slug)->exists()) {
            $this->count('blogs', false);

            return;
        }
        $category = $card ? Category::query()->firstOrCreate(['slug' => Str::slug($card['topic'])], ['name' => $card['topic']]) : null;
        $blog = Blog::query()->create([
            'slug' => $slug,
            'title' => $title,
            'excerpt' => $seo['meta_description'] ?? null,
            'content' => $body,
            'featured_image' => $card['image'] ?? null,
            'featured_image_alt' => $card['alt'] ?? null,
            'category_id' => $category?->id,
            'status' => 'published',
            // noon, minus the listing position: posts sharing a date keep the order the blog page had
            'published_at' => $date ? Carbon::parse($date)->setTime(12, 0)->subMinutes($card['position'] ?? 0) : null,
            'layout' => $layout,
        ]);
        $blog->seo()->create($seo);
        $this->count('blogs', true);
        $this->count('seo_meta', true);
        $this->collectImages($body.$media);
    }

    /** Pages whose design is their own Blade template; the H1 is read from the rendered page */
    private function importDesignedPage(string $view, string $slug, array $seo, int $sort): void
    {
        $html = view($view)->render();
        $h1 = preg_match_all('#<h1\b[^>]*>(.*?)</h1>#s', $html, $m) ? trim($m[1][0]) : null;
        if (count($m[1] ?? []) !== 1) {
            $this->warnings[] = "$view: ".count($m[1] ?? []).' H1 tags';
        }
        $this->savePage($slug, [
            'title' => html_entity_decode(strip_tags((string) $h1), ENT_QUOTES | ENT_HTML5) ?: $view,
            'h1' => $h1,
            'content' => null,
            'template' => $view,
            'sort_order' => $sort,
        ], $seo);
        $this->collectImages($html);
    }

    private function savePage(string $slug, array $data, array $seo): void
    {
        if (Page::withTrashed()->where('slug', $slug)->exists()) {
            $this->count('pages', false);

            return;
        }
        $parent = str_contains($slug, '/') ? Page::query()->where('slug', Str::beforeLast($slug, '/'))->value('id') : null;
        $page = Page::query()->create($data + ['slug' => $slug, 'status' => 'published', 'parent_id' => $parent]);
        $page->seo()->create($seo);
        $this->count('pages', true);
        $this->count('seo_meta', true);
        $this->collectImages((string) $data['content']);
    }

    /** @php … @endphp of a post view only assigns literals ($title, $prev, $next, $toc) */
    private function phpVars(string $source): array
    {
        if (! preg_match('#@php(.*?)@endphp#s', $source, $m)) {
            return [];
        }

        return (static function (string $__code): array {
            eval($__code);
            unset($__code);

            return get_defined_vars();
        })($m[1]);
    }

    /** The Yoast tags in the seo/* view a page includes → seo_meta columns */
    private function parseSeo(string $view, string $slug, string $source): array
    {
        $name = preg_match("#@include\('seo\.([^']+)'\)#", $source, $m) ? $m[1] : str_replace('.', '-', $view);
        $file = resource_path('views/seo/'.$name.'.blade.php');
        if (! is_file($file)) {
            $this->warnings[] = "$view: no SEO file";

            return [];
        }
        $head = file_get_contents($file);
        $decode = fn (?string $v) => $v === null ? null : html_entity_decode($v, ENT_QUOTES | ENT_HTML5);
        $meta = function (string $attr, string $name) use ($head, $decode): ?string {
            return preg_match('#<meta\s+'.$attr.'=["\']'.preg_quote($name, '#').'["\']\s+content=(["\'])(.*?)\1#s', $head, $m) ? $decode($m[2]) : null;
        };

        $title = preg_match('#<title>(.*?)</title>#s', $head, $m) ? $decode(trim($m[1])) : null;
        $description = $meta('name', 'description');
        $canonical = preg_match('#<link\s+rel=["\']canonical["\']\s+href=["\']([^"\']+)#', $head, $m) ? $m[1] : null;
        $self = '%%BASE%%/'.($slug === '' ? '' : $slug.'/');
        $ogTitle = $meta('property', 'og:title');
        $ogDescription = $meta('property', 'og:description');

        $schemas = [];
        preg_match_all('#<script type="application/ld\+json"[^>]*>(.*?)</script>#s', $head, $scripts);
        foreach ($scripts[1] as $json) {
            $data = json_decode(trim($json), true);
            $data === null ? $this->warnings[] = "$view: a JSON-LD block is not valid JSON and was skipped" : $schemas[] = $data;
        }

        return [
            'meta_title' => $title,
            'meta_description' => $description,
            'canonical_url' => $canonical === $self ? null : $canonical,
            'robots' => $meta('name', 'robots') ?? 'index, follow',
            'og_title' => $ogTitle === $title ? null : $ogTitle,
            'og_description' => $ogDescription === $description ? null : $ogDescription,
            'og_image' => $meta('property', 'og:image'),
            'schema_json' => $schemas ? json_encode(count($schemas) === 1 ? $schemas[0] : $schemas, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) : null,
        ];
    }

    private function importRedirects(): void
    {
        foreach (self::REDIRECTS as $from => $to) {
            $redirect = Redirect::query()->firstOrCreate(['from_path' => Redirect::normalize($from)], ['to_url' => $to, 'status_code' => 301]);
            $this->count('redirects', $redirect->wasRecentlyCreated);
        }
    }

    private function collectImages(string $html): void
    {
        preg_match_all('#<img\b[^>]*>#i', $html, $tags);
        foreach ($tags[0] as $tag) {
            if (! preg_match('#\ssrc="%%BASE%%/(assets/images/[^"?]+)"#', $tag, $src)) {
                continue;
            }
            $alt = preg_match('#\salt="([^"]*)"#', $tag, $m) ? html_entity_decode($m[1], ENT_QUOTES | ENT_HTML5) : '';
            if (! isset($this->images[$src[1]]) || ($this->images[$src[1]] === '' && $alt !== '')) {
                $this->images[$src[1]] = $alt;
            }
        }
    }

    /** Images used on the site, with the alt text they carry there */
    private function importMedia(): void
    {
        foreach ($this->images as $path => $alt) {
            $file = public_path(rawurldecode($path));
            if (! is_file($file)) {
                $this->warnings[] = "image in use but missing: $path";

                continue;
            }
            if (Media::withTrashed()->where('file_path', $path)->exists()) {
                $this->count('media', false);

                continue;
            }
            $size = @getimagesize($file);
            Media::query()->create([
                'file_path' => $path,
                'alt_text' => $alt !== '' ? $alt : null,
                'width' => $size[0] ?? null,
                'height' => $size[1] ?? null,
                'size' => filesize($file),
                'mime' => $size['mime'] ?? File::mimeType($file),
            ]);
            $this->count('media', true);
        }
    }
}
