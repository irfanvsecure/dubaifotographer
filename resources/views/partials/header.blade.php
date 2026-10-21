@php
    $services = [
        'Corporate & Commercial' => [
            ['Corporate Event Photography', '/corporate-event-photography-videography'],
            ['Product Photography', '/product-photography-services-in-uae'],
            ['Jewelry Photography', '/jewelry-photography-services-in-uae'],
            ['Live Streaming Photography', '/professional-live-streaming-services-across-dubai-and-the-uae'],
            ['360° Photography', '/360-video-booth-experience-for-immersive-event-engagement'],
            ['Multi-Camera Photography', '/multi-camera-event-recording'],
            ['E-commerce Brands Photography', '/ecommerce-brand-photography-in-uae'],
        ],
        'Real Estate & Hospitality' => [
            ['Real Estate Photography', '/real-estate-photography-videography-services-in-uae'],
            ['Hotel Photography', '/hotel-photography-service-in-uae'],
            ['Restaurant Photography', '/restaurant-photography-service-in-uae'],
            ['Food Photography', '/luxury-food-photography-for-restaurants-hotels-and-brands'],
            ['Drone Photography', '/cinematic-drone-photography-videography-uae-compliant-licensed'],
            ['Architectural Photographer', '/architectural-photography-in-uae'],
            ['Interior Photography', '/interior-photographer-in-uae'],
            ['Exterior Photography', '/exterior-photography-in-uae'],
            ['Construction Site Photography', '/construction-site-photography-in-uae'],
        ],
        'Portrait & Lifestyle' => [
            ['Female Photographers', '/female-photographers-in-uae'],
            ['Maternity Photography', '/maternity-photography-in-uae'],
            ['Fashion Photography', '/fashion-photography-in-uae'],
            ['Influencer Photography', '/influencer-photography-in-uae'],
            ['Family Photography', '/family-photography-in-uae'],
            ['Portrait Photography', '/portrait-photography-in-uae'],
            ['Couple Photography', '/couple-photography-in-uae'],
            ['Lifestyle Photography', '/lifestyle-photography-in-uae'],
        ],
        'Specialty Photography' => [
            ['Car Photography', '/car-photography-in-uae'],
            ['Sports Photography', '/sports-photography-services-in-uae'],
            ['School Photography', '/school-photography-services-in-uae'],
            ['Travel Photographer', '/travel-photography-in-uae'],
            ['Live Printing Photography', '/live-printing-photo-booth-for-instant-guest-keepsakes'],
            ['Wedding Photographers', '/wedding-photography-in-uae'],
            ['Newborn Baby Photography', '/newborn-baby-photography-in-uae'],
            ['Flying Dress Photography', '/flying-dress-photography-in-uae'],
            ['Beauty Photography', '/beauty-photography-in-uae'],
        ],
    ];
    $locations = [
        ['Abu Dhabi', '/photographer-in-abu-dhabi'],
        ['Sharjah', '/locations/photographer-in-sharjah'],
        ['Ajman', '/locations/photographer-in-ajman'],
        ['Ras Al Khaimah', '/locations/photographer-in-ras-al-khaimah'],
        ['Fujairah', '/locations/photographer-in-fujairah'],
        ['Umm Al Quwain', '/locations/photographer-in-umm-al-quwain'],
        ['Al Ain', '/locations/photographer-in-al-ain'],
    ];
    $arrow = '<svg class="nav-arrow" viewBox="57 35.171 26 16.043" aria-hidden="true"><path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"/></svg>';
    $pin = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg>';
@endphp
<header class="site-header">
    <div class="header-inner">
        <a class="header-logo" href="%%BASE%%/" rel="home">
            <img src="%%BASE%%/assets/images/2026/04/dubaifotographer-logo-e1782899876206-140x58.png" width="140" height="58" alt="Dubai Fotographer">
            <span class="site-title">dubaifotographer</span>
        </a>

        <a class="header-call-mobile" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt'])<span class="screen-reader-text">Call us</span></a>

        <button class="menu-toggle" type="button" aria-controls="main-menu" aria-expanded="false" aria-label="Main Menu">
            <svg class="icon-open" viewBox="0 0 20 13" aria-hidden="true"><rect width="20" height="1.5" rx="1"/><rect y="5.5" width="20" height="1.5" rx="1"/><rect y="11" width="20" height="1.5" rx="1"/></svg>
            <svg class="icon-close" viewBox="0 0 24 24" aria-hidden="true"><path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"/></svg>
        </button>

        <nav class="main-nav" id="main-menu" aria-label="Site Navigation">
            <ul class="menu">
                <li><a class="menu-link" href="%%BASE%%/">Home</a></li>
                <li class="has-mega">
                    <a class="menu-link" href="%%BASE%%/services">Our Services{!! $arrow !!}</a>
                    <button class="submenu-toggle" type="button" aria-expanded="false" aria-label="Toggle Our Services submenu">{!! $arrow !!}</button>
                    <div class="mega-menu">
                        <div class="mega-body mega-cols">
                            @foreach ($services as $group => $links)
                                <div class="mega-col">
                                    <button class="mega-head" type="button" aria-expanded="false">{{ $group }}{!! $arrow !!}</button>
                                    <div class="mega-links">
                                        @foreach ($links as [$label, $url])
                                            <a class="mega-link" href="%%BASE%%{{ $url }}">{{ $label }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @include('partials.header-cta')
                    </div>
                </li>
                <li><a class="menu-link" href="%%BASE%%/booking-form">Booking Form</a></li>
                <li class="has-mega mega-narrow">
                    <a class="menu-link" href="%%BASE%%/locations">Locations{!! $arrow !!}</a>
                    <button class="submenu-toggle" type="button" aria-expanded="false" aria-label="Toggle locations submenu">{!! $arrow !!}</button>
                    <div class="mega-menu">
                        <div class="mega-body mega-grid">
                            @foreach ($locations as [$label, $url])
                                <a class="mega-link" href="%%BASE%%{{ $url }}"><span class="mega-icon">{!! $pin !!}</span>{{ $label }}</a>
                            @endforeach
                        </div>
                        @include('partials.header-cta')
                    </div>
                </li>
                <li><a class="menu-link" href="%%BASE%%/portfolio">Portfolio</a></li>
                <li><a class="menu-link" href="%%BASE%%/about-us">About Us</a></li>
                <li><a class="menu-link" href="%%BASE%%/contact-us">Contact Us</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <a class="header-phone" href="tel:+971522946276" aria-label="Call +971 52 294 6276">
                <span class="header-phone-icon">@include('partials.icon', ['name' => 'phone-alt'])</span>
                <span class="header-phone-text"><small>Call us</small>+971 52 294 6276</span>
            </a>
            <a class="header-button" href="%%BASE%%/booking-form">Get a Quote @include('partials.icon', ['name' => 'arrow-right'])</a>
        </div>
    </div>
</header>
