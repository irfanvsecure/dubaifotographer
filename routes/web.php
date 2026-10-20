<?php

use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// 301 to a path on this site; built by hand because redirect() drops the trailing slash
$moved = fn (string $to) => fn (Request $request) => redirect()->away(rtrim($request->getSchemeAndHttpHost().$request->getBaseUrl(), "/").$to, 301);

// Booking / quote forms (logged to storage/app/booking-requests.log)
Route::post('/booking-request', function (Request $request) {
    Storage::append('booking-requests.log', json_encode([
        'at' => now()->toIso8601String(),
        'form' => $request->input('form_name'),
        'fields' => $request->except(['_token', 'form_name']),
        'page' => $request->headers->get('referer'),
    ], JSON_UNESCAPED_UNICODE));

    return response()->json(['success' => true]);
})->name('booking-request');

Route::get('/areas-we-serve', $moved('/locations/'));
Route::get('/portfolio-2', $moved('/portfolio/'));
Route::get('/multi-camera-coverage-for-weddings-in-the-uae-is-it-worth-it', $moved('/multi-camera-wedding-coverage-uae/'));
Route::get('/photographer-in-ajman', $moved('/locations/photographer-in-ajman/'));
Route::get('/photographer-in-al-ain', $moved('/locations/photographer-in-al-ain/'));
Route::get('/photographer-in-fujairah', $moved('/locations/photographer-in-fujairah/'));
Route::get('/photographer-in-ras-al-khaimah', $moved('/locations/photographer-in-ras-al-khaimah/'));
Route::get('/photographer-in-sharjah', $moved('/locations/photographer-in-sharjah/'));
Route::get('/photographer-in-umm-al-quwain', $moved('/locations/photographer-in-umm-al-quwain/'));
Route::get('/author/{path}', $moved('/our-blog/'))->where('path', '.*');
Route::get('/category/{path}', $moved('/our-blog/'))->where('path', '.*');

// ---------- SEO: sitemaps, old WordPress URLs ----------

// Yoast sitemaps from the live site (resources/sitemaps), served on this domain.
// Images are mapped from /wp-content/uploads to /assets/images; ones not on this site are dropped.
$sitemap = function (Request $request, string $name) {
    $base = rtrim($request->getSchemeAndHttpHost().$request->getBaseUrl(), "/");
    $xml = file_get_contents(resource_path("sitemaps/$name.xml"));
    $xml = preg_replace("#<\?xml-stylesheet[^>]*\?>#", "", $xml);
    $xml = preg_replace_callback("#\s*<image:image>\s*<image:loc>https://dubaifotographer\.com/wp-content/uploads/([^<]+)</image:loc>\s*</image:image>#", function ($m) use ($base) {
        return is_file(public_path("assets/images/".rawurldecode($m[1])))
            ? "
		<image:image>
			<image:loc>$base/assets/images/$m[1]</image:loc>
		</image:image>"
            : "";
    }, $xml);
    $xml = str_replace("https://dubaifotographer.com", $base, $xml);

    return response($xml, 200, ["Content-Type" => "application/xml; charset=UTF-8"]);
};

Route::get("/page-sitemap.xml", fn (Request $r) => $sitemap($r, "page-sitemap"));
Route::get("/post-sitemap.xml", fn (Request $r) => $sitemap($r, "post-sitemap"));
Route::get("/sitemap_index.xml", function (Request $request) {
    $base = rtrim($request->getSchemeAndHttpHost().$request->getBaseUrl(), "/");
    $items = "";
    foreach (["post-sitemap", "page-sitemap"] as $name) {
        $lastmod = date("c", filemtime(resource_path("sitemaps/$name.xml")));
        if (preg_match_all("#<lastmod>([^<]+)</lastmod>#", file_get_contents(resource_path("sitemaps/$name.xml")), $m)) {
            rsort($m[1]);
            $lastmod = $m[1][0];
        }
        $items .= "	<sitemap>
		<loc>$base/$name.xml</loc>
		<lastmod>$lastmod</lastmod>
	</sitemap>
";
    }
    $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
$items</sitemapindex>
";

    return response($xml, 200, ["Content-Type" => "application/xml; charset=UTF-8"]);
});
Route::get("/sitemap.xml", $moved("/sitemap_index.xml"));
Route::get("/wp-sitemap.xml", $moved("/sitemap_index.xml"));
Route::get("/{name}-sitemap.xml", $moved("/sitemap_index.xml"))->where("name", "category|author");

// old image URLs indexed by Google -> same file under /assets/images
Route::get("/wp-content/uploads/{path}", function (string $path) use ($moved) {
    abort_unless(is_file(public_path("assets/images/".$path)), 404);

    return $moved("/assets/images/".str_replace("%2F", "/", rawurlencode($path)))(request());
})->where("path", ".*");

Route::get("/feed", $moved("/our-blog/"));
Route::get("/comments/feed", $moved("/our-blog/"));

Route::get('/', [SiteController::class, 'show'])->defaults('view', 'index')->name('home');
Route::get('/360-video-booth-experience-for-immersive-event-engagement', [SiteController::class, 'show'])->defaults('view', '360-video-booth-experience-for-immersive-event-engagement')->name('360-video-booth-experience-for-immersive-event-engagement');
Route::get('/about-us', [SiteController::class, 'show'])->defaults('view', 'about-us')->name('about-us');
Route::get('/amazon-ae-product-photography-requirements-a-sellers-guide', [SiteController::class, 'show'])->defaults('view', 'amazon-ae-product-photography-requirements-a-sellers-guide')->name('amazon-ae-product-photography-requirements-a-sellers-guide');
Route::get('/architectural-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'architectural-photography-in-uae')->name('architectural-photography-in-uae');
Route::get('/beauty-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'beauty-photography-in-uae')->name('beauty-photography-in-uae');
Route::get('/booking-form', [SiteController::class, 'show'])->defaults('view', 'booking-form')->name('booking-form');
Route::get('/brief-your-event-photographer-uae', [SiteController::class, 'show'])->defaults('view', 'brief-your-event-photographer-uae')->name('brief-your-event-photographer-uae');
Route::get('/car-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'car-photography-in-uae')->name('car-photography-in-uae');
Route::get('/cinematic-drone-photography-videography-uae-compliant-licensed', [SiteController::class, 'show'])->defaults('view', 'cinematic-drone-photography-videography-uae-compliant-licensed')->name('cinematic-drone-photography-videography-uae-compliant-licensed');
Route::get('/construction-site-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'construction-site-photography-in-uae')->name('construction-site-photography-in-uae');
Route::get('/contact-us', [SiteController::class, 'show'])->defaults('view', 'contact-us')->name('contact-us');
Route::get('/cookie-policy', [SiteController::class, 'show'])->defaults('view', 'cookie-policy')->name('cookie-policy');
Route::get('/corporate-event-photography-checklist-for-uae-conference-organizers', [SiteController::class, 'show'])->defaults('view', 'corporate-event-photography-checklist-for-uae-conference-organizers')->name('corporate-event-photography-checklist-for-uae-conference-organizers');
Route::get('/corporate-event-photography-videography', [SiteController::class, 'show'])->defaults('view', 'corporate-event-photography-videography')->name('corporate-event-photography-videography');
Route::get('/couple-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'couple-photography-in-uae')->name('couple-photography-in-uae');
Route::get('/culinary-shoot-dubai-what-to-know', [SiteController::class, 'show'])->defaults('view', 'culinary-shoot-dubai-what-to-know')->name('culinary-shoot-dubai-what-to-know');
Route::get('/ecommerce-brand-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'ecommerce-brand-photography-in-uae')->name('ecommerce-brand-photography-in-uae');
Route::get('/exterior-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'exterior-photography-in-uae')->name('exterior-photography-in-uae');
Route::get('/family-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'family-photography-in-uae')->name('family-photography-in-uae');
Route::get('/fashion-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'fashion-photography-in-uae')->name('fashion-photography-in-uae');
Route::get('/female-photographers-in-uae', [SiteController::class, 'show'])->defaults('view', 'female-photographers-in-uae')->name('female-photographers-in-uae');
Route::get('/female-wedding-photographer-dubai', [SiteController::class, 'show'])->defaults('view', 'female-wedding-photographer-dubai')->name('female-wedding-photographer-dubai');
Route::get('/flying-dress-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'flying-dress-photography-in-uae')->name('flying-dress-photography-in-uae');
Route::get('/frequently-asked-questions', [SiteController::class, 'show'])->defaults('view', 'frequently-asked-questions')->name('frequently-asked-questions');
Route::get('/headshot-day-organizing-team-photography-for-uae-companies', [SiteController::class, 'show'])->defaults('view', 'headshot-day-organizing-team-photography-for-uae-companies')->name('headshot-day-organizing-team-photography-for-uae-companies');
Route::get('/hotel-photography-service-in-uae', [SiteController::class, 'show'])->defaults('view', 'hotel-photography-service-in-uae')->name('hotel-photography-service-in-uae');
Route::get('/how-live-photo0-booths-work-at-weddings', [SiteController::class, 'show'])->defaults('view', 'how-live-photo0-booths-work-at-weddings')->name('how-live-photo0-booths-work-at-weddings');
Route::get('/how-live-printing-booths-boost-brand-activations', [SiteController::class, 'show'])->defaults('view', 'how-live-printing-booths-boost-brand-activations')->name('how-live-printing-booths-boost-brand-activations');
Route::get('/how-much-does-corporate-event-photography-cost-in-the-uae', [SiteController::class, 'show'])->defaults('view', 'how-much-does-corporate-event-photography-cost-in-the-uae')->name('how-much-does-corporate-event-photography-cost-in-the-uae');
Route::get('/how-much-does-multi-camera-event-recording-cost-in-the-uae', [SiteController::class, 'show'])->defaults('view', 'how-much-does-multi-camera-event-recording-cost-in-the-uae')->name('how-much-does-multi-camera-event-recording-cost-in-the-uae');
Route::get('/how-multi-camera-filming-improves-concert-coverage', [SiteController::class, 'show'])->defaults('view', 'how-multi-camera-filming-improves-concert-coverage')->name('how-multi-camera-filming-improves-concert-coverage');
Route::get('/how-multi-camera-recording-works-uae-exhibition-stands', [SiteController::class, 'show'])->defaults('view', 'how-multi-camera-recording-works-uae-exhibition-stands')->name('how-multi-camera-recording-works-uae-exhibition-stands');
Route::get('/how-multi-camera-setup-improves-corporate-event-coverage', [SiteController::class, 'show'])->defaults('view', 'how-multi-camera-setup-improves-corporate-event-coverage')->name('how-multi-camera-setup-improves-corporate-event-coverage');
Route::get('/how-to-choose-instant-print-booth-uae', [SiteController::class, 'show'])->defaults('view', 'how-to-choose-instant-print-booth-uae')->name('how-to-choose-instant-print-booth-uae');
Route::get('/how-to-repurpose-multi-camera-event-footage', [SiteController::class, 'show'])->defaults('view', 'how-to-repurpose-multi-camera-event-footage')->name('how-to-repurpose-multi-camera-event-footage');
Route::get('/how-to-set-up-live-print-photo-booth', [SiteController::class, 'show'])->defaults('view', 'how-to-set-up-live-print-photo-booth')->name('how-to-set-up-live-print-photo-booth');
Route::get('/hybrid-event-live-switching-guide', [SiteController::class, 'show'])->defaults('view', 'hybrid-event-live-switching-guide')->name('hybrid-event-live-switching-guide');
Route::get('/influencer-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'influencer-photography-in-uae')->name('influencer-photography-in-uae');
Route::get('/interior-photographer-in-uae', [SiteController::class, 'show'])->defaults('view', 'interior-photographer-in-uae')->name('interior-photographer-in-uae');
Route::get('/jewelry-photography-services-in-uae', [SiteController::class, 'show'])->defaults('view', 'jewelry-photography-services-in-uae')->name('jewelry-photography-services-in-uae');
Route::get('/lifestyle-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'lifestyle-photography-in-uae')->name('lifestyle-photography-in-uae');
Route::get('/live-printing-photo-booth-for-instant-guest-keepsakes', [SiteController::class, 'show'])->defaults('view', 'live-printing-photo-booth-for-instant-guest-keepsakes')->name('live-printing-photo-booth-for-instant-guest-keepsakes');
Route::get('/locations', [SiteController::class, 'show'])->defaults('view', 'locations')->name('locations');
Route::get('/locations/photographer-in-ajman', [SiteController::class, 'show'])->defaults('view', 'locations.photographer-in-ajman')->name('locations.photographer-in-ajman');
Route::get('/locations/photographer-in-al-ain', [SiteController::class, 'show'])->defaults('view', 'locations.photographer-in-al-ain')->name('locations.photographer-in-al-ain');
Route::get('/locations/photographer-in-fujairah', [SiteController::class, 'show'])->defaults('view', 'locations.photographer-in-fujairah')->name('locations.photographer-in-fujairah');
Route::get('/locations/photographer-in-ras-al-khaimah', [SiteController::class, 'show'])->defaults('view', 'locations.photographer-in-ras-al-khaimah')->name('locations.photographer-in-ras-al-khaimah');
Route::get('/locations/photographer-in-sharjah', [SiteController::class, 'show'])->defaults('view', 'locations.photographer-in-sharjah')->name('locations.photographer-in-sharjah');
Route::get('/locations/photographer-in-umm-al-quwain', [SiteController::class, 'show'])->defaults('view', 'locations.photographer-in-umm-al-quwain')->name('locations.photographer-in-umm-al-quwain');
Route::get('/luxury-food-photography-for-restaurants-hotels-and-brands', [SiteController::class, 'show'])->defaults('view', 'luxury-food-photography-for-restaurants-hotels-and-brands')->name('luxury-food-photography-for-restaurants-hotels-and-brands');
Route::get('/maternity-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'maternity-photography-in-uae')->name('maternity-photography-in-uae');
Route::get('/menu-photography-that-increases-orders-what-uae-restaurants-get-wrong', [SiteController::class, 'show'])->defaults('view', 'menu-photography-that-increases-orders-what-uae-restaurants-get-wrong')->name('menu-photography-that-increases-orders-what-uae-restaurants-get-wrong');
Route::get('/multi-camera-award-ceremony-gala-uae', [SiteController::class, 'show'])->defaults('view', 'multi-camera-award-ceremony-gala-uae')->name('multi-camera-award-ceremony-gala-uae');
Route::get('/multi-camera-event-recording-for-conferences-concerts-and-large-scale-events', [SiteController::class, 'show'])->defaults('view', 'multi-camera-event-recording-for-conferences-concerts-and-large-scale-events')->name('multi-camera-event-recording-for-conferences-concerts-and-large-scale-events');
Route::get('/multi-camera-graduation-ceremony-uae', [SiteController::class, 'show'])->defaults('view', 'multi-camera-graduation-ceremony-uae')->name('multi-camera-graduation-ceremony-uae');
Route::get('/multi-camera-hybrid-town-hall-uae', [SiteController::class, 'show'])->defaults('view', 'multi-camera-hybrid-town-hall-uae')->name('multi-camera-hybrid-town-hall-uae');
Route::get('/multi-camera-product-launch-dubai', [SiteController::class, 'show'])->defaults('view', 'multi-camera-product-launch-dubai')->name('multi-camera-product-launch-dubai');
Route::get('/multi-camera-production-crew-roles', [SiteController::class, 'show'])->defaults('view', 'multi-camera-production-crew-roles')->name('multi-camera-production-crew-roles');
Route::get('/multi-camera-sports-tournament-coverage-uae', [SiteController::class, 'show'])->defaults('view', 'multi-camera-sports-tournament-coverage-uae')->name('multi-camera-sports-tournament-coverage-uae');
Route::get('/multi-camera-vs-single-camera-uae', [SiteController::class, 'show'])->defaults('view', 'multi-camera-vs-single-camera-uae')->name('multi-camera-vs-single-camera-uae');
Route::get('/multi-camera-wedding-coverage-uae', [SiteController::class, 'show'])->defaults('view', 'multi-camera-wedding-coverage-uae')->name('multi-camera-wedding-coverage-uae');
Route::get('/newborn-baby-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'newborn-baby-photography-in-uae')->name('newborn-baby-photography-in-uae');
Route::get('/off-plan-property-marketing-photography-video-that-developers-need', [SiteController::class, 'show'])->defaults('view', 'off-plan-property-marketing-photography-video-that-developers-need')->name('off-plan-property-marketing-photography-video-that-developers-need');
Route::get('/our-blog', [SiteController::class, 'show'])->defaults('view', 'our-blog')->name('our-blog');
Route::get('/photographer-in-abu-dhabi', [SiteController::class, 'show'])->defaults('view', 'photographer-in-abu-dhabi')->name('photographer-in-abu-dhabi');
Route::get('/portfolio', [SiteController::class, 'show'])->defaults('view', 'portfolio')->name('portfolio');
Route::get('/portrait-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'portrait-photography-in-uae')->name('portrait-photography-in-uae');
Route::get('/privacy-policy', [SiteController::class, 'show'])->defaults('view', 'privacy-policy')->name('privacy-policy');
Route::get('/product-launch-vs-conference-photography-uae', [SiteController::class, 'show'])->defaults('view', 'product-launch-vs-conference-photography-uae')->name('product-launch-vs-conference-photography-uae');
Route::get('/product-photography-services-in-uae', [SiteController::class, 'show'])->defaults('view', 'product-photography-services-in-uae')->name('product-photography-services-in-uae');
Route::get('/professional-live-streaming-services-across-dubai-and-the-uae', [SiteController::class, 'show'])->defaults('view', 'professional-live-streaming-services-across-dubai-and-the-uae')->name('professional-live-streaming-services-across-dubai-and-the-uae');
Route::get('/real-estate-photography-pricing-in-dubai-what-actually-affects-the-cost', [SiteController::class, 'show'])->defaults('view', 'real-estate-photography-pricing-in-dubai-what-actually-affects-the-cost')->name('real-estate-photography-pricing-in-dubai-what-actually-affects-the-cost');
Route::get('/real-estate-photography-videography-services-in-uae', [SiteController::class, 'show'])->defaults('view', 'real-estate-photography-videography-services-in-uae')->name('real-estate-photography-videography-services-in-uae');
Route::get('/restaurant-photography-service-in-uae', [SiteController::class, 'show'])->defaults('view', 'restaurant-photography-service-in-uae')->name('restaurant-photography-service-in-uae');
Route::get('/school-photography-services-in-uae', [SiteController::class, 'show'])->defaults('view', 'school-photography-services-in-uae')->name('school-photography-services-in-uae');
Route::get('/security-policy', [SiteController::class, 'show'])->defaults('view', 'security-policy')->name('security-policy');
Route::get('/services', [SiteController::class, 'show'])->defaults('view', 'services')->name('services');
Route::get('/services-2', [SiteController::class, 'show'])->defaults('view', 'services-2')->name('services-2');
Route::get('/sports-photography-services-in-uae', [SiteController::class, 'show'])->defaults('view', 'sports-photography-services-in-uae')->name('sports-photography-services-in-uae');
Route::get('/support-policy', [SiteController::class, 'show'])->defaults('view', 'support-policy')->name('support-policy');
Route::get('/terms-of-service', [SiteController::class, 'show'])->defaults('view', 'terms-of-service')->name('terms-of-service');
Route::get('/thank-you', [SiteController::class, 'show'])->defaults('view', 'thank-you')->name('thank-you');
Route::get('/travel-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'travel-photography-in-uae')->name('travel-photography-in-uae');
Route::get('/twilight-real-estate-photography-why-dubai-listings-sell-faster-with-it', [SiteController::class, 'show'])->defaults('view', 'twilight-real-estate-photography-why-dubai-listings-sell-faster-with-it')->name('twilight-real-estate-photography-why-dubai-listings-sell-faster-with-it');
Route::get('/wedding-photography-in-uae', [SiteController::class, 'show'])->defaults('view', 'wedding-photography-in-uae')->name('wedding-photography-in-uae');
Route::get('/what-to-look-for-in-a-lady-photographer-in-uae', [SiteController::class, 'show'])->defaults('view', 'what-to-look-for-in-a-lady-photographer-in-uae')->name('what-to-look-for-in-a-lady-photographer-in-uae');
Route::get('/white-background-vs-lifestyle-product-photography', [SiteController::class, 'show'])->defaults('view', 'white-background-vs-lifestyle-product-photography')->name('white-background-vs-lifestyle-product-photography');
Route::get('/why-dubai-women-prefer-female-photographers-for-private-shoots', [SiteController::class, 'show'])->defaults('view', 'why-dubai-women-prefer-female-photographers-for-private-shoots')->name('why-dubai-women-prefer-female-photographers-for-private-shoots');
Route::get('/why-events-need-multi-camera-video-recording', [SiteController::class, 'show'])->defaults('view', 'why-events-need-multi-camera-video-recording')->name('why-events-need-multi-camera-video-recording');
Route::get('/why-female-photographers-improve-influencer-shoots', [SiteController::class, 'show'])->defaults('view', 'why-female-photographers-improve-influencer-shoots')->name('why-female-photographers-improve-influencer-shoots');
Route::get('/why-instant-print-photo-booths-matter-at-uae-events', [SiteController::class, 'show'])->defaults('view', 'why-instant-print-photo-booths-matter-at-uae-events')->name('why-instant-print-photo-booths-matter-at-uae-events');
