@extends('layouts.app')

@section('seo')
@include('seo.real-estate-photography-videography-services-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Real-estate-photography-videography-services-in-Dubai-the-UAE.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Real estate photography &amp; videography services in Dubai &amp; the UAE</h1>
                <div class="svc-hero-text"><p>Professional photography, HDR, drone, and video production for residential, commercial, and luxury properties across the UAE.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20real%20estate%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your property</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your property">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your property">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Property type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="Villa or townhouse" required>
                                    <span>Villa or townhouse</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="Apartment" required>
                                    <span>Apartment</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="Commercial or office" required>
                                    <span>Commercial or office</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="Off-plan or construction" required>
                                    <span>Off-plan or construction</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Coverage</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Photos only" required>
                                    <span>Photos only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Photos and video" required>
                                    <span>Photos and video</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Photos and drone" required>
                                    <span>Photos and drone</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Photo, video and drone" required>
                                    <span>Photo, video and drone</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. Palm Jumeirah, Business Bay">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Property size</label>
                            <select id="svc-guests" name="guests">
                                <option value="Studio or 1 bedroom">Studio or 1 bedroom</option>
                                <option value="2 to 3 bedrooms">2 to 3 bedrooms</option>
                                <option value="4+ bedroom villa">4+ bedroom villa</option>
                                <option value="Building or development">Building or development</option>
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
                <p class="svc-fact-title">Bilingual</p>
                <p class="svc-fact-text">Arabic / English crew</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48-hour</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7</p>
                <p class="svc-fact-text">Emirates covered</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">As a Dubai-based studio, we photograph properties throughout every Emirate, maintaining the same lighting, editing, and composition standards on every property regardless of which city it’s in.</p>
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
            <li >Villas</li>
            <li >Apartments</li>
            <li >Townhouses</li>
            <li >Luxury mansions</li>
            <li >Office towers</li>
            <li >Retail developments</li>
            <li >Hotels and resorts</li>
            <li >Warehouses</li>
            <li >Off-plan communities</li>
            <li >Government developments</li>
            <li  aria-hidden="true" >Villas</li>
            <li  aria-hidden="true" >Apartments</li>
            <li  aria-hidden="true" >Townhouses</li>
            <li  aria-hidden="true" >Luxury mansions</li>
            <li  aria-hidden="true" >Office towers</li>
            <li  aria-hidden="true" >Retail developments</li>
            <li  aria-hidden="true" >Hotels and resorts</li>
            <li  aria-hidden="true" >Warehouses</li>
            <li  aria-hidden="true" >Off-plan communities</li>
            <li  aria-hidden="true" >Government developments</li>
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
                <div class="svc-text">Here at Dubai Fotographer, we are offering professional real estate photography services all over Dubai and the wider UAE. We work with all kinds of clients: property developers, real estate agencies, architects, and even interior designers. Also construction companies, hospitality brands, government projects, and individual property owners too.</div>
                <div class="svc-text">Since 2014, our team has been helping clients present residential properties, commercial ones, and luxury properties using professional photography. We are a fully licensed and insured production company, and we have a crew that speaks both Arabic and English, so they are available for client briefings, agent walkthroughs, or developer presentations.</div>
                <div class="svc-text">Property marketing depends on consistency as much as quality. Our clients work with one accountable production team rather than rotating between freelance photographers for each new listing, and we’re equipped to handle everything from a single villa shoot to an ongoing contract covering an entire master-planned community.</div>
                <div class="svc-text"><p>“A property is sold through its photography long before a buyer ever walks through the door — every angle has to earn its place.” — Abdul Rehman, Founder, Dubai Fotographer</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20real%20estate%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Real Estate Photography for Modern Property Marketing</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Residential &amp; Luxury Properties</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Commercial &amp; Mixed-Use</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Detail-First Property Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'bolt'])
                        <span>HDR Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'hotel'])
                        <span>Interiors for Luxury Spaces</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'check-circle'])
                        <span>Construction &amp; Off-Plan</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Villas-luxury-homes-1024x681.webp" alt="Villa and luxury home photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Residential &amp; Luxury Properties</h3>
                            <div class="svc-panel-text"><p>Villas, apartments, townhouses, and luxury mansions each call for a different shooting approach — a compact apartment benefits from wide-angle composition, while a luxury villa shoot focuses on scale, outdoor areas, and architectural detail.</p><p>No two properties sell for the same reason. One villa has the view. So we don’t walk in with a one-size-fits-all shooting style. We figure out the unique selling points first, then shoot to show them off, accurately and honestly.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my property</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Commercial-office-towers.jpg" alt="Commercial office tower photography in Business Bay" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Commercial &amp; Mixed-Use</h3>
                            <div class="svc-panel-text"><p>Office towers, retail developments, warehouses, and mixed-use projects are photographed for investors and corporate tenants, shifting focus toward scale, layout efficiency, and location context.</p><p>Business Bay and Downtown developments shot for investors and corporate tenants.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my commercial shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Professional-property-photography-that-highlights-every-detail-683x1024.webp" alt="Professional property photography that highlights every detail" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Detail-First Property Photography</h3>
                            <div class="svc-panel-text"><p>Property photography that actually works needs a bit more thought. You have to get the space right, and the perspective. You have to know what the light’s doing at that hour, and what the architect was going for when they designed the place.</p><p>Before we start production, we go through the property, figure out what its best visual features are, and decide which shooting angles show them off properly. Every image gets professionally edited and optimized, sized up for digital platforms, marketing materials, property portals, and promotional campaigns.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my listing photos</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/HDR-real-estate-photography-for-superior-visual-quality-1024x767.webp" alt="HDR real estate photography for superior visual quality" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>HDR Photography</h3>
                            <div class="svc-panel-text"><p>Light is the tricky part of shooting a property. That’s what HDR real estate photography is for. We take several exposures of the same shot, some darker, some brighter, and blend them into one balanced image. You keep the detail in the bright areas and the dark areas. And done properly, it still looks real.</p><p>It helps most with luxury homes, modern apartments with big glass walls, commercial properties, hotel interiors, showrooms, and office environments.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my HDR shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/Interior-real-estate-photography-for-luxury-spaces-1024x663.webp" alt="Interior real estate photography for luxury spaces" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Interiors for Luxury Spaces</h3>
                            <div class="svc-panel-text"><p>When people look at a property online, the inside of the home is what they look at the longest. In our <a href="%%BASE%%/interior-photographer-in-uae">interior photography</a>, we use natural light as much as we can. We want a realistic representation of the space, so buyers see what is really there.</p><p>We do a lot of this work for luxury homes, hotels, serviced apartments, model units and premium developments. For larger developments, we usually do it together with our <a href="%%BASE%%/architectural-photography-in-uae">architectural photography</a> service.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my interior shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/07/Real-estate-photography-for-construction-off-plan-projects-1024x682.webp" alt="Real estate photography for construction and off-plan projects" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Construction &amp; Off-Plan</h3>
                            <div class="svc-panel-text"><p>Many of the properties we photograph are still under construction or sold off-plan. For these projects, we combine <a href="%%BASE%%/construction-site-photography-in-uae">construction site photography</a> with drone coverage to document progress for investors and marketing teams, while also producing show-unit and sales-gallery photography that helps buyers visualize a finished product before it exists.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my project</a>
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
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20real%20estate%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Built for every property and development type</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Residential</button>
                    <button type="button" data-filter="1">Commercial</button>
                    <button type="button" data-filter="2">Interiors</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Villas-luxury-homes-1024x681.webp" data-full="%%BASE%%/assets/images/2026/07/Villas-luxury-homes.jpg" data-tag="0" alt="Villas and luxury homes in Palm Jumeirah and Emirates Hills" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Apartments556.jpg" data-full="%%BASE%%/assets/images/2026/07/Apartments556.jpg" data-tag="0" alt="Apartment photography in Downtown and Dubai Marina" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Real-estate-developments-1.jpg" data-full="%%BASE%%/assets/images/2026/07/Real-estate-developments-1.jpg" data-tag="1" alt="Real estate development photography in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Why-developers-agencies-choose-Dubai-Fotographer-1024x682.webp" data-full="%%BASE%%/assets/images/2026/07/Why-developers-agencies-choose-Dubai-Fotographer.webp" data-tag="1" alt="Why developers and agencies choose Dubai Fotographer" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Model-units-hotels.jpg" data-full="%%BASE%%/assets/images/2026/07/Model-units-hotels.jpg" data-tag="2" alt="Interior photography of model units and hotels" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Interior-real-estate-photography-for-luxury-spaces-768x497.webp" data-full="%%BASE%%/assets/images/2026/07/Interior-real-estate-photography-for-luxury-spaces.webp" data-tag="2" alt="Interior real estate photography for luxury spaces" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Real Estate Videography for Modern Property Presentations</h2>
                <div class="svc-feature-text"><p>Photos are great for detail. But they can’t tell you what it’s like to walk from the front door into the kitchen. Video can. It adds movement, flow, and context- the stuff that helps people understand how a property actually feels.</p><p>We handle photography and videography in a single production workflow, so the visual style stays consistent across every marketing asset you get. It’s the same approach we use in our <a href="%%BASE%%/corporate-event-photography-videography">corporate</a> and <a href="%%BASE%%/restaurant-photography-service-in-uae">hospitality</a> production work.</p><p class="svc-feature-label">Drone photography and aerial property visuals:</p><ul><li><a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">Drone photography</a> shows how a property sits within its surroundings</li><li>Where exactly the property is positioned and how easy it is to get to</li><li>Nearby amenities, the landscaping, and just how big the whole thing really is</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add video to my quote</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/real-estate-photography-for-superior-visual-quality-1024x682.webp')"><span>Property video</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Drone-Photography-Aerial-Property-Visuals4-1-696x1024.webp')"><span>Drone</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Aerial-drone-681x1024.webp')"><span>Waterfront &amp; land</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Real Estate Photography Across the UAE</h2>
                <p class="svc-text">One week it’s a luxury villa in Palm Jumeirah. The next it’s a commercial office tower in Business Bay, or an apartment in Downtown Dubai, or a residential development out in Abu Dhabi. Doesn’t really change how we work.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Palm Jumeirah, Emirates Hills, Downtown, Dubai Marina and Business Bay</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Residential developments and commercial properties</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">How a Real Estate Shoot Works</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours.</p></li>
                <li><span class="svc-step-number">2</span><p>Before production, we go through the property and decide which shooting angles show off its best features.</p></li>
                <li><span class="svc-step-number">3</span><p>On the day, photography, HDR, video and drone are handled in a single production workflow.</p></li>
                <li><span class="svc-step-number">4</span><p>Every image is professionally edited and optimized, with a 48-hour turnaround available on selected projects.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Shooting a large development? We usually pair it with our <a href="%%BASE%%/architectural-photography-in-uae">architectural photography</a> service.</p>
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
                            <h3>How long does a real estate photography shoot take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>This depends on the property size and scope, ranging from under an hour for a single apartment to a full day for large villas, commercial buildings, or developments requiring both interior and drone coverage.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer HDR photography for all properties?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. HDR is available for any property where lighting conditions call for it, and is commonly used for luxury homes, commercial spaces, and interiors with strong natural light contrast.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you photograph properties that are still under construction?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We regularly combine construction site photography with drone coverage for progress documentation, alongside show-unit and sales-gallery photography for off-plan marketing.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide drone photography as part of a real estate shoot, or only on request?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Drone coverage can be added to any real estate shoot on request and is commonly included for villas, waterfront properties, and large developments.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you work directly with developers and agencies on ongoing listing photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Many of our real estate clients are developers and agencies with recurring photography needs across multiple properties, and we structure ongoing arrangements to keep style and turnaround consistent.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20real%20estate%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book real estate photography services in Dubai today</h2>
                    <p class="svc-text">Photography, videography, HDR, and drone production anywhere across the UAE. Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20real%20estate%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20real%20estate%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
