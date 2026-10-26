@extends('layouts.app')

@section('seo')
@include('seo.about-us')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/about.css">
@endpush

{{-- The content is in page_sections (MCP: get_page_sections / update_page_section). It was moved
     there from this file by database/content/sections/about-us.php. --}}
@section('content')
    @include('partials.page-sections')
@endsection
