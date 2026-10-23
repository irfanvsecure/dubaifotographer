<?php

namespace App\Mcp\Tools;

use App\Support\SiteInspector;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('Basic Core Web Vitals check of the published pages: render-blocking CSS/JS in <head>, HTML size, images without width/height (layout shift), images not lazy-loaded, large image files and images that are not WebP/AVIF. Give a slug to check one page.')]
class AuditPerformance extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'slug' => 'nullable|string',
            'max_image_kb' => 'nullable|integer|min:50|max:5000',
        ]);
        $maxKb = $data['max_image_kb'] ?? 300;
        $site = new SiteInspector($this->base());
        $pages = isset($data['slug']) ? $site->pages($data['slug']) : $site->pages();

        $report = [];
        foreach ($pages as $p) {
            $head = preg_replace('#<noscript>.*?</noscript>#s', '', $p['head']);
            $blockingCss = preg_match_all('#<link\b[^>]*rel="stylesheet"[^>]*>#i', $head, $css) ? $css[0] : [];
            $blockingJs = preg_match_all('#<script\b(?![^>]*\b(?:defer|async)\b)[^>]*\bsrc="([^"]+)"#i', $head, $js) ? $js[1] : [];

            $large = [];
            $legacy = [];
            foreach (collect($p['images'])->pluck('src')->unique() as $src) {
                $path = $site->internalPath($src);
                $file = $path ? public_path(rawurldecode(ltrim($path, '/'))) : null;
                if ($file && is_file($file)) {
                    if (filesize($file) > $maxKb * 1024) {
                        $large[] = $src.' ('.round(filesize($file) / 1024).' KB)';
                    }
                    if (! preg_match('/\.(webp|avif|svg)$/i', $file)) {
                        $legacy[] = $src;
                    }
                }
            }
            $noSize = collect($p['images'])->reject(fn ($i) => $i['has_size'])->pluck('src')->unique()->values();
            // the logo and the first two images of the page stay eager: one is usually the largest thing on screen (LCP)
            $notLazy = collect($p['images'])->slice(3)->reject(fn ($i) => $i['lazy'])->count();

            $issues = array_filter([
                'render_blocking_css' => $blockingCss ?: null,
                'render_blocking_js' => $blockingJs ?: null,
                'html_kb' => strlen($p['html']) > 150 * 1024 ? round(strlen($p['html']) / 1024) : null,
                'images_without_size' => $noSize->isNotEmpty() ? $noSize->take(10)->all() : null,
                'images_not_lazy' => $notLazy ?: null,
                'large_images' => $large ?: null,
                'not_webp' => $legacy ? array_slice($legacy, 0, 10) : null,
            ]);
            if ($issues) {
                $report[] = ['url' => $p['url'], 'html_kb' => round(strlen($p['html']) / 1024), 'images' => count($p['images'])] + $issues;
            }
        }

        return $this->json(['checked' => count($pages), 'pages_with_issues' => count($report), 'pages' => $report]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'slug' => $schema->string()->description('Check one page ("" = home); default: the whole site'),
            'max_image_kb' => $schema->integer()->description('Report image files bigger than this (default 300 KB)'),
        ];
    }
}
