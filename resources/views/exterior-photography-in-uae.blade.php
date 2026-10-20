@extends('layouts.app')

@section('seo')
@include('seo.exterior-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/pexels-jdgromov-7662956-scaled.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Exterior photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Facade, aerial, golden hour, and twilight photography for architects, developers, real estate agents, and property owners across the UAE.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20exterior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your exterior shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your exterior shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your exterior shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Property type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="Commercial tower" required>
                                    <span>Commercial tower</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="Villa or residence" required>
                                    <span>Villa or residence</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="Development" required>
                                    <span>Development</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="property_type" value="Retail or hotel" required>
                                    <span>Retail or hotel</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Coverage</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Daylight" required>
                                    <span>Daylight</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Golden hour or twilight" required>
                                    <span>Golden hour or twilight</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Aerial drone" required>
                                    <span>Aerial drone</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Interior and exterior" required>
                                    <span>Interior and exterior</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="Building name and area">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Size of the project</label>
                            <select id="svc-guests" name="guests">
                                <option value="Single villa or unit">Single villa or unit</option>
                                <option value="One building">One building</option>
                                <option value="Several buildings">Several buildings</option>
                                <option value="Whole community">Whole community</option>
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
                <p class="svc-text">We provide exterior photography across Dubai, Abu Dhabi, Sharjah, and all seven Emirates — working with developers, architects, and property owners throughout the UAE with the same production standard at every location.</p>
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
            <li >Commercial towers</li>
            <li >Residential complexes</li>
            <li >Retail centers</li>
            <li >Villas</li>
            <li >Construction &amp; contracting</li>
            <li >Hospitality</li>
            <li >Architecture &amp; design firms</li>
            <li >Property development</li>
            <li >Corporate &amp; facilities</li>
            <li >Golden hour &amp; twilight</li>
            <li  aria-hidden="true" >Commercial towers</li>
            <li  aria-hidden="true" >Residential complexes</li>
            <li  aria-hidden="true" >Retail centers</li>
            <li  aria-hidden="true" >Villas</li>
            <li  aria-hidden="true" >Construction &amp; contracting</li>
            <li  aria-hidden="true" >Hospitality</li>
            <li  aria-hidden="true" >Architecture &amp; design firms</li>
            <li  aria-hidden="true" >Property development</li>
            <li  aria-hidden="true" >Corporate &amp; facilities</li>
            <li  aria-hidden="true" >Golden hour &amp; twilight</li>
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
                <div class="svc-text">We’ve been photographing the outside of things since 2014. Buildings, <a href="%%BASE%%/construction-site-photography-in-uae">construction sites</a>, new developments, and landmarks across all seven Emirates. Dubai Fotographer is led by our founder, Abdul Rehman, and our exterior photographers bring two things to every job: technical precision and a real understanding of architecture, light, and design.</div>
                <div class="svc-text">As a specialized team providing <a href="%%BASE%%/architectural-photography-in-uae">architectural exterior photography</a>, we recognize that each building facade has a story it tells. We document that story accurately, not through assumptions.</div>
                <div class="svc-text">We’re a fully licensed and insured production company, and our exterior photography services have covered <a href="%%BASE%%/hotel-photography-service-in-uae">hotels</a>, <a href="%%BASE%%/restaurant-photography-service-in-uae">restaurants</a>, retail stores, and commercial buildings, plus work for brands including Emirates, Etisalat, and RTA.</div>
                <div class="svc-text">“Every façade has a moment in the day when it looks exactly as the architect intended — our job is to be there when it does.” – Abdul Rehman</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20exterior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Exterior photography services for every project type</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Exterior Building Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Real Estate Exterior Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Twilight &amp; Golden Hour</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'plane'])
                        <span>Aerial &amp; Drone Exteriors</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'hotel'])
                        <span>Interior and Exterior Packages</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'file-alt'])
                        <span>Architectural Portfolios</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/pexels-aboodi-31215836-1024x850.webp" alt="Exterior Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Exterior Building Photography</h3>
                            <div class="svc-panel-text"><p>Most of what we shoot here is commercial towers, residential complexes and retail developments. We do it with precision, and to be fair, most of our time goes on the façades, the materials and the architectural details, since that’s where a structure really gets its identity.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my building</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/pexels-jdgromov-4716785-1024x683.webp" alt="Exterior Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Real Estate Exterior Photography</h3>
                            <div class="svc-panel-text"><p>This one is mostly for agents and developers who want their properties shown in their best light. The photos are there to bring in buyers and investors through the portals, brochures and social media they’re on every day anyway. It pairs naturally with our <a href="%%BASE%%/real-estate-photography-videography-services-in-uae">real estate photography</a> service.</p><p>We shoot villas, apartments and commercial units, and we watch for what buyers really notice: clean lines, inviting entrances, and how the place sits within its surroundings.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my listing</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/pexels-thelazyartist-1446512-1024x726.webp" alt="Exterior Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Twilight &amp; Golden Hour</h3>
                            <div class="svc-panel-text"><p>If we had to pick a favourite time to shoot, it’d be golden hour or dusk, and clients tend to agree once the gallery lands in their inbox. The low sun brings drama and depth, so a façade that looked a bit plain at lunchtime ends up a striking visual people actually stop scrolling for.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my twilight shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/pexels-marjan-147528816-10483836-1024x683.webp" alt="Exterior Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Aerial &amp; Drone Exteriors</h3>
                            <div class="svc-panel-text"><p>Some projects you just can’t explain from the ground. Our professional drones get elevated perspectives and a bit of skyline context, which helps a lot for large-scale developments, villas and any property where scale and surroundings matter most. All the flying is done by our fully licensed <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone photography</a> team.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my aerial shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/pexels-aj-ahamad-767001191-34188660-1024x689.webp" alt="Exterior Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Interior and Exterior Packages</h3>
                            <div class="svc-panel-text"><p>A lot of clients would rather get it all done in one go. We do combined coverage that captures a property’s full character, inside and out, in one coordinated shoot. Our <a href="%%BASE%%/interior-photographer-in-uae">interior photography</a> expertise comes into it as well, and that keeps the visual style consistent across every deliverable.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my package</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/07/pexels-nasimgs-6657278-683x1024.webp" alt="Exterior Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Architectural Portfolios</h3>
                            <div class="svc-panel-text"><p>Photos going into presentations, brochures, or investor materials need to look polished; that’s really what this is about. It works alongside our dedicated <a href="%%BASE%%/architectural-photography-in-uae">architectural photography</a> service whenever you need complete project documentation.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Every building has a story worth telling. Get availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20exterior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent exterior work</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Buildings</button>
                    <button type="button" data-filter="1">Twilight</button>
                    <button type="button" data-filter="2">Residential</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/pexels-kirandeepsingh-16480058-scaled.jpg" data-full="%%BASE%%/assets/images/2026/07/pexels-kirandeepsingh-16480058-scaled.jpg" data-tag="0" alt="Exterior Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/pexels-tom-fournier-208942721-27332191-scaled.jpg" data-full="%%BASE%%/assets/images/2026/07/pexels-tom-fournier-208942721-27332191-scaled.jpg" data-tag="0" alt="Exterior Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/pexels-thelazyartist-1446512-768x544.webp" data-full="%%BASE%%/assets/images/2026/07/pexels-thelazyartist-1446512-scaled.webp" data-tag="1" alt="Twilight and golden hour exterior photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Why-were-the-right-choice-for-your-exterior-photography.jpg" data-full="%%BASE%%/assets/images/2026/07/Why-were-the-right-choice-for-your-exterior-photography.jpg" data-tag="1" alt="Why we’re the right choice for your exterior photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Exterior-real-estate-photography-for-listings-that-stand-out.png" data-full="%%BASE%%/assets/images/2026/07/Exterior-real-estate-photography-for-listings-that-stand-out.png" data-tag="2" alt="Exterior real estate photography for listings that stand out" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/06/exterior-photography-1.webp" data-full="%%BASE%%/assets/images/2026/06/exterior-photography-1.webp" data-tag="2" alt="Exterior Photography in UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">How Our Exterior Photographers Capture Every Building</h2>
                <div class="svc-feature-text"><p>Location scouting tells us the building’s orientation, what the surrounding landscape is like, and where the sunlight hits the facade at different hours throughout the day. Then we come back at the optimal time. For one building, that’s early morning. For another, it’s golden hour. A few look their best at twilight.</p><p>Our exterior photographers carry professional-grade equipment, tilt-shift lenses, and drones for <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">aerial photography</a>. In exterior architectural photography, we’re mainly looking at lines, symmetry and materials, because that’s what reflects the true design intent behind the structure.</p><p class="svc-feature-label">Where your exterior photography works:</p><ul><li>Architectural portfolios: award submissions, publications, and design practice websites</li><li>Real estate portals &amp; listings: Property Finder, Bayut, Zillow</li><li>Marketing campaigns, brochures &amp; ads</li><li>Investor presentations &amp; reports</li><li>Social media property content</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Plan my shoot</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Architectural-portfolios.jpg')"><span>Architectural portfolios</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/uae-marketing-campaigns-photography.jpg')"><span>Marketing campaigns</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Presentations-reports-e1784029522413.jpg')"><span>Investor materials</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Exterior Photography for Every Sector</h2>
                <p class="svc-text">Our exterior photography supports a wide range of sectors across the UAE, each with its own visual requirements and marketing goals.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Commercial skyscrapers, residential complexes and retail centers</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Developments, villas and landmarks</span></div>
                <div class="svc-table-row"><span>Sharjah</span><span>Residential and commercial buildings</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our exterior photography process</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Consultation &amp; scouting: we discuss your goals and study the building’s orientation, surroundings, and how light moves across its façade to identify the best shooting approach.</p></li>
                <li><span class="svc-step-number">2</span><p>Shoot planning &amp; timing: we schedule the shoot around optimal lighting conditions — golden hour, twilight, or daylight — to best highlight the structure’s design and character.</p></li>
                <li><span class="svc-step-number">3</span><p>Professional photography: using tilt-shift lenses, professional-grade equipment, and drones for aerial angles, we capture every perspective with precision, detail, and intention.</p></li>
                <li><span class="svc-step-number">4</span><p>Editing &amp; delivery: colour, contrast, and composition fine-tuned in post-production — high-resolution images delivered ready for listings, portfolios, or marketing campaigns.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Clients usually want the inside done too. Add <a href="%%BASE%%/interior-photographer-in-uae">interior photography</a> to round out the visual narrative.</p>
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
                            <h3>What is exterior photography and why is it important?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Exterior photography captures a building’s façade, structure, and surroundings to highlight its design, scale, and character — essential for marketing, listings, and architectural portfolios.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer exterior real estate photography for individual listings?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide exterior real estate photography for villas, apartments, and commercial units, helping agents and developers create listings that attract genuine buyer interest.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you photograph both the interior and exterior of a property?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We offer combined interior and exterior photography packages for clients who want complete coverage of a property in a single, coordinated shoot.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>What time of day is best for exterior building photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>It depends on the building’s orientation and design. We often recommend golden hour or twilight, as natural light adds depth, warmth, and visual impact — confirmed during our planning and scouting stage.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide aerial or drone photography for large properties?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We use professional drones to capture elevated perspectives, ideal for large developments, villas, and properties where scale and context matter most.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Which areas in the UAE do you cover?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We provide exterior photography across Dubai, Abu Dhabi, Sharjah, and all seven Emirates, working with developers, architects, and property owners throughout the region.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20exterior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your exterior photography session today</h2>
                    <p class="svc-text">Façade, aerial, golden hour, and twilight photography for properties anywhere in Dubai and across the UAE. Tell us about your property and we’ll get back to you with availability and pricing, usually within a few hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20exterior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20exterior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
