<?php

namespace App\Mcp\Tools;

use App\Support\SiteInspector;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('Internal linking report from the page content (header, footer and menus are not counted): links out and links in for every published page, and orphan pages that no other page links to. Give a slug for the detail of one page.')]
class GetInternalLinks extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate(['slug' => 'nullable|string']);
        $site = new SiteInspector($this->base());
        $pages = $site->pages();

        $out = [];
        $in = array_fill_keys(array_keys($pages), []);
        foreach ($pages as $path => $p) {
            $targets = collect($p['main_links'])->map(fn ($url) => $site->internalPath($url))->filter()->unique()->reject(fn ($t) => $t === $path)->values()->all();
            $out[$path] = $targets;
            foreach ($targets as $target) {
                if (isset($in[$target])) {
                    $in[$target][] = $path;
                }
            }
        }

        if (array_key_exists('slug', $data) && $data['slug'] !== null) {
            $path = trim($data['slug'], '/') === '' ? '/' : '/'.trim($data['slug'], '/').'/';
            if (! isset($pages[$path])) {
                return Response::error('No published page at that slug.');
            }

            return $this->json(['url' => $pages[$path]['url'], 'links_out' => $out[$path], 'links_in' => $in[$path]]);
        }

        $rows = collect($pages)->map(fn ($p, $path) => [
            'url' => $p['url'],
            'type' => $p['type'],
            'links_out' => count($out[$path]),
            'links_in' => count($in[$path]),
        ])->sortBy('links_in')->values();

        return $this->json([
            'pages' => $rows->count(),
            'orphans' => $rows->filter(fn ($r) => $r['links_in'] === 0 && parse_url($r['url'], PHP_URL_PATH) !== '/')->pluck('url')->values(),
            'no_links_out' => $rows->where('links_out', 0)->pluck('url')->values(),
            'by_page' => $rows,
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return ['slug' => $schema->string()->description('One page ("" = home); default: summary of the whole site')];
    }
}
