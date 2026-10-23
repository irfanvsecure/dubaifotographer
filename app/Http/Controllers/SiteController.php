<?php

namespace App\Http\Controllers;

use App\Support\PageOptimizer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
    public function show(Request $request): Response
    {
        $view = (string) $request->route('view', '');

        if ($view === '' || ! view()->exists($view)) {
            abort(404);
        }

        $html = view($view)->render();
        $base = rtrim($request->getSchemeAndHttpHost().$request->getBaseUrl(), '/');
        $origin = 'https://dubaifotographer.com';
        $html = str_replace('%%BASE%%', $base, $html);

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
            '$1'.$origin,
            $html
        );

        // Service, contact and policy pages are not articles. Blog posts keep article
        // because they publish a date.
        if (! str_contains($html, 'property="article:published_time"')) {
            $html = str_replace(
                '<meta property="og:type" content="article"/>',
                '<meta property="og:type" content="website"/>',
                $html
            );
            $html = str_replace(
                '<meta property="og:type" content="article" />',
                '<meta property="og:type" content="website" />',
                $html
            );
        }

        if (! str_contains($html, 'property="og:image"')) {
            $image = '<meta property="og:image" content="'.$origin.'/assets/images/2026/04/dubaifotographer-logo-e1782899876206.png" />';
            $html = preg_replace('#<meta name="twitter:card"#', $image."\n".'$0', $html, 1);
        }

        // Prefer minified CSS/JS when a sibling .min file exists.
        $html = preg_replace_callback(
            '#(href|src)="([^"]+/assets/[^"]+\.(css|js))"#i',
            function (array $m): string {
                if (str_contains($m[2], '.min.')) {
                    return $m[0];
                }
                $minUrl = preg_replace('#\.(css|js)$#i', '.min.$1', $m[2]);
                $path = parse_url($minUrl, PHP_URL_PATH) ?: '';
                if ($path !== '' && is_file(public_path(ltrim($path, '/')))) {
                    return $m[1].'="'.$minUrl.'"';
                }

                return $m[0];
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

        $html = PageOptimizer::run($html, $base);

        return response($html, 200, [
            'Content-Type' => 'text/html; charset=UTF-8',
        ]);
    }
}
