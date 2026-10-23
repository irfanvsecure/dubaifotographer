<?php

namespace App\Support\Sections;

use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

/**
 * The section types a designed page can be built from. Each type has a Blade partial in
 * resources/views/sections and a field list. Field kinds:
 *   text   plain text (shown escaped)          html   limited HTML (HtmlSanitizer)
 *   image  path under public/assets/images     link   "/path/", "#quote", https://…, tel:, mailto:
 *   icon   a name from partials/icon            int / bool
 *   ['list', spec, min, max]   ['object', [field => spec]]
 * A "?" after a kind ("text?") makes the field optional. Keys starting with "_" are layout
 * options set by the import; they are kept but cannot be edited.
 */
class SectionTypes
{
    public static function all(): array
    {
        $button = ['object', ['text' => 'text', 'link' => 'link']];

        return [
            'home_hero' => [
                'label' => 'Homepage hero: the page H1 (edit it with update_page h1), intro text, two buttons, trust points and the 3-step quote form',
                'fields' => [
                    'eyebrow' => 'text',
                    'text' => 'html',
                    'primary_button' => $button,
                    'secondary_button' => $button,
                    'trust' => ['list', 'text', 0, 6],
                    'form_title' => 'text',
                    'form_text' => 'text',
                    'form_note' => 'text',
                ],
            ],
            'text' => [
                'label' => 'Plain text block: eyebrow, heading and body',
                'fields' => ['eyebrow' => 'text?', 'heading' => 'text', 'body' => 'html'],
            ],
            'image_text' => [
                'label' => 'Image beside text with a button and the phone button',
                'fields' => [
                    'image' => 'image',
                    'eyebrow' => 'text?',
                    'heading' => 'html',
                    'paragraphs' => ['list', 'html', 1, 8],
                    'button' => $button,
                    'show_phone' => 'bool?',
                ],
            ],
            'service_categories' => [
                'label' => 'Dark band of service category cards, each with links to service pages',
                'fields' => [
                    'eyebrow' => 'text?',
                    'heading' => 'text',
                    'cards' => ['list', ['object', [
                        'title' => 'text',
                        'image' => 'image',
                        'alt' => 'text',
                        'links' => ['list', ['object', ['text' => 'text', 'link' => 'link']], 1, 8],
                    ]], 1, 8],
                ],
            ],
            'gallery' => [
                'label' => 'Photo grid that opens images larger on click',
                'fields' => [
                    'eyebrow' => 'text?',
                    'heading' => 'text',
                    'text' => 'html?',
                    'images' => ['list', ['object', ['image' => 'image', 'alt' => 'text']], 1, 24],
                ],
            ],
            'logos' => [
                'label' => 'Client logo carousel (row 1 and row 2 scroll in opposite directions)',
                'fields' => [
                    'heading' => 'text',
                    'items' => ['list', ['object', ['image' => 'image', 'alt' => 'text', 'row' => 'int']], 2, 30],
                ],
            ],
            'stats' => [
                'label' => 'Dark strip of numbers that count up',
                'fields' => ['items' => ['list', ['object', ['label' => 'text', 'number' => 'text', 'suffix' => 'text?']], 1, 6]],
            ],
            'reviews' => [
                'label' => 'Google reviews slider (the reviews themselves are not editable here)',
                'fields' => [],
            ],
            'mosaic' => [
                'label' => 'Photo tiles: one large, one wide, then small tiles',
                'fields' => [
                    'eyebrow' => 'text?',
                    'heading' => 'html',
                    'tiles' => ['list', ['object', ['image' => 'image', 'title' => 'text', 'text' => 'html']], 3, 8],
                ],
            ],
            'founder' => [
                'label' => 'Founder photo with a quote',
                'fields' => ['quote' => 'text'],
            ],
            'tabs' => [
                'label' => 'Tabs, each with an icon, label, image, heading and text',
                'fields' => [
                    'eyebrow' => 'text?',
                    'heading' => 'text',
                    'tabs' => ['list', ['object', [
                        'icon' => 'icon',
                        'label' => 'text',
                        'image' => 'image',
                        'alt' => 'text',
                        'heading' => 'text',
                        'body' => 'html',
                    ]], 1, 8],
                ],
            ],
            'process' => [
                'label' => 'Numbered process steps on a dark band',
                'fields' => [
                    'eyebrow' => 'text?',
                    'heading' => 'text',
                    'steps' => ['list', ['object', ['title' => 'text', 'text' => 'text']], 2, 8],
                ],
            ],
            'coverage' => [
                'label' => 'Emirates we serve, with a card per location page',
                'fields' => ['eyebrow' => 'text?', 'text' => 'text'],
            ],
            'faq' => [
                'label' => 'FAQ accordion. Its questions also feed the page FAQPage schema.',
                'fields' => [
                    'eyebrow' => 'text?',
                    'heading' => 'text?',
                    'items' => ['list', ['object', ['question' => 'text', 'answer' => 'html']], 1, 20],
                ],
            ],
            'booking' => [
                'label' => 'Booking form with feature points beside it',
                'fields' => [
                    'eyebrow' => 'text?',
                    'heading' => 'text',
                    'text' => 'html',
                    'features' => ['list', ['object', ['icon' => 'icon', 'title' => 'text', 'text' => 'html']], 1, 6],
                ],
            ],
            'map' => [
                'label' => 'Studio location with a click-to-load Google map',
                'fields' => ['eyebrow' => 'text?', 'heading' => 'text', 'text' => 'text'],
            ],
            'cta' => [
                'label' => 'Closing call to action on black with booking and phone buttons',
                'fields' => ['eyebrow' => 'text?', 'heading' => 'text', 'text' => 'text'],
            ],
        ];
    }

    /** For get_page_sections: the types with their fields, readable */
    public static function describe(): array
    {
        $kind = function ($spec) use (&$kind) {
            if (is_string($spec)) {
                return $spec;
            }
            if ($spec[0] === 'list') {
                return ['list of' => $kind($spec[1]), 'min' => $spec[2] ?? 0, 'max' => $spec[3] ?? null];
            }

            return array_map($kind, $spec[1]);
        };

        return collect(self::all())->map(fn ($type) => [
            'label' => $type['label'],
            'fields' => array_map($kind, $type['fields']),
        ])->all();
    }

    /**
     * Checks $data against the type and returns it cleaned (HTML sanitised, links and image
     * paths normalised). $existing supplies the "_" options and the fields not sent.
     */
    public static function validate(string $type, array $data, array $existing = []): array
    {
        $fields = self::all()[$type]['fields'] ?? null;
        if ($fields === null) {
            throw ValidationException::withMessages(['type' => "Unknown section type \"$type\". Types: ".implode(', ', array_keys(self::all()))]);
        }
        foreach (array_keys($data) as $key) {
            if (! array_key_exists($key, $fields)) {
                throw ValidationException::withMessages([$key => "\"$key\" is not a field of a $type section. Fields: ".(implode(', ', array_keys($fields)) ?: 'none')]);
            }
        }

        $merged = array_merge($existing, $data);
        $clean = array_filter($existing, fn ($key) => str_starts_with($key, '_'), ARRAY_FILTER_USE_KEY);
        foreach ($fields as $key => $spec) {
            $clean[$key] = self::field($spec, $merged[$key] ?? null, $key);
            if ($clean[$key] === null) {
                unset($clean[$key]);
            }
        }

        return $clean;
    }

    private static function field(string|array $spec, mixed $value, string $path): mixed
    {
        $fail = fn (string $message) => throw ValidationException::withMessages([$path => "$path: $message"]);

        if (is_string($spec)) {
            $optional = str_ends_with($spec, '?');
            $kind = rtrim($spec, '?');
            if ($value === null || $value === '') {
                return $optional || $kind === 'bool' ? null : $fail('is required');
            }

            return match ($kind) {
                'text' => is_scalar($value) && mb_strlen((string) $value) <= 2000 ? trim(strip_tags((string) $value)) : $fail('must be text (up to 2000 characters, no HTML)'),
                'html' => is_string($value) && mb_strlen($value) <= 20000 ? HtmlSanitizer::clean(self::base($value)) : $fail('must be an HTML string (up to 20000 characters)'),
                'image' => is_string($value) ? self::image($value, $fail) : $fail('must be an image path or URL'),
                'link' => is_string($value) && HtmlSanitizer::safeHref(self::base($value)) ? self::base($value) : $fail('must be a path ("/contact-us/"), "#quote", a full URL, tel: or mailto:'),
                'icon' => in_array($value, self::icons(), true) ? $value : $fail('must be one of: '.implode(', ', self::icons())),
                'int' => is_numeric($value) ? (int) $value : $fail('must be a number'),
                'bool' => (bool) $value,
                default => $fail("unknown field kind $kind"),
            };
        }

        if ($spec[0] === 'list') {
            if (! is_array($value) || ! array_is_list($value)) {
                return $fail('must be a list');
            }
            [$min, $max] = [$spec[2] ?? 0, $spec[3] ?? 500];
            if (count($value) < $min || count($value) > $max) {
                return $fail("needs between $min and $max items");
            }

            return array_map(fn ($item, $i) => self::field($spec[1], $item, "$path.$i"), $value, array_keys($value));
        }

        if (! is_array($value) || array_is_list($value)) {
            return $fail('must be an object with: '.implode(', ', array_keys($spec[1])));
        }
        foreach (array_keys($value) as $key) {
            if (! array_key_exists($key, $spec[1])) {
                $fail("unknown field \"$key\"");
            }
        }
        $out = [];
        foreach ($spec[1] as $key => $sub) {
            $out[$key] = self::field($sub, $value[$key] ?? null, "$path.$key");
            if ($out[$key] === null) {
                unset($out[$key]);
            }
        }

        return $out;
    }

    /** absolute links to this site → %%BASE%% */
    private static function base(string $value): string
    {
        return str_replace(['https://dubaifotographer.com', 'https://www.dubaifotographer.com', rtrim(url('/'), '/')], '%%BASE%%', trim($value));
    }

    /** "2026/07/x.webp" (under assets/images); full URLs and /assets/images/… paths are shortened */
    private static function image(string $value, callable $fail): string
    {
        $path = Str::after(Str::after(self::base($value), '%%BASE%%'), '/assets/images/');
        $path = ltrim(Str::after($path, 'assets/images/'), '/');
        if (preg_match('#^https?://#', $path) || ! is_file(public_path('assets/images/'.rawurldecode($path)))) {
            return $fail("image not found on this site: $value (upload it with upload_image first)");
        }

        return $path;
    }

    /** icon names drawn by partials/icon */
    public static function icons(): array
    {
        static $icons;

        return $icons ??= preg_match_all("#^\s{8}'([a-z-]+)' => \[#m", file_get_contents(resource_path('views/partials/icon.blade.php')), $m) ? $m[1] : [];
    }

    /** "/path" → %%BASE%%/path for rendering; other links unchanged */
    public static function href(string $link): string
    {
        return str_starts_with($link, '/') ? '%%BASE%%'.$link : $link;
    }
}
