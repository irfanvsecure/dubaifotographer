@extends('layouts.app')

@section('seo')
@include('seo.contact-us')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/request-form.css">
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/contact.css">
@endpush

@php
    $services = ['Service Type', 'Wedding', 'Engagement', 'Couple', 'Proposal', 'Family', 'Maternity', 'Birthday', 'Event', 'Corporate', 'Headshots', 'Fashion', 'Product', 'Food', 'Real Estate', 'Interior', 'Drone', 'Videography', 'Social Media'];
    $packages = ['Select photography Package', 'Basic Package', 'Premium Package', 'Corporate Package'];
@endphp

@section('content')
    {{-- Hero: title, one primary action (call), trust row --}}
    <section class="ct-hero" style="background-image: url('%%BASE%%/assets/images/2026/04/instant-print-photobooth-for-events-1.webp')">
        <div class="ct-hero-inner">
            <p class="eyebrow">- Get in touch</p>
            <h1>Contact Us</h1>
            <p class="ct-hero-text">Call, WhatsApp, email or send the form below. Our Arabic &amp; English crew covers all 7 Emirates.</p>
            <div class="buttons">
                <a class="btn" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call +971 52 294 6276</a>
                <a class="btn btn-ghost" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp us</a>
            </div>
            <ul class="ct-trust">
                <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
                <li>@include('partials.icon', ['name' => 'check-circle']) Since 2014</li>
                <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
            </ul>
        </div>
    </section>

    {{-- Quick contact options --}}
    <section class="section ct-options">
        <div class="container">
            <ul class="ct-cards">
                <li>
                    <a class="ct-card" href="tel:+971522946276">
                        <span class="ct-card-icon">@include('partials.icon', ['name' => 'phone-alt'])</span>
                        <span class="ct-card-label">Call us</span>
                        <span class="ct-card-value">+971 52 294 6276</span>
                        <span class="ct-card-link">Call now @include('partials.icon', ['name' => 'arrow-right'])</span>
                    </a>
                </li>
                <li>
                    <a class="ct-card" href="https://wa.me/971522946276" target="_blank" rel="noopener">
                        <span class="ct-card-icon ct-card-icon-wa">@include('partials.icon', ['name' => 'whatsapp'])</span>
                        <span class="ct-card-label">WhatsApp</span>
                        <span class="ct-card-value">+971 52 294 6276</span>
                        <span class="ct-card-link">Start a chat @include('partials.icon', ['name' => 'arrow-right'])</span>
                    </a>
                </li>
                <li>
                    <a class="ct-card" href="mailto:info@dubaifotographer.com">
                        <span class="ct-card-icon">@include('partials.icon', ['name' => 'envelope'])</span>
                        <span class="ct-card-label">Email</span>
                        <span class="ct-card-value ct-card-email">info@<wbr>dubaifotographer.com</span>
                        <span class="ct-card-link">Send an email @include('partials.icon', ['name' => 'arrow-right'])</span>
                    </a>
                </li>
                <li>
                    <a class="ct-card" href="#location">
                        <span class="ct-card-icon">@include('partials.icon', ['name' => 'map-marker-alt'])</span>
                        <span class="ct-card-label">Studio</span>
                        <span class="ct-card-value">Business Bay - Dubai Design District - Dubai</span>
                        <span class="ct-card-link">See the map @include('partials.icon', ['name' => 'arrow-right'])</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    {{-- Intro + booking form --}}
    <section class="section section-cream contact" id="book">
        <div class="container">
            <div class="contact-row">
                <div class="contact-intro">
                    <p class="eyebrow">- Send a request</p>
                    <h2 class="title">Feel Free To Ask Anything Contact Us</h2>
                    <p class="contact-lead">Tell us about your shoot and we will come back to you with availability and pricing. Prefer to talk? Our team is one call away.</p>
                    <ul class="contact-points">
                        <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured UAE production company</li>
                        <li>@include('partials.icon', ['name' => 'check-circle']) Photography &amp; videography since 2014</li>
                        <li>@include('partials.icon', ['name' => 'check-circle']) Studio or on location, all 7 Emirates</li>
                        <li>@include('partials.icon', ['name' => 'check-circle']) Arabic &amp; English crew</li>
                    </ul>
                    <a class="btn btn-dark" href="tel:+971522946276">Contact Us @include('partials.icon', ['name' => 'phone-alt'])</a>
                </div>

                <div class="rf-card contact-card">
                    <p class="rf-title">Book Your Studio Session</p>
                    <div class="rf-text"><p>Please confirm that you would like to request the following appointment:</p></div>
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
                            </ul>
                            <p class="rf-alt">Prefer WhatsApp? <a href="https://wa.me/971522946276" target="_blank" rel="noopener">Message us</a> or call <a href="tel:+971522946276">+971 52 294 6276</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Map --}}
    <section class="section contact-map" id="location">
        <div class="container">
            <div class="contact-map-head">
                <p class="eyebrow">- Find us</p>
                <p class="title contact-map-title">Our Location</p>
                <p class="contact-map-address">@include('partials.icon', ['name' => 'map-marker-alt']) Business Bay - Dubai Design District - Dubai - United Arab Emirates</p>
            </div>
            <div class="contact-map-frame"><iframe width="600" height="450" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Dubai Fotographer on Google Maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7204.621783303499!2d55.296137087035376!3d25.18825938491749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5be0ca1a8b7b%3A0x68567087d7eaa868!2sDubai%20Fotographer%20-%20Photography%20%26%20Videography%20Services!5e0!3m2!1sen!2s!4v1778829431947!5m2!1sen!2s"></iframe></div>
        </div>
    </section>
@endsection
