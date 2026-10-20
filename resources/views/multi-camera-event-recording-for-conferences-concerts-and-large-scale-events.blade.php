@extends('layouts.app')

@section('seo')
@include('seo.multi-camera-event-recording-for-conferences-concerts-and-large-scale-events')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Multi-camera-event-recording-in-Dubai-serving-all-of-the-UAEjpg.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Multi-camera event recording in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Broadcast-quality coverage for conferences, corporate events, and live productions — every angle, every speaker, every key moment.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20multi-camera%20event%20recording.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your event recording</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your event recording">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your event recording">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Event type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Conference or summit" required>
                                    <span>Conference or summit</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Product launch" required>
                                    <span>Product launch</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Award ceremony" required>
                                    <span>Award ceremony</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Exhibition or AGM" required>
                                    <span>Exhibition or AGM</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Add to recording</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="extras" value="Recording only" required>
                                    <span>Recording only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="extras" value="Live streaming" required>
                                    <span>Live streaming</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="extras" value="Event photography" required>
                                    <span>Event photography</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="extras" value="Drone coverage" required>
                                    <span>Drone coverage</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. DWTC, ADNEC, hotel name">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How long is the event?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Up to 2 hours">Up to 2 hours</option>
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
                <p class="svc-fact-title">Since 2014</p>
                <p class="svc-fact-text">Dubai, Abu Dhabi and across the UAE</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">2 to 4 cameras</p>
                <p class="svc-fact-text">Synchronized, scaled to your event</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48 hours</p>
                <p class="svc-fact-text">Turnaround available on selected projects</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Arabic and English</p>
                <p class="svc-fact-text">Bilingual crew</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">Based in Dubai, our production crews regularly travel across the UAE to support conferences, exhibitions, government projects, and corporate organizations, delivering the same professional planning and crew wherever your event takes place.</p>
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
            <li >Conferences</li>
            <li >Board meetings</li>
            <li >Product launches</li>
            <li >Exhibitions</li>
            <li >Award ceremonies</li>
            <li >Industry summits</li>
            <li >Annual general meetings</li>
            <li >Investor presentations</li>
            <li >Medical conferences</li>
            <li >Hybrid events</li>
            <li  aria-hidden="true" >Conferences</li>
            <li  aria-hidden="true" >Board meetings</li>
            <li  aria-hidden="true" >Product launches</li>
            <li  aria-hidden="true" >Exhibitions</li>
            <li  aria-hidden="true" >Award ceremonies</li>
            <li  aria-hidden="true" >Industry summits</li>
            <li  aria-hidden="true" >Annual general meetings</li>
            <li  aria-hidden="true" >Investor presentations</li>
            <li  aria-hidden="true" >Medical conferences</li>
            <li  aria-hidden="true" >Hybrid events</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/why-choose-us-683x1024.webp')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why Choose Dubai Fotographer?</h2>
                <div class="svc-text">Short answer? We’ve been doing this a long time. Since 2014, businesses all over the UAE have called us when an event really matters. They trust us to show up, be professional, be reliable, and bring some creative expertise to the table.</div>
                <div class="svc-text">Abdul Rehman leads the company. His team? Experienced videographers, photographers, camera operators, drone specialists, editors, audio technicians, and production coordinators. They work together on your event from the first planning meeting right through to final delivery. We’re a fully licensed and insured production company. Our crew is bilingual in Arabic and English and available for venue coordination.</div>
                <div class="svc-text">Your event isn’t just an event. It’s your brand, out in public, in front of the people you care about. So our job is pretty clear. Catch every important moment. Get it right. Make it look professional, at the quality your audience expects from you.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20multi-camera%20event%20recording.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Professional Coverage for Corporate, Business &amp; Live Events</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Every important angle</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'microphone'])
                        <span>Conference recording</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'bolt'])
                        <span>Live camera switching</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Content for marketing</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/How-multi-camera-recording-captures-every-important-angle-1024x698.webp" alt="Multi-Camera Event Recording Services in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Every important angle</h3>
                            <div class="svc-panel-text"><p>We put several cameras in the room, each with its own operator, all synced. One holds the wide establishing shot. One sticks with the speaker for close-ups. Another one’s pointed at the audience, because reactions sell the moment better than anything. Then there are the presentation screens, your branding elements, bits of venue detail.</p><p>Everything’s recorded simultaneously, so later in the edit we’ve actually got options. The video moves. It cuts to the right thing at the right time instead of sitting there static like a CCTV feed.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my recording</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/ASF01055-1-1-1024x683.webp" alt="Multi-Camera Event Recording Services in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Conference recording</h3>
                            <div class="svc-panel-text"><p>Keynote speakers, panel discussions, workshops, audience interaction, presentation slides, live demonstrations. All of it needs to be recorded properly, and none of it can be disrupted by a camera guy walking in front of the stage.</p><p>We sort everything out before the event starts. Cameras, audio systems, presentation feeds, lighting- we make sure they all work together, so it runs smoothly from the opening speech to the last Q&amp;A.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my conference</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Live-Camera-Switching-Broadcast-Quality-Production-574x1024.webp" alt="Multi-Camera Event Recording Services in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Live camera switching</h3>
                            <div class="svc-panel-text"><p>Several camera feeds come into one desk, and our operator cuts between them as the event unfolds. Speaker, wide shot, audience, slides, back to the speaker. The transitions stay smooth, and the visual quality stays consistent from start to finish.</p><p>It pays off at hybrid events, annual meetings, award ceremonies and government events, and with <a href="%%BASE%%/professional-live-streaming-services-across-dubai-and-the-uae">live streaming</a> it looks polished whether you’re sitting in the hall or watching on a laptop at home.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote live switching</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Professional-coverage-for-corporate-business-live-events-1024x683.webp" alt="Professional coverage for corporate, business and live events" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Content for marketing</h3>
                            <div class="svc-panel-text"><p>Today’s events are no longer limited to the audience inside the venue. We focus on telling the complete story through multiple camera perspectives, synchronized audio, cinematic visuals, and seamless editing.</p><ul><li>Campaigns and social: polished clips ready for websites, YouTube, and LinkedIn.</li><li>Training and communications: full sessions repurposed for onboarding and internal use.</li><li>Investor and PR assets: long-term digital assets for presentations and reporting.</li></ul></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my event content</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your event and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20multi-camera%20event%20recording.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent event productions</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Conferences</button>
                    <button type="button" data-filter="1">Live production</button>
                    <button type="button" data-filter="2">On set</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/ASF01055-1-1-1024x683.webp" data-full="%%BASE%%/assets/images/2026/07/ASF01055-1-1.webp" data-tag="0" alt="Multi-Camera Event Recording Services in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Professional-coverage-for-corporate-business-live-events-1024x683.webp" data-full="%%BASE%%/assets/images/2026/07/Professional-coverage-for-corporate-business-live-events.webp" data-tag="0" alt="Professional coverage for corporate, business and live events" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Live-Camera-Switching-Broadcast-Quality-Production-574x1024.webp" data-full="%%BASE%%/assets/images/2026/07/Live-Camera-Switching-Broadcast-Quality-Production.webp" data-tag="1" alt="Multi-Camera Event Recording Services in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Live-camera-switchingjpg.jpg" data-full="%%BASE%%/assets/images/2026/07/Live-camera-switchingjpg.jpg" data-tag="1" alt="Live camera switching at an event" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Multi-camera-event-recording-in-Dubai-serving-all-of-the-UAEjpg.jpg" data-full="%%BASE%%/assets/images/2026/07/Multi-camera-event-recording-in-Dubai-serving-all-of-the-UAEjpg.jpg" data-tag="2" alt="Multi-camera event recording in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/06/photo-1490971774356-7fac993cc438.avif" data-full="%%BASE%%/assets/images/2026/06/photo-1490971774356-7fac993cc438.avif" data-tag="2" alt="Lighting and camera setup for an event production" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Photography, Videography &amp; Event Production Under One Roof</h2>
                <div class="svc-feature-text"><p>Here’s what clients tell us they like most. They make one call, and the whole creative side of the event is handled. You’re not hiring a photographer from here and a video guy from there and hoping they get along.</p><p>Big event or small, we adjust. Some projects only need a single production crew. Others need several specialist teams working side by side.</p><p class="svc-feature-label">Every event service, under one roof:</p><ul><li>Professional audio, with backup recording</li><li><a href="%%BASE%%/professional-live-streaming-services-across-dubai-and-the-uae">Live streaming</a> for remote audiences</li><li><a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">Drone coverage</a> for those big overhead shots</li><li>Event photography and instant photo printing</li><li>A <a href="%%BASE%%/360-video-booth-experience-for-immersive-event-engagement">360 video booth experience</a></li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add services to my quote</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Professional-audio-1024x1024.webp')"><span>Professional audio</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/04/cinematic-drone-videography-scaled.webp')"><span>Drone coverage</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/04/Professional-Live-Streaming.jpg')"><span>Live streaming</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Multi-Camera Event Recording Across the UAE</h2>
                <p class="svc-text">We cover the whole UAE, wherever you are. And once the event’s done, you won’t be waiting forever; post-production comes with a fast turnaround.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Conferences, exhibitions and corporate events</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Government projects, conferences and award ceremonies</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">How multi-camera recording works</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>You tell us about your event, venue and agenda, and we get back with availability and pricing, usually within a few hours.</p></li>
                <li><span class="svc-step-number">2</span><p>We confirm the camera setup and coordinate with the venue AV team on camera placement, audio and any restrictions.</p></li>
                <li><span class="svc-step-number">3</span><p>On the day, synchronized cameras with their own operators record every angle, with live switching if you need it.</p></li>
                <li><span class="svc-step-number">4</span><p>You receive a full edited recording, a shorter highlight video and raw footage if requested, on a timeline confirmed before the event.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Want remote audiences to watch live? Add <a href="%%BASE%%/professional-live-streaming-services-across-dubai-and-the-uae">live streaming</a> to your recording.</p>
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
                            <h3>How many cameras are included in a multi-camera recording?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>This depends on the event size, venue layout, and number of stages or speakers. Most corporate events use 2-4 synchronized cameras, while larger conferences or multi-stage productions may need more. We confirm the exact setup during planning based on your venue and agenda.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide a live stream feed in addition to recording?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Live camera switching and streaming can be added to any multi-camera booking, allowing remote audiences to watch in real time while we also capture full-quality footage for post-production.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you record events in venues with restricted AV access or technical setups?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We coordinate directly with venue AV teams ahead of the event to confirm camera placement, audio integration, and any restrictions, so the production runs smoothly without disrupting the event itself.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>What do we receive after the event is over?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Deliverables typically include a full edited recording, a shorter highlight video, and raw footage if requested, with turnaround timelines confirmed before the event based on the production scope.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can multi-camera recording be combined with photography or a 360 video booth?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Most clients pair multi-camera recording with event photography, live streaming, drone coverage, or a 360 video booth, all delivered by the same production team for consistent style and easier coordination.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20multi-camera%20event%20recording.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your multi-camera event recording today</h2>
                    <p class="svc-text">Broadcast-quality coverage anywhere in Dubai, Abu Dhabi, or across the UAE.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20multi-camera%20event%20recording.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20multi-camera%20event%20recording.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
