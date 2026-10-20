@extends('layouts.app')

@section('seo')
@include('seo.services')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/services-overview.css">
@endpush

@php
    // Every service page, grouped into categories: title, card image, image alt, [link, label]
    $categories = [
        [
            'title' => 'Events & Live Coverage',
            'image' => '2026/04/corporate-event-photography.webp',
            'alt' => 'Corporate event photography in Dubai',
            'links' => [
                ['/corporate-event-photography-videography', 'Event Photography'],
                ['/multi-camera-event-recording-for-conferences-concerts-and-large-scale-events', 'Multi-Camera Event'],
                ['/professional-live-streaming-services-across-dubai-and-the-uae', 'Live Streaming'],
                ['/360-video-booth-experience-for-immersive-event-engagement', '360° Videography'],
                ['/live-printing-photo-booth-for-instant-guest-keepsakes', 'Live Photography'],
            ],
        ],
        [
            'title' => 'Aerial, Property & Hospitality',
            'image' => '2026/04/Drone-Photography-Dubai-Desert.jpeg',
            'alt' => 'Drone photography over the Dubai desert',
            'links' => [
                ['/cinematic-drone-photography-videography-uae-compliant-licensed', 'Drone Videography'],
                ['/real-estate-photography-videography-services-in-uae', 'Real Estate Photography'],
                ['/hotel-photography-service-in-uae', 'Hotel Photography'],
            ],
        ],
        [
            'title' => 'Commercial & Product',
            'image' => '2026/05/Product-Photography.jpg',
            'alt' => 'Product photography for brands in the UAE',
            'links' => [
                ['/product-photography-services-in-uae', 'Product Photography'],
                ['/luxury-food-photography-for-restaurants-hotels-and-brands', 'Food Photography'],
                ['/jewelry-photography-services-in-uae', 'Jewelry Photography'],
                ['/car-photography-in-uae', 'Car Photography'],
            ],
        ],
        [
            'title' => 'Fashion & Lifestyle',
            'image' => '2026/05/Fashion-Photography.jpg',
            'alt' => 'Fashion photography shoot in the UAE',
            'links' => [
                ['/fashion-photography-in-uae', 'Fashion Photography'],
                ['/influencer-photography-in-uae', 'Influencer Photography'],
                ['/travel-photography-in-uae', 'Travel Photographer'],
            ],
        ],
        [
            'title' => 'Weddings, Family & Portraits',
            'image' => '2026/05/photographer-married.jpg',
            'alt' => 'Wedding photography in the UAE',
            'links' => [
                ['/wedding-photography-in-uae', 'Wedding Photography'],
                ['/family-photography-in-uae', 'Family Photography'],
                ['/maternity-photography-in-uae', 'Maternity Photography'],
                ['/female-photographers-in-uae', 'Female Photographers'],
            ],
        ],
        [
            'title' => 'Schools & Sports',
            'image' => '2026/05/School-Photography-services.jpg',
            'alt' => 'School photography services in the UAE',
            'links' => [
                ['/school-photography-services-in-uae', 'School Photography'],
                ['/sports-photography-services-in-uae', 'Sports Photography'],
            ],
        ],
    ];
@endphp

@section('content')
    <x-page-banner image="2026/04/instant-print-photobooth-for-events-1.webp" title="services" />

    {{-- Trust strip --}}
    <div class="svo-trust">
        <ul>
            <li>@include('partials.icon', ['name' => 'check-circle']) Since 2014</li>
            <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
            <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
            <li>@include('partials.icon', ['name' => 'map-marker-alt']) All 7 Emirates</li>
        </ul>
    </div>

    {{-- Intro --}}
    <section class="section services-page">
        <div class="container">
            <div class="services-intro">
                <div class="services-intro-copy">
                    <p class="eyebrow">- What we do</p>
                    <h2 class="title">Commercial Photography and Videography Services Across UAE</h2>
                    <div class="text">
                        <p>High-quality visual content plays an important role in how businesses, brands, and individuals present themselves today. At Dubai Fotographer, we provide professional photography and videography services across Dubai and the UAE for commercial brands, corporate companies, hospitality businesses, events, eCommerce stores, and personal projects. Our goal is to create visuals that not only look professional but also help clients improve branding, engagement, marketing performance, and customer trust.</p>
                        <p>Since 2014, our team has worked with businesses and individuals across Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain, delivering visual content tailored for modern digital platforms, advertising campaigns, websites, social media, and commercial marketing.</p>
                        <p>As a trusted creative production team in the UAE, we combine photography, videography, editing, drone production, and commercial visual storytelling under one workflow to deliver consistent and impactful results. Abdul Rehman leads the studio. The core crew has been working together long enough that shoots run without friction. That experience compounds. Faster setup, fewer mistakes on set, cleaner files in the edit, and turnaround times that hold under pressure.</p>
                    </div>
                </div>

                <aside class="services-intro-card">
                    <p class="svo-card-label">Plan your shoot</p>
                    <ul class="svo-facts">
                        <li><strong>7</strong> Emirates covered</li>
                        <li><strong>5.0</strong> average client rating</li>
                        <li><strong>2014</strong> serving clients since</li>
                    </ul>
                    <div class="services-buttons">
                        <a class="btn" href="%%BASE%%/booking-form">Book Your Session @include('partials.icon', ['name' => 'arrow-right'])</a>
                        <a class="btn btn-outline" href="tel:%20+971522946276">+971 52 2946276 @include('partials.icon', ['name' => 'phone-alt'])</a>
                    </div>
                    <a class="svo-wa" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) Prefer WhatsApp? Message us</a>
                </aside>
            </div>
        </div>
    </section>

    {{-- All services by category --}}
    <section class="section section-dark svo-services" id="all-services">
        <div class="container">
            <div class="svo-head">
                <p class="eyebrow">- Our services</p>
                <h3 class="title light">Explore Our Full Photography and Videography</h3>
                <p class="text light svo-head-text">Explore our full photography and videography services capturing every moment with creativity, precision, and emotion to beautifully preserve your special memories and tell your unique story.</p>
            </div>

            <div class="svo-cards">
                @foreach ($categories as $category)
                    <article class="svo-card">
                        <figure><img src="%%BASE%%/assets/images/{{ $category['image'] }}" alt="{{ $category['alt'] }}" loading="lazy"></figure>
                        <div class="svo-card-body">
                            <p class="svo-card-title">{{ $category['title'] }}</p>
                            <ul class="svo-links">
                                @foreach ($category['links'] as [$url, $label])
                                    <li><a href="%%BASE%%{{ $url }}">{{ $label }} @include('partials.icon', ['name' => 'arrow-right'])</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="services-book">
                <p>Not sure which service fits your project? Tell us what you need and we will recommend the right setup.</p>
                <div class="buttons">
                    <a class="btn" href="%%BASE%%/booking-form">Book Your Session @include('partials.icon', ['name' => 'arrow-right'])</a>
                    <a class="btn btn-outline svo-btn-ghost" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Booking form --}}
    <section class="section section-cream services-session">
        <div class="container">
            <div class="svo-book">
                <div class="svo-book-copy">
                    <p class="eyebrow">- Request a booking</p>
                    <p class="title">Tell us about your shoot</p>
                    <p class="text">Share the service, date and time you have in mind and our team will confirm availability.</p>
                    <ul class="svo-checks">
                        <li>@include('partials.icon', ['name' => 'check-circle']) Photography and video under one team</li>
                        <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured, since 2014</li>
                        <li>@include('partials.icon', ['name' => 'check-circle']) Studio or on location in all 7 Emirates</li>
                    </ul>
                    <p class="svo-call">Rather talk it through? <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <x-session-card class="services-card">Please confirm that you would like to request the following appointment:</x-session-card>
            </div>
        </div>
    </section>

    @include('partials.reviews', ['class' => 'reviews-tight'])

    <x-cta class="svo-cta" eyebrow="- Let's create something" title="Book your shoot anywhere in the UAE">
        <p>Dubai, Abu Dhabi, Sharjah and every other Emirate, in the studio or on location.</p>
    </x-cta>
@endsection
