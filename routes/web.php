<?php

use App\Http\Controllers\BookingRequestController;
use App\Http\Controllers\SiteController;
use App\Support\Sitemap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// 301 to a path on this site; built by hand because redirect() drops the trailing slash
$moved = fn (string $to) => fn (Request $request) => redirect()->away(rtrim($request->getSchemeAndHttpHost().$request->getBaseUrl(), "/").$to, 301);

// Booking / quote / contact forms → email info@ + log
Route::post('/booking-request', BookingRequestController::class)->name('booking-request');

Route::get('/author/{path}', $moved('/our-blog/'))->where('path', '.*');
Route::get('/category/{path}', $moved('/our-blog/'))->where('path', '.*');

// ---------- SEO: sitemaps, robots.txt, old WordPress URLs ----------

// Built from the published, indexable pages and posts (App\Support\Sitemap). sitemap_index.xml
// and the page/post sitemaps keep the URLs Search Console knows from the WordPress site.
$xml = fn (string $body) => response($body, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
$siteBase = fn (Request $request) => rtrim($request->getSchemeAndHttpHost().$request->getBaseUrl(), '/');

Route::get('/sitemap.xml', fn (Request $r) => $xml(Sitemap::xml($siteBase($r))));
Route::get('/sitemap_index.xml', fn (Request $r) => $xml(Sitemap::index($siteBase($r))));
Route::get('/page-sitemap.xml', fn (Request $r) => $xml(Sitemap::xml($siteBase($r), 'page')));
Route::get('/post-sitemap.xml', fn (Request $r) => $xml(Sitemap::xml($siteBase($r), 'post')));
// robots.txt from the robots_txt setting (MCP: update_settings)
Route::get('/robots.txt', fn (Request $r) => response(Sitemap::robots($siteBase($r)), 200, ['Content-Type' => 'text/plain; charset=UTF-8']));
Route::get("/wp-sitemap.xml", $moved("/sitemap_index.xml"));
Route::get("/{name}-sitemap.xml", $moved("/sitemap_index.xml"))->where("name", "category|author");

// old image URLs indexed by Google -> same file under /assets/images
Route::get("/wp-content/uploads/{path}", function (string $path) use ($moved) {
    abort_unless(is_file(public_path("assets/images/".$path)), 404);

    return $moved("/assets/images/".str_replace("%2F", "/", rawurlencode($path)))(request());
})->where("path", ".*");

Route::get("/feed", $moved("/our-blog/"));
Route::get("/comments/feed", $moved("/our-blog/"));


// Every page and blog post (pages / blogs tables), then the redirects table, then 404.
// Keep this last: it matches any path.
Route::get('/{path?}', [SiteController::class, 'show'])->where('path', '.*')->name('page');
