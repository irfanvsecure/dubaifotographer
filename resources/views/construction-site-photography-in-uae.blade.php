@extends('layouts.app')

@section('seo')
@include('seo.construction-site-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Construction-site-photography-services-in-Dubai.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Construction site photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Progress documentation, milestone photography, and aerial coverage for commercial, residential, industrial, and infrastructure projects across the UAE.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20construction%20site%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your project</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your project">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your project">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Project type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="project_type" value="Commercial" required>
                                    <span>Commercial</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="project_type" value="Residential" required>
                                    <span>Residential</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="project_type" value="Industrial" required>
                                    <span>Industrial</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="project_type" value="Infrastructure" required>
                                    <span>Infrastructure</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">How often?</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="schedule" value="Weekly or monthly" required>
                                    <span>Weekly or monthly</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="schedule" value="Key milestones" required>
                                    <span>Key milestones</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="schedule" value="Completion only" required>
                                    <span>Completion only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="schedule" value="Not sure yet" required>
                                    <span>Not sure yet</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="Site location and emirate">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Coverage</label>
                            <select id="svc-guests" name="guests">
                                <option value="Ground and drone">Ground and drone</option>
                                <option value="Ground-level only">Ground-level only</option>
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
                <p class="svc-fact-text">Of project documentation</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">7 Emirates</p>
                <p class="svc-fact-text">Covered from Dubai</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Licensed and insured</p>
                <p class="svc-fact-text">Production company</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">4 stages</p>
                <p class="svc-fact-text">From site preparation to completion</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">Whether your project is a commercial development in Dubai, an infrastructure scheme in Abu Dhabi, or an industrial facility in Sharjah, we deliver the same level of planning, consistency, and production quality regardless of location.</p>
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
            <li >Hotels &amp; hospitality</li>
            <li >Manufacturing plants</li>
            <li >Warehouses &amp; logistics</li>
            <li >Industrial facilities</li>
            <li >Residential communities</li>
            <li >Commercial developments</li>
            <li >Infrastructure projects</li>
            <li >Healthcare facilities</li>
            <li >Educational institutions</li>
            <li  aria-hidden="true" >Hotels &amp; hospitality</li>
            <li  aria-hidden="true" >Manufacturing plants</li>
            <li  aria-hidden="true" >Warehouses &amp; logistics</li>
            <li  aria-hidden="true" >Industrial facilities</li>
            <li  aria-hidden="true" >Residential communities</li>
            <li  aria-hidden="true" >Commercial developments</li>
            <li  aria-hidden="true" >Infrastructure projects</li>
            <li  aria-hidden="true" >Healthcare facilities</li>
            <li  aria-hidden="true" >Educational institutions</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Professional-construction-site-photography-for-every-stage-of-your-project.jpg')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Professional Construction Site Photography for Every Stage of Your Project</h2>
                <div class="svc-text">A construction project changes every week. The foundations you poured in March are buried under three floors by June, and unless someone took a proper photo, there’s no real record they were ever there.</div>
                <div class="svc-text">That’s what professional construction site photography is for. It gives you a detailed visual record of how a project progresses, so your business can document every stage, from the first groundwork right through to completion. The images come in handy for project reporting and for keeping stakeholders in the loop, and over time they build up into long-term documentation and a valuable record of the work your team delivered.</div>
                <div class="svc-text">At Dubai Fotographer, we work with developers, contractors, <a href="%%BASE%%/architectural-photography-in-uae">architects</a>, engineering firms, and industrial businesses all over the UAE. The construction site photography we produce is meant to show the scale, the quality, and the progress of each project accurately- nothing exaggerated, and nothing missed. We started in 2014; Abdul Rehman has led the company since then, and in that time we’ve photographed projects of all sizes. We’re a fully licensed and insured production company, and our crew is bilingual in Arabic and English, which helps a lot when you’re coordinating with site managers and safety officers.</div>
                <div class="svc-text">No two projects need the same documentation. Some clients want regular progress updates, every week or every month. Others only care about key milestones, or just the completed development at the end. We plan the photography around site activity and your project timelines, so you end up with a consistent collection of images. Those photos stay useful for project management, for <a href="%%BASE%%/real-estate-photography-videography-services-in-uae">property portfolios,</a> and for future business communications, long after construction has been completed.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20construction%20site%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Construction Photography Services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Progress Documentation</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Interiors and Exteriors</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Stakeholder Reporting</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'file-alt'])
                        <span>Project Portfolios and Tenders</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Why-choose-Dubai-Fotographer-for-construction-site-photography-1024x682.webp" alt="Construction site progress photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Progress Documentation</h3>
                            <div class="svc-panel-text"><p>By photographing agreed milestones throughout the build, project teams can maintain a clear visual timeline that demonstrates completed work, tracks structural progress, and supports communication between contractors, consultants, investors, and clients.</p><ul><li><strong>Site preparation:</strong> Ground clearing, foundation work, and early structural activity documented from the start.</li><li><strong>Structural progress:</strong> Regular milestone visits capturing completed work and structural development at agreed intervals.</li><li><strong>Interior &amp; fit-out:</strong> MEP work, interior finishes, and fit-out progress documented with consistency.</li><li><strong>Completion:</strong> Final photography presenting the delivered development for handover and marketing.</li></ul></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my progress shoots</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/dDesign-Light-Perspective-in-Architectural-Photography-399-1024x681.webp" alt="Architectural Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Interiors and Exteriors</h3>
                            <div class="svc-panel-text"><p>A site in month two and the same site in month fourteen are really two different shoots. While the exterior structural work is going on, we go wide. Contextual shots like that show the scale, how the facade progress is coming along, and how the development sits within its surroundings.</p><p>Interior fit-out is a whole other thing. You’re working in closer quarters, the lighting conditions are tighter, and what people care about now is the finishes, the MEP work, and the detail. When we’re doing <a href="%%BASE%%/interior-photographer-in-uae">interior photography</a> on active sites, we put in the same precision we would for a completed space that’s been fully furnished.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my site shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Stakeholder-reporting.jpg" alt="Construction photography for stakeholder reporting" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Stakeholder Reporting</h3>
                            <div class="svc-panel-text"><p>Organised image collections ready for investor updates, client reports, and project presentations.</p><p>The same photographs also work as corporate imagery for annual reports, project stories for case studies, and company portfolios for your website content.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my reporting photos</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Project-portfolios-tenders.jpg" alt="Construction project portfolio and tender photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Project Portfolios and Tenders</h3>
                            <div class="svc-panel-text"><p>A complete visual archive that demonstrates experience and supports future business development.</p><p>Each assignment gets planned around your construction schedule and your business objectives, so the final images fit whatever you need them for, be it reporting, stakeholder communication, marketing, or long-term project records.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my portfolio shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Document every stage, not just the finish. Tell us about your project for availability and pricing.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20construction%20site%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Construction site photography</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Sites</button>
                    <button type="button" data-filter="1">Aerial</button>
                    <button type="button" data-filter="2">Interiors</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Why-choose-Dubai-Fotographer-for-construction-site-photography-1024x682.webp" data-full="%%BASE%%/assets/images/2026/07/Why-choose-Dubai-Fotographer-for-construction-site-photography.webp" data-tag="0" alt="Cranes on an active construction site in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Professional-construction-site-photography-for-every-stage-of-your-project.jpg" data-full="%%BASE%%/assets/images/2026/07/Professional-construction-site-photography-for-every-stage-of-your-project.jpg" data-tag="0" alt="Professional construction site photography for every stage of your project" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Drone-photography-for-construction-sites.jpg" data-full="%%BASE%%/assets/images/2026/07/Drone-photography-for-construction-sites.jpg" data-tag="1" alt="Drone photography for construction sites" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Construction-site-photography-services-in-Dubai.jpg" data-full="%%BASE%%/assets/images/2026/07/Construction-site-photography-services-in-Dubai.jpg" data-tag="1" alt="Construction site photography services in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/dDesign-Light-Perspective-in-Architectural-Photography-399-1024x681.webp" data-full="%%BASE%%/assets/images/2026/07/dDesign-Light-Perspective-in-Architectural-Photography-399.jpg" data-tag="2" alt="Architectural Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Real-estate-hospitality-e1783339326792-1024x630.webp" data-full="%%BASE%%/assets/images/2026/07/Real-estate-hospitality-e1783339326792.jpg" data-tag="2" alt="Completed hospitality interior in the UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Drone Photography for Construction Sites</h2>
                <div class="svc-feature-text"><p>Stand in the middle of a big construction site, and all you can see is the bit in front of you. A crane, a half-built wall, a lot of dust. The rest of the project is out of view.</p><p>That’s why large construction projects often need angles you just can’t get from ground level. <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">Drone photography</a> for construction sites gives you a comprehensive view of the whole site in one frame. It makes it much easier to document overall progress, keep an eye on how the different work areas relate to each other, and show off the real scale of the development.</p><p>We usually pair the aerial imagery with ground-based photography. The wide overhead photographs lay out the project so you can see how everything fits. The ground-level images then zoom in on the structural details, the construction methods, and the sections that are already finished.</p><p class="svc-feature-label">Especially useful on:</p><ul><li>Commercial developments</li><li>Industrial facilities</li><li>Infrastructure projects</li><li>Multi-building sites</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add drone to my quote</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Drone-photography-for-construction-sites.jpg')"><span>Aerial view</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Real-estate.jpg')"><span>Project scale</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Construction-site-photography-services-in-Dubai.jpg')"><span>Site context</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Construction Site Photography Across the UAE</h2>
                <p class="svc-text">Wherever your site is, we deliver the same level of planning, consistency, and production quality regardless of location.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Commercial developments</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Infrastructure schemes</span></div>
                <div class="svc-table-row"><span>Sharjah</span><span>Industrial facilities</span></div>
                <div class="svc-table-row"><span>Other emirates</span><span>Ajman, Ras Al Khaimah, Umm Al Quwain, Fujairah and Al Ain</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Construction Photography Process</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We discuss your project objectives, reporting requirements, construction schedule, and specific milestones.</p></li>
                <li><span class="svc-step-number">2</span><p>We coordinate site access with your project team before the first visit.</p></li>
                <li><span class="svc-step-number">3</span><p>Ground-level and aerial imagery captured efficiently around site activity, following all access and safety requirements throughout.</p></li>
                <li><span class="svc-step-number">4</span><p>Every selected photograph is professionally edited for consistency and delivered in high resolution, organised for easy reference across reports, presentations, and portfolios.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Need photos of the finished building as well? See our <a href="%%BASE%%/architectural-photography-in-uae">architectural photography</a> service.</p>
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
                            <h3>Can you photograph projects at different construction stages?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We can document projects from site preparation and structural work through to final completion, based on your preferred schedule and reporting requirements.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide drone photography for construction projects?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Drone photography is available for projects where aerial imagery helps document site progress, project scale, and the overall development.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you work on active construction sites?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We regularly photograph active construction sites while coordinating with site teams and following all access and safety requirements.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide construction photography across the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide construction site photography throughout Dubai and all seven Emirates for commercial, residential, industrial, and infrastructure projects.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How are the final photographs delivered?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>All selected images are professionally edited and delivered in high resolution, ready for use in reports, presentations, websites, marketing materials, and company portfolios.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20construction%20site%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your construction photography project today</h2>
                    <p class="svc-text">Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours. Progress documentation, milestone photography, and aerial coverage anywhere across the UAE.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20construction%20site%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20construction%20site%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
