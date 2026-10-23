@extends('layouts.app')

@section('seo')
@include('seo.locations')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/location.css">
@endpush

@php
    // [image, alt, url, city, text]
    $cities = [
        ['2026/07/Dubai-skyline-Burj-Khalifa-768x512.webp', 'Dubai skyline with Burj Khalifa', '/', 'Dubai', 'Our home base. Corporate events, real estate, weddings and studio work across the city.'],
        ['2026/10/photographer-abu-dhabi-sheikh-zayed-grand-mosque-768x512.webp', 'Sheikh Zayed Grand Mosque reflected in a pool at sunset, Abu Dhabi', '/photographer-in-abu-dhabi', 'Abu Dhabi', 'Conferences, villa listings and family shoots from Yas Island to the Corniche.'],
        ['2026/10/photographer-sharjah-skyline-waterfront-768x576.webp', 'Sharjah waterfront skyline with high-rise buildings by the sea', '/locations/photographer-in-sharjah', 'Sharjah', 'School graduations, family portraits and product shoots across the emirate.'],
        ['2026/10/photographer-ajman-skyline-sunset-768x512.webp', 'Sun setting over the Ajman skyline', '/locations/photographer-in-ajman', 'Ajman', 'Family, maternity, newborn and small-business product photography.'],
        ['2026/10/photographer-ras-al-khaimah-jebel-jais-road-768x543.webp', 'Road through the Jebel Jais mountains, Ras Al Khaimah', '/locations/photographer-in-ras-al-khaimah', 'Ras Al Khaimah', 'Resort weddings, hotel campaigns, drone work and travel sessions.'],
        ['2026/10/photographer-fujairah-coastal-village-boats-768x512.webp', 'Boats resting on a beach near a coastal village in Fujairah', '/locations/photographer-in-fujairah', 'Fujairah', 'Beach weddings, couples and resort shoots on the east coast.'],
        ['2026/10/photographer-umm-al-quwain-fort-768x512.webp', 'White tower of Umm Al Quwain Fort against a clear blue sky', '/locations/photographer-in-umm-al-quwain', 'Umm Al Quwain', 'Quiet lagoon, mangrove and beach sessions for families and couples.'],
        ['2026/10/photographer-al-ain-fort-768x472.webp', 'Historic fort in Al Ain with a tree in front', '/locations/photographer-in-al-ain', 'Al Ain', 'Heritage, oasis and mountain shoots in the Garden City.'],
    ];
@endphp

@section('content')
    <section class="loc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/DSC00283-2.jpg')">
        <div class="loc-hero-inner">
            <p class="loc-eyebrow">ALL 7 EMIRATES · ONE TEAM</p>
            <h1>Photography Services Across the UAE</h1>
            <div class="loc-text">
                <p>Based in Dubai since 2014, our licensed crew covers every emirate. Photography and videography for corporate events, real estate, weddings, products and portraits travel with the same team, so lighting, colour and turnaround stay consistent from Abu Dhabi to Fujairah.</p>
                <p>Choose your city to see local services, popular shoot locations and permit tips for that Emirate.</p>
            </div>
            @include('partials.location-buttons')
        </div>
    </section>

    <section class="section section-cream loc-section">
        <div class="container">
            <p class="loc-eyebrow">- Areas we serve</p>
            <h2 class="loc-title">Choose Your Emirate</h2>
            <div class="loc-text loc-intro">
                <p>Every service we offer is available across the UAE. Each city page explains what we shoot there most, where we like to work and how travel and permits are handled.</p>
                <p>If you already know the date and venue, send them through the booking form. We reply with crew availability and a clear quote for that location.</p>
                <p>Shoots outside Dubai are planned the same way as a shoot next to our Business Bay studio. We confirm the venue rules, the arrival time and any permits the location needs, then quote travel together with the crew and equipment, so there are no surprise costs on the day. Hotels, malls, free zones and outdoor landmarks each have their own requirements, and the city pages list the ones we meet most often.</p>
            </div>
            <div class="loc-grid">
                @foreach ($cities as [$image, $alt, $url, $city, $text])
                    <article class="loc-card loc-card-4">
                        <a href="%%BASE%%{{ $url }}" title="Photographer in {{ $city }}"><img src="%%BASE%%/assets/images/{{ $image }}" alt="{{ $alt }}" loading="lazy"></a>
                        <h3><a href="%%BASE%%{{ $url }}">Photographer in {{ $city }}</a></h3>
                        <div class="loc-text loc-text-small"><p>{{ $text }}</p></div>
                        <a class="btn" href="%%BASE%%{{ $url }}">View {{ $city }}</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section-sand loc-section">
        <div class="container">
            <p class="loc-eyebrow">- Not sure where to start?</p>
            <h2 class="loc-title">Tell Us About Your Shoot</h2>
            <div class="loc-text loc-intro"><p>Send us the date, the location and the type of shoot. We reply quickly with availability and a clear price, wherever you are in the UAE.</p></div>
            @include('partials.location-buttons')
        </div>
    </section>
@endsection
