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
        ['image_51c54035-4c25-4d9e-8132-35bcb0b761b0_1800x1800.webp', 1284, 1271, '', 'booths', 'is-big'],
        ['File-6870.webp', 1000, 667, '', 'events', ''],
        ['ASF04755.webp', 1000, 667, '', 'events', ''],
        ['on-location-photography.webp', 680, 680, '', 'booths', ''],
        ['complete-photography-studio.webp', 780, 780, 'Photography Studio in UAE', 'studio', ''],
        ['instant-print-photobooth.webp', 630, 630, 'Live printing Photobooth', 'booths', ''],
        ['live-printing.webp', 830, 830, '', 'booths', ''],
        ['Drone-Photography-Dubai-Desert.webp', 1344, 768, '', 'aerial', 'is-wide'],
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
                <p class="text pf-intro">Events, photo booths, studio and drone work. Click any image to view it larger.</p>
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
