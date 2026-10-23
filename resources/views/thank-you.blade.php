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
            <img class="thanks-logo" src="%%BASE%%/assets/images/2026/04/Dubai-logo.webp" width="250" height="96" alt="Dubai Fotographer">
            <h1>Thank You!</h1>
            <p>Your form has been submitted successfully. We will contact you very soon.</p>
            <p>A member of the Dubai Fotographer team usually replies the same day with availability and a clear quote for photography or videography across Dubai and the wider UAE. If your shoot is urgent, call or WhatsApp <a href="tel:+971522946276">+971 52 294 6276</a>.</p>
            <p><strong>What happens next.</strong> We read your request and check the date against our crew calendar. If anything in the brief is unclear, such as the venue, the number of guests or where the images will be used, we ask before we quote, so the quote matches the job.</p>
            <p><strong>Your quote.</strong> You receive a written quote that lists the crew, the hours of coverage, the deliverables and the delivery time. Nothing is booked until you confirm it.</p>
            <p><strong>Before the shoot.</strong> Once you confirm, we agree a shot list and the timings with you so the day runs to plan.</p>
            <p>While you wait, you can browse our <a href="%%BASE%%/portfolio/">portfolio</a>, read recent <a href="%%BASE%%/our-blog/">guides</a>, or review the full list of <a href="%%BASE%%/services/">photography services</a> we offer in every Emirate.</p>
            <a class="thanks-btn" href="%%BASE%%/">Go Back Home</a>
        </div>
    </section>
@endsection
