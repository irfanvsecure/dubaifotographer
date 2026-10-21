<?php
$root = dirname(__DIR__);
$seoDir = $root.'/resources/views/seo';
$files = glob($seoDir.'/*.blade.php');
$titles = [];
$issues = [];
$noDesc = [];
$noImage = [];
$indexThank = [];
$robots = [];
$shortDesc = [];
$longDesc = [];
$article = [];
foreach ($files as $file) {
    $name = basename($file, '.blade.php');
    $html = file_get_contents($file);
    if (!preg_match('/<title>(.*?)<\/title>/s', $html, $m)) {
        $issues[] = "$name missing title";
        continue;
    }
    $title = html_entity_decode(trim(preg_replace('/\s+/', ' ', $m[1])));
    $titles[$title][] = $name;
    if (!preg_match('/name="description" content="(.*?)"/s', $html, $d) && !preg_match("/name='description' content='(.*?)'/s", $html, $d)) {
        $noDesc[] = $name;
    } else {
        $desc = html_entity_decode($d[1]);
        $len = mb_strlen($desc);
        if ($len < 50) $shortDesc[] = "$name ($len)";
        if ($len > 170) $longDesc[] = "$name ($len)";
    }
    if (!preg_match('/property="og:image"/', $html)) $noImage[] = $name;
    if (preg_match("/name='robots' content='([^']+)'/", $html, $r) || preg_match('/name="robots" content="([^"]+)"/', $html, $r)) {
        if (!str_contains($r[1], 'noindex') && in_array($name, ['thank-you', 'services-2'], true)) {
            $indexThank[] = $name;
        }
        if (str_contains($r[1], 'noindex')) $robots[] = $name;
    }
    if (preg_match('/og:type" content="article"/', $html)) $article[] = $name;
}
echo "SEO files: ".count($files)."\n";
echo "no description: ".count($noDesc)." ".implode(', ', array_slice($noDesc, 0, 15))."\n";
echo "no og:image: ".count($noImage)." ".implode(', ', $noImage)."\n";
echo "indexed thin: ".implode(', ', $indexThank)."\n";
echo "noindex: ".implode(', ', $robots)."\n";
echo "short desc: ".implode(', ', $shortDesc)."\n";
echo "long desc count: ".count($longDesc)."\n";
echo "og type article: ".count($article)."\n";
$dups = array_filter($titles, fn ($n) => count($n) > 1);
echo "duplicate titles: ".count($dups)."\n";
foreach (array_slice($dups, 0, 8, true) as $t => $names) {
    echo "  ".implode(', ', $names)." :: ".substr($t, 0, 80)."\n";
}

$viewRoot = $root.'/resources/views';
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($viewRoot));
$multiH1 = [];
$noH1 = [];
$emptyAlt = 0;
$missingAlt = 0;
$pages = 0;
foreach ($it as $f) {
    if (!$f->isFile() || !str_ends_with($f->getFilename(), '.blade.php')) continue;
    $rel = str_replace('\\', '/', substr($f->getPathname(), strlen($viewRoot) + 1));
    if (str_starts_with($rel, 'seo/') || str_starts_with($rel, 'partials/') || str_starts_with($rel, 'layouts/') || str_starts_with($rel, 'errors/')) continue;
    $pages++;
    $html = file_get_contents($f->getPathname());
    $h1 = preg_match_all('/<h1[\s>]/i', $html);
    if ($h1 === 0) $noH1[] = $rel;
    if ($h1 > 1) $multiH1[] = "$rel ($h1)";
    $emptyAlt += preg_match_all('/<img\b[^>]*\balt=""/i', $html);
    if (preg_match_all('/<img\b[^>]*>/i', $html, $imgs)) {
        foreach ($imgs[0] as $img) {
            if (!preg_match('/\balt=/i', $img)) $missingAlt++;
        }
    }
}
echo "content pages $pages\n";
echo "no h1: ".implode(', ', $noH1)."\n";
echo "multi h1: ".implode(', ', $multiH1)."\n";
echo "empty alt $emptyAlt missing alt $missingAlt\n";

$xml = file_get_contents($root.'/resources/sitemaps/page-sitemap.xml').file_get_contents($root.'/resources/sitemaps/post-sitemap.xml');
preg_match_all('#<loc>https://dubaifotographer.com([^<]*)</loc>#', $xml, $locs);
$urls = $locs[1];
echo "sitemap urls ".count($urls)."\n";
$routes = file_get_contents($root.'/routes/web.php');
preg_match_all("#Route::get\('([^']+)'#", $routes, $rm);
$routeSet = array_flip($rm[1]);
$missingRoute = [];
foreach ($urls as $u) {
    $path = rtrim($u, '/') ?: '/';
    if (!isset($routeSet[$path])) $missingRoute[] = $path;
}
echo "sitemap urls with no route: ".count($missingRoute)."\n";
echo implode("\n", array_slice($missingRoute, 0, 25))."\n";
