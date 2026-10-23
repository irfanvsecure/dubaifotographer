<?php

namespace App\Support;

use App\Models\Blog;
use App\Models\Page;

/**
 * Renders the published pages and posts once and pulls out what the audit tools look at:
 * <head>, <main>, H1s, images, internal links and visible words.
 */
class SiteInspector
{
    /** @var array<string, array<string, array>> */
    private array $cache = [];

    public function __construct(private string $base)
    {
    }

    /**
     * @param  string|null  $only  one URL path ("about-us", "" = home) instead of the whole site
     * @return array<string, array> keyed by URL path ("/", "/about-us/")
     */
    public function pages(?string $only = null): array
    {
        $path = $only === null ? null : (trim($only, '/') === '' ? '/' : '/'.trim($only, '/').'/');
        if (isset($this->cache[$path ?? '*'])) {
            return $this->cache[$path ?? '*'];
        }
        $entities = Page::query()->with('seo')->where('status', 'published')->orderBy('sort_order')->get()
            ->concat(Blog::query()->with('seo')->where('status', 'published')->orderByDesc('published_at')->get())
            ->when($path !== null, fn ($all) => $all->filter(fn ($e) => $e->path() === $path));

        $pages = [];
        foreach ($entities as $entity) {
            $pages[$entity->path()] = $this->inspect($entity, SiteRenderer::html($entity, $this->base));
        }

        return $this->cache[$path ?? '*'] = $pages;
    }

    private function inspect(Page|Blog $entity, string $html): array
    {
        $head = strstr($html, '</head>', true) ?: '';
        $main = preg_match('#<main\b[^>]*>(.*)</main>#s', $html, $m) ? $m[1] : '';
        $text = trim(preg_replace('/\s+/', ' ', html_entity_decode(strip_tags(preg_replace('#<(script|style|svg)\b.*?</\1>#s', ' ', $main)), ENT_QUOTES | ENT_HTML5)));

        preg_match_all('#<img\b[^>]*>#i', $html, $imgs);
        $images = array_map(function ($tag) {
            preg_match('#\ssrc="([^"]*)"#', $tag, $src);
            $alt = preg_match('#\salt="([^"]*)"#', $tag, $a) ? html_entity_decode($a[1], ENT_QUOTES | ENT_HTML5) : null;

            return [
                'src' => $src[1] ?? '',
                'alt' => $alt,
                'has_size' => (bool) preg_match('#\swidth="\d+"#', $tag) && (bool) preg_match('#\sheight="\d+"#', $tag),
                'lazy' => str_contains($tag, 'loading="lazy"'),
            ];
        }, $imgs[0]);

        return [
            'entity' => $entity,
            'type' => $entity instanceof Blog ? 'blog' : 'page',
            'id' => $entity->id,
            'url' => $this->base.$entity->path(),
            'html' => $html,
            'head' => $head,
            'main' => $main,
            'title' => preg_match('#<title>(.*?)</title>#s', $head, $t) ? html_entity_decode($t[1], ENT_QUOTES | ENT_HTML5) : '',
            'description' => preg_match('#<meta name="description" content="([^"]*)"#', $head, $d) ? html_entity_decode($d[1], ENT_QUOTES | ENT_HTML5) : '',
            'canonical' => preg_match('#<link rel="canonical" href="([^"]*)"#', $head, $c) ? $c[1] : null,
            'robots' => preg_match('#<meta name="robots" content="([^"]*)"#', $head, $r) ? $r[1] : '',
            'h1_count' => preg_match_all('#<h1\b#i', $html),
            'words' => $text === '' ? 0 : str_word_count($text),
            'images' => $images,
            'main_links' => $this->links($main),
            'all_links' => $this->links($html),
        ];
    }

    /** href values of <a> tags, resolved to absolute URLs */
    private function links(string $html): array
    {
        preg_match_all('#<a\b[^>]*\shref="([^"]+)"#i', $html, $m);
        $links = [];
        foreach ($m[1] as $href) {
            $href = html_entity_decode($href, ENT_QUOTES | ENT_HTML5);
            if (str_starts_with($href, '#') || preg_match('#^(mailto|tel|javascript|data):#i', $href)) {
                continue;
            }
            $links[] = str_starts_with($href, '/') && ! str_starts_with($href, '//') ? $this->base.$href : $href;
        }

        return $links;
    }

    /** "/about-us/" for a link to this site, null for an external link */
    public function internalPath(string $url): ?string
    {
        $host = parse_url($this->base, PHP_URL_HOST);
        $linkHost = parse_url($url, PHP_URL_HOST);
        if ($linkHost !== null && ! in_array(preg_replace('/^www\./', '', $linkHost), [preg_replace('/^www\./', '', (string) $host), 'dubaifotographer.com'], true)) {
            return null;
        }
        $path = parse_url($url, PHP_URL_PATH) ?: '/';

        return preg_match('/\.[A-Za-z0-9]{1,5}$/', $path) ? $path : '/'.trim($path, '/').($path === '/' ? '' : '/');
    }
}
