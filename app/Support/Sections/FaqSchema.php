<?php

namespace App\Support\Sections;

use App\Models\Page;

/**
 * Keeps the page's FAQPage JSON-LD (seo_meta.schema_json) equal to its FAQ sections:
 * replaced when there are FAQ items, removed when the page has no FAQ section any more.
 * Other schema blocks (LocalBusiness, Service…) are left as they are.
 */
class FaqSchema
{
    public static function sync(Page $page): void
    {
        $items = $page->sections()->where('type', 'faq')->get()
            ->flatMap(fn ($section) => $section->data['items'] ?? [])
            ->map(fn ($item) => [
                '@type' => 'Question',
                'name' => self::plain($item['question']),
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => self::plain($item['answer'])],
            ])->values()->all();

        $seo = $page->seo()->firstOrCreate([]);
        $schemas = array_values(array_filter($seo->schemas(), fn ($schema) => ($schema['@type'] ?? null) !== 'FAQPage'));
        if ($items) {
            $schemas[] = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $items];
        }

        $seo->update(['schema_json' => $schemas
            ? json_encode(count($schemas) === 1 ? $schemas[0] : $schemas, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
            : null]);
    }

    private static function plain(string $html): string
    {
        return trim(preg_replace('/\s+/', ' ', html_entity_decode(strip_tags($html), ENT_QUOTES | ENT_HTML5)));
    }
}
