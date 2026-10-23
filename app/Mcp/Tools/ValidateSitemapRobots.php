<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use App\Models\Page;
use App\Support\Sitemap;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('Check sitemap.xml and robots.txt: what the sitemap lists, published pages left out (noindex or canonical elsewhere), sitemap URLs that robots.txt blocks, and whether robots.txt names the sitemap. robots.txt is edited with update_settings (key robots_txt).')]
class ValidateSitemapRobots extends SiteTool
{
    public function handle(Request $request): Response
    {
        $base = $this->base();
        $entries = Sitemap::entries($base);
        $robots = Sitemap::robots($base);
        $listed = $entries->pluck('loc')->map(fn ($u) => parse_url($u, PHP_URL_PATH))->all();

        // Disallow rules for all crawlers
        $disallow = [];
        $applies = false;
        foreach (preg_split('/\R/', $robots) as $line) {
            if (preg_match('/^User-agent:\s*(.+)$/i', trim($line), $m)) {
                $applies = trim($m[1]) === '*';
            } elseif ($applies && preg_match('/^Disallow:\s*(\S+)/i', trim($line), $m)) {
                $disallow[] = $m[1];
            }
        }
        $blocked = collect($listed)->filter(fn ($path) => collect($disallow)->contains(fn ($rule) => str_starts_with($path, $rule)))->values();

        $left = collect()
            ->concat(Page::query()->with('seo')->where('status', 'published')->get())
            ->concat(Blog::query()->with('seo')->where('status', 'published')->get())
            ->reject(fn ($e) => in_array($e->path(), $listed, true))
            ->map(fn ($e) => [
                'url' => $base.$e->path(),
                'why' => str_contains((string) $e->seo?->robots, 'noindex') ? 'noindex' : 'canonical points elsewhere',
            ])->values();

        $problems = [];
        if ($blocked->isNotEmpty()) {
            $problems[] = 'robots.txt blocks URLs that the sitemap lists: '.$blocked->implode(', ');
        }
        if (is_file(public_path('robots.txt'))) {
            $problems[] = 'public/robots.txt exists: the web server serves that file instead of the robots_txt setting. Remove it.';
        }
        if (collect($disallow)->contains('/')) {
            $problems[] = 'robots.txt has "Disallow: /": the whole site is blocked for search engines.';
        }

        return $this->json([
            'ok' => $problems === [],
            'problems' => $problems,
            'sitemap' => [
                'urls' => "$base/sitemap.xml",
                'index' => "$base/sitemap_index.xml",
                'count' => $entries->count(),
                'pages' => $entries->where('type', 'page')->count(),
                'posts' => $entries->where('type', 'post')->count(),
            ],
            'published_but_not_in_sitemap' => $left,
            'robots_txt' => $robots,
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [];
    }
}
