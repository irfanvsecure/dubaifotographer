<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use App\Models\Page;
use App\Support\SiteRenderer;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('Read the SEO settings of a page or blog post (meta title/description, canonical, robots, Open Graph, JSON-LD schema, focus keyword), the tags the page really outputs, and the `version` that update_seo needs.')]
class GetSeo extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'type' => 'required|in:page,blog',
            'id' => 'nullable|integer',
            'slug' => 'nullable|string',
        ]);
        if (! isset($data['id']) && ! array_key_exists('slug', $data)) {
            return Response::error('Give id or slug.');
        }
        $entity = $this->entity($data);
        if (! $entity) {
            return Response::error(ucfirst($data['type']).' not found.');
        }
        $seo = $entity->seo()->firstOrCreate([]);

        $rendered = null;
        if ($entity->isPublished()) {
            $head = strstr(SiteRenderer::html($entity, $this->base()), '</head>', true) ?: '';
            preg_match('#<title>(.*?)</title>#s', $head, $t);
            preg_match('#<meta name="description" content="([^"]*)"#', $head, $d);
            preg_match('#<link rel="canonical" href="([^"]*)"#', $head, $c);
            preg_match('#<meta name="robots" content="([^"]*)"#', $head, $r);
            $rendered = [
                'title' => html_entity_decode($t[1] ?? '', ENT_QUOTES | ENT_HTML5),
                'description' => html_entity_decode($d[1] ?? '', ENT_QUOTES | ENT_HTML5),
                'canonical' => $c[1] ?? null,
                'robots' => $r[1] ?? null,
            ];
        }

        return $this->json([
            'type' => $data['type'],
            'id' => $entity->id,
            'url' => $this->url($entity),
            'version' => $this->version($seo),
            'seo' => $this->seoArray($seo),
            'rendered' => $rendered,
            'note' => 'Empty fields fall back: title → "<page title> - dubaifotographer", canonical → the page URL, og_* → meta title/description, og_image → featured image or the site default.',
        ]);
    }

    protected function entity(array $data): Page|Blog|null
    {
        $class = $data['type'] === 'page' ? Page::class : Blog::class;

        return $class::query()->with('seo')
            ->when(isset($data['id']), fn ($q) => $q->whereKey($data['id']), fn ($q) => $q->where('slug', trim((string) ($data['slug'] ?? ''), '/')))
            ->first();
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'type' => $schema->string()->enum(['page', 'blog'])->required(),
            'id' => $schema->integer(),
            'slug' => $schema->string()->description('Or the slug ("" = home page)'),
        ];
    }
}
