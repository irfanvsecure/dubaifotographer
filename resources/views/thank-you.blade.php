@extends('layouts.app')

@section('seo')
@include('seo.thank-you')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/thanks.css">
@endpush

@section('content')
    <section class="thanks">
        <div class="thanks-card">
            <img class="thanks-logo" src="%%BASE%%/assets/images/2026/04/Dubai-logo.webp" width="250" height="96" alt="Logo">
            <h1>Thank You!</h1>
            <p>Your form has been submitted successfully.<br> We will contact you very soon ✨</p>
            <a class="thanks-btn" href="%%BASE%%/">Go Back Home</a>
        </div>
    </section>
@endsection
