@extends('layouts.app')

@section('seo')
@include('seo.cinematic-drone-photography-videography-uae-compliant-licensed')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

{{-- The content is in page_sections (MCP: get_page_sections / update_page_section). It was moved
     there from this file by database/content/sections/cinematic-drone-photography-videography-uae-compliant-licensed.php. --}}
@section('content')
    @include('partials.page-sections')
    @include('partials.svc-mobile-bar')
@endsection
