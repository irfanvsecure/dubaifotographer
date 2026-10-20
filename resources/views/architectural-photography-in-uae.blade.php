@extends('layouts.app')

@section('seo')
@include('seo.architectural-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Architectural-photography-services-in-Dubai.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Architectural photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Precise, refined photography for architects, developers, interior designers, and property owners — exteriors, interiors, and fine art architectural imagery.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20architectural%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your building</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your building">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your building">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Building type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="building_type" value="Commercial or office" required>
                                    <span>Commercial or office</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="building_type" value="Residential or villa" required>
                                    <span>Residential or villa</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="building_type" value="Hotel or hospitality" required>
                                    <span>Hotel or hospitality</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="building_type" value="Public or retail" required>
                                    <span>Public or retail</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">What to shoot</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Exteriors and interiors" required>
                                    <span>Exteriors and interiors</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Exteriors only" required>
                                    <span>Exteriors only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Interiors only" required>
                                    <span>Interiors only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Fine art" required>
                                    <span>Fine art</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. project name or location">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Size of the project?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Single villa or unit">Single villa or unit</option>
                                <option value="One building">One building</option>
                                <option value="Several buildings">Several buildings</option>
                                <option value="Large development">Large development</option>
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
                <p class="svc-fact-text">Of architectural photography</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7</p>
                <p class="svc-fact-text">Emirates covered</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">4 approaches</p>
                <p class="svc-fact-text">Exteriors, interiors, property, fine art</p>
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
                <p class="svc-text">Whether your project is a commercial tower in downtown Dubai, a residential development in Abu Dhabi, or a hospitality project in Ras Al Khaimah, we deliver the same level of planning, precision, and production quality regardless of location.</p>
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
            <li >Commercial offices</li>
            <li >Hotels &amp; hospitality</li>
            <li >Interior designers</li>
            <li >Property developers</li>
            <li >Architects</li>
            <li >Government buildings</li>
            <li >Educational institutions</li>
            <li >Retail developments</li>
            <li >Award submissions</li>
            <li >Fine art</li>
            <li  aria-hidden="true" >Commercial offices</li>
            <li  aria-hidden="true" >Hotels &amp; hospitality</li>
            <li  aria-hidden="true" >Interior designers</li>
            <li  aria-hidden="true" >Property developers</li>
            <li  aria-hidden="true" >Architects</li>
            <li  aria-hidden="true" >Government buildings</li>
            <li  aria-hidden="true" >Educational institutions</li>
            <li  aria-hidden="true" >Retail developments</li>
            <li  aria-hidden="true" >Award submissions</li>
            <li  aria-hidden="true" >Fine art</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Professional-Architectural-Photography-forModern-Developments.jpg')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Professional Architectural Photography for Modern Developments</h2>
                <div class="svc-text">A building can take years to design and build. Photographing it properly shouldn’t be an afterthought. Professional architectural photography records a building’s design, craftsmanship, and character, accurately and in detail.</div>
                <div class="svc-text">At Dubai Fotographer, we provide architectural photography across Dubai and the UAE. We create high-quality imagery for architects, developers, <a href="%%BASE%%/interior-photographer-in-uae">interior designers</a>, <a href="%%BASE%%/construction-site-photography-in-uae">construction companies</a>, and property owners.</div>
                <div class="svc-text">We started in 2014, and Abdul Rehman has led the company since then. Over the years, we’ve worked on projects of all different scales, from single villas to large developments. We’re a fully licensed and insured production company, and our crew is bilingual in Arabic and English. Nothing gets left to chance. We plan every assignment carefully, so the final images show the completed project accurately and stay true to its original design intent.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20architectural%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Architectural Photography Services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Building Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'hotel'])
                        <span>Interior Architecture Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'map-pin'])
                        <span>Commercial &amp; Residential Property</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Fine Art Architectural Photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Building-photography​-1024x683.webp" alt="Building photography of exteriors and façades in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Building Photography</h3>
                            <div class="svc-panel-text"><p>Ask an architect what they want from photos of their building, and they’ll usually say the same thing: “Make it look like it does.” Fair enough. We shoot commercial, residential, hospitality, and public buildings, and we keep coming back to proportion, structure, and design. Each frame is carefully composed so nothing gets distorted, and the little details that define the architecture actually show up instead of disappearing into a wide shot.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my building</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Interior-Architecture-photography-1024x768.webp" alt="Interior architecture photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Interior Architecture Photography</h3>
                            <div class="svc-panel-text"><p>Walk into a good lobby, and you feel it before you’ve looked at anything specific. We try to get that onto camera. Our interior photography looks at the design, the layout, the lighting, and the atmosphere of the space, so whoever’s looking at the photos can visualise standing there before they arrive.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my interiors</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Commercial-Residential-Property-Photography-1024x681.webp" alt="Commercial and residential property photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Commercial &amp; Residential Property</h3>
                            <div class="svc-panel-text"><p>One day it’s an office building, the next a private residence, then maybe retail spaces or a mixed-use development with all of those under one roof. We change how we shoot depending on the scale, the layout, and the design of the property. The pictures need to work for marketing, and they also need to hold up for documentation purposes, so we keep both in mind.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my property</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Fine-Art-Architectural-Photography-2-1024x678.webp" alt="Fine art architectural photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Fine Art Architectural Photography</h3>
                            <div class="svc-panel-text"><p>Some clients want something a bit more like art. For those projects, we slow right down and look at form, geometry, light and texture, and make distinctive images that wouldn’t look out of place on a gallery wall. They tend to go into editorial features, exhibitions, publications, and architectural portfolios, where visual ambition counts for as much as technical accuracy.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my fine art shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your building and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20architectural%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Visuals that strengthen your brand across every platform</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Marketing</button>
                    <button type="button" data-filter="1">Editorial</button>
                    <button type="button" data-filter="2">Fine art</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Marketing-developer-presentations.jpg" data-full="%%BASE%%/assets/images/2026/07/Marketing-developer-presentations.jpg" data-tag="0" alt="Architectural photography for marketing and developer presentations" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Practice-company-sites.jpg" data-full="%%BASE%%/assets/images/2026/07/Practice-company-sites.jpg" data-tag="0" alt="Architectural photography for practice and company websites" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/High-quality-documentation-built-for-architectural-publications.jpg" data-full="%%BASE%%/assets/images/2026/07/High-quality-documentation-built-for-architectural-publications.jpg" data-tag="1" alt="Architectural photography for portfolios and award submissions" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Publications.jpg" data-full="%%BASE%%/assets/images/2026/07/Publications.jpg" data-tag="1" alt="Architectural photography for editorial and press" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Fine-art.jpg" data-full="%%BASE%%/assets/images/2026/07/Fine-art.jpg" data-tag="2" alt="Fine art architectural photography for exhibitions and prints" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Fine-Art-Architectural-Photography--682x1024.webp" data-full="%%BASE%%/assets/images/2026/07/Fine-Art-Architectural-Photography-.webp" data-tag="2" alt="Architectural Photography in UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Design, Light &amp; Perspective in Architectural Photography</h2>
                <div class="svc-feature-text"><p>Anybody can stand across the road and take a picture of a finished building. That isn’t really architectural photography, though; it’s just documenting. What we’re trying to do is show the thinking behind the place. Why the windows are that tall, why the architect chose stone here and glass over there, how the proportions feel when you walk up to the entrance.</p><p>Light is a huge part of it. We’ve seen a white facade look completely dull at midday and then turn warm and full of shadow an hour before sunset. So before we shoot, we spend time on perspective, on composition, and especially on timing.</p><p class="svc-feature-label">Where the photos get used:</p><ul><li>Portfolios and award submissions</li><li>Marketing and developer presentations</li><li>Company websites and <a href="%%BASE%%/real-estate-photography-videography-services-in-uae">property photography</a></li><li>Editorial features and publications</li><li>Exhibitions and prints</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Plan my shoot</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/dDesign-Light-Perspective-in-Architectural-Photography-399-1024x681.webp')"><span>Light</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Showcasing-Architectural-Design-with-Purpose-1024x683.webp')"><span>Detail</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Architectural-photography-services-in-Dubai.jpg')"><span>Perspective</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Architectural Photography Across the UAE</h2>
                <p class="svc-text">We regularly work in hotels, offices, retail spaces, and other operational properties while minimising disruption to daily activities.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Commercial towers in downtown Dubai</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Residential developments</span></div>
                <div class="svc-table-row"><span>Ras Al Khaimah</span><span>Hospitality projects</span></div>
                <div class="svc-table-row"><span>Other emirates</span><span>Sharjah, Ajman, Fujairah and Umm Al Quwain</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">How We Plan &amp; Run Every Architectural Shoot</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We look at the architecture, check out the surrounding environment, and ask what the images are going to be used for.</p></li>
                <li><span class="svc-step-number">2</span><p>We review the building’s design, identify defining architectural features, and determine shooting times, viewpoints, and lighting conditions for a consistent set of images.</p></li>
                <li><span class="svc-step-number">3</span><p>Methodical coverage of both the overall structure and finer design details — attention to composition, symmetry, natural light, and the surrounding environment throughout.</p></li>
                <li><span class="svc-step-number">4</span><p>Every selected image professionally edited for natural colours, balanced exposure, and a polished, consistent finish across the full collection.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Some developments are big enough that the view from above really helps sell them. For those, we bring in <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone photography</a> to show how the building relates to its site and surroundings.</p>
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
                            <h3>Do you photograph both interiors and exteriors?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We photograph complete architectural projects, including exterior façades, interior spaces, architectural details, and surrounding environments.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide architectural photography across the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We regularly photograph projects throughout Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>When is the best time to photograph a building?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>It depends on the building’s orientation and available light. We schedule shoots at the time of day that best showcases the architecture, which we determine during the planning stage after reviewing the project.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you photograph occupied buildings?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We regularly work in hotels, offices, retail spaces, and other operational properties while minimising disruption to daily activities.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Where can the photographs be used?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>The images are suitable for websites, project portfolios, marketing materials, presentations, editorial publications, and award submissions.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20architectural%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your architectural photography project today</h2>
                    <p class="svc-text">Precision photography for architects, developers, and designers anywhere across the UAE. Send us the project and its location, and we’ll come back with availability and a quote.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20architectural%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20architectural%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
