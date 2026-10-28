<?php

namespace App\Support;

use App\Models\Blog;
use App\Models\Page;
use Illuminate\Support\Facades\View;

/**
 * Builds the final HTML of a page or blog post exactly as visitors get it.
 * Used by SiteController and by the MCP audit tools.
 */
class SiteRenderer
{
    public const ORIGIN = 'https://dubaifotographer.com';

    /** The published page or post at this URL path ("" = home) */
    public static function find(string $slug): Page|Blog|null
    {
        $slug = trim($slug, '/');

        return Page::query()->with('seo')->where('slug', $slug)->where('status', 'published')->first()
            ?? Blog::query()->with('seo')->where('slug', $slug)->where('status', 'published')->first();
    }

    /** $base: site address without trailing slash, e.g. https://dubaifotographer.com */
    public static function html(Page|Blog $entity, string $base): string
    {
        $html = str_replace('%%BASE%%', $base, self::template($entity));

        // Old Facebook post URL 404s for crawlers; keep the profile URL in schema and footer.
        $html = str_replace(
            [
                'https://www.facebook.com/100050331586482/posts/pfbid02n93L9KCoVPckPRZYq1q33i5DnjS1Jk1FRAiQCV5HPmcFRHCatDVXBpK5uYmToaWYl/?',
                'https://www.facebook.com/100050331586482/posts/pfbid02n93L9KCoVPckPRZYq1q33i5DnjS1Jk1FRAiQCV5HPmcFRHCatDVXBpK5uYmToaWYl/',
                'https://www.instagram.com/dubaifotographer_event/reels/',
            ],
            [
                'https://www.facebook.com/100050331586482/',
                'https://www.facebook.com/100050331586482/',
                'https://www.instagram.com/dubaifotographer_event/',
            ],
            $html
        );

        // Canonical and social URL always name the HTTPS site, even on a local preview.
        $html = preg_replace(
            '#(<link rel="canonical" href="|<meta property="og:url" content=")https?://[^/]+#',
            '$1'.self::ORIGIN,
            $html
        );

        // Prefer minified CSS/JS when a sibling .min file exists. ?v=<file time> lets browsers
        // cache them for a year (public/.htaccess) and still fetch a file again once it changes.
        $html = preg_replace_callback(
            '#(href|src)="([^"]+/assets/[^"]+\.(css|js))"#i',
            function (array $m): string {
                $url = $m[2];
                $file = fn ($url) => public_path(ltrim(parse_url($url, PHP_URL_PATH) ?: '', '/'));
                $minUrl = preg_replace('#(?<!\.min)\.(css|js)$#i', '.min.$1', $url);
                if ($minUrl !== $url && is_file($file($minUrl))) {
                    $url = $minUrl;
                }

                return is_file($file($url)) ? $m[1].'="'.$url.'?v='.filemtime($file($url)).'"' : $m[0];
            },
            $html
        );

        // Scripts wait until the HTML is parsed. Styles load async; PageOptimizer
        // inlines the rules the first screen needs, so there is no unstyled flash.
        $html = preg_replace(
            '#<script(?![^>]*\b(?:defer|async)\b)(\s[^>]*\bsrc=)#i',
            '<script defer$1',
            $html
        );

        // internal page links get the trailing slash the canonical URLs use,
        // so clicking around the site never goes through a redirect
        $html = preg_replace_callback(
            '#href="'.preg_quote($base, '#').'(/[^"\#?]*?[^"\#?/])([?\#][^"]*)?"#',
            fn ($m) => preg_match('/\.[A-Za-z0-9]{1,5}$/', $m[1])
                ? $m[0]
                : 'href="'.$base.$m[1].'/'.($m[2] ?? '').'"',
            $html
        );

        return PageOptimizer::run($html, $base);
    }

    /**
     * Blog posts and text pages use the shared templates. Designed pages keep their own
     * Blade template (pages.template); their H1 comes from pages.h1.
     */
    private static function template(Page|Blog $entity): string
    {
        $seoHead = view('partials.seo-head', ['entity' => $entity])->render();

        if ($entity instanceof Blog) {
            return view('templates.blog', ['blog' => $entity, 'seoHead' => $seoHead])->render();
        }
        if ($entity->template === 'page') {
            return view('templates.page', ['page' => $entity, 'seoHead' => $seoHead])->render();
        }
        abort_unless(view()->exists($entity->template), 404);

        View::share('currentTemplate', $entity->template);
        $html = view($entity->template, ['page' => $entity, 'seoHead' => $seoHead])->render();

        if ($entity->h1) {
            $html = preg_replace_callback('#(<h1\b[^>]*>).*?(</h1>)#s', fn ($m) => $m[1].$entity->h1.$m[2], $html, 1);
        }

        return $html;
    }
}
