@extends('layouts.app')

@section('seo')
@include('seo.services-2')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/services-overview.css">
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/crumbs-banner.css">
@endpush

@php
    // Service categories (same groups as /services): title, card image, image alt, [link, label]
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
            ],
        ],
    ];
@endphp

@section('content')
    <section class="page-banner crumbs-banner" style="background-image: url('%%BASE%%/assets/images/2026/06/f414e020ca4581c085cde9f32c3b8059.webp')">
        <div class="page-banner-inner">
            <div class="crumbs-hero">
                <nav class="crumbs" aria-label="Breadcrumb">
                    <a href="%%BASE%%/">Home</a> » <span aria-current="page">Services</span>
                </nav>
                <h1 class="crumbs-title">Photography &amp; videography services across the UAE</h1>
                <ul class="crumbs-trust">
                    <li>@include('partials.icon', ['name' => 'check-circle']) Since 2014</li>
                    <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
                    <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
                    <li>@include('partials.icon', ['name' => 'map-marker-alt']) All 7 Emirates</li>
                </ul>
                <div class="buttons crumbs-buttons">
                    <a class="btn" href="%%BASE%%/services">View all services @include('partials.icon', ['name' => 'arrow-right'])</a>
                    <a class="btn btn-outline crumbs-ghost" href="%%BASE%%/booking-form">Get a quote</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-cream svo-services crumbs-page">
        <div class="container">
            <div class="svo-head">
                <p class="eyebrow">- Popular categories</p>
                <h2 class="title">Find the right service for your project</h2>
            </div>

            <div class="svo-cards crumbs-cards">
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
                <p>Looking for something else? See every photography and videography service we offer.</p>
                <div class="buttons">
                    <a class="btn" href="%%BASE%%/services">View all services @include('partials.icon', ['name' => 'arrow-right'])</a>
                    <a class="btn btn-outline svo-btn-ghost" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp us</a>
                </div>
            </div>
        </div>
    </section>

    <x-cta eyebrow="- Let's create something" title="Book your shoot anywhere in the UAE">
        <p>Call <a href="tel:+971522946276">+971 52 294 6276</a> or send us your date and location.</p>
    </x-cta>
@endsection
