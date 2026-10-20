@extends('layouts.app')

@section('seo')
@include('seo.family-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Family-photography-services-in-Dubai.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Family photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Timeless family portraits celebrating genuine emotion, lasting connection, and unforgettable memories — for every family, every occasion, and every setting across the UAE.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20family%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your family shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your family shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your family shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Session type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Classic family" required>
                                    <span>Classic family</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Festive" required>
                                    <span>Festive</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Beach" required>
                                    <span>Beach</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Maternity" required>
                                    <span>Maternity</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Outdoor" required>
                                    <span>Outdoor</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Setting</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="setting" value="Studio" required>
                                    <span>Studio</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="setting" value="Beach or outdoor" required>
                                    <span>Beach or outdoor</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="setting" value="At home" required>
                                    <span>At home</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. studio, beach, park or your home">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How many people in the photos?</label>
                            <select id="svc-guests" name="guests">
                                <option value="2 to 3">2 to 3</option>
                                <option value="4 to 6">4 to 6</option>
                                <option value="7 to 10">7 to 10</option>
                                <option value="More than 10">More than 10</option>
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
                <p class="svc-fact-text">&amp; insured production company</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Bilingual</p>
                <p class="svc-fact-text">Arabic / English crew</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Studio, beach</p>
                <p class="svc-fact-text">&amp; outdoor sessions</p>
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
                <p class="svc-text">Whether you are in Dubai, Abu Dhabi, or Sharjah, we tailor each photoshoot to reflect your family’s personality, style, and vision — with studio sessions in Dubai and on-location sessions available across all seven Emirates.</p>
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
            <li >Gender reveals</li>
            <li >Birthdays</li>
            <li >Ramadan iftar</li>
            <li >UAE National Day</li>
            <li >Christmas portraits</li>
            <li >Eid family sessions</li>
            <li >Anniversaries</li>
            <li >Family reunions</li>
            <li >Newborn arrivals</li>
            <li >Beach golden hours</li>
            <li  aria-hidden="true" >Gender reveals</li>
            <li  aria-hidden="true" >Birthdays</li>
            <li  aria-hidden="true" >Ramadan iftar</li>
            <li  aria-hidden="true" >UAE National Day</li>
            <li  aria-hidden="true" >Christmas portraits</li>
            <li  aria-hidden="true" >Eid family sessions</li>
            <li  aria-hidden="true" >Anniversaries</li>
            <li  aria-hidden="true" >Family reunions</li>
            <li  aria-hidden="true" >Newborn arrivals</li>
            <li  aria-hidden="true" >Beach golden hours</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why Families Across the UAE Choose Us</h2>
                <div class="svc-text">Every family has its own story, and our family photography is about preserving those important moments. We do it with style, in a real way, and with a bit of creativity. We work with people all over the UAE, and our goal is to make family portraits that last. Ones that truly show off honest feelings, strong connections, and memories you will not forget.</div>
                <div class="svc-text">We’ve been doing this since 2014. Over that time, we’ve tried to mix technical skill with genuine warmth, so every family photoshoot feels relaxed, not rushed and not overly staged with everyone grinning on command.</div>
                <div class="svc-text">It does not matter if you are looking for a big family <a href="%%BASE%%/portrait-photography-in-uae">portrait shoot</a> or maybe a smaller, more personal <a href="%%BASE%%/couple-photography-in-uae">couple photography</a> session. We make sure each photoshoot fits your specific personality, your style, and the important relationships in your life.</div>
                <div class="svc-text">Each session comes with thoughtful planning and flexible packages, and the turnaround is fast. Your memories deserve to be delivered, not left sitting on a hard drive while you wait.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20family%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Family photography services for every setting</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Family photoshoots</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Festive family photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'map-marker-alt'])
                        <span>Beach family photoshoots</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'grin-stars'])
                        <span>Family maternity photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'map-pin'])
                        <span>Outdoor family photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Family-photography-services-in-Dubaivd-682x1024.webp" alt="Family photography services in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Family photoshoots</h3>
                            <div class="svc-panel-text"><p>These sessions are relaxed and natural, and mostly we just let your family get on with being a family. Mum sorting out somebody’s hair, grandad pulling silly faces at the baby, the kids squabbling over who gets to sit next to whom. That everyday connection between parents, kids and grandparents is really what we’re there for. We’ll style it around your family’s personality and your preferred location, even if that turns out to be your own sofa at home.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my family shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/festive-1024x681.webp" alt="Festive family photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Festive family photography</h3>
                            <div class="svc-panel-text"><p>Plenty of families book us every year around Christmas, Eid or National Day, and for a few of them it’s turned into a bit of a tradition. We go with warm tones and cosy styling. The photos tend to end up on holiday cards, or framed as yearly family keepsakes, and it’s quite something seeing them lined up and noticing how much the kids have grown.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my festive shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/beach786-e1784268281121-1024x590.webp" alt="Beach family photoshoot in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Beach family photoshoots</h3>
                            <div class="svc-panel-text"><p>We shoot these at golden hour along Dubai’s coastline, once the sun has dropped and the sand isn’t scorching anymore. The light goes soft, the kids make a run for the water the second they’re out of the car, and someone always ends up splashed. Those playful, candid moments, with iconic waterfront backdrops behind them, are the ones the whole family will love looking at later.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my beach shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/meternity3889-684x1024.webp" alt="Family maternity photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Family maternity photography</h3>
                            <div class="svc-panel-text"><p>It’s nice to have something to remember this stage by before your newest arrival comes along. This is a gentle, intimate session that celebrates your growing family. There’s the maternity glow, of course, but there are also little moments with your partner and with the big brother or sister-to-be, who usually can’t keep their hands off the bump. If you’d like a session that’s just about you, take a look at our dedicated maternity sessions as well.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my maternity shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/outdouor.webp" alt="Outdoor family photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Outdoor family photography</h3>
                            <div class="svc-panel-text"><p>Some families just don’t feel like themselves in a studio setting, and honestly that’s fair enough. We’ll go out to the desert, a park, or one of the iconic Dubai landmarks and use it as the backdrop. The portraits end up candid and a little adventurous, full of movement and authentic emotion, mainly because nobody’s being told to sit still.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my outdoor shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your family and preferred setting and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20family%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent family sessions</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Beach</button>
                    <button type="button" data-filter="1">Outdoor</button>
                    <button type="button" data-filter="2">Milestones</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Family-photography-services-in-Dubai5.jpg" data-full="%%BASE%%/assets/images/2026/07/Family-photography-services-in-Dubai5.jpg" data-tag="0" alt="Family running along the beach during a family photoshoot" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/beach786-e1784268281121-1024x590.webp" data-full="%%BASE%%/assets/images/2026/07/beach786-e1784268281121.webp" data-tag="0" alt="Beach family photoshoot in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/why-choose-us-2360.jpg" data-full="%%BASE%%/assets/images/2026/07/why-choose-us-2360.jpg" data-tag="1" alt="Outdoor family photography by the water" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/outdouor.webp" data-full="%%BASE%%/assets/images/2026/07/outdouor.webp" data-tag="1" alt="Outdoor family photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/festive-1024x681.webp" data-full="%%BASE%%/assets/images/2026/07/festive.webp" data-tag="2" alt="Festive family photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/meternity3889-684x1024.webp" data-full="%%BASE%%/assets/images/2026/07/meternity3889-684x1024.webp" data-tag="2" alt="Family maternity photography in Dubai" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Family Photography Packages Built Around Your Family’s Size and Needs</h2>
                <div class="svc-feature-text"><p>Families come in all shapes. Some are just mum, dad, and a baby. Some have four kids, a dog, and a nanny holding the snacks. One package for all of them would be silly, so our family photography services are flexible. We work them out based on your group size and how long you’d like the session to go on.</p><p>If you’re a couple with one child, a short family studio photography sitting is normally the way to go. A bigger household with several kids, or one of those larger extended groups with three generations in it, usually needs longer. We tend to take them outdoors where there’s room to move, so the natural interaction happens on its own and nobody feels rushed.</p><p class="svc-feature-label">Add-ons you can pick:</p><ul><li>Additional locations</li><li>Extra edited images</li><li>Printed keepsakes</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Build my package</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/photographer-working-with-family-studio_392895-365.jpg')"><span>Studio sitting</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Family-photography-services-in-Dubaivd.jpg')"><span>Small families</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Family-photography-services-in-Dubai.jpg')"><span>Beach and outdoor</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Family Photography Across the UAE</h2>
                <p class="svc-text">Knowing UAE locations inside out helps a lot. We know where the best light falls at each of the beach family photoshoot spots and more or less what time to show up, and we know how a studio setup performs across different seasons.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Studio sessions, golden hour on the coastline, parks and landmarks</span></div>
                <div class="svc-table-row"><span>Desert</span><span>Golden-hour shoots out past the city</span></div>
                <div class="svc-table-row"><span>Abu Dhabi and Sharjah</span><span>On-location sessions at your chosen spot</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Ajman, Ras Al Khaimah, Umm Al Quwain, Fujairah and Al Ain</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Booking your family photoshoot, step by step</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Consultation and booking: share your vision, preferred location, and session type. We help you choose the ideal date, style, and package for your family.</p></li>
                <li><span class="svc-step-number">2</span><p>Planning your session: we guide you with outfit recommendations, location suggestions, and simple preparation tips so everyone feels comfortable and ready on the day.</p></li>
                <li><span class="svc-step-number">3</span><p>Your photoshoot: a relaxed, professionally guided session capturing genuine smiles, natural interactions, and timeless family portraits in your chosen setting.</p></li>
                <li><span class="svc-step-number">4</span><p>Editing and delivery: carefully edited photographs delivered as a beautifully curated high-resolution gallery, ready for downloading, printing, and sharing.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Planning something smaller? Take a look at our <a href="%%BASE%%/couple-photography-in-uae">couple photography</a> and <a href="%%BASE%%/portrait-photography-in-uae">portrait photography</a> sessions.</p>
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
                            <h3>How long does a family photoshoot usually take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Most family photoshoot sessions run between 1 and 2 hours, depending on family size, location, and whether outfit changes are included. We keep pacing flexible for younger children.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>What should we wear for our family photography session?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Coordinated, non-matching outfits work best. Think complementary colours — soft neutrals or pastels — rather than identical outfits, which tend to look overly staged in photographs.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer both indoor and outdoor family photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide family studio photography for weather-proof, controlled sessions, as well as outdoor options including beach family photoshoots and desert locations across the UAE.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can we include grandparents or extended family in the session?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Multi-generational and extended family photography sessions are welcome — just let us know in advance so we can plan group logistics accordingly.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>What happens if the weather doesn&#039;t cooperate on shoot day?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>For outdoor sessions, we can reschedule at no extra cost or move to an indoor family studio photography setup, so your session is never lost to the weather.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How soon will we receive our edited photos?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Edited, high-resolution images are typically delivered within 2–3 weeks via a private online gallery, though turnaround may vary during peak seasons.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20family%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your family photography session today</h2>
                    <p class="svc-text">Natural, timeless family portraits for every family, every occasion, and every setting across Dubai and the UAE.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20family%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20family%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
