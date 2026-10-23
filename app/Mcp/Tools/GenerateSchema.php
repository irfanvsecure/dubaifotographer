<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Setting;
use App\Support\SiteRenderer;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Build JSON-LD for a page or post: Article, Service, FAQPage (questions read from the page FAQ, or pass faqs), LocalBusiness or BreadcrumbList. Returns the JSON for review. With save: true it is added to the page SEO, replacing an existing block of the same @type (show it to the site owner first).')]
class GenerateSchema extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'type' => 'required|in:page,blog',
            'id' => 'required|integer',
            'schema_type' => 'required|in:Article,Service,FAQPage,LocalBusiness,BreadcrumbList',
            'service_name' => 'nullable|string|max:200',
            'faqs' => 'nullable|array',
            'faqs.*.question' => 'required_with:faqs|string',
            'faqs.*.answer' => 'required_with:faqs|string',
            'save' => 'nullable|boolean',
        ]);
        $entity = ($data['type'] === 'page' ? Page::class : Blog::class)::query()->with('seo')->find($data['id']);
        if (! $entity) {
            return Response::error(ucfirst($data['type']).' not found.');
        }

        $schema = match ($data['schema_type']) {
            'Article' => $this->article($entity),
            'Service' => $this->service($entity, $data['service_name'] ?? null),
            'FAQPage' => $this->faq($entity, $data['faqs'] ?? null),
            'LocalBusiness' => $this->business(),
            'BreadcrumbList' => $this->breadcrumbs($entity),
        };
        if ($schema === null) {
            return Response::error('No FAQ found on the page; pass faqs: [{question, answer}].');
        }

        if ($data['save'] ?? false) {
            $seo = $entity->seo()->firstOrCreate([]);
            $old = $seo->schemas();
            $kept = array_values(array_filter($old, fn ($s) => ($s['@type'] ?? null) !== $schema['@type']));
            $all = [...$kept, $schema];
            $seo->update(['schema_json' => json_encode(count($all) === 1 ? $all[0] : $all, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)]);
            $this->log('seo', $seo->id, ['schema_json' => $old, 'for' => "{$data['type']}#{$entity->id}"], ['schema_json' => $all]);
        }

        return $this->json(['schema' => $schema, 'saved' => (bool) ($data['save'] ?? false)]);
    }

    private function placeholderUrl(Page|Blog $entity): string
    {
        return '%%BASE%%'.$entity->path();
    }

    private function business(): array
    {
        $contact = Setting::get('contact', []);

        return [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            '@id' => '%%BASE%%/#localbusiness',
            'name' => 'Dubai Fotographer',
            'url' => '%%BASE%%/',
            'image' => '%%BASE%%/'.Setting::get('default_og_image'),
            'telephone' => $contact['phone'] ?? null,
            'email' => $contact['email'] ?? null,
            'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'Business Bay, Dubai Design District', 'addressLocality' => 'Dubai', 'addressCountry' => 'AE'],
            'areaServed' => 'United Arab Emirates',
            'sameAs' => array_values(Setting::get('social_links', [])),
        ];
    }

    private function article(Page|Blog $entity): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => strip_tags((string) ($entity->seo?->meta_title ?: $entity->title)),
            'description' => $entity->seo?->meta_description ?? ($entity->excerpt ?? null),
            'image' => $entity instanceof Blog && $entity->featured_image ? '%%BASE%%/assets/images/'.$entity->featured_image : null,
            'datePublished' => ($entity->published_at ?? $entity->created_at)?->toAtomString(),
            'dateModified' => $entity->updated_at?->toAtomString(),
            'author' => ['@type' => 'Organization', 'name' => 'Dubai Fotographer', 'url' => '%%BASE%%/'],
            'publisher' => ['@type' => 'Organization', 'name' => 'Dubai Fotographer', 'logo' => ['@type' => 'ImageObject', 'url' => '%%BASE%%/'.Setting::get('default_og_image')]],
            'mainEntityOfPage' => $this->placeholderUrl($entity),
        ];
    }

    private function service(Page|Blog $entity, ?string $name): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => $name ?? strip_tags((string) ($entity->h1 ?? $entity->title)),
            'description' => $entity->seo?->meta_description,
            'url' => $this->placeholderUrl($entity),
            'serviceType' => 'Photography',
            'areaServed' => ['@type' => 'Country', 'name' => 'United Arab Emirates'],
            'provider' => ['@type' => 'LocalBusiness', '@id' => '%%BASE%%/#localbusiness', 'name' => 'Dubai Fotographer', 'url' => '%%BASE%%/'],
        ];
    }

    private function faq(Page|Blog $entity, ?array $faqs): ?array
    {
        if (! $faqs && $entity->isPublished()) {
            preg_match_all('#<details\b[^>]*>\s*<summary\b[^>]*>(.*?)</summary>(.*?)</details>#s', SiteRenderer::html($entity, $this->base()), $m, PREG_SET_ORDER);
            $clean = fn ($html) => trim(preg_replace('/\s+/', ' ', html_entity_decode(strip_tags(preg_replace('#<svg.*?</svg>#s', '', $html)), ENT_QUOTES | ENT_HTML5)));
            $faqs = array_map(fn ($x) => ['question' => $clean($x[1]), 'answer' => $clean($x[2])], $m);
        }
        $faqs = array_values(array_filter($faqs ?? [], fn ($f) => $f['question'] !== '' && $f['answer'] !== ''));
        if (! $faqs) {
            return null;
        }

        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn ($f) => [
                '@type' => 'Question',
                'name' => $f['question'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['answer']],
            ], $faqs),
        ];
    }

    private function breadcrumbs(Page|Blog $entity): array
    {
        $items = [['Home', '%%BASE%%/']];
        if ($entity instanceof Blog) {
            $items[] = ['Our Blog', '%%BASE%%/our-blog/'];
        } else {
            foreach (array_reverse($this->ancestors($entity)) as $parent) {
                $items[] = [strip_tags((string) $parent->title), $this->placeholderUrl($parent)];
            }
        }
        if ($entity->slug !== '') {
            $items[] = [strip_tags((string) $entity->title), $this->placeholderUrl($entity)];
        }

        return [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array_map(fn ($item, $i) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $item[0], 'item' => $item[1]], $items, array_keys($items)),
        ];
    }

    private function ancestors(Page $page): array
    {
        $list = [];
        while ($page->parent_id && ($page = Page::query()->find($page->parent_id)) && count($list) < 5) {
            $list[] = $page;
        }

        return $list;
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'type' => $schema->string()->enum(['page', 'blog'])->required(),
            'id' => $schema->integer()->required(),
            'schema_type' => $schema->string()->enum(['Article', 'Service', 'FAQPage', 'LocalBusiness', 'BreadcrumbList'])->required(),
            'service_name' => $schema->string()->description('Service: name of the service (default: the H1)'),
            'faqs' => $schema->array()->items($schema->object([
                'question' => $schema->string()->required(),
                'answer' => $schema->string()->required(),
            ]))->description('FAQPage: questions and answers; default: read from the page'),
            'save' => $schema->boolean()->description('Add it to the page SEO (default false: only show it)'),
        ];
    }
}
