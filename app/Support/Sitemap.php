<?php

namespace App\Support;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Support\Collection;

/** sitemap.xml and robots.txt, built from the published pages / posts and the settings. */
class Sitemap
{
    /** Published and indexable pages and posts: [loc, lastmod, image|null, type] */
    public static function entries(string $base, ?string $type = null): Collection
    {
        $indexable = fn ($q) => $q->where('status', 'published')
            ->where(fn ($q) => $q->whereDoesntHave('seo')->orWhereHas('seo', fn ($q) => $q->where('robots', 'not like', '%noindex%')));

        $pages = $type === 'post' ? collect() : Page::query()->with('seo')->tap($indexable)->orderBy('sort_order')->get()
            ->filter(fn (Page $p) => ! self::canonicalElsewhere($p, $base))
            ->map(fn (Page $p) => ['loc' => $base.$p->path(), 'lastmod' => $p->updated_at, 'image' => null, 'type' => 'page']);

        $posts = $type === 'page' ? collect() : Blog::query()->with('seo')->tap($indexable)->orderByDesc('published_at')->get()
            ->filter(fn (Blog $b) => ! self::canonicalElsewhere($b, $base))
            ->map(fn (Blog $b) => [
                'loc' => $base.$b->path(),
                'lastmod' => $b->updated_at,
                'image' => $b->featured_image ? $base.'/assets/images/'.$b->featured_image : null,
                'type' => 'post',
            ]);

        return $pages->concat($posts)->values();
    }

    /** a page whose canonical points to another URL does not belong in the sitemap */
    private static function canonicalElsewhere(Page|Blog $entity, string $base): bool
    {
        $canonical = $entity->seo?->canonical_url;
        if (! $canonical) {
            return false;
        }
        $canonical = str_replace('%%BASE%%', $base, $canonical);

        return rtrim(parse_url($canonical, PHP_URL_PATH) ?: '/', '/') !== rtrim($entity->path(), '/');
    }

    public static function xml(string $base, ?string $type = null): string
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n"
            .'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">'."\n";
        foreach (self::entries($base, $type) as $entry) {
            $xml .= "\t<url>\n\t\t<loc>".e($entry['loc'])."</loc>\n";
            if ($entry['lastmod']) {
                $xml .= "\t\t<lastmod>".$entry['lastmod']->toAtomString()."</lastmod>\n";
            }
            if ($entry['image']) {
                $xml .= "\t\t<image:image>\n\t\t\t<image:loc>".e($entry['image'])."</image:loc>\n\t\t</image:image>\n";
            }
            $xml .= "\t</url>\n";
        }

        return $xml.'</urlset>'."\n";
    }

    /** sitemap_index.xml: the page and post sitemaps (the URL Search Console already knows) */
    public static function index(string $base): string
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n".'<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
        foreach (['page', 'post'] as $type) {
            $latest = self::entries($base, $type)->max('lastmod');
            $xml .= "\t<sitemap>\n\t\t<loc>$base/$type-sitemap.xml</loc>\n"
                .($latest ? "\t\t<lastmod>".$latest->toAtomString()."</lastmod>\n" : '')
                ."\t</sitemap>\n";
        }

        return $xml.'</sitemapindex>'."\n";
    }

    /** robots.txt from the robots_txt setting; the Sitemap line always names this host */
    public static function robots(string $base): string
    {
        $text = (string) Setting::get('robots_txt', "User-agent: *\nDisallow:\n");
        $text = preg_replace('/^Sitemap:.*$\R?/mi', '', $text);

        return rtrim($text)."\n\nSitemap: $base/sitemap_index.xml\n";
    }
}
