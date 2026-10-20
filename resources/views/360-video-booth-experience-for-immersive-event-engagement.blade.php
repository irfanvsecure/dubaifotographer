@extends('layouts.app')

@section('seo')
@include('seo.360-video-booth-experience-for-immersive-event-engagement')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/WhatsApp-Image-2026-07-21-at-2.09.28-PM.jpeg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>360 video booth services for events across the UAE</h1>
                <div class="svc-hero-text"><p>An interactive experience your guests will remember — and share — at corporate events, weddings, and brand activations.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20360%20video%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your booth</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your booth">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your booth">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Event type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Corporate or launch" required>
                                    <span>Corporate or launch</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Wedding or private" required>
                                    <span>Wedding or private</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Exhibition" required>
                                    <span>Exhibition</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Gala dinner" required>
                                    <span>Gala dinner</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">What you need</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Booth only" required>
                                    <span>Booth only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Booth and photos" required>
                                    <span>Booth and photos</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Booth and video" required>
                                    <span>Booth and video</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-step-buttons">
                            <button type="button" class="svc-next">Next: date and location</button>
                        </div>
                    </fieldset>

                    <fieldset class="svc-step">
                        <div class="svc-field">
                            <label class="svc-label" for="svc-date">Preferred date</label>
                            <input id="svc-date" type="date" name="date">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-venue">Location</label>
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. hotel, exhibition hall, home">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many guests?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Under 100">Under 100</option>
                                <option value="100 to 300">100 to 300</option>
                                <option value="300 to 1,000">300 to 1,000</option>
                                <option value="Over 1,000">Over 1,000</option>
                            </select>
                        </div>
                        <div class="svc-step-buttons">
                            <button type="button" class="svc-back">Back</button>
                            <button type="button" class="svc-next">Next: your details</button>
                        </div>
                    </fieldset>

                    <fieldset class="svc-step">
                        <div class="svc-field">
                            <label class="svc-label" for="svc-name">Your name</label>
                            <input id="svc-name" type="text" name="name" placeholder="Your name" required>
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-email">Email</label>
                            <input id="svc-email" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-phone">Phone or WhatsApp</label>
                            <input id="svc-phone" type="tel" name="phone" placeholder="Phone or WhatsApp" required>
                        </div>
                        <div class="svc-step-buttons">
                            <button type="button" class="svc-back">Back</button>
                            <button type="submit">Get my quote</button>
                        </div>
                    </fieldset>
                </form>
                <div class="svc-quote-note"><p>You get a written quote and a shot list within one working day.</p></div>
            </div>
        </div>
    </section>

    {{-- Quick facts --}}
    <section class="svc-facts">
        <div class="svc-facts-inner">
            <div class="svc-fact">
                <p class="svc-fact-title">Licensed &amp; insured</p>
                <p class="svc-fact-text">Production company</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Arabic and English</p>
                <p class="svc-fact-text">Bilingual crew</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48-hour</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7 Emirates</p>
                <p class="svc-fact-text">Covered by our team</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">Whether your event takes place in a luxury hotel, exhibition center, corporate venue, wedding hall, outdoor location, or private residence, our team delivers a complete setup tailored to your venue.</p>
            </div>
            <div class="svc-places">
                <a class="svc-place" href="%%BASE%%/photographer-in-abu-dhabi">
                    <span class="svc-place-icon">@include('partials.icon', ['name' => 'map-marker-alt'])
                    </span>
                    <span class="svc-place-name">Abu Dhabi</span>
                </a>
                <a class="svc-place" href="%%BASE%%/locations/photographer-in-sharjah">
                    <span class="svc-place-icon">@include('partials.icon', ['name' => 'map-marker-alt'])
                    </span>
                    <span class="svc-place-name">Sharjah</span>
                </a>
                <a class="svc-place" href="%%BASE%%/locations/photographer-in-ajman">
                    <span class="svc-place-icon">@include('partials.icon', ['name' => 'map-marker-alt'])
                    </span>
                    <span class="svc-place-name">Ajman</span>
                </a>
                <a class="svc-place" href="%%BASE%%/locations/photographer-in-ras-al-khaimah">
                    <span class="svc-place-icon">@include('partials.icon', ['name' => 'map-marker-alt'])
                    </span>
                    <span class="svc-place-name">Ras Al Khaimah</span>
                </a>
                <a class="svc-place" href="%%BASE%%/locations/photographer-in-umm-al-quwain">
                    <span class="svc-place-icon">@include('partials.icon', ['name' => 'map-marker-alt'])
                    </span>
                    <span class="svc-place-name">Umm Al Quwain</span>
                </a>
                <a class="svc-place" href="%%BASE%%/locations/photographer-in-fujairah">
                    <span class="svc-place-icon">@include('partials.icon', ['name' => 'map-marker-alt'])
                    </span>
                    <span class="svc-place-name">Fujairah</span>
                </a>
                <a class="svc-place" href="%%BASE%%/locations/photographer-in-al-ain">
                    <span class="svc-place-icon">@include('partials.icon', ['name' => 'map-marker-alt'])
                    </span>
                    <span class="svc-place-name">Al Ain</span>
                </a>
                <a class="svc-place svc-place-other" href="#quote">
                    <span class="svc-place-name">Event somewhere else?<small>Send the venue and we will confirm</small></span>
                    @include('partials.icon', ['name' => 'arrow-right'])
                </a>
            </div>
        </div>
    </section>

    {{-- Scrolling keywords (the list is doubled so the loop is seamless) --}}
    <section class="svc-marquee" aria-label="What we cover">
        <ul>
            <li >Corporate events</li>
            <li >Weddings</li>
            <li >Exhibitions</li>
            <li >Product launches</li>
            <li >Gala dinners</li>
            <li >Brand activations</li>
            <li >Private celebrations</li>
            <li >Instagram Reels</li>
            <li >TikTok</li>
            <li >YouTube Shorts</li>
            <li  aria-hidden="true" >Corporate events</li>
            <li  aria-hidden="true" >Weddings</li>
            <li  aria-hidden="true" >Exhibitions</li>
            <li  aria-hidden="true" >Product launches</li>
            <li  aria-hidden="true" >Gala dinners</li>
            <li  aria-hidden="true" >Brand activations</li>
            <li  aria-hidden="true" >Private celebrations</li>
            <li  aria-hidden="true" >Instagram Reels</li>
            <li  aria-hidden="true" >TikTok</li>
            <li  aria-hidden="true" >YouTube Shorts</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Create-an-interactive-event-experience-your-guests-will-remembe.png')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Create an Interactive Event Experience Your Guests Will Remember</h2>
                <div class="svc-text">A great venue helps. So does a good stage and the right guest list. But that’s not what people talk about the next day. They talk about what they did. What they felt. What they posted.</div>
                <div class="svc-text">That’s where we come in. At Dubai Fotographer, we provide professional 360 video booth services across Dubai and the UAE. Event organizers use us. So do brands, businesses, and private clients. The idea is simple: give guests something interactive that keeps them engaged, and get a stream of exciting social media content out of it at the same time.</div>
                <div class="svc-text">What kind of event? Pretty much any. <a href="%%BASE%%/corporate-event-photography-videography">Corporate events</a>. <a href="%%BASE%%/wedding-photography-in-uae">Weddings</a>. Exhibitions. <a href="%%BASE%%/product-photography-services-in-uae">Product launch shoots</a>. Gala dinners. Brand activations. Private celebrations.</div>
                <div class="svc-text">We’ve been at this since 2014. We’re based in Dubai; we serve the entire UAE, and we’re a fully licensed and insured production company. Our crew speaks both Arabic and English, which makes venue coordination a lot easier. You get to focus on your event. We take care of the experience.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20360%20video%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our 360 Video Booth Services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'dot-circle'])
                        <span>How the booth works</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Custom branding</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Setup, operation and support</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'mobile-alt'])
                        <span>Instant social media content</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/How-the-360-degree-booth-experience-works-at-events-across-the-UAE-1024x682.webp" alt="How the 360 degree booth experience works at events across the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>How the booth works</h3>
                            <div class="svc-panel-text"><p>Here’s how it works. A guest steps onto the platform. Our professional setup spins around them and captures dynamic video from every angle. A few seconds later? High-quality content, ready to share instantly. People line up for a second go. Every time.</p><p>With traditional event photography or videography, guests get filmed. With the booth, they become part of the content. Professional camera systems. A rotating platform. Creative video effects layered on top. What comes out is a clip that feels modern and is very, very shareable.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my booth</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Corporate-brand-activations-1-1024x1024.webp" alt="Custom branded 360 video booth clips" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Custom branding</h3>
                            <div class="svc-panel-text"><p>Every event is different, which is why we offer custom branding designed to match your event theme, company identity, or campaign objectives. This typically includes brand or event logos, custom overlays and graphics, personalized animations, branded intros and outros, and corporate colors or marketing campaign elements applied directly to the final clips.</p><p>For corporate events and product launches, branded content often becomes a valuable marketing asset long after the event itself has ended.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my branded booth</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/phototune.ai_1784624320-1024x512.webp" alt="360 video booth setup and on-site support" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Setup, operation and support</h3>
                            <div class="svc-panel-text"><p>Renting a booth is easy. Running one on the night, with a queue of excited guests and a cable that won’t cooperate? Not so much. We don’t just drop off equipment and leave. You get a complete managed solution.</p><p>Equipment transportation. Venue coordination. Complete setup. Professional operation once guests start arriving. Guest guidance, so everyone knows where to stand and what to do. Video processing. Content delivery. And on-site event support the whole time.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my setup</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/phototune.ai_1784624425-1024x512.webp" alt="Instant social media ready 360 video content" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Instant social media content</h3>
                            <div class="svc-panel-text"><p>Today’s guests want content they can post immediately. Our workflow processes videos quickly and delivers them in formats optimized for every major platform, helping guests share their experience in real time while increasing event exposure online.</p><p>Instagram Reels, TikTok, Facebook Stories, Snapchat, YouTube Shorts and LinkedIn.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my booth</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20360%20video%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">A unique attraction for every kind of event</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Corporate &amp; launches</button>
                    <button type="button" data-filter="1">Galas &amp; weddings</button>
                    <button type="button" data-filter="2">Exhibitions</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/K_AL8110-1-1024x683.jpg" data-full="%%BASE%%/assets/images/2026/07/K_AL8110-scaled.jpg" data-tag="0" alt="Corporate and brand activation event in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMG_6208-1-1-e1784623840762.jpg" data-full="%%BASE%%/assets/images/2026/07/IMG_6208-1-1-e1784623840762.jpg" data-tag="1" alt="Wedding and private celebration in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/medium-shot-smiley-reporter-outdoors_23-2149267736.jpg" data-full="%%BASE%%/assets/images/2026/07/medium-shot-smiley-reporter-outdoors_23-2149267736.jpg" data-tag="2" alt="Exhibition and trade show coverage" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/K_AL8405-scaled.jpg" data-full="%%BASE%%/assets/images/2026/07/K_AL8405-scaled.jpg" data-tag="1" alt="Gala dinner and award night in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/product-launch.jpg" data-full="%%BASE%%/assets/images/2026/07/product-launch.jpg" data-tag="0" alt="Product launch and brand reveal" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Professional-coverage-for-corporate-business-live-events-1024x683.webp" data-full="%%BASE%%/assets/images/2026/07/Professional-coverage-for-corporate-business-live-events.webp" data-tag="0" alt="Multi-Camera Event Recording Services in UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Pairing the 360 photo booth with our other event services</h2>
                <div class="svc-feature-text"><p>Most clients pair the booth with event photography, live streaming, or multi-camera recording, all handled by the same production team for consistent style and branding.</p><p class="svc-feature-label">Pairs well with:</p><ul><li><a href="%%BASE%%/multi-camera-event-recording-for-conferences-concerts-and-large-scale-events">Multi-camera recording</a>: full event coverage at multiple angles alongside the booth experience</li><li><a href="%%BASE%%/professional-live-streaming-services-across-dubai-and-the-uae">Live streaming services</a>: broadcast the main stage while the booth captures guest-side content</li><li><a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">Drone photography</a>: aerial coverage of venue scale and outdoor event spaces</li><li><a href="%%BASE%%/live-printing-photo-booth-for-instant-guest-keepsakes">Instant printing &amp; commercial video</a>: printed keepsakes alongside polished commercial edits</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add services to my quote</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Professional-coverage-for-corporate-business-live-events-1024x683.webp')"><span>Multi-camera</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/f414e020ca4581c085cde9f32c3b8059.webp')"><span>Drone</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/K_AL8405-scaled.jpg')"><span>Event coverage</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">360 Video Booth Hire Across the UAE</h2>
                <p class="svc-text">We’ve set up in luxury hotels in Dubai, corporate venues in Abu Dhabi, and exhibition halls in Sharjah. Different rooms, different crowds. Same consistent, professional experience every single time.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Luxury hotels, corporate venues and private residences</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Corporate venues and hotels</span></div>
                <div class="svc-table-row"><span>Sharjah</span><span>Exhibition halls and event venues</span></div>
                <div class="svc-table-row"><span>Other emirates</span><span>Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">How Booking a 360 Booth Works</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>You tell us your date, venue, guest count and schedule, and we confirm the expected guest throughput during planning.</p></li>
                <li><span class="svc-step-number">2</span><p>We assess the venue and prepare your custom branding: logos, overlays, animations and branded intros and outros.</p></li>
                <li><span class="svc-step-number">3</span><p>On the day our team handles transport, setup, operation and guest guidance, with a trained operator throughout.</p></li>
                <li><span class="svc-step-number">4</span><p>Clips are processed within moments and formatted for Instagram Reels, TikTok and Facebook Stories so guests can post in real time.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Want photos of the whole event too? See our <a href="%%BASE%%/corporate-event-photography-videography">corporate event photography</a>, handled by the same team.</p>
                <a class="svc-btn svc-btn-dark" href="#quote">Start with step 1</a>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="svc-section">
        <div class="svc-container svc-faq">
            <div class="svc-faq-list">
                <h2 class="svc-title">Frequently Asked Questions</h2>
                <div class="svc-accordion">
                    <details  open >
                        <summary>
                            <h3>How many guests can use the 360 booth per hour?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>This depends on clip length and event flow, but most setups comfortably handle large guest volumes over a multi-hour event. We confirm expected throughput with you during planning based on your guest count and event schedule.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Is an attendant included with the booth?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Every booking includes a trained operator who manages setup, guest guidance, and on-site support throughout the event.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How quickly are branded video clips delivered to guests?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Clips are typically processed and ready to share within moments of being recorded, formatted for platforms like Instagram Reels, TikTok, and Facebook Stories so guests can post in real time. Clips are typically processed and ready to share within moments of being recorded, formatted for platforms like Instagram Reels, TikTok, and Facebook Stories so guests can post in real time.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can the 360 booth be used outdoors?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes, with appropriate space and surface conditions confirmed in advance. We assess the venue ahead of the event to confirm outdoor setup is suitable for the platform and lighting.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can the 360 booth be combined with other event coverage?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Most clients pair the booth with event photography, live streaming, or multi-camera recording, all handled by the same production team for consistent style and branding.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20360%20video%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                <a class="svc-faq-call" href="tel:+971522946276">or call +971 52 294 6276</a>
            </div>
        </div>
    </section>

    {{-- Closing booking card --}}
    <section class="svc-book">
        <div class="svc-container">
            <div class="svc-book-card">
                <span class="svc-book-ring"></span>
                <div class="svc-book-copy">
                    <h2 class="svc-title">Book Your 360 Video Booth Experience Today</h2>
                    <p class="svc-text">Complete setup, operation, and branding — anywhere in Dubai or across the UAE. Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20360%20video%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20360%20video%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
