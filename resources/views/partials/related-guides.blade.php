@php
    // Service pages are one click from the homepage menu. Linking the guides
    // here keeps every post within two clicks, and gives each guide a second
    // inbound link besides the blog index.
    $guidesByService = [
        'corporate-event-photography-videography' => [
            'brief-your-event-photographer-uae',
            'product-launch-vs-conference-photography-uae',
            'how-much-does-corporate-event-photography-cost-in-the-uae',
            'corporate-event-photography-checklist-for-uae-conference-organizers',
            'how-multi-camera-setup-improves-corporate-event-coverage',
            'headshot-day-organizing-team-photography-for-uae-companies',
        ],
        'multi-camera-event-recording-for-conferences-concerts-and-large-scale-events' => [
            'how-multi-camera-filming-improves-concert-coverage',
            'how-multi-camera-recording-works-uae-exhibition-stands',
            'why-events-need-multi-camera-video-recording',
            'how-to-repurpose-multi-camera-event-footage',
            'hybrid-event-live-switching-guide',
            'how-much-does-multi-camera-event-recording-cost-in-the-uae',
            'multi-camera-graduation-ceremony-uae',
            'multi-camera-hybrid-town-hall-uae',
            'multi-camera-product-launch-dubai',
            'multi-camera-sports-tournament-coverage-uae',
            'multi-camera-award-ceremony-gala-uae',
            'multi-camera-production-crew-roles',
            'multi-camera-vs-single-camera-uae',
            'multi-camera-wedding-coverage-uae',
        ],
        'product-photography-services-in-uae' => [
            'amazon-ae-product-photography-requirements-a-sellers-guide',
            'white-background-vs-lifestyle-product-photography',
        ],
        'ecommerce-brand-photography-in-uae' => [
            'amazon-ae-product-photography-requirements-a-sellers-guide',
            'white-background-vs-lifestyle-product-photography',
        ],
        'restaurant-photography-service-in-uae' => [
            'menu-photography-that-increases-orders-what-uae-restaurants-get-wrong',
            'culinary-shoot-dubai-what-to-know',
        ],
        'luxury-food-photography-for-restaurants-hotels-and-brands' => [
            'culinary-shoot-dubai-what-to-know',
            'menu-photography-that-increases-orders-what-uae-restaurants-get-wrong',
        ],
        'real-estate-photography-videography-services-in-uae' => [
            'twilight-real-estate-photography-why-dubai-listings-sell-faster-with-it',
            'real-estate-photography-pricing-in-dubai-what-actually-affects-the-cost',
            'off-plan-property-marketing-photography-video-that-developers-need',
        ],
        'live-printing-photo-booth-for-instant-guest-keepsakes' => [
            'how-live-photo-booths-work-at-weddings',
            'how-to-set-up-live-print-photo-booth',
            'how-to-choose-instant-print-booth-uae',
            'how-live-printing-booths-boost-brand-activations',
            'why-instant-print-photo-booths-matter-at-uae-events',
        ],
        'wedding-photography-in-uae' => [
            'multi-camera-wedding-coverage-uae',
            'female-wedding-photographer-dubai',
            'how-live-photo-booths-work-at-weddings',
        ],
        'female-photographers-in-uae' => [
            'why-female-photographers-improve-influencer-shoots',
            'female-wedding-photographer-dubai',
            'what-to-look-for-in-a-lady-photographer-in-uae',
            'why-dubai-women-prefer-female-photographers-for-private-shoots',
        ],
        'influencer-photography-in-uae' => [
            'why-female-photographers-improve-influencer-shoots',
        ],
        'school-photography-services-in-uae' => [
            'multi-camera-graduation-ceremony-uae',
        ],
        'sports-photography-services-in-uae' => [
            'multi-camera-sports-tournament-coverage-uae',
        ],
        'professional-live-streaming-services-across-dubai-and-the-uae' => [
            'hybrid-event-live-switching-guide',
        ],
    ];
    $view = $currentTemplate ?? '';
    $slugs = $guidesByService[$view] ?? [];
    $bySlug = [];
    if ($slugs) {
        foreach (\App\Support\BlogIndex::posts() as $post) {
            $bySlug[$post[0]] = $post[3];
        }
    }
@endphp
@if ($slugs)
    <section class="related-guides">
        <div class="related-guides-inner">
            <p class="eyebrow">- From the blog</p>
            <h2 class="related-guides-title">Guides for this service</h2>
            <ul class="related-guides-list">
                @foreach ($slugs as $slug)
                    @if (isset($bySlug[$slug]))
                        <li><a href="%%BASE%%/{{ $slug }}">{{ $bySlug[$slug] }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </section>
@endif
