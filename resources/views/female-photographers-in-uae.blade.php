@extends('layouts.app')

@section('seo')
@include('seo.female-photographers-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/05/dubai-fotographer-female-photography-team.webp')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Female photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Experienced female photographers and videographers for weddings, private celebrations, portraits, corporate events, and women-only occasions across the UAE.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20female%20photographer.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Request a female photographer</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Request a female photographer">
                    @csrf
                    <input type="hidden" name="form_name" value="Request a female photographer">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Occasion</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Wedding or bridal" required>
                                    <span>Wedding or bridal</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Private celebration" required>
                                    <span>Private celebration</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Corporate event" required>
                                    <span>Corporate event</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Portrait or maternity" required>
                                    <span>Portrait or maternity</span>
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
                                    <input type="radio" name="coverage" value="Photo only" required>
                                    <span>Photo only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Video only" required>
                                    <span>Video only</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. hotel, venue or private home">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many guests?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Just me or family">Just me or family</option>
                                <option value="Under 50">Under 50</option>
                                <option value="50 to 200">50 to 200</option>
                                <option value="Over 200">Over 200</option>
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
                <p class="svc-fact-title">Female team</p>
                <p class="svc-fact-text">Photographers and videographers</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Since 2014</p>
                <p class="svc-fact-text">Licensed and insured</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7</p>
                <p class="svc-fact-text">Emirates covered</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Bilingual</p>
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
                <p class="svc-text">From female photographers in Dubai to assignments in Abu Dhabi, Sharjah, and across every Emirate, we travel to hotels, venues, private residences, and event spaces throughout the UAE.</p>
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
            <li >Weddings</li>
            <li >Bridal preparation</li>
            <li >Henna nights</li>
            <li >Engagements</li>
            <li >Baby showers</li>
            <li >Maternity</li>
            <li >Portraits</li>
            <li >Women-only events</li>
            <li >Graduations</li>
            <li >Corporate events</li>
            <li  aria-hidden="true" >Weddings</li>
            <li  aria-hidden="true" >Bridal preparation</li>
            <li  aria-hidden="true" >Henna nights</li>
            <li  aria-hidden="true" >Engagements</li>
            <li  aria-hidden="true" >Baby showers</li>
            <li  aria-hidden="true" >Maternity</li>
            <li  aria-hidden="true" >Portraits</li>
            <li  aria-hidden="true" >Women-only events</li>
            <li  aria-hidden="true" >Graduations</li>
            <li  aria-hidden="true" >Corporate events</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Professional Female Photographers Across the UAE</h2>
                <div class="svc-text">Ask clients here what they want from a photographer, and quite a few won’t even mention the camera first. Finding the right female photographer in the UAE tends to be about comfort, privacy, and cultural considerations, with technical skill coming after. You see that most at <a href="%%BASE%%/wedding-photography-in-uae">weddings</a>, private celebrations, <a href="%%BASE%%/portrait-photography-in-uae">portraits,</a> and women-only events.</div>
                <div class="svc-text">That’s why Dubai Fotographer has experienced female photographers and videographers on the team. They’ve got the technical expertise you’d expect from anyone who works with us, and they offer the same professional photography services, but they’re also really good at putting every client at ease, pretty much from hello.</div>
                <div class="svc-text">We got started in 2014, and Abdul Rehman has run the company from day one. Since then, our team has worked with individuals, families, businesses and organisations all over the UAE, as a fully licensed and insured production company.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20female%20photographer.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Female Photographers for Every Occasion</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Female Wedding Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'grin-stars'])
                        <span>Maternity &amp; Bridal Preparation</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'shopping-bag'])
                        <span>Fashion, Beauty &amp; Content Creation</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Family &amp; Private Events</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'microphone'])
                        <span>Corporate &amp; Community Events</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Portrait Photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/06/female-photographer-photographing-wedding-1024x572.webp" alt="Female Photographers in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Female Wedding Photography</h3>
                            <div class="svc-panel-text"><p>From bridal preparations and family portraits to ceremony and reception, with full respect for your traditions and privacy.</p><p>Multicultural and Muslim weddings covered with full respect for traditions, privacy, and cultural requirements.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my wedding</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/05/female-photographer-dubai-private-shoot-1024x572.webp" alt="Female photographer with client in Dubai studio" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Maternity &amp; Bridal Preparation</h3>
                            <div class="svc-panel-text"><p>Think about pregnancy sessions, or a bride getting ready, or the henna preparations the night before. There are wardrobe changes, there’s close physical proximity, and there are moments most clients would just rather keep in a female-only setting. Our all-female photography team has done plenty of <a href="%%BASE%%/maternity-photography-in-uae">maternity sessions</a>, and the main thing we’ve learned is patience and discretion. We go at the client’s comfort level, not the pace of a shot list.</p><p>Bridal preparation gets the same treatment from us. Sometimes it’s a quiet private session for expecting mothers at home. Other times it’s henna and getting-ready coverage before a large wedding, with aunties, cousins and a makeup artist all squeezed into one room.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my session</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/05/Female-Photographers-3-1024x737.webp" alt="Female Photographers in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Fashion, Beauty &amp; Content Creation</h3>
                            <div class="svc-panel-text"><p>These days a lot of brands, stylists, and individual creators ask for a female photography team, and quite often privacy has nothing to do with it. The reason is the shoot itself.</p><p>Our female crew does a lot of <a href="%%BASE%%/fashion-photography-in-uae">fashion shoots</a>, for personal portfolios, brand campaigns, <a href="%%BASE%%/influencer-photography-in-uae">influencer content,</a> and editorial-style projects around Dubai and Abu Dhabi. On set, they work hand in hand with the stylists and MUAs, so nobody’s waiting around for anybody else.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/DSC00283-2-1024x683.webp" alt="Professional event photography by Dubai Fotographer" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Family &amp; Private Events</h3>
                            <div class="svc-panel-text"><p>Engagements, baby showers, birthdays, and graduations covered naturally, without unnecessary interruption.</p><p>One week it might be a small, intimate private gathering at someone’s home, and the next it’s one of those large <a href="%%BASE%%/corporate-event-photography-videography">corporate events</a> in a hotel ballroom.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my celebration</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/IMGL5601-1-1024x682.webp" alt="Product launch and brand activation photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Corporate &amp; Community Events</h3>
                            <div class="svc-panel-text"><p>Conferences, educational programmes, healthcare initiatives, and government functions covered with full professionalism.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my event</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/07/Untitled-design-768x768.webp" alt="Dubai Fotographer portfolio – commercial photography sample" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Portrait Photography</h3>
                            <div class="svc-panel-text"><p>Professional profiles, personal milestones, and personal brand sessions tailored to your preferred style.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my portrait</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your event and we’ll match you with the right professional, usually getting back to you within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20female%20photographer.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Female photography for every setting</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Weddings &amp; portraits</button>
                    <button type="button" data-filter="1">Events</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/INSTA-1-1.jpg" data-full="%%BASE%%/assets/images/2026/07/INSTA-1-1.jpg" data-tag="0" alt="Wedding and bridal photography by a female photographer" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Couple-family-portraits-e1784186536872.jpg" data-full="%%BASE%%/assets/images/2026/07/Couple-family-portraits-e1784186536872.jpg" data-tag="0" alt="Family portraits by a female photographer" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/06/female-photographer-photographing-wedding-1024x572.webp" data-full="%%BASE%%/assets/images/2026/06/female-photographer-photographing-wedding.webp" data-tag="0" alt="Female Photographers in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/ASF01055-1-1024x683.jpg" data-full="%%BASE%%/assets/images/2026/07/ASF01055-1.jpg" data-tag="1" alt="Corporate event photography in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMGL8825-1.jpg" data-full="%%BASE%%/assets/images/2026/07/IMGL8825-1.jpg" data-tag="1" alt="Event photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMGL5601-1-1024x682.webp" data-full="%%BASE%%/assets/images/2026/07/IMGL5601-1.jpg" data-tag="1" alt="Product launch and brand activation photography in Dubai" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Female Videography &amp; Women-Only Events</h2>
                <div class="svc-feature-text"><p>We have experienced female videographers who cover weddings, corporate events, interviews, private celebrations, and other occasions where clients prefer a woman to manage the video production.</p><p>Our female photographers regularly cover women-only events, private celebrations, bridal gatherings, and cultural occasions where privacy and discretion are important. Photography and videography come from the same team, so there’s no chasing two vendors or paying two invoices.</p><p class="svc-feature-label">Female videographers cover:</p><ul><li>Event highlights</li><li>Social media content</li><li>Personal keepsakes</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add video to my quote</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/women-wearing-hijab-having-good-time_23-2149255320-1-1024x654.webp')"><span>Female videography</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Gemini_Generated_Image_jvkfrxjvkfrxjvkf.png')"><span>Women-only events</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/ChatGPT-Image-Jul-6-2026-04_48_23-PM.png')"><span>One team</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Female Photographers Across the UAE</h2>
                <p class="svc-text">We work in Dubai, Abu Dhabi, and the other Emirates, and we’ll pair you up with the female photographer who suits your project.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Hotels, venues, private residences and event spaces</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Weddings, corporate events and private sessions</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Approach to Every Assignment</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Let us know you prefer a female photographer when you enquire, and we assign a professional whose experience matches your event.</p></li>
                <li><span class="svc-step-number">2</span><p>We discuss your event type, venue, any cultural or privacy considerations, and which moments matter most before the shoot.</p></li>
                <li><span class="svc-step-number">3</span><p>Our photographers work closely with clients and organisers throughout the event, capturing genuine moments without disrupting the experience.</p></li>
                <li><span class="svc-step-number">4</span><p>Every selected image is professionally edited for colour, lighting, and consistency, delivered in high resolution for digital and print use.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>“The best photographs happen when the person in front of the camera feels completely at ease — that’s what the right photographer makes possible.”</p>
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
                            <h3>1.Can I specifically request a female photographer?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. If you prefer a female photographer, simply let us know when making your enquiry. We’ll assign an experienced professional whose expertise matches your event and photography requirements.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. Do you provide female videographer services?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We have experienced female videographers who cover weddings, corporate events, interviews, private celebrations, and other occasions where clients prefer a woman to manage the video production.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. Do you photograph women-only events?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Our female photographers regularly cover women-only events, private celebrations, bridal gatherings, and cultural occasions where privacy and discretion are important. We work closely with organisers to ensure coverage respects the nature of the event.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. Do you provide services outside Dubai?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Our team works throughout the UAE, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain, for both photography and videography assignments.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. What types of events do your female photographers cover?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Our female photographers cover weddings, engagement parties, family celebrations, portraits, graduation ceremonies, corporate events, conferences, educational programmes, healthcare events, community initiatives, and many other private and public occasions.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20female%20photographer.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book a female photographer or videographer today</h2>
                    <p class="svc-text">Experienced, discreet, and culturally sensitive coverage anywhere in Dubai and across the UAE. Tell us about your event and we’ll match you with the right professional.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20female%20photographer.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20female%20photographer.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
