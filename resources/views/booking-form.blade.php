@extends('layouts.app')

@section('seo')
@include('seo.booking-form')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/request-form.css">
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/booking.css">
@endpush

@php
    $services = ['Service Type', 'Wedding', 'Engagement', 'Couple', 'Proposal', 'Family', 'Maternity', 'Birthday', 'Event', 'Corporate', 'Headshots', 'Fashion', 'Product', 'Food', 'Real Estate', 'Interior', 'Drone', 'Videography', 'Social Media'];
    $packages = ['Select photography Package', 'Basic Package', 'Premium Package', 'Corporate Package'];
@endphp

@section('content')
    {{-- Compact hero: the form starts right below --}}
    <section class="bk-hero" style="background-image: url('%%BASE%%/assets/images/2026/04/instant-print-photobooth-for-events-1.webp')">
        <div class="bk-hero-inner">
            <p class="eyebrow">- Book your shoot</p>
            <h1>Booking Form</h1>
            <p class="bk-hero-text">Two short steps: your details, then your shoot. Studio or on location, anywhere in the 7 Emirates.</p>
            <ul class="bk-trust">
                <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
                <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
                <li>@include('partials.icon', ['name' => 'check-circle']) Since 2014</li>
            </ul>
        </div>
    </section>

    <section class="section section-cream booking-page" id="booking">
        <div class="container">
            <div class="bk-layout">
                {{-- Form --}}
                <div class="rf-card bk-card">
                    <p class="rf-title">Book Your Studio Session</p>
                    <div class="rf-text">Please confirm that you would like to request the following appointment:</div>
                    <form class="rf-form" method="post" action="%%BASE%%/booking-request" data-ajax aria-label="Book Your Studio Session">
                        @csrf
                        <input type="hidden" name="form_name" value="Book Your Studio Session">

                        <fieldset class="rf-group">
                            <legend class="rf-legend"><span>1</span> Your details</legend>
                            <div class="rf-grid">
                                <div class="rf-field">
                                    <label for="booking-name">Name</label>
                                    <input id="booking-name" type="text" name="name" placeholder="Name" autocomplete="name" required>
                                </div>
                                <div class="rf-field">
                                    <label for="booking-phone">Phone Number</label>
                                    <input id="booking-phone" type="tel" name="phone" placeholder="Phone Number" autocomplete="tel" inputmode="tel" required>
                                </div>
                                <div class="rf-field">
                                    <label for="booking-email">Email</label>
                                    <input id="booking-email" type="email" name="email" placeholder="Email" autocomplete="email">
                                </div>
                                <div class="rf-field">
                                    <label for="booking-address">Address</label>
                                    <input id="booking-address" type="text" name="address" placeholder="Address" autocomplete="street-address">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="rf-group">
                            <legend class="rf-legend"><span>2</span> Your shoot</legend>
                            <div class="rf-grid">
                                <div class="rf-field rf-full">
                                    <label for="booking-service">Service Type</label>
                                    <select id="booking-service" name="service">
                                        @foreach ($services as $option)
                                            <option value="{{ $option }}">{{ $option }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="rf-field rf-pair">
                                    <label for="booking-date">Date</label>
                                    <input id="booking-date" type="date" name="date">
                                </div>
                                <div class="rf-field rf-pair">
                                    <label for="booking-time">Time</label>
                                    <input id="booking-time" type="time" name="time">
                                </div>
                                <div class="rf-field">
                                    <label for="booking-setting">Indoor / Outdoor</label>
                                    <select id="booking-setting" name="setting">
                                        <option value="Indoor">Indoor</option>
                                        <option value="Outdoor">Outdoor</option>
                                    </select>
                                </div>
                                <div class="rf-field">
                                    <label for="booking-package">Package</label>
                                    <select id="booking-package" name="package">
                                        @foreach ($packages as $option)
                                            <option value="{{ $option }}">{{ $option }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <div class="rf-submit">
                            <button class="btn" type="submit">Submit Now @include('partials.icon', ['name' => 'arrow-right'])</button>
                            <ul class="rf-assure">
                                <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
                                <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
                                <li>@include('partials.icon', ['name' => 'map-marker-alt']) All 7 Emirates</li>
                            </ul>
                        </div>
                    </form>
                </div>

                {{-- Side: talk to us + why book --}}
                <aside class="bk-aside">
                    <div class="bk-box bk-box-dark">
                        <p class="bk-box-title">Prefer to talk?</p>
                        <p class="bk-box-text">Call or message our Arabic &amp; English crew directly.</p>
                        <div class="bk-box-buttons">
                            <a class="btn" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) +971 52 294 6276</a>
                            <a class="btn btn-ghost" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp us</a>
                        </div>
                    </div>

                    <div class="bk-box">
                        <p class="bk-box-title">How it works</p>
                        <ol class="bk-steps">
                            <li><span>1</span> Send your request with the form.</li>
                            <li><span>2</span> We confirm availability and pricing with you.</li>
                            <li><span>3</span> Our crew shoots in the studio or on location.</li>
                        </ol>
                    </div>

                    <div class="bk-box">
                        <p class="bk-box-title">Why book with us</p>
                        <ul class="bk-points">
                            <li>@include('partials.icon', ['name' => 'check-circle']) Photography &amp; videography since 2014</li>
                            <li>@include('partials.icon', ['name' => 'check-circle']) Fully licensed &amp; insured</li>
                            <li>@include('partials.icon', ['name' => 'check-circle']) 5.0 average client rating</li>
                            <li>@include('partials.icon', ['name' => 'check-circle']) All 7 Emirates covered</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
