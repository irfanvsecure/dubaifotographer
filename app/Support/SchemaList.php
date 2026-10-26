<?php

namespace App\Support;

/**
 * A page's JSON-LD (seo_meta.schema_json) as a flat list of blocks, so tools can add,
 * replace and remove blocks by @type. An @graph is unpacked into separate blocks (each
 * gets the graph's @context), which is the same data for search engines.
 */
class SchemaList
{
    /** @param  array  $schemas  SeoMeta::schemas(): one object or a list, maybe with @graph */
    public static function blocks(array $schemas): array
    {
        $blocks = [];
        foreach (array_is_list($schemas) ? $schemas : [$schemas] as $schema) {
            if (! is_array($schema)) {
                continue;
            }
            if (isset($schema['@graph']) && is_array($schema['@graph'])) {
                foreach ($schema['@graph'] as $node) {
                    if (is_array($node)) {
                        $blocks[] = ['@context' => $node['@context'] ?? $schema['@context'] ?? 'https://schema.org'] + $node;
                    }
                }

                continue;
            }
            $blocks[] = $schema;
        }

        return $blocks;
    }

    /** Removes every block of the given @type (types like ["LocalBusiness", "Organization"] match too) */
    public static function without(array $blocks, string $type): array
    {
        return array_values(array_filter($blocks, fn ($block) => ! in_array($type, (array) ($block['@type'] ?? []), true)));
    }

    /** Adds blocks, each replacing the existing blocks of its @type */
    public static function merge(array $blocks, array $new): array
    {
        foreach ($new as $block) {
            foreach ((array) ($block['@type'] ?? []) as $type) {
                $blocks = self::without($blocks, $type);
            }
        }

        return [...$blocks, ...$new];
    }

    /** JSON for seo_meta.schema_json: one object, a list, or null when empty */
    public static function encode(array $blocks): ?string
    {
        return $blocks
            ? json_encode(count($blocks) === 1 ? $blocks[0] : array_values($blocks), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
            : null;
    }

    public static function types(array $blocks): array
    {
        return array_map(fn ($block) => implode('/', (array) ($block['@type'] ?? ['?'])), $blocks);
    }
}
