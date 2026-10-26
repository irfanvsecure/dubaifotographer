<?php

namespace App\Mcp\Tools;

use App\Support\SchemaList;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Change the SEO of a page or blog post. Requires the `version` from get_seo. Only the fields you send change; send null to clear a field (it then falls back to the default). Aim for titles of 30-60 characters and descriptions of 70-160. A page can have any number of JSON-LD blocks: add_schemas adds blocks next to the existing ones (replacing only the same @type), remove_schema_types removes blocks, schemas replaces the whole list, schema_json replaces it with one object. generate_schema can build blocks. Keep FAQPage in sync with the page FAQ: FAQ section edits rewrite it.')]
class UpdateSeo extends GetSeo
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'type' => 'required|in:page,blog',
            'id' => 'required|integer',
            'version' => 'required|string',
            'meta_title' => 'sometimes|nullable|string|max:120',
            'meta_description' => 'sometimes|nullable|string|max:320',
            'canonical_url' => 'sometimes|nullable|url|max:255',
            'robots' => 'sometimes|nullable|string|max:150|regex:/^(index|noindex)\s*,\s*(follow|nofollow)/',
            'og_title' => 'sometimes|nullable|string|max:120',
            'og_description' => 'sometimes|nullable|string|max:320',
            'og_image' => 'sometimes|nullable|string|max:255',
            'focus_keyword' => 'sometimes|nullable|string|max:120',
            'schema_json' => 'sometimes|nullable',
            'schemas' => 'sometimes|nullable|array',
            'schemas.*' => 'array',
            'add_schemas' => 'sometimes|array',
            'add_schemas.*' => 'array',
            'remove_schema_types' => 'sometimes|array',
            'remove_schema_types.*' => 'string',
        ]);
        if (count(array_intersect_key($data, array_flip(['schema_json', 'schemas']))) > 1) {
            return Response::error('Send either schema_json or schemas, not both.');
        }
        $entity = $this->entity($data);
        if (! $entity) {
            return Response::error(ucfirst($data['type']).' not found.');
        }
        $seo = $entity->seo()->firstOrCreate([]);
        $this->checkVersion($seo, $request, 'get_seo');

        $changes = collect($data)->except(['type', 'id', 'version', 'schemas', 'add_schemas', 'remove_schema_types'])->all();
        if (array_key_exists('schemas', $data)) {
            $changes['schema_json'] = $data['schemas'];
        }
        if (array_key_exists('schema_json', $changes) && $changes['schema_json'] !== null) {
            $schema = is_string($changes['schema_json']) ? json_decode($changes['schema_json'], true) : $changes['schema_json'];
            if (! is_array($schema)) {
                return Response::error('schema_json must be a JSON-LD object or a list of objects.');
            }
            $changes['schema_json'] = SchemaList::encode(SchemaList::blocks($schema));
        }
        if (isset($data['add_schemas']) || isset($data['remove_schema_types'])) {
            $current = array_key_exists('schema_json', $changes) ? json_decode((string) $changes['schema_json'], true) ?? [] : $seo->schemas();
            $blocks = SchemaList::blocks($current);
            foreach ($data['remove_schema_types'] ?? [] as $type) {
                $blocks = SchemaList::without($blocks, $type);
            }
            $add = SchemaList::blocks(array_values($data['add_schemas'] ?? []));
            foreach ($add as $block) {
                if (empty($block['@type'])) {
                    return Response::error('Every block in add_schemas needs an @type.');
                }
            }
            $changes['schema_json'] = SchemaList::encode(SchemaList::merge($blocks, $add));
        }
        if (isset($changes['schema_json'])) {
            $changes['schema_json'] = $this->placeholders($changes['schema_json']);
        }
        foreach (['canonical_url', 'og_image'] as $url) {
            if (isset($changes[$url])) {
                $changes[$url] = $this->placeholders($changes[$url]);
            }
        }
        if (array_key_exists('robots', $changes) && $changes['robots'] === null) {
            $changes['robots'] = 'index, follow';
        }

        $old = $seo->only(array_keys($changes));
        $seo->update($changes);
        $this->log('seo', $seo->id, $old + ['for' => "{$data['type']}#{$entity->id}"], $changes);

        return $this->json(['updated' => $this->seoArray($seo->fresh()), 'version' => $this->version($seo->fresh()), 'url' => $this->url($entity)]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'type' => $schema->string()->enum(['page', 'blog'])->required(),
            'id' => $schema->integer()->required(),
            'version' => $schema->string()->required()->description('From get_seo'),
            'meta_title' => $schema->string()->description('<title>, 30-60 characters'),
            'meta_description' => $schema->string()->description('70-160 characters'),
            'canonical_url' => $schema->string()->description('Full URL; leave empty to use the page URL'),
            'robots' => $schema->string()->description('e.g. "index, follow" or "noindex, follow"'),
            'og_title' => $schema->string(),
            'og_description' => $schema->string(),
            'og_image' => $schema->string()->description('Image URL (1200x630 works best)'),
            'focus_keyword' => $schema->string(),
            'schema_json' => $schema->object()->description('Replaces the whole JSON-LD with this one object. For several blocks use schemas or add_schemas.'),
            'schemas' => $schema->array()->items($schema->object())->description('Replaces the whole JSON-LD with these blocks, e.g. [LocalBusiness, Service, BreadcrumbList, FAQPage]. [] removes all.'),
            'add_schemas' => $schema->array()->items($schema->object())->description('Adds these blocks and keeps the others; a block replaces only an existing block of the same @type'),
            'remove_schema_types' => $schema->array()->items($schema->string())->description('Removes the blocks of these @types, e.g. ["Review"]'),
        ];
    }
}
