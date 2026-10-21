@extends('layouts.app')

@section('seo')
@include('seo.professional-live-streaming-services-across-dubai-and-the-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/04/Hybrid-Event-Live-Streaming-e1784278164682.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Live streaming services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Broadcast-quality multi-camera production for conferences, hybrid events, and corporate broadcasts — reaching audiences anywhere in the world.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20stream.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your live stream</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your live stream">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your live stream">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Event type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Conference" required>
                                    <span>Conference</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Hybrid event" required>
                                    <span>Hybrid event</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Government event" required>
                                    <span>Government event</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Launch or ceremony" required>
                                    <span>Launch or ceremony</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Stream to</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="platform" value="YouTube or Facebook" required>
                                    <span>YouTube or Facebook</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="platform" value="LinkedIn Live" required>
                                    <span>LinkedIn Live</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="platform" value="Zoom or Teams" required>
                                    <span>Zoom or Teams</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="platform" value="Several platforms" required>
                                    <span>Several platforms</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. hotel ballroom, exhibition centre">
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
                <p class="svc-fact-title">8+ platforms</p>
                <p class="svc-fact-text">Supported, at the same time</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Backup connectivity</p>
                <p class="svc-fact-text">Tested before every event</p>
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
                <p class="svc-text">Whether your event takes place in a hotel ballroom, exhibition centre, university, or government facility, our experienced crew delivers the same level of planning and production quality across every Emirate.</p>
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
            <li >Corporate conferences</li>
            <li >Government events</li>
            <li >Medical conferences</li>
            <li >Universities</li>
            <li >Award ceremonies</li>
            <li >Hybrid events</li>
            <li >Press conferences</li>
            <li >Investor meetings</li>
            <li >Charity events</li>
            <li >Religious gatherings</li>
            <li  aria-hidden="true" >Corporate conferences</li>
            <li  aria-hidden="true" >Government events</li>
            <li  aria-hidden="true" >Medical conferences</li>
            <li  aria-hidden="true" >Universities</li>
            <li  aria-hidden="true" >Award ceremonies</li>
            <li  aria-hidden="true" >Hybrid events</li>
            <li  aria-hidden="true" >Press conferences</li>
            <li  aria-hidden="true" >Investor meetings</li>
            <li  aria-hidden="true" >Charity events</li>
            <li  aria-hidden="true" >Religious gatherings</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Why-choose-Dubai-Fotographer-for-live-streaming-e1783166774846.jpg')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why choose Dubai Fotographer for live streaming?</h2>
                <div class="svc-text">Since 2014, Dubai Fotographer has helped businesses and organizations deliver professional live productions that connect audiences without compromising quality. Clients trust us because we bring more than a decade of production experience, dedicated live streaming specialists, multi-camera broadcast production, and reliable streaming infrastructure with backup connectivity, with photography, videography, and live production handled under one team rather than separate vendors.</div>
                <div class="svc-text">We started in 2014. Since then, our production team has handled live streaming and video production for all kinds of events: conferences, exhibitions, product launches, <a href="%%BASE%%/corporate-event-photography-videography">corporate meetings</a>, government events, medical seminars, educational programs, and hybrid events. We’re a fully licensed and insured production company, and our crew is bilingual. Arabic and English, both. That matters more than you’d think when you’re coordinating with speakers, VIPs, and venue staff on the day.</div>
                <div class="svc-text">Abdul Rehman leads the company. With him is a team of experienced videographers, camera operators, photographers, broadcast technicians, audio engineers, editors, and production specialists. They work together on your event the whole way through, from the first planning call to the final broadcast. Need edited footage after the event? Post-event delivery comes with a 48-hour turnaround option.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20stream.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">One team, every part of the broadcast</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Multi-camera broadcasts</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'youtube'])
                        <span>Multi-platform streaming</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'bolt'])
                        <span>Reliable infrastructure</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Hybrid &amp; virtual events</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/people-scaled.jpg" alt="Multi-camera live broadcast of a conference in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Multi-camera broadcasts</h3>
                            <div class="svc-panel-text"><p>One camera, stuck in one spot. That’s how a lot of events still get streamed. And honestly? Viewers get bored fast. So we use a <a href="%%BASE%%/multi-camera-event-recording">multi-camera production</a> workflow. Wide-angle views to show the whole room. Close-up shots on whoever’s talking. Cameras on the audience to catch the interaction. Presentation screens. Proper speaker coverage.</p><p>Our production team cuts between camera angles in real time, as things happen, so the switches feel natural instead of jumpy. The result looks a lot like what you’d see on professional television.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my broadcast</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Multi-platform-streaming.jpg" alt="Multi-platform live streaming" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Multi-platform streaming</h3>
                            <div class="svc-panel-text"><p>YouTube, Facebook, LinkedIn, Zoom, and Teams, simultaneously.</p><p>Different audiences prefer different platforms. Our workflow lets you broadcast across multiple platforms simultaneously, without changing the underlying production setup: YouTube Live, Facebook Live, Instagram Live, LinkedIn Live, Zoom, Microsoft Teams, Vimeo and custom RTMP.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my stream</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Reliable-infrastructure-behind-every-broadcast.jpg" alt="Reliable infrastructure behind every live broadcast" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Reliable infrastructure</h3>
                            <div class="svc-panel-text"><p>Every live broadcast we run is backed by professional production equipment and solid streaming infrastructure, with backup connectivity ready to go. If one connection drops, another one takes over.</p><p>The setup: professional cameras, broadcast switching systems, audio mixing, presentation integration for slides and videos, lower thirds and graphics, multi-platform streaming and full event recording. We test everything before the event starts. Every time.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my setup</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Hybrid-virtual-events.jpg" alt="Hybrid and virtual event live streaming" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Hybrid &amp; virtual events</h3>
                            <div class="svc-panel-text"><p>Remote speakers, virtual attendees, and live Q&amp;A alongside the in-venue audience.</p><p>Your audience might be watching from the next city. Or from halfway across the world. Either way, we make sure they catch every important moment, clearly and reliably, and you can run your event with confidence.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my hybrid event</a>
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
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20stream.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent live productions</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Broadcast</button>
                    <button type="button" data-filter="1">Events</button>
                    <button type="button" data-filter="2">Hybrid</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Multi-camera-broadcasts.jpg" data-full="%%BASE%%/assets/images/2026/07/Multi-camera-broadcasts.jpg" data-tag="0" alt="Multi-camera broadcast crew at a live event" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Reliable-infrastructure-behind-every-broadcast.jpg" data-full="%%BASE%%/assets/images/2026/07/Reliable-infrastructure-behind-every-broadcast.jpg" data-tag="0" alt="Reliable infrastructure behind every live broadcast" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMG_6208-1.jpg" data-full="%%BASE%%/assets/images/2026/07/IMG_6208-1.jpg" data-tag="1" alt="Couple filmed at a celebration by Dubai Fotographer" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Multi-platform-streaming.jpg" data-full="%%BASE%%/assets/images/2026/07/Multi-platform-streaming.jpg" data-tag="1" alt="Streaming to multiple platforms at once" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Hybrid-virtual-events.jpg" data-full="%%BASE%%/assets/images/2026/07/Hybrid-virtual-events.jpg" data-tag="2" alt="Hybrid event with remote and in-venue audiences" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/04/Hybrid-Event-Live-Streaming-e1784278164682.jpg" data-full="%%BASE%%/assets/images/2026/04/Hybrid-Event-Live-Streaming-e1784278164682.jpg" data-tag="2" alt="Hybrid event live streaming in Dubai" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Content That Outlasts the Event Itself</h2>
                <div class="svc-feature-text"><p>The stream ends. The lights go off. Everyone goes home. Is that it? It shouldn’t be. That’s why our production team records every event in high quality, alongside the live streaming. You end up with footage you can actually reuse for future marketing, for training, for internal and external communications.</p><p>With a proper recording, that single event becomes a library of digital content.</p><p class="svc-feature-label">Many clients book alongside the stream:</p><ul><li>Multi-camera event recording</li><li>Corporate event photography</li><li><a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">Drone coverage</a> from above</li><li>Instant photo printing for guests</li><li>The <a href="%%BASE%%/360-video-booth-experience-for-immersive-event-engagement">360 video booth experience</a></li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add recording to my quote</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Multi-camera-recording.jpg')"><span>Full recording</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Drone-coverage.jpg')"><span>Drone coverage</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/IMGL9338-1.jpg')"><span>Event photography</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Live Streaming Across the UAE</h2>
                <p class="svc-text">Whether your event takes place in a hotel ballroom, exhibition centre, university, or government facility, we travel to your venue anywhere across the UAE.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Hotel ballrooms, exhibition centres and corporate venues</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Government facilities, universities and conference venues</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">How we plan &amp; run your live stream</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>You tell us about your event and the platforms you want to reach, and we get back with availability and pricing, usually within a few hours.</p></li>
                <li><span class="svc-step-number">2</span><p>We plan the camera positions, audio, presentation feeds and backup connectivity with you and the venue.</p></li>
                <li><span class="svc-step-number">3</span><p>On the day we test everything before the event starts, then run the multi-camera broadcast with live switching.</p></li>
                <li><span class="svc-step-number">4</span><p>We record every event in high quality alongside the stream, and edited footage can follow with a 48-hour turnaround option.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Need full recordings of every session too? See our <a href="%%BASE%%/multi-camera-event-recording">multi-camera event recording</a>.</p>
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
                            <h3>How many cameras are used for a live stream production?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>This depends on the event format and venue, but most corporate live streams use 2-4 cameras for a polished multi-angle broadcast. Larger conferences or multi-stage events may need more, confirmed during planning.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>What happens if our internet connection drops during the event?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Our production includes backup connectivity to minimize the risk of an interrupted broadcast, and we test the full setup before the event begins to catch potential issues in advance.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can we stream to multiple platforms at the same time?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We support simultaneous streaming to platforms like YouTube Live, Facebook Live, LinkedIn Live, Zoom, and Microsoft Teams, so you can reach different audiences without running separate productions.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide a recording in addition to the live stream?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Most hospitality clients combine photography and videography in one session, which keeps lighting, styling, and visual tone consistent across both formats.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you support hybrid events with both in-person and remote attendees?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We’re based in Dubai and shoot for restaurants, hotels, and food brands across all seven Emirates.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20stream.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book professional live streaming services today</h2>
                    <p class="svc-text">Broadcast-quality production anywhere in Dubai, Abu Dhabi, or across the UAE.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20stream.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20stream.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
