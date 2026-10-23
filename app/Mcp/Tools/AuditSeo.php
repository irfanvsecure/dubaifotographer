<?php

namespace App\Mcp\Tools;

use App\Support\SiteInspector;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('SEO check of the published pages as visitors get them: title length (30-60), description (70-160), H1 count (exactly one), duplicate titles/descriptions, images without alt text, thin content, canonical pointing elsewhere, noindex pages and missing JSON-LD. Give a slug to check one page.')]
class AuditSeo extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'slug' => 'nullable|string',
            'min_words' => 'nullable|integer|min:50|max:3000',
        ]);
        $minWords = $data['min_words'] ?? 300;
        $site = new SiteInspector($this->base());
        $all = $site->pages();
        $pages = array_key_exists('slug', $data) && $data['slug'] !== null ? $site->pages($data['slug']) : $all;
        if (! $pages) {
            return Response::error('No published page at that slug.');
        }

        $titles = collect($all)->groupBy(fn ($p) => mb_strtolower(trim($p['title'])));
        $descriptions = collect($all)->filter(fn ($p) => $p['description'] !== '')->groupBy(fn ($p) => mb_strtolower(trim($p['description'])));

        $report = [];
        $counts = [];
        foreach ($pages as $path => $p) {
            $issues = [];
            $add = function (string $code, string $message) use (&$issues, &$counts) {
                $issues[] = ['issue' => $code, 'detail' => $message];
                $counts[$code] = ($counts[$code] ?? 0) + 1;
            };

            $len = mb_strlen($p['title']);
            if ($len < 30 || $len > 60) {
                $add('title_length', "Title is $len characters (aim for 30-60): \"{$p['title']}\"");
            }
            $len = mb_strlen($p['description']);
            if ($len === 0) {
                $add('missing_description', 'No meta description.');
            } elseif ($len < 70 || $len > 160) {
                $add('description_length', "Description is $len characters (aim for 70-160).");
            }
            if ($p['h1_count'] !== 1) {
                $add('h1_count', "{$p['h1_count']} H1 tags (should be exactly one).");
            }
            if (count($titles[mb_strtolower(trim($p['title']))] ?? []) > 1) {
                $add('duplicate_title', 'Same title as: '.implode(', ', array_keys(array_diff_key(collect($all)->filter(fn ($o) => mb_strtolower(trim($o['title'])) === mb_strtolower(trim($p['title'])))->all(), [$path => 1]))));
            }
            if ($p['description'] !== '' && count($descriptions[mb_strtolower(trim($p['description']))] ?? []) > 1) {
                $add('duplicate_description', 'Same meta description as another page.');
            }
            $noAlt = collect($p['images'])->filter(fn ($i) => $i['alt'] === null || trim($i['alt']) === '')->pluck('src')->unique()->values();
            if ($noAlt->isNotEmpty()) {
                $add('missing_alt', $noAlt->count().' image(s) without alt text: '.$noAlt->take(5)->implode(', '));
            }
            if ($p['words'] < $minWords) {
                $add('thin_content', "{$p['words']} words in the main content (under $minWords).");
            }
            if (! $p['canonical']) {
                $add('missing_canonical', 'No canonical link.');
            } elseif (rtrim(parse_url($p['canonical'], PHP_URL_PATH) ?: '/', '/') !== rtrim($path, '/')) {
                $add('canonical_elsewhere', "Canonical points to {$p['canonical']}.");
            }
            if (str_contains($p['robots'], 'noindex')) {
                $add('noindex', "robots: {$p['robots']} (kept out of search results).");
            }
            if (! str_contains($p['head'], 'application/ld+json')) {
                $add('no_schema', 'No JSON-LD structured data (generate_schema can add it).');
            }
            if ($issues) {
                $report[] = ['url' => $p['url'], 'type' => $p['type'], 'id' => $p['id'], 'title' => $p['title'], 'words' => $p['words'], 'issues' => $issues];
            }
        }

        return $this->json([
            'checked' => count($pages),
            'pages_with_issues' => count($report),
            'issue_counts' => $counts,
            'pages' => $report,
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'slug' => $schema->string()->description('Check one page ("" = home); default: the whole site'),
            'min_words' => $schema->integer()->description('Thin content threshold (default 300)'),
        ];
    }
}
