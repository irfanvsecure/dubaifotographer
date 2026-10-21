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

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/06/f414e020ca4581c085cde9f32c3b8059.webp')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Drone photography &amp; videography across the UAE</h1>
                <div class="svc-hero-text"><p>Cinematic aerial perspectives for real estate, construction, hospitality, events, and corporate brands — captured by licensed drone operators.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20drone%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your drone shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your drone shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your drone shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Project type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="project_type" value="Real estate" required>
                                    <span>Real estate</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="project_type" value="Construction" required>
                                    <span>Construction</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="project_type" value="Event or wedding" required>
                                    <span>Event or wedding</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="project_type" value="Brand or hospitality" required>
                                    <span>Brand or hospitality</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Coverage</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Photo and video" required>
                                    <span>Photo and video</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Aerial photos only" required>
                                    <span>Aerial photos only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Aerial video only" required>
                                    <span>Aerial video only</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. property, site or venue name">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How long do you need us?</label>
                            <select id="svc-guests" name="guests">
                                <option value="A few hours">A few hours</option>
                                <option value="Half day">Half day</option>
                                <option value="Full day">Full day</option>
                                <option value="Several days">Several days</option>
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
                <p class="svc-fact-title">Licensed</p>
                <p class="svc-fact-text">And insured production company</p>
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
                <p class="svc-text">Whether you need aerial content for a commercial development in Dubai, a construction site in Abu Dhabi, a resort in Ras Al Khaimah, or an event in Sharjah, our team delivers consistent production quality across every Emirate, with the same licensed operators and equipment standard regardless of location.</p>
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
            <li >Real estate</li>
            <li >Villas</li>
            <li >Waterfront projects</li>
            <li >Construction progress</li>
            <li >Infrastructure</li>
            <li >Hotels and resorts</li>
            <li >Tourism campaigns</li>
            <li >Brand films</li>
            <li >Corporate events</li>
            <li >Weddings</li>
            <li  aria-hidden="true" >Real estate</li>
            <li  aria-hidden="true" >Villas</li>
            <li  aria-hidden="true" >Waterfront projects</li>
            <li  aria-hidden="true" >Construction progress</li>
            <li  aria-hidden="true" >Infrastructure</li>
            <li  aria-hidden="true" >Hotels and resorts</li>
            <li  aria-hidden="true" >Tourism campaigns</li>
            <li  aria-hidden="true" >Brand films</li>
            <li  aria-hidden="true" >Corporate events</li>
            <li  aria-hidden="true" >Weddings</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Professional Drone Photography &amp; Videography Services Across the UAE</h2>
                <div class="svc-text">Ten years ago, getting a shot from the sky meant hiring a helicopter. Now it means a drone, a skilled pilot, and a bit of planning. At Dubai Fotographer, we provide professional drone photography and videography services across Dubai and the UAE. Our clients are businesses, developers, hospitality brands, event organizers, and individuals, and they all want the same thing: aerial visuals from angles that traditional photography simply can’t reach.</div>
                <div class="svc-text">We’ve been doing commercial visual production throughout the UAE since 2014, as a fully licensed and insured production company. Abdul Rehman leads the company. Working alongside him are experienced photographers, videographers, drone operators, editors, and production specialists. Our crew is bilingual too, so for projects that need on-site coordination in both Arabic and English, we’ve got it covered.</div>
                <div class="svc-text">Our professional drone operators hand their footage to the same editing and post-production team that’s working on the rest of your project. So the aerial and ground footage match in color, style, and quality, and the final piece feels like one film rather than two stuck together.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20drone%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Aerial Photography Services for Industries Across the UAE</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Real Estate Drone Photography &amp; Videography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'stopwatch'])
                        <span>Construction &amp; Infrastructure</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Businesses, Brands &amp; Commercial Projects</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Events, Weddings &amp; Special Occasions</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Real-Estate-Drone-Photography-Videography-.jpg" alt="Real estate drone photography and videography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Real Estate Drone Photography &amp; Videography</h3>
                            <div class="svc-panel-text"><p>Real estate remains one of the most effective applications for drone photography and videography. Buyers and investors often want to understand not only the property itself but also its surroundings, accessibility, views, and location advantages, and drone visuals let prospective buyers see property layouts, nearby amenities, road access, landscaping, and architectural design from a perspective ground photography cannot provide.</p><p>Our <a href="%%BASE%%/real-estate-photography-videography-services-in-uae">real estate drone photography</a> work covers luxury villas, apartments, residential communities, commercial properties, hotels and resorts, mixed-use developments, waterfront projects, and land developments.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my property shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Construction-infrastructure.jpg" alt="Construction and infrastructure drone photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Construction &amp; Infrastructure</h3>
                            <div class="svc-panel-text"><p>Progress tracking and milestone documentation for stakeholders and investors.</p><p>Stand at the gate of a new development, and you’ll see a wall and a sign. Go up 120 metres, and you see what’s actually being built. That’s especially true for infrastructure projects and large-scale commercial developments. From the ground, you only see a slice. From the air, people finally get the full picture.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my site</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Drone-Photography-for-Businesses-Brands-Commercial-Projects.jpg" alt="Drone photography for businesses, brands and commercial projects" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Businesses, Brands &amp; Commercial Projects</h3>
                            <div class="svc-panel-text"><p>Businesses throughout Dubai and the UAE are using drone photography. It shows scale, location, architecture, and project progress in a way traditional ground-level photography just can’t. No wonder drone visuals have become such a central part of marketing campaigns, property promotions, <a href="%%BASE%%/corporate-event-photography-videography">corporate branding</a>, tourism marketing and hospitality advertising across the region.</p><p>Drone visuals often end up being the most engaging assets you’ve got. They work on websites, on social media platforms, in advertising campaigns, and in investor or stakeholder presentations.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my brand shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Drone-Videography-for-Events-Weddings-Special-Occasions0760-1024x1024.webp" alt="Drone videography for events, weddings and special occasions" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Events, Weddings &amp; Special Occasions</h3>
                            <div class="svc-panel-text"><p>Some events just make more sense from above. A thousand guests on a lawn, a stage lit up on the beach, a long table under fairy lights. From the ground, it’s a crowd. From the sky it’s a picture.</p><p>We fly at corporate events, conferences, exhibitions and brand activations, and also at <a href="%%BASE%%/wedding-photography-in-uae">weddings</a>, cultural events and private celebrations. We usually pair it with our <a href="%%BASE%%/multi-camera-event-recording">event photography and videography services</a>, so you get a more complete event story, not just a standalone highlight reel of nice sky shots.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my event</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Share your shoot type and date. We’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20drone%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Aerial production for every commercial need</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Real estate</button>
                    <button type="button" data-filter="1">Hospitality &amp; events</button>
                    <button type="button" data-filter="2">Commercial</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Real-estate-developments.jpg" data-full="%%BASE%%/assets/images/2026/07/Real-estate-developments.jpg" data-tag="0" alt="Real estate and developments drone photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/06/bc4d0005ae620e5df4b339600495a94f.webp" data-full="%%BASE%%/assets/images/2026/06/bc4d0005ae620e5df4b339600495a94f.webp" data-tag="0" alt="Real Estate Photography In UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Hospitality.jpg" data-full="%%BASE%%/assets/images/2026/07/Hospitality.jpg" data-tag="1" alt="Hospitality drone photography for resorts and hotels" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Events-weddings.jpg" data-full="%%BASE%%/assets/images/2026/07/Events-weddings.jpg" data-tag="1" alt="Events and weddings drone photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Corporate.jpg" data-full="%%BASE%%/assets/images/2026/07/Corporate.jpg" data-tag="2" alt="Corporate campus and facilities drone photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Professional-Drone-Photography-Videography-Services-Across-the-UAE.jpg" data-full="%%BASE%%/assets/images/2026/07/Professional-Drone-Photography-Videography-Services-Across-the-UAE.jpg" data-tag="2" alt="Professional drone photography and videography services across the UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Cinematic Drone Videography for Modern Visual Storytelling</h2>
                <div class="svc-feature-text"><p>Most of us have watched a drone video that’s basically one shaky lap around a building, then another lap, then the same lap again. Nobody finishes those. We don’t make them.</p><p>Before the drone even leaves the case, we’re thinking about storytelling. After that, it’s movement, composition, and cinematic execution. What really lifts it is mixing the aerial footage with traditional videography from the ground. You get one complete visual story instead of two separate ones.</p><p class="svc-feature-label">Clients use this for:</p><ul><li>Commercial advertising and brand films</li><li><a href="%%BASE%%/hotel-photography-service-in-uae">Hotel and resort promotions</a></li><li>Corporate videos</li><li>Destination marketing and tourism campaigns</li><li>Social media content</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add video to my quote</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Cinematic-drone-videography-for-modern-visual-storytelling-682x1024.webp')"><span>Brand films</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/why-choose-us-1024x585.webp')"><span>Aerial and ground</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Licensed-drone-operations-for-commercial-projects-in-the-UAE-1024x585.webp')"><span>Licensed operators</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Drone Photography Across the UAE</h2>
                <p class="svc-text">Licensed aerial production anywhere in Dubai, Abu Dhabi, or across the UAE. We are fully licensed and insured in every Emirate we operate in.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Commercial developments, villas and waterfront projects</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Construction sites and infrastructure</span></div>
                <div class="svc-table-row"><span>Ras Al Khaimah</span><span>Resorts and hotels</span></div>
                <div class="svc-table-row"><span>Sharjah and the north</span><span>Events in Sharjah, Ajman, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Licensed Drone Operations, Step by Step</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Share your shoot type and date through our booking form or by calling our team directly.</p></li>
                <li><span class="svc-step-number">2</span><p>We plan the project, confirming airspace permissions, site access, safety procedures and a location assessment before anyone flies.</p></li>
                <li><span class="svc-step-number">3</span><p>Licensed operators capture high-resolution photography and video, with advanced stabilization systems for smooth footage.</p></li>
                <li><span class="svc-step-number">4</span><p>Dedicated editing and post-production once we land, with a 48-hour turnaround available on selected project types.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>“We plan every flight around airspace approvals and site access before the camera ever leaves the ground — the licensing is what protects the client, not just the footage.” Abdul Rehman</p>
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
                            <h3>1. How much does a professional photographer in Dubai charge?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Pricing depends on the service category, shoot duration, location, and whether videography is included. The fastest way to get an accurate quote is to share your shoot type and date through our booking form or by calling our team directly.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. Do you provide photography and videography together?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Every project can include combined photography and videography, handled by the same production crew rather than separate vendors, which keeps visual style, lighting, and color grading consistent.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. Do you only shoot in Dubai, or across the whole UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We are based in Dubai and shoot across the entire UAE, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain, for both studio and on-location productions.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. How fast is turnaround on edited photos and video?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>A 48-hour turnaround is available on selected project types. Larger productions are scheduled with a clear delivery timeline agreed before the shoot.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. Is your team licensed and insured?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Dubai Fotographer operates as a fully licensed and insured production company, and all aerial work is conducted under the appropriate UAE drone licensing.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20drone%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book drone photography services in Dubai today</h2>
                    <p class="svc-text">Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20drone%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20drone%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
