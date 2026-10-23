<?php

namespace App\Support;

/**
 * Last pass over a rendered page, aimed at the site audit checks:
 * no plain-text email, no style="" attributes, a smaller HTML file
 * (shared SVG icons, no indentation) and CSS that does not block the
 * first paint (critical rules inline, full stylesheets loaded async).
 */
class PageOptimizer
{
    private const EMAIL = 'info@dubaifotographer.com';

    // classes main.js / service.js / article.js add after load; their rules belong in the critical CSS too
    private const JS_CLASSES = ['active', 'is-active', 'is-open', 'is-scrolled', 'is-visible', 'is-expanded', 'is-collapsed'];

    public static function run(string $html, string $base): string
    {
        $html = self::hideEmail($html);
        $html = self::images($html, $base);
        $html = self::moveBackgroundStyles($html);
        $html = self::shareSvgs($html);
        $html = self::inlineCriticalCss($html, $base);
        $html = self::relativeUrls($html, $base);

        return self::collapseWhitespace($html);
    }

    /**
     * Links and images inside the page drop the scheme and host ("/about-us/" instead of
     * "https://dubaifotographer.com/about-us/"). <link>, <meta> and scripts (canonical,
     * Open Graph, schema) keep the full URL.
     */
    private static function relativeUrls(string $html, string $base): string
    {
        $path = rtrim(parse_url($base, PHP_URL_PATH) ?? '', '/');
        $parts = preg_split('#(<script\b[^>]*>.*?</script>)#is', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        foreach ($parts as $i => $part) {
            if ($i % 2 === 0) {
                $parts[$i] = preg_replace_callback(
                    '#<(?!link\b|meta\b)[a-z][a-z0-9]*\b[^>]*>#i',
                    fn ($m) => str_replace(['="'.$base.'/', '="'.$base.'"', ', '.$base.'/'], ['="'.$path.'/', '="'.$path.'/"', ', '.$path.'/'], $m[0]),
                    $part
                );
            }
        }

        return implode('', $parts);
    }

    /** Spam bots read the raw HTML; browsers decode entities, JSON parsers decode @. */
    private static function hideEmail(string $html): string
    {
        $entities = implode('', array_map(fn ($c) => '&#'.ord($c).';', str_split(self::EMAIL)));
        $parts = preg_split('#(<script\b[^>]*>.*?</script>)#is', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        foreach ($parts as $i => $part) {
            $parts[$i] = $i % 2
                ? str_replace(self::EMAIL, str_replace('@', '\u0040', self::EMAIL), $part)
                : str_replace(self::EMAIL, $entities, $part);
        }

        return implode('', $parts);
    }

    /**
     * Images in <body>: the WebP copy made by `php artisan images:webp` (photo.jpg.webp) replaces
     * a JPEG/PNG, missing width/height are read from the file (no layout shift), and images
     * below the first screen load lazily. The header and the first two images in <main> stay
     * eager: one of them is usually the largest thing on screen.
     */
    private static function images(string $html, string $base): string
    {
        $bodyAt = strpos($html, '<body');
        if ($bodyAt === false) {
            return $html;
        }
        $head = substr($html, 0, $bodyAt);
        $body = substr($html, $bodyAt);
        $prefix = preg_quote($base.'/assets/', '#');

        // JPEG/PNG → WebP copy (src, srcset, background images)
        $body = preg_replace_callback('#'.$prefix.'[^"\'()\s,]+\.(?:jpe?g|png)(?=["\'()\s,])#i', function (array $m) use ($base): string {
            $file = public_path(rawurldecode(substr($m[0], strlen($base) + 1)));

            return is_file($file.'.webp') ? $m[0].'.webp' : $m[0];
        }, $body);

        $headerEnd = strpos($body, '</header>') ?: 0;
        $mainAt = strpos($body, '<main');
        $inMain = 0;
        $body = preg_replace_callback('#<img\b[^>]*>#i', function (array $m) use ($base, $prefix, $headerEnd, $mainAt, &$inMain): string {
            [$tag, $at] = $m[0];
            if ($mainAt !== false && $at > $mainAt) {
                $inMain++;
            }
            if ((! str_contains($tag, ' width=') || ! str_contains($tag, ' height=')) && preg_match('#\ssrc="('.$prefix.'[^"]+)"#', $tag, $src)) {
                $file = public_path(rawurldecode(substr(preg_replace('#\.webp$#', '', $src[1]), strlen($base) + 1)));
                $file = is_file($file) ? $file : public_path(rawurldecode(substr($src[1], strlen($base) + 1)));
                $size = is_file($file) ? @getimagesize($file) : false;
                if ($size && ! str_contains($tag, ' width=') && ! str_contains($tag, ' height=')) {
                    $tag = substr($tag, 0, 4).' width="'.$size[0].'" height="'.$size[1].'"'.substr($tag, 4);
                }
            }
            if (! str_contains($tag, ' loading=') && $at > $headerEnd && $inMain > 2) {
                $tag = substr($tag, 0, 4).' loading="lazy"'.substr($tag, 4);
            }
            if (! str_contains($tag, ' decoding=')) {
                $tag = substr($tag, 0, 4).' decoding="async"'.substr($tag, 4);
            }

            return $tag;
        }, $body, -1, $count, PREG_OFFSET_CAPTURE);

        return $head.$body;
    }

    /** style="background-image: url(...)" becomes a class with the same rule in <head>. */
    private static function moveBackgroundStyles(string $html): string
    {
        $classes = [];
        $html = preg_replace_callback(
            '#(<[a-z][a-z0-9]*\b[^>]*?)\sstyle="background-image:\s*url\(\'?([^\')]+)\'?\);?"([^>]*>)#i',
            function (array $m) use (&$classes): string {
                $class = $classes[$m[2]] ??= 'bg-'.(count($classes) + 1);
                $tag = $m[1].$m[3];

                return preg_match('#\sclass="#', $tag)
                    ? preg_replace('#\sclass="([^"]*)"#', ' class="$1 '.$class.'"', $tag, 1)
                    : preg_replace('#^<([a-z0-9]+)#i', '<$1 class="'.$class.'"', $tag);
            },
            $html
        );
        if (! $classes) {
            return $html;
        }

        // !important keeps the priority the inline style had over the stylesheet rules
        $css = '';
        foreach ($classes as $url => $class) {
            $css .= '.'.$class."{background-image:url('".$url."')!important}";
        }

        return str_replace('</head>', '<style>'.$css.'</style>'."\n".'</head>', $html);
    }

    /** An icon used more than once is drawn once as a <symbol> and referenced with <use>. */
    private static function shareSvgs(string $html): string
    {
        preg_match_all('#<svg\b([^>]*)>(.*?)</svg>#s', $html, $found, PREG_SET_ORDER);
        $counts = [];
        foreach ($found as [, $attrs, $inner]) {
            if (str_contains($inner, '<svg') || str_contains($inner, 'id=') || str_contains($inner, 'url(#')
                || ! preg_match('#\sviewBox="([^"]+)"#', $attrs, $vb)) {
                continue;
            }
            $key = $vb[1]."\0".$inner;
            $counts[$key] = ($counts[$key] ?? 0) + 1;
        }
        $shared = array_filter($counts, fn ($n) => $n > 1);
        if (! $shared) {
            return $html;
        }

        $ids = [];
        $symbols = '';
        foreach (array_keys($shared) as $i => $key) {
            [$viewBox, $inner] = explode("\0", $key, 2);
            $ids[$key] = 's'.($i + 1);
            $symbols .= '<symbol id="s'.($i + 1).'" viewBox="'.$viewBox.'">'.$inner.'</symbol>';
        }

        $html = preg_replace_callback('#<svg\b([^>]*)>(.*?)</svg>#s', function (array $m) use ($ids): string {
            if (! preg_match('#\sviewBox="([^"]+)"#', $m[1], $vb) || ! isset($ids[$vb[1]."\0".$m[2]])) {
                return $m[0];
            }

            return '<svg'.$m[1].'><use href="#'.$ids[$vb[1]."\0".$m[2]].'"/></svg>';
        }, $html);

        return preg_replace(
            '#<body\b[^>]*>#',
            '$0'."\n".'<svg class="svg-sprite" width="0" height="0" aria-hidden="true" focusable="false">'.$symbols.'</svg>',
            $html,
            1
        );
    }

    /**
     * Rules for what is on screen at first paint (header, the first section of the page,
     * the fixed bars) go inline in <head>; the stylesheets themselves load without blocking.
     */
    private static function inlineCriticalCss(string $html, string $base): string
    {
        if (! preg_match_all('#<link rel="stylesheet" href="([^"]+)">\s*#', $html, $links, PREG_SET_ORDER)) {
            return $html;
        }

        $sheets = [];
        foreach ($links as [, $href]) {
            $path = parse_url($href, PHP_URL_PATH) ?: '';
            $file = public_path(ltrim(substr($path, strlen(parse_url($base, PHP_URL_PATH) ?? '')), '/'));
            if (is_file($file)) {
                $sheets[$href] = $file;
            }
        }

        $tokens = self::firstScreenTokens($html);
        $key = md5(implode(' ', $tokens).'|'.implode(' ', array_map(fn ($f) => $f.filemtime($f), $sheets)).'|'.$base);
        $cacheFile = storage_path('framework/cache/critical-'.$key.'.css');
        if (is_file($cacheFile)) {
            $critical = file_get_contents($cacheFile);
        } else {
            $set = array_flip($tokens);
            $critical = '';
            $keyframes = [];
            foreach ($sheets as $href => $file) {
                $css = self::absoluteUrls(file_get_contents($file), $href);
                $critical .= self::pick($css, $set, $keyframes);
            }
            foreach ($keyframes as $name => $rule) {
                if (str_contains($critical, $name)) {
                    $critical .= $rule;
                }
            }
            $critical .= '.svg-sprite{position:absolute;width:0;height:0;overflow:hidden}';
            @file_put_contents($cacheFile, $critical);
        }

        $first = true;
        foreach ($links as [$tag, $href]) {
            $async = '<link rel="preload" href="'.$href.'" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">'
                .'<noscript><link rel="stylesheet" href="'.$href.'"></noscript>'."\n";
            if ($first) {
                $async = '<style>'.$critical.'</style>'."\n".$async;
                $first = false;
            }
            $html = self::replaceOnce($tag, $async, $html);
        }

        return $html;
    }

    /** Class names and ids in the header, the start of <main> and the fixed elements after the footer. */
    private static function firstScreenTokens(string $html): array
    {
        // the mega menu panels are closed at first paint; only the panel itself needs its rules
        $fragment = preg_match('#<header\b.*?</header>#s', $html, $m) ? self::emptyElements($m[0], 'mega-menu') : '';
        if (($start = strpos($html, '<main')) !== false) {
            $main = substr($html, $start, 12000);
            $end = strpos($main, '</section>');
            $fragment .= $end === false ? $main : substr($main, 0, $end);
        }
        if (($footerEnd = strpos($html, '</footer>')) !== false) {
            $fragment .= substr($html, $footerEnd);
        }

        $tokens = self::JS_CLASSES;
        preg_match_all('#\sclass="([^"]*)"#', $fragment, $m);
        foreach ($m[1] as $list) {
            array_push($tokens, ...preg_split('/\s+/', trim($list), -1, PREG_SPLIT_NO_EMPTY));
        }
        preg_match_all('#\sid="([^"]+)"#', $fragment, $m);
        array_push($tokens, ...$m[1]);

        $tokens = array_values(array_unique($tokens));
        sort($tokens);

        return $tokens;
    }

    /** <div class="x">…</div> → <div class="x"></div> for every div carrying class $class. */
    private static function emptyElements(string $html, string $class): string
    {
        $offset = 0;
        while (preg_match('#<div\b[^>]*\sclass="(?:[^"]*\s)?'.preg_quote($class, '#').'(?:\s[^"]*)?"[^>]*>#', $html, $m, PREG_OFFSET_CAPTURE, $offset)) {
            $start = $m[0][1] + strlen($m[0][0]);
            $depth = 1;
            preg_match_all('#<(/?)div\b[^>]*>#', $html, $tags, PREG_SET_ORDER | PREG_OFFSET_CAPTURE, $start);
            foreach ($tags as $tag) {
                $depth += $tag[1][0] === '/' ? -1 : 1;
                if ($depth === 0) {
                    $html = substr_replace($html, '', $start, $tag[0][1] - $start);
                    break;
                }
            }
            $offset = $start;
        }

        return $html;
    }

    /** Keeps the rules whose selectors only use classes / ids from $set (plain element rules always). */
    private static function pick(string $css, array $set, array &$keyframes): string
    {
        $out = '';
        foreach (self::blocks($css) as [$prelude, $body]) {
            $at = strtolower(strtok(ltrim($prelude), " ({") ?: '');
            if ($at === '@media' || $at === '@supports') {
                $inner = self::pick($body, $set, $keyframes);
                $out .= $inner === '' ? '' : $prelude.'{'.$inner.'}';
            } elseif ($at === '@font-face') {
                $out .= $prelude.'{'.$body.'}';
            } elseif (str_ends_with($at, 'keyframes')) {
                $keyframes[trim(substr(ltrim($prelude), strlen($at)))] = $prelude.'{'.$body.'}';
            } elseif ($at !== '' && $at[0] === '@') {
                continue;
            } else {
                $keep = array_filter(self::splitTopLevel($prelude), fn ($selector) => self::usesOnly($selector, $set));
                $out .= $keep ? implode(',', $keep).'{'.$body.'}' : '';
            }
        }

        return $out;
    }

    private static function usesOnly(string $selector, array $set): bool
    {
        // ".a:not(.b)" applies whether or not .b is on the page
        $selector = preg_replace('#:not\((?:[^()]|\([^()]*\))*\)#', '', $selector);
        preg_match_all('#[.\#](-?[_a-zA-Z][\w-]*)#', $selector, $m);
        foreach ($m[1] as $token) {
            if (! isset($set[$token])) {
                return false;
            }
        }

        return true;
    }

    /** Splits CSS into [prelude, body] pairs, one per top-level block. */
    private static function blocks(string $css): array
    {
        $css = preg_replace('#/\*.*?\*/#s', '', $css);
        $blocks = [];
        $len = strlen($css);
        $start = 0;
        for ($i = 0; $i < $len; $i++) {
            $c = $css[$i];
            if ($c === ';') {
                $start = $i + 1; // @charset / @import: dropped
            } elseif ($c === '{') {
                $depth = 1;
                $open = $i;
                for ($i++; $i < $len && $depth; $i++) {
                    $c = $css[$i];
                    if ($c === '"' || $c === "'") {
                        $i = self::stringEnd($css, $i);
                    } elseif ($c === '{') {
                        $depth++;
                    } elseif ($c === '}') {
                        $depth--;
                    }
                }
                $i--;
                $blocks[] = [trim(substr($css, $start, $open - $start)), substr($css, $open + 1, $i - $open - 1)];
                $start = $i + 1;
            } elseif ($c === '"' || $c === "'") {
                $i = self::stringEnd($css, $i);
            }
        }

        return $blocks;
    }

    private static function stringEnd(string $css, int $i): int
    {
        $quote = $css[$i];
        for ($i++; $i < strlen($css) && $css[$i] !== $quote; $i++) {
            if ($css[$i] === '\\') {
                $i++;
            }
        }

        return $i;
    }

    /** "a, b:is(c, d)" → ["a", "b:is(c, d)"] */
    private static function splitTopLevel(string $selectors): array
    {
        $parts = [];
        $depth = 0;
        $current = '';
        foreach (str_split($selectors) as $c) {
            if ($c === '(' || $c === '[') {
                $depth++;
            } elseif ($c === ')' || $c === ']') {
                $depth--;
            } elseif ($c === ',' && $depth === 0) {
                $parts[] = trim($current);
                $current = '';
                continue;
            }
            $current .= $c;
        }
        $parts[] = trim($current);

        return array_filter($parts, 'strlen');
    }

    /** url(../fonts/x.woff2) in /assets/css/fonts.css → url(<base>/assets/fonts/x.woff2) */
    private static function absoluteUrls(string $css, string $href): string
    {
        $dir = preg_replace('#[^/]*$#', '', strtok($href, '?'));

        return preg_replace_callback('#url\(\s*([\'"]?)(?![a-z]+:|/|\#)([^\'")]+)\1\s*\)#i', function (array $m) use ($dir): string {
            $url = $dir.$m[2];
            do {
                $url = preg_replace('#/(?!\.\./)[^/]+/\.\./#', '/', $url, 1, $n);
            } while ($n);

            return 'url('.$m[1].str_replace('/./', '/', $url).$m[1].')';
        }, $css);
    }

    /** Drops indentation; <pre> and <textarea> keep their text as written. */
    private static function collapseWhitespace(string $html): string
    {
        $parts = preg_split('#(<(pre|textarea)\b.*?</\2>)#is', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        $out = '';
        for ($i = 0; $i < count($parts); $i++) {
            if ($i % 3 === 0) {
                $out .= preg_replace('#[ \t]*\R\s*#', "\n", $parts[$i]);
            } elseif ($i % 3 === 1) {
                $out .= $parts[$i];
            }
        }

        return $out;
    }

    private static function replaceOnce(string $search, string $replace, string $subject): string
    {
        $pos = strpos($subject, $search);

        return $pos === false ? $subject : substr_replace($subject, $replace, $pos, strlen($search));
    }
}
