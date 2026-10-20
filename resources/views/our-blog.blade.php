@extends('layouts.app')

@section('seo')
@include('seo.our-blog')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/blog.css">
@endpush

@php
    // [slug, image, alt, title, date, topic]
    $posts = [
        ['brief-your-event-photographer-uae', 'brief-your-event-photographer-uae-hero.webp', 'Business professionals in a briefing meeting with laptops and notebooks discussing event planning strategy', 'How to Brief Your Event Photographer: A Corporate Planner’s Guide', 'September 26, 2026', 'Event Photography'],
        ['product-launch-vs-conference-photography-uae', 'product-launch-vs-conference-photography-uae-hero.webp', 'Business conference audience seated listening to a speaker presenting market data on screen', 'Product Launch vs Corporate Conference Photography: What’s Different', 'September 21, 2026', 'Event Photography'],
        ['how-much-does-corporate-event-photography-cost-in-the-uae', 'corporate-event-photography-pricing-uae-hero.webp', 'Group of professional photographers with cameras working together at an outdoor corporate event', 'Corporate Event Photography Pricing in the UAE: What Actually Affects the Cost', 'September 18, 2026', 'Pricing Guide'],
        ['multi-camera-graduation-ceremony-uae', 'multi-camera-graduation-ceremony-uae-hero.webp', 'Graduates in caps and gowns applauding during an indoor graduation ceremony', 'Multi-Camera Video for School and University Graduation Ceremonies in the UAE', 'September 15, 2026', 'Multi-Camera Video'],
        ['multi-camera-hybrid-town-hall-uae', 'multi-camera-hybrid-town-hall-uae-hero.webp', 'Professionals presenting in a modern office with a large screen display during a company town hall', 'Multi-Camera Recording for Hybrid Town Halls and All-Hands Meetings', 'September 12, 2026', 'Multi-Camera Video'],
        ['multi-camera-product-launch-dubai', 'multi-camera-product-launch-dubai-hero.webp', 'Dramatic silhouette of a presenter on stage under a red spotlight during a product launch reveal', 'Multi-Camera Setup for Product Launch Events in Dubai', 'September 11, 2026', 'Multi-Camera Video'],
    ];
@endphp

@section('content')
    <x-page-banner class="page-banner-roboto" image="2026/04/photography-videography-services-1.webp" title="Our Blog" />

    <section class="blog-intro">
        <div class="blog-intro-inner">
            <p class="eyebrow">INSIGHTS &amp; GUIDES</p>
            <h2 class="title">Planning guides from our photographers</h2>
            <p class="blog-intro-text">Practical advice on briefing, pricing and multi-camera coverage for events, brands and properties across the UAE, written by the team behind Dubai Fotographer.</p>
        </div>
    </section>

    <section class="blog-list">
        <div class="blog-grid">
            @foreach ($posts as $i => [$slug, $image, $alt, $title, $date, $topic])
                <article @class(['post-card', 'post-card-featured' => $i === 0])>
                    <a class="post-card-image" href="%%BASE%%/{{ $slug }}"><img src="%%BASE%%/assets/images/2026/09/{{ $image }}" alt="{{ $alt }}" @if ($i > 0) loading="lazy" @endif></a>
                    <div class="post-card-content">
                        <div class="post-card-body">
                            <p class="post-card-topic">@if ($i === 0)<span class="post-card-latest">Latest</span>@endif{{ $topic }}</p>
                            <h3><a href="%%BASE%%/{{ $slug }}">{{ $title }}</a></h3>
                            <a class="post-card-more" href="%%BASE%%/{{ $slug }}">Read More »</a>
                        </div>
                        <div class="post-card-meta"><span>{{ $date }}</span> <span>No Comments</span></div>
                    </div>
                </article>
            @endforeach
            <aside class="blog-cta-card" aria-label="Get a free quote">
                <p class="eyebrow">FREE QUOTE</p>
                <p class="blog-cta-title">Need a photographer or video crew?</p>
                <p class="blog-cta-text">Tell us what you are planning and get a tailored quote, usually within a few hours.</p>
                <ul class="blog-cta-trust">
                    <li>@include('partials.icon', ['name' => 'check-circle']) Since 2014</li>
                    <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
                    <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
                    <li>@include('partials.icon', ['name' => 'map-marker-alt']) All 7 Emirates</li>
                </ul>
                <div class="blog-cta-actions">
                    <a class="btn" href="%%BASE%%/booking-form">Get a Quote @include('partials.icon', ['name' => 'arrow-right'])</a>
                    <a class="btn btn-outline blog-cta-wa" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp Us</a>
                </div>
                <a class="blog-cta-phone" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) +971 52 294 6276</a>
            </aside>
        </div>
    </section>
@endsection
