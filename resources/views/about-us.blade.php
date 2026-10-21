@extends('layouts.app')

@section('seo')
@include('seo.about-us')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/about.css">
@endpush

@php
    $stats = [
        ['Years in the UAE', 10, '+'],
        ['Emirates covered', 7, ''],
        ['Turnaround available', 48, ''],
        ['Average client rating', 5, '.0'],
    ];
    $reasons = [
        ['check-circle', 'Licensed & insured', 'A fully licensed and insured UAE photography and videography company.'],
        ['camera-retro', 'One team, photo + video', 'Photography, videography, editing, drone and event coverage from the same crew.'],
        ['map-marker-alt', 'All 7 Emirates', 'Based in Dubai, shooting in our studio or on location anywhere in the UAE.'],
        ['users', 'Arabic & English crew', 'A bilingual crew for projects that need it, with one point of contact.'],
    ];
    $clients = [
        ['amazon.png', 'Amazon'],
        ['sharjah-municipality.png', 'Sharjah Municipality'],
        ['rta.png', 'RTA'],
        ['dubai-health-authority.png', 'Dubai Health Authority'],
        ['emirates.png', 'Emirates'],
        ['etisalat.png', 'Etisalat'],
        ['du.png', 'du'],
        ['botim.png', 'Botim'],
        ['isnaad.png', 'Isnaad'],
        ['imdaad.png', 'Imdaad'],
        ['arabyads.jpg', 'Arabyads'],
        ['fcm.png', 'FCM'],
    ];
@endphp

@section('content')
    {{-- Hero: title, one primary action, trust row --}}
    <section class="ab-hero" style="background-image: url('%%BASE%%/assets/images/2026/04/Commercial-Photography.jpg')">
        <div class="ab-hero-inner">
            <p class="eyebrow">- Since 2014</p>
            <h1>About Us</h1>
            <p class="ab-hero-text">A licensed &amp; insured photography and videography team in Dubai, serving all 7 Emirates.</p>
            <div class="buttons">
                <a class="btn" href="%%BASE%%/booking-form">Book Your Session @include('partials.icon', ['name' => 'arrow-right'])</a>
                <a class="btn btn-ghost" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) +971 52 294 6276</a>
            </div>
            <ul class="ab-trust">
                <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
                <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
                <li>@include('partials.icon', ['name' => 'map-marker-alt']) All 7 Emirates</li>
                <li>@include('partials.icon', ['name' => 'users']) Arabic &amp; English crew</li>
            </ul>
        </div>
    </section>

    {{-- Our story: the original copy + video --}}
    <section class="section about">
        <div class="container">
            <div class="about-row">
                <div class="about-text">
                    <p class="eyebrow">- Our story</p>
                    <h2 class="title">Photography &amp; videography in the UAE since 2014</h2>
                    <div class="text">
                        <p>Based in the UAE, we are a professional photography and videography company with over a decade of experience, proudly serving clients since 2014. We provide high-quality photography and video production services across Dubai and the wider UAE, delivering visually compelling content for corporate, commercial, and creative projects.</p>
                        <p>With extensive experience in the UAE market, we understand the region’s diverse locations, cultures, and high production standards. Every project is handled with creativity, technical expertise, and attention to detail, ensuring results that align with each client’s vision and brand identity.</p>
                        <p>The studio is in Business Bay, in Dubai Design District. From there the same crew covers weddings, corporate events, product and food shoots, real estate, portraits and drone work in Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah and Umm Al Quwain. You deal with one producer from the first call through to the edited files, in Arabic or English. Tell us the date, the venue and what the pictures or film need to do, and we reply with availability and a quote. Edited photos and video are delivered after the shoot, with a 48-hour turnaround when the job needs it.</p>
                        <p>Our focus is on producing professional, cinematic, and timeless visuals—whether for live events, corporate functions, real estate, food photography, or branded video content</p>
                    </div>
                    <div class="about-buttons buttons">
                        <a class="btn" href="%%BASE%%/booking-form">Book Your Session @include('partials.icon', ['name' => 'arrow-right'])</a>
                        <a class="btn btn-outline" href="tel:%20+971522946276">+971 52 2946276 @include('partials.icon', ['name' => 'phone-alt'])</a>
                    </div>
                </div>
                <div class="about-video">
                    <video src="%%BASE%%/assets/images/2026/04/cuuooaaaaa.mp4" autoplay controls controlslist="nodownload" playsinline></video>
                    <p class="about-badge"><strong>10+</strong> years behind the camera</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Numbers --}}
    <x-stats class="ab-stats" :items="$stats" />

    {{-- Why clients choose us --}}
    <section class="section section-cream ab-why">
        <div class="container">
            <div class="ab-head">
                <p class="eyebrow">- Why choose us</p>
                <h2 class="title">One accountable team, from first call to final file</h2>
            </div>
            <div class="ab-reasons">
                @foreach ($reasons as [$icon, $heading, $body])
                    <div class="ab-reason">
                        <span class="ab-reason-icon">@include('partials.icon', ['name' => $icon])</span>
                        <h3>{{ $heading }}</h3>
                        <p>{{ $body }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Founder --}}
    <x-founder>
        One team handles photography, videography, editing, drone and event coverage — no juggling vendors, no inconsistent style.
    </x-founder>

    {{-- Clients --}}
    <section class="section section-sand ab-clients">
        <div class="container">
            <div class="ab-head center">
                <p class="eyebrow">- Trusted by</p>
                <h2 class="title">Our Clients</h2>
            </div>
            <ul class="ab-logos">
                @foreach ($clients as [$file, $alt])
                    <li><img src="%%BASE%%/assets/images/clients/{{ $file }}" width="120" height="70" alt="{{ $alt }}" loading="lazy"></li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Google reviews --}}
    @include('partials.reviews')

    {{-- Closing call to action --}}
    <x-cta eyebrow="- Let's create something" title="Book Our Photography Services today">
        <p>Anywhere in Dubai, Abu Dhabi, or across the UAE</p>
    </x-cta>
@endsection
