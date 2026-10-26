@extends('layouts.app')

@section('seo')
@include('seo.services')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/services-overview.css">
@endpush

{{-- The content is in page_sections (MCP: get_page_sections / update_page_section). It was moved
     there from this file by database/content/sections/services.php. --}}
@section('content')
    @include('partials.page-sections')
@endsection
