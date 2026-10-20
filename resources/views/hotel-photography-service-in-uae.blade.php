@extends('layouts.app')

@section('seo')
@include('seo.hotel-photography-service-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Hotel-photography-2.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Hotel photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Professional photography for hotels, resorts, boutique properties, and hospitality brands — rooms, interiors, lifestyle, and dining, all under one team.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20hotel%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your hotel shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your hotel shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your hotel shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Property type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="City hotel" required>
                                    <span>City hotel</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="Resort or beachfront" required>
                                    <span>Resort or beachfront</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="Boutique hotel" required>
                                    <span>Boutique hotel</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="Serviced apartments" required>
                                    <span>Serviced apartments</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">What to shoot</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="shoot_focus" value="Rooms and suites" required>
                                    <span>Rooms and suites</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_focus" value="Interiors and dining" required>
                                    <span>Interiors and dining</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_focus" value="Lifestyle scenes" required>
                                    <span>Lifestyle scenes</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_focus" value="Full property" required>
                                    <span>Full property</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="Hotel name and area">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How many room types?</label>
                            <select id="svc-guests" name="guests">
                                <option value="1 to 2">1 to 2</option>
                                <option value="3 to 5">3 to 5</option>
                                <option value="6 or more">6 or more</option>
                                <option value="Not sure yet">Not sure yet</option>
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
                <p class="svc-fact-title">10+ years</p>
                <p class="svc-fact-text">Of hospitality photography</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7</p>
                <p class="svc-fact-text">Emirates covered</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48-hour</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Licensed &amp; insured</p>
                <p class="svc-fact-text">Arabic and English crew</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">Our production teams travel to your property with full studio-grade lighting and camera equipment, maintaining the same production standard regardless of Emirate.</p>
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
            <li >Guest rooms</li>
            <li >Suites</li>
            <li >Lobbies</li>
            <li >Restaurants</li>
            <li >Spas</li>
            <li >Pools</li>
            <li >Conference rooms</li>
            <li >Fitness centres</li>
            <li >Resorts</li>
            <li >Serviced apartments</li>
            <li  aria-hidden="true" >Guest rooms</li>
            <li  aria-hidden="true" >Suites</li>
            <li  aria-hidden="true" >Lobbies</li>
            <li  aria-hidden="true" >Restaurants</li>
            <li  aria-hidden="true" >Spas</li>
            <li  aria-hidden="true" >Pools</li>
            <li  aria-hidden="true" >Conference rooms</li>
            <li  aria-hidden="true" >Fitness centres</li>
            <li  aria-hidden="true" >Resorts</li>
            <li  aria-hidden="true" >Serviced apartments</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">About Our Team</h2>
                <div class="svc-text">We’re Dubai Fotographer. Hotels, resorts, and hospitality brands across the UAE come to us because every property has its own character, and they want that to come through in their professional visual content and help their marketing efforts.</div>
                <div class="svc-text">We’ve been at it since 2014, with Abdul Rehman running the company the whole time. In those years we’ve worked with plenty of businesses around the UAE. We’re fully licensed and insured as a production company, and the crew is bilingual in Arabic and English, which helps a lot when you’re working with hotel staff on a busy day.</div>
                <div class="svc-text">Boutique hotels, luxury resorts, serviced apartments, bigger hospitality groups- we shoot for all of them. Nothing is left to chance on the day; each shoot is carefully planned. We’ll cover the welcoming <a href="%%BASE%%/interior-photographer-in-uae">interiors</a>, the striking <a href="%%BASE%%/exterior-photography-in-uae">hotel exteriors</a>, and everything in between, and keep a consistent visual style so the photos match on your websites, booking platforms, marketing campaigns, and every other promotional channel you use.</div>
                <div class="svc-text">“A guest books a feeling before they book a room — that feeling comes from your photography.” — Abdul Rehman</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20hotel%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Hotel Photography Services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'hotel'])
                        <span>Hotel Room Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Hotel Interior Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Hotel Lifestyle Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Luxury Hotel Photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Hotel-photography-3-1024x1024.webp" alt="Hotel room photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Hotel Room Photography</h3>
                            <div class="svc-panel-text"><p>Rooms, suites, villas, and serviced apartments shot for comfort, detail, and accurate representation.</p><p>Standard rooms, suites, and villas photographed for consistency across every room type.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my rooms</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Hotel-interior-photography-1024x682.webp" alt="Hotel interior photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Hotel Interior Photography</h3>
                            <div class="svc-panel-text"><p>Lobbies, restaurants, spas, conference rooms, and fitness centres, all with consistent visual style.</p><p>Professional hotel photography gives potential visitors an accurate representation of your property. They can check out the <a href="%%BASE%%/architectural-photography-in-uae">architecture</a>, peek into the guest rooms, see the public spaces, the amenities, and the dining areas, all from their phone.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my interiors</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Hotel-lifestyle-photography-1024x1024.webp" alt="Hotel lifestyle photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Hotel Lifestyle Photography</h3>
                            <div class="svc-panel-text"><p>Authentic guest interactions and styled scenes for websites, campaigns, and social media content.</p><p>Who are you trying to bring in? Business travellers who care about a good desk and fast Wi-Fi? Leisure guests looking for the pool and the breakfast spread? Luxury tourists who want the suite with the view? The answer changes how we shoot, because the photos should reflect the experience your hotel actually offers.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my lifestyle shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Gemini_Generated_Image_v4f1i3v4f1i3v4f1-1024x559.webp" alt="Luxury hotel photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Luxury Hotel Photography</h3>
                            <div class="svc-panel-text"><p>Architecture, high-end interiors, and exclusive amenities for five-star and luxury hospitality brands.</p><p>On the day, every image is carefully composed and professionally lit. Afterwards, it’s edited so your property looks natural, not overdone, and the style stays consistent across your website, your booking platforms, and all your promotional materials.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my luxury property</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Before guests compare prices or read reviews, they browse the images.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20hotel%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Every hospitality property type</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Rooms</button>
                    <button type="button" data-filter="1">Spaces</button>
                    <button type="button" data-filter="2">Lifestyle</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Guest-rooms-suites.jpg" data-full="%%BASE%%/assets/images/2026/07/Guest-rooms-suites.jpg" data-tag="0" alt="Guest rooms and suites photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Hotel-photography-3-768x768.webp" data-full="%%BASE%%/assets/images/2026/07/Hotel-photography-3.webp" data-tag="0" alt="Hotel room photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Hospitality-photography-that-reflects-your-propertys-identity11.jpg" data-full="%%BASE%%/assets/images/2026/07/Hospitality-photography-that-reflects-your-propertys-identity11.jpg" data-tag="1" alt="Hospitality photography that reflects your property’s identity" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Gemini_Generated_Image_v4f1i3v4f1i3v4f1-768x419.webp" data-full="%%BASE%%/assets/images/2026/07/Gemini_Generated_Image_v4f1i3v4f1i3v4f1.webp" data-tag="1" alt="Luxury hotel photography in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/women-wearing-hijab-having-good-time_23-2149255320-1-1024x654.webp" data-full="%%BASE%%/assets/images/2026/07/women-wearing-hijab-having-good-time_23-2149255320-1.jpg" data-tag="2" alt="Guests enjoying the property" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/06/female-photographer-influencer-shoot-dubai-1024x571.webp" data-full="%%BASE%%/assets/images/2026/06/female-photographer-influencer-shoot-dubai.webp" data-tag="2" alt="Female Photographers in UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">More than rooms — a complete visual library</h2>
                <div class="svc-feature-text"><p>Everything sits with one production team. Photography and videography, <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone</a> shots, <a href="%%BASE%%/luxury-food-photography-for-restaurants-hotels-and-brands">food and beverage photography</a>– all of it. When it all runs through one studio, the visual style matches, the colour grading matches, and scheduling is a lot simpler.</p><p class="svc-feature-label">One production team covers:</p><ul><li>Dining &amp; F&amp;B: restaurant interiors and food photography combined for full visual consistency</li><li>Spas &amp; wellness: calm, luxury wellness spaces</li><li>Pools &amp; facilities: outdoor amenities &amp; views</li><li>Lifestyle scenes: guests enjoying the property</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add these to my quote</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Pools-facilities.jpg')"><span>Pools &amp; facilities</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Spas-wellness-e1783340454600.jpg')"><span>Spas &amp; wellness</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Lifestyle-scenes.jpg')"><span>Lifestyle scenes</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Every hospitality property type, across the UAE</h2>
                <p class="svc-text">Full-property coverage including accommodation, recreational facilities, dining venues, and surrounding environments — with drone coverage available for larger resort properties.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>City hotels, beachfront and resort properties, boutique hotels</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Hotels, resorts and serviced apartments</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">How We Plan &amp; Run Every Hotel Photoshoot</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>First we talk: we need to understand your property and know where these images are going.</p></li>
                <li><span class="svc-step-number">2</span><p>We list the areas to be photographed and build a schedule around your hotel to minimise disruption to guests.</p></li>
                <li><span class="svc-step-number">3</span><p>During the shoot, each space gets shot when the lighting conditions are at their best.</p></li>
                <li><span class="svc-step-number">4</span><p>We pick the strongest frames, edit colour, lighting and perspective, and hand them over ready for websites, booking platforms, brochures and social media.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Hotel dining outlets are often paired with our <a href="%%BASE%%/luxury-food-photography-for-restaurants-hotels-and-brands">food photography</a> for full visual consistency.</p>
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
                            <h3>Do you provide hotel photography outside Dubai?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide hotel photography across all seven Emirates, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you photograph hotels while they are operating?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Many hotels remain open during photography sessions. We work with your team to schedule the shoot around guest activity and hotel operations, minimising disruption while capturing each area at its best.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer drone photography for hotels?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. For suitable properties and where regulations permit, we include professional drone photography and videography to showcase hotel exteriors, landscaped grounds, beachfront locations, and surrounding attractions from above.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How long does a hotel photography shoot take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Smaller boutique hotels may be completed within a day, while larger resorts or luxury properties often require multiple sessions to cover guest rooms, facilities, and lifestyle photography.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Where can the final hotel photographs be used?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Your photographs can be used across your hotel website, Booking.com, Expedia, social media, digital advertising, brochures, press releases, and other marketing materials in high-resolution digital and print formats.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20hotel%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your hotel photography session today</h2>
                    <p class="svc-text">Professional hospitality photography anywhere in Dubai, Abu Dhabi, or across the UAE. Tell us about your property and we’ll get back to you with availability and pricing, usually within a few hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20hotel%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20hotel%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
