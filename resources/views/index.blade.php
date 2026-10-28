@extends('layouts.app')

@section('seo')
@include('seo.home')
@endsection

@push('styles')
    {{-- the hero background (home.css) is the largest thing on screen: fetch it before the CSS asks for it --}}
    <link rel="preload" as="image" type="image/webp" href="%%BASE%%/assets/images/hero/home-hero-768.webp" media="(max-width: 767px)" fetchpriority="high">
    <link rel="preload" as="image" type="image/webp" href="%%BASE%%/assets/images/hero/home-hero-1280.webp" media="(min-width: 768px)" fetchpriority="high">
    <link rel="stylesheet" href="%%BASE%%/assets/vendor/swiper/swiper.min.css">
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/home.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/vendor/swiper/swiper.min.js"></script>
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

{{-- The content is in page_sections (MCP: get_page_sections / update_page_section). It was moved
     there from this file by database/content/sections/home.php. --}}
@section('content')
    @include('partials.page-sections')
@endsection
