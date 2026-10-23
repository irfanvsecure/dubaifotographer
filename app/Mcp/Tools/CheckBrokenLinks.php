<?php

namespace App\Mcp\Tools;

use App\Models\Redirect;
use App\Support\SiteInspector;
use App\Support\SiteRenderer;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\Http;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('Find broken links on the published pages. Internal links are checked against the pages, posts, redirects and files of this site (no requests needed). With check_external: true, outside links are requested too (slower). Facebook/Instagram/LinkedIn often refuse bots: those are reported as blocked_for_bots, not broken.')]
class CheckBrokenLinks extends SiteTool
{
    private const BOT_BLOCKERS = ['facebook.com', 'instagram.com', 'linkedin.com', 'x.com', 'twitter.com', 'tiktok.com'];

    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'slug' => 'nullable|string',
            'check_external' => 'nullable|boolean',
            'max_external' => 'nullable|integer|min:1|max:200',
        ]);
        $site = new SiteInspector($this->base());
        $pages = isset($data['slug']) ? $site->pages($data['slug']) : $site->pages();
        $published = array_keys($site->pages());

        $internal = [];
        $external = [];
        foreach ($pages as $p) {
            foreach (array_unique($p['all_links']) as $url) {
                $path = $site->internalPath($url);
                $path === null ? $external[$url][] = $p['url'] : $internal[$path][] = $p['url'];
            }
        }

        $broken = [];
        $viaRedirect = [];
        foreach ($internal as $path => $on) {
            if (in_array($path, $published, true) || $this->isFile($path) || $this->isRoute($path)) {
                continue;
            }
            $redirect = Redirect::query()->where('from_path', Redirect::normalize($path))->where('is_active', true)->first();
            if ($redirect) {
                $viaRedirect[] = ['link' => $path, 'goes_to' => $redirect->to_url, 'on' => array_values(array_unique($on))];
            } else {
                $broken[] = ['link' => $this->base().$path, 'status' => 'not found (or draft / trashed)', 'on' => array_values(array_unique($on))];
            }
        }

        $blocked = [];
        $checked = 0;
        if ($data['check_external'] ?? false) {
            foreach (array_slice($external, 0, $data['max_external'] ?? 60, true) as $url => $on) {
                $checked++;
                $status = $this->status($url);
                $host = preg_replace('/^www\./', '', (string) parse_url($url, PHP_URL_HOST));
                if ($status !== null && $status < 400) {
                    continue;
                }
                $row = ['link' => $url, 'status' => $status ?? 'no response', 'on' => array_values(array_unique($on))];
                if (in_array($status, [400, 403, 429, 999], true) && collect(self::BOT_BLOCKERS)->contains(fn ($d) => str_ends_with($host, $d))) {
                    $blocked[] = $row;
                } else {
                    $broken[] = $row;
                }
            }
        }

        return $this->json([
            'pages_checked' => count($pages),
            'internal_links' => count($internal),
            'external_links' => count($external),
            'external_checked' => $checked,
            'broken' => $broken,
            'internal_via_redirect' => $viaRedirect,
            'blocked_for_bots' => $blocked,
        ]);
    }

    private function isFile(string $path): bool
    {
        return is_file(public_path(rawurldecode(ltrim($path, '/'))));
    }

    /** non-page routes: sitemaps, robots.txt, feeds, the booking endpoint */
    private function isRoute(string $path): bool
    {
        return (bool) preg_match('#^/(robots\.txt|sitemap(_index)?\.xml|(page|post)-sitemap\.xml|booking-request/?|feed/?)$#', $path);
    }

    private function status(string $url): ?int
    {
        try {
            $response = Http::timeout(8)->withHeaders(['User-Agent' => 'Mozilla/5.0 (compatible; DubaiFotographerLinkCheck/1.0)'])->head($url);
            if ($response->status() === 405 || $response->status() === 404) {
                $response = Http::timeout(8)->withHeaders(['User-Agent' => 'Mozilla/5.0 (compatible; DubaiFotographerLinkCheck/1.0)'])->get($url);
            }

            return $response->status();
        } catch (\Throwable) {
            return null;
        }
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'slug' => $schema->string()->description('Check one page; default: the whole site'),
            'check_external' => $schema->boolean()->description('Also request outside URLs (default false)'),
            'max_external' => $schema->integer()->description('Max outside URLs to request (default 60)'),
        ];
    }
}
