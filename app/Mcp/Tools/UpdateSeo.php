<?php

namespace App\Mcp\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Change the SEO of a page or blog post. Requires the `version` from get_seo. Only the fields you send change; send null to clear a field (it then falls back to the default). Aim for titles of 30-60 characters and descriptions of 70-160. schema_json replaces the whole JSON-LD (one object or a list; generate_schema can build it).')]
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
        ]);
        $entity = $this->entity($data);
        if (! $entity) {
            return Response::error(ucfirst($data['type']).' not found.');
        }
        $seo = $entity->seo()->firstOrCreate([]);
        $this->checkVersion($seo, $request, 'get_seo');

        $changes = collect($data)->except(['type', 'id', 'version'])->all();
        if (array_key_exists('schema_json', $changes) && $changes['schema_json'] !== null) {
            $schema = is_string($changes['schema_json']) ? json_decode($changes['schema_json'], true) : $changes['schema_json'];
            if (! is_array($schema)) {
                return Response::error('schema_json must be a JSON-LD object or a list of objects.');
            }
            $changes['schema_json'] = $this->placeholders(json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
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
            'schema_json' => $schema->object()->description('JSON-LD object (or send a JSON string of a list)'),
        ];
    }
}
