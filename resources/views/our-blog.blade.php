@extends('layouts.app')

@section('seo')
@include('seo.our-blog')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/blog.css">
@endpush

@php
    // [slug, image, alt, title, date, topic]
    $posts = \App\Support\BlogIndex::posts();
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
                    <a class="post-card-image" href="%%BASE%%/{{ $slug }}"><img src="%%BASE%%/assets/images/{{ $image }}" alt="{{ $alt }}" @if ($i > 0) loading="lazy" @endif></a>
                    <div class="post-card-content">
                        <div class="post-card-body">
                            <p class="post-card-topic">@if ($i === 0)<span class="post-card-latest">Latest</span>@endif{{ $topic }}</p>
                            <h3><a href="%%BASE%%/{{ $slug }}">{{ $title }}</a></h3>
                            <a class="post-card-more" href="%%BASE%%/{{ $slug }}">{{ $title }}</a>
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
