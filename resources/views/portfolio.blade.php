@extends('layouts.app')

@section('seo')
@include('seo.portfolio')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/portfolio-gallery.css">
@endpush

@php
    // [file, width, height, alt, category key, layout modifier]
    $images = [
        ['image_51c54035-4c25-4d9e-8132-35bcb0b761b0_1800x1800.webp', 1284, 1271, 'Guests using a live print photo booth', 'booths', 'is-big'],
        ['File-6870.webp', 1000, 667, 'Event photography coverage in the UAE', 'events', ''],
        ['ASF04755.webp', 1000, 667, 'Corporate event photoshoot', 'events', ''],
        ['on-location-photography.webp', 680, 680, 'On-location photo booth setup', 'booths', ''],
        ['complete-photography-studio.webp', 780, 780, 'Photography Studio in UAE', 'studio', ''],
        ['instant-print-photobooth.webp', 630, 630, 'Live printing Photobooth', 'booths', ''],
        ['live-printing.webp', 830, 830, 'Instant photo prints from a live booth', 'booths', ''],
        ['Drone-Photography-Dubai-Desert.webp', 1344, 768, 'Drone photography over the Dubai desert', 'aerial', 'is-wide'],
    ];

    $filters = [
        'all' => 'All work',
        'events' => 'Events',
        'booths' => 'Photo booths',
        'studio' => 'Studio',
        'aerial' => 'Drone',
    ];
@endphp

@section('content')
    <x-page-banner class="page-banner-roboto portfolio-banner" image="2026/04/instant-print-photobooth-for-events-1.webp" title="Portfolio" />

    <section class="section portfolio-page">
        <div class="container">
            <div class="pf-head">
                <p class="eyebrow">- Recent work</p>
                <h2 class="title pf-title">A look at the shoots we produce across the UAE</h2>
                <p class="text pf-intro">This portfolio is a sample of photography and videography we produce across Dubai and the UAE: corporate events, live print photo booths, studio sessions and licensed drone work. Click any image to view it larger. If a style matches your brief, send the date and location through the booking form and we will reply with availability and a clear quote.</p>
                <ul class="pf-trust">
                    <li>@include('partials.icon', ['name' => 'check-circle']) Since 2014</li>
                    <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
                    <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
                    <li>@include('partials.icon', ['name' => 'map-marker-alt']) All 7 Emirates</li>
                </ul>
            </div>

            <div class="pf-filters" role="group" aria-label="Filter the portfolio">
                @foreach ($filters as $key => $label)
                    <button type="button" class="pf-filter{{ $loop->first ? ' is-active' : '' }}" data-filter="{{ $key }}" aria-pressed="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
                @endforeach
            </div>

            <div class="portfolio-gallery" data-lightbox>
                @foreach ($images as [$file, $width, $height, $alt, $category, $modifier])
                    <figure class="{{ $modifier }}" data-category="{{ $category }}">
                        <img src="%%BASE%%/assets/images/2026/04/{{ $file }}" width="{{ $width }}" height="{{ $height }}" alt="{{ $alt }}" @if (! $loop->first) loading="lazy" @endif>
                        <span class="pf-tag" aria-hidden="true">{{ $filters[$category] }}</span>
                        @if ($alt === 'Photography Studio in UAE')
                            <figcaption>{{ $alt }}</figcaption>
                        @endif
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    {{-- What each filter covers --}}
    <section class="section pf-notes">
        <div class="container">
            <p class="eyebrow">- Behind the work</p>
            <h2 class="title">What each part of the portfolio shows</h2>
            <p class="text"><strong>Events.</strong> Conferences, gala dinners, award nights and brand launches across Dubai, Abu Dhabi and the other Emirates. We cover the stage, the speakers, the guests and the details your marketing team will need afterwards, and deliver edited images ready for press releases, social media and internal reports. See <a href="%%BASE%%/corporate-event-photography-videography">corporate event photography</a>.</p>
            <p class="text"><strong>Photo booths.</strong> Live printing booths give every guest a branded print to take home. They work at weddings, exhibitions and product activations, and we set up, run and pack down the booth for you. See <a href="%%BASE%%/live-printing-photo-booth-for-instant-guest-keepsakes">live printing photo booths</a>.</p>
            <p class="text"><strong>Studio.</strong> Product, e-commerce, portrait and headshot sessions with controlled lighting, so colours stay true and a whole catalogue looks consistent. You can bring the products to us, or we bring the lights and backdrops to your office. See <a href="%%BASE%%/product-photography-services-in-uae">product photography</a>.</p>
            <p class="text"><strong>Drone.</strong> Aerial photography and video for real estate, construction progress, resorts and events, flown by licensed pilots who handle the permits for each location. See <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone photography and videography</a>.</p>
            <p class="text">Every shoot starts with a short brief: the date, the location, what the images are for and where they will be used. That brief decides the crew, the equipment and the delivery format, so you get files that are ready to publish.</p>
        </div>
    </section>

    {{-- Conversion: straight after the work --}}
    <section class="section section-dark pf-cta">
        <div class="container">
            <div class="pf-cta-box">
                <div class="pf-cta-copy">
                    <p class="eyebrow">- Your shoot next</p>
                    <h2 class="pf-cta-title">Like what you see? Get a quote for your project.</h2>
                    <p class="pf-cta-text">Tell us the date, the location and what you need. We cover events, studio, photo booths and drone work in all 7 Emirates.</p>
                </div>
                <div class="pf-cta-actions">
                    <a class="btn" href="%%BASE%%/booking-form">Get a quote @include('partials.icon', ['name' => 'arrow-right'])</a>
                    <a class="btn btn-outline pf-btn-ghost" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp us</a>
                    <a class="pf-cta-link" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) +971 52 294 6276</a>
                    <a class="pf-cta-link" href="%%BASE%%/services">Browse all services @include('partials.icon', ['name' => 'arrow-right'])</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        (function () {
            var buttons = document.querySelectorAll(".pf-filter");
            var gallery = document.querySelector(".portfolio-gallery");
            if (!buttons.length || !gallery) {
                return;
            }
            Array.prototype.forEach.call(buttons, function (button) {
                button.addEventListener("click", function () {
                    var filter = button.getAttribute("data-filter");
                    Array.prototype.forEach.call(buttons, function (b) {
                        var active = b === button;
                        b.classList.toggle("is-active", active);
                        b.setAttribute("aria-pressed", active ? "true" : "false");
                    });
                    gallery.classList.toggle("is-filtered", filter !== "all");
                    Array.prototype.forEach.call(gallery.querySelectorAll("figure"), function (figure) {
                        figure.hidden = filter !== "all" && figure.getAttribute("data-category") !== filter;
                    });
                });
            });
        })();
    </script>
@endpush
