@extends('layouts.app')

@section('seo')
@include('seo.corporate-event-photography-videography')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/DSC00283-2.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Corporate Event Photography in Dubai</h1>
                <div class="svc-hero-text"><p>Getting a company event ready can take weeks, and then the whole thing is done in a few hours. What you keep are the pictures and videos. People use them on LinkedIn, in annual reports and in client emails long after the day. We cover corporate event photography in Dubai and across the UAE.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20corporate%20event.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your event</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your event">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your event">
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
                                    <input type="radio" name="event_type" value="Launch or activation" required>
                                    <span>Launch or activation</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Award night or gala" required>
                                    <span>Award night or gala</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Staff party or team event" required>
                                    <span>Staff party or team event</span>
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
                            <button type="button" class="svc-next">Next: date and venue</button>
                        </div>
                    </fieldset>

                    <fieldset class="svc-step">
                        <div class="svc-field">
                            <label class="svc-label" for="svc-date">Event date</label>
                            <input id="svc-date" type="date" name="date">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-venue">Venue</label>
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. DWTC, ADNEC, hotel name">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many guests?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Under 100">Under 100</option>
                                <option value="100 to 300">100 to 300</option>
                                <option value="300 to 1,000">300 to 1,000</option>
                                <option value="Over 1,000">Over 1,000</option>
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
                            <label class="svc-label" for="svc-email">Work email</label>
                            <input id="svc-email" type="email" name="email" placeholder="Work email">
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
                <p class="svc-fact-title">Photo and video</p>
                <p class="svc-fact-text">From one crew</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48 hours</p>
                <p class="svc-fact-text">Edited photos delivered</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Since 2014</p>
                <p class="svc-fact-text">Dubai, Abu Dhabi and across the UAE</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Arabic and English</p>
                <p class="svc-fact-text">Speaking team</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">While many assignments take place in Dubai and Abu Dhabi, our team covers corporate events throughout every Emirate, arriving prepared with equipment suited to the venue and schedule.</p>
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
            <li >Summits</li>
            <li >Product launches</li>
            <li >Brand activations</li>
            <li >Award nights</li>
            <li >Gala dinners</li>
            <li >Staff parties</li>
            <li >Team events</li>
            <li >Panel talks</li>
            <li >Keynotes</li>
            <li  aria-hidden="true" >Conferences</li>
            <li  aria-hidden="true" >Summits</li>
            <li  aria-hidden="true" >Product launches</li>
            <li  aria-hidden="true" >Brand activations</li>
            <li  aria-hidden="true" >Award nights</li>
            <li  aria-hidden="true" >Gala dinners</li>
            <li  aria-hidden="true" >Staff parties</li>
            <li  aria-hidden="true" >Team events</li>
            <li  aria-hidden="true" >Panel talks</li>
            <li  aria-hidden="true" >Keynotes</li>
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
                <div class="svc-text">We work as a corporate event photographer in Dubai and we bring one crew for photos and video together, so you are not mixing two suppliers with two different styles. We’ve worked as event photographers and videographers since 2014, and Abdul Rehman still runs the team.</div>
                <div class="svc-text">Clients who come back tell us they like briefing only one team for photo and video. Our crew speaks Arabic and English, we have the licences to shoot in Dubai and the other emirates, and you talk to the same person from the first message to the last file.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20corporate%20event.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Corporate Event Photography Services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'microphone'])
                        <span>Conferences and Summits</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Product Launches and Brand Activations</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'trophy'])
                        <span>Award Nights and Gala Dinners</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Staff Parties and Team Events</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/ASF00932-2-1024x683.webp" alt="Corporate Event Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Conferences and Summits</h3>
                            <div class="svc-panel-text"><p>A conference is not easy to shoot. Lights on stage keep changing, speakers walk up and down, and the hall is usually darker than you expect. As a conference photographer in Dubai, we’ve worked in ballrooms, expo halls and rooftop venues. If your summit has a few halls going at once, we send photographers for event sessions in each hall.</p><p>Organising one? Take a look at our <a href="%%BASE%%/corporate-event-photography-checklist-for-uae-conference-organizers">conference photography checklist</a> before the day. It has the shots that people tend to forget.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my conference</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/IMGL5601-1-1024x682.webp" alt="Product launch and brand activation photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Product Launches and Brand Activations</h3>
                            <div class="svc-panel-text"><p>You only get one product reveal, and nobody will do it again for a photo. We come in early and choose where to stand before anyone arrives. At brand activations, many clients add a <a href="%%BASE%%/360-video-booth-experience-for-immersive-event-engagement">360 video booth</a> or an <a href="%%BASE%%/live-printing-photo-booth-for-instant-guest-keepsakes">instant print photo booth</a> because guests like having something to post right away.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my launch</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Awards1-1024x683.webp" alt="Award night photography at a corporate gala dinner in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Award Nights and Gala Dinners</h3>
                            <div class="svc-panel-text"><p>At a gala you have to be ready all night. A lot of the time the best shot is someone’s face when their name gets called. We stay near the stage with the running order in hand.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my gala</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/DSC001721-1024x683.webp" alt="Staff party and team event photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Staff Parties and Team Events</h3>
                            <div class="svc-panel-text"><p>At a staff party nobody wants a camera right in front of them. Our corporate party photographer keeps some distance, so people relax and act naturally.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my team event</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us the date and venue. You get a written quote and a shot list within one working day.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20corporate%20event.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent corporate events</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Conferences</button>
                    <button type="button" data-filter="1">Galas</button>
                    <button type="button" data-filter="2">People</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/K_AL8110-1-1024x683.jpg" data-full="%%BASE%%/assets/images/2026/07/K_AL8110-1-scaled.jpg" data-tag="0" alt="Corporate Event Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/DSC00259-1-1024x680.jpg" data-full="%%BASE%%/assets/images/2026/07/DSC00259-1.jpg" data-tag="0" alt="Corporate Event Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/ASF01055-1-1024x683.jpg" data-full="%%BASE%%/assets/images/2026/07/ASF01055-1.jpg" data-tag="0" alt="Conference photographer covering a keynote session in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMGL9434-1-683x1024.jpg" data-full="%%BASE%%/assets/images/2026/07/IMGL9434-1.jpg" data-tag="1" alt="Dubai Fotographer portfolio – corporate event coverage" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/ASF01461-1-1024x679.jpg" data-full="%%BASE%%/assets/images/2026/07/ASF01461-1.jpg" data-tag="2" alt="Corporate Event Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMGL8370-1-1-1024x683.jpg" data-full="%%BASE%%/assets/images/2026/07/IMGL8370-1-1-e1783493336214.jpg" data-tag="2" alt="Corporate Event Photography in UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Corporate Event Videography in Dubai</h2>
                <div class="svc-feature-text"><p>A good speech or a full hall clapping just looks better on video. Our corporate event videography includes a short highlight film, full keynote and panel recordings, interviews with speakers and guests, and vertical clips for Instagram and TikTok.</p><p>You might want an event videographer in Dubai for just one evening. You might need a crew for a three-day event. We’ve done plenty of both, and the same corporate event videographer stays with you the whole time.</p><p class="svc-feature-label">Extras you can add:</p><ul><li><a href="%%BASE%%/multi-camera-event-recording-for-conferences-concerts-and-large-scale-events">Multi-camera event recording</a> for more angles in big halls</li><li><a href="%%BASE%%/professional-live-streaming-services-across-dubai-and-the-uae">Live streaming</a> for guests who can’t make it</li><li>Aerial shots from our <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone team</a> at outdoor events</li></ul><p>Some companies also hire us as a corporate videographer in Dubai for brand films and other Dubai videography for corporate promotion.</p></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add video to my quote</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/09/corporate-event-videography-in-uae.jpg')"><span>Highlight film</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Drone-Videography-for-Events-Weddings-Special-Occasions0760.jpg')"><span>Drone</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/IMGL5601-1.jpg')"><span>Vertical clips</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Corporate Event Photography Across the UAE</h2>
                <p class="svc-text">Whether you need corporate event coverage in Dubai or corporate event photography in Abu Dhabi, we’ll help you get a venue permit if one is needed.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>DIFC, Business Bay, Expo City and the Palm</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>ADNEC and the main city hotels</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">How Our Event Coverage Services Work</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>You tell us the date, venue and about how many guests, then we have a quick call about the schedule.</p></li>
                <li><span class="svc-step-number">2</span><p>Within one working day you get a written quote and a shot list from us.</p></li>
                <li><span class="svc-step-number">3</span><p>On the day, our crew comes early, checks the light and works around your timings.</p></li>
                <li><span class="svc-step-number">4</span><p>Edited photos reach you in 48 hours through a secure link, and the video comes after.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Not sure what to write in a brief? Our guide on <a href="%%BASE%%/brief-your-event-photographer-uae">how to brief your event photographer</a> should help.</p>
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
                            <h3>How is corporate event photography pricing worked out?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We look at how many hours, how many photographers and whether you want video as well. There’s more about it in our <a href="%%BASE%%/how-much-does-corporate-event-photography-cost-in-the-uae">pricing guide</a>, and you always get a quote before booking.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>What does your event photography service in Dubai include?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>You get edited high-resolution photos in a private online gallery, and you can use them in your marketing.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Is your team based in the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Every business event photographer on our team lives and works here, so you won’t be paying for flights.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer photography services for corporates outside events?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We also shoot office photos, <a href="%%BASE%%/portrait-photography-in-uae">corporate headshots</a> and <a href="%%BASE%%/product-photography-services-in-uae">product shoots</a>.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20corporate%20event.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book a Professional Event Photographer</h2>
                    <p class="svc-text">Booking a professional event photography service should be simple. Just send us your date and venue, and a professional event photographer from our team will get back to you the same day with availability and a quote.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20corporate%20event.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20corporate%20event.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
