@extends('layouts.app')

@section('seo')
@include('seo.live-printing-photo-booth-for-instant-guest-keepsakes')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/live-printing-photo-booth-services-in-dubai-e1784030300913.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Live printing photo booth services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Instant, high-quality printed keepsakes for weddings, corporate events, exhibitions, product launches, and private celebrations — guests take home their photographs within seconds.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20printing%20photo%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your photo booth</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your photo booth">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your photo booth">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Event type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Wedding or engagement" required>
                                    <span>Wedding or engagement</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Corporate or launch" required>
                                    <span>Corporate or launch</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Exhibition or conference" required>
                                    <span>Exhibition or conference</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Private celebration" required>
                                    <span>Private celebration</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Print style</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="print_style" value="Classic photo strips" required>
                                    <span>Classic photo strips</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="print_style" value="Larger print format" required>
                                    <span>Larger print format</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="print_style" value="Not sure yet" required>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. hotel ballroom, garden, home">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many guests?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Under 50">Under 50</option>
                                <option value="50 to 150">50 to 150</option>
                                <option value="150 to 400">150 to 400</option>
                                <option value="Over 400">Over 400</option>
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
                <p class="svc-fact-title">Prints in seconds</p>
                <p class="svc-fact-text">On-site</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">9 event types</p>
                <p class="svc-fact-text">Covered</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Bilingual</p>
                <p class="svc-fact-text">Arabic / English crew</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7 Emirates</p>
                <p class="svc-fact-text">Covered</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">Whether your event is at a hotel ballroom, conference centre, outdoor venue, or private residence, our team travels to your location with full equipment and setup, delivering the same standard of print quality regardless of Emirate.</p>
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
            <li >Brand activations</li>
            <li >Award ceremonies</li>
            <li >Product launches</li>
            <li >Conferences &amp; exhibitions</li>
            <li >Corporate events</li>
            <li >Weddings &amp; engagement parties</li>
            <li >Community festivals</li>
            <li >School &amp; university events</li>
            <li >Birthday celebrations</li>
            <li  aria-hidden="true" >Brand activations</li>
            <li  aria-hidden="true" >Award ceremonies</li>
            <li  aria-hidden="true" >Product launches</li>
            <li  aria-hidden="true" >Conferences &amp; exhibitions</li>
            <li  aria-hidden="true" >Corporate events</li>
            <li  aria-hidden="true" >Weddings &amp; engagement parties</li>
            <li  aria-hidden="true" >Community festivals</li>
            <li  aria-hidden="true" >School &amp; university events</li>
            <li  aria-hidden="true" >Birthday celebrations</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Instant-printing-photo-booth-for-memorable-events.jpg')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Instant Printing Photo Booth for Memorable Events</h2>
                <div class="svc-text">Phones are full of event photos nobody ever looks at again. A print is different. It goes on the fridge, into a wallet, or gets passed round the table while everyone laughs at Uncle Saeed’s face. Every event has moments guests want to remember long after the occasion is over, and a live printing photo booth lets them capture those moments and walk away with professionally printed photographs within seconds. It gives guests a keepsake they’ll actually keep, and it adds an interactive bit of fun to the whole experience.</div>
                <div class="svc-text">At Dubai Fotographer, we provide live printing photo booth services across the UAE for <a href="%%BASE%%/wedding-photography-in-uae">weddings</a>, <a href="%%BASE%%/corporate-event-photography-videography">corporate events</a>, exhibitions, <a href="%%BASE%%/product-photography-services-in-uae">product launches,</a> and private celebrations. We combine professional photography with instant, high-quality printing, and the result is an engaging experience that keeps guests involved from the first hour to the last song. Abdul Rehman has led the company since 2014, and in that time we’ve delivered photography and event production services across the UAE as a fully licensed and insured production company.</div>
                <div class="svc-text">Each setup is tailored to your venue, your guest numbers, and what you want the event to achieve. We handle customised photo designs, your logo, the couple’s names, the date, and we’re there with reliable on-site support all night. It all runs smoothly, and the high-quality prints are something guests enjoy long after the event has ended.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20printing%20photo%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Live Event Photo Printing That Creates Lasting Engagement</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Weddings and Private Celebrations</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Corporate and Brand Activations</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'microphone'])
                        <span>Exhibitions and Product Launches</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'trophy'])
                        <span>Award Ceremonies</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Weddings-private-celebrations.jpg" alt="Live printing photo booth for weddings and private celebrations" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Weddings and Private Celebrations</h3>
                            <div class="svc-panel-text"><p>Personalised print designs with names, dates, and event themes — meaningful souvenirs that reflect the occasion and the people there.</p><p>For weddings and private celebrations, we make customised designs that suit the style of the day. For example, a formal nikah can have a simple gold design, and a 30th birthday can have something bright and fun.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my celebration</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Why-choose-Dubai-Fotographer-for-live-printing-photo-booth-services.jpg" alt="Guest collecting a branded photo booth print at a corporate event" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Corporate and Brand Activations</h3>
                            <div class="svc-panel-text"><p>Custom branded prints with company logos and campaign graphics — turning every photograph into a marketing asset that leaves with your guest.</p><p>For corporate events and exhibitions, we can put company logos, campaign graphics, or the event theme on custom branded prints. Each photograph then becomes a subtle marketing asset that sits on someone’s desk for weeks.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my activation</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Exhibitions-e1784031603710.jpg" alt="Live printing photo booth at an exhibition" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Exhibitions and Product Launches</h3>
                            <div class="svc-panel-text"><p>At exhibitions the booth drives visitor engagement, and at product launches every guest leaves with a branded keepsake.</p><p>At corporate events and exhibitions, the custom print helps with brand visibility. Every guest leaves with your logo in their hand.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my exhibition</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Award-ceremonies.jpg" alt="Live printing photo booth at an award ceremony" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Award Ceremonies</h3>
                            <div class="svc-panel-text"><p>At award ceremonies it is all about the guest experience.</p><p>A printed photo also gets people talking. Two people from different departments end up in the booth together, the print comes out with someone pulling a strange face, and now they’re laughing about it at the bar. That’s the kind of memorable experience people mention the next day, and it’s more than simply taking a picture.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my award night</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Give every guest something to take home. Tell us about your event for availability and pricing.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20printing%20photo%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Photo booth moments</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Weddings and private</button>
                    <button type="button" data-filter="1">Corporate and brand</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Weddings-private-celebrations.jpg" data-full="%%BASE%%/assets/images/2026/07/Weddings-private-celebrations.jpg" data-tag="0" alt="Live printing photo booth for weddings and private celebrations" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Custom-photo-booth-prints-designed-for-your-event.jpg" data-full="%%BASE%%/assets/images/2026/07/Custom-photo-booth-prints-designed-for-your-event.jpg" data-tag="0" alt="Custom photo booth prints designed for your event" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Instant-printing-photo-booth-for-memorable-events.jpg" data-full="%%BASE%%/assets/images/2026/07/Instant-printing-photo-booth-for-memorable-events.jpg" data-tag="0" alt="Instant printing photo booth for memorable events" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Award-ceremonies.jpg" data-full="%%BASE%%/assets/images/2026/07/Award-ceremonies.jpg" data-tag="1" alt="Live printing photo booth at an award ceremony" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Exhibitions-e1784031603710.jpg" data-full="%%BASE%%/assets/images/2026/07/Exhibitions-e1784031603710.jpg" data-tag="1" alt="Live printing photo booth at an exhibition" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Product-launches-e1784031703521.jpg" data-full="%%BASE%%/assets/images/2026/07/Product-launches-e1784031703521.jpg" data-tag="1" alt="Live printing photo booth at a product launch" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Custom Photo Booth Prints Designed for Your Event</h2>
                <div class="svc-feature-text"><p>We design the prints for each event separately. A wedding should not get the same print as a company launch. We make custom photo booth strips and personalised print layouts with your branding, event colours, logos, names, or dates. This way, each photograph is a unique keepsake and not a standard print.</p><p>We offer classic photo booth strips and larger print formats. We finish every design before the event starts, so printing is fast and consistent all day and guests don’t wait in a long line.</p><p class="svc-feature-label">Why instant printing works:</p><ul><li><strong>Prints in seconds:</strong> guests receive a professionally printed photograph almost immediately after it is taken.</li><li><strong>High-quality output:</strong> sharp detail, accurate colours, and durable finishes suitable for long-term keeping.</li><li><strong>Lasting keepsakes:</strong> printed photographs go home with guests and continue promoting your brand.</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Ask about print designs</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Custom-photo-booth-prints-designed-for-your-event.jpg')"><span>Custom designs</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/live-printing-photo-booth-services-in-dubai-e1784030300913.jpg')"><span>On-site printing</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Instant-printing-photo-booth-for-memorable-events.jpg')"><span>Prints in seconds</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Photo Booth Hire Across the UAE</h2>
                <p class="svc-text">Events are never the same twice. A hotel ballroom with 400 guests needs a very different setup from a garden party with 50 people and a barbecue. So we tailor it all to your venue, your guest numbers, your branding, and what you’d like the event to achieve.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Hotel ballrooms, conference centres and private residences</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Hotels, conference centres and outdoor venues</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Live Printing Photo Booth Process</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We discuss your event type, venue, guest numbers, and branding requirements.</p></li>
                <li><span class="svc-step-number">2</span><p>Personalised photo strips and branded print layouts designed before the event day.</p></li>
                <li><span class="svc-step-number">3</span><p>Booth fully set up and tested before guests arrive, then our team manages photo capture and on-site printing throughout the entire event.</p></li>
                <li><span class="svc-step-number">4</span><p>Every guest collects their printed keepsake within seconds — no waiting, no delays.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>At large-scale events, some clients pair the photo booth with <a href="%%BASE%%/multi-camera-event-recording">multi-camera event coverage</a> or a <a href="%%BASE%%/360-video-booth-experience-for-immersive-event-engagement">360 video booth</a>.</p>
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
                            <h3>Can the photo prints be customised for our event?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We create personalised photo strips and print layouts featuring your event name, branding, logo, colours, or other custom design elements.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide photo booth services across the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide photo booth rental and live printing services throughout Dubai and all seven Emirates for both corporate and private events.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How quickly are photographs printed?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Photographs are printed within seconds after they are taken, allowing guests to collect their prints almost immediately during the event.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Is someone available to manage the photo booth?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Our team manages the booth throughout the event, assisting guests and ensuring the photography and printing process runs smoothly.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>What types of events are suitable for a live printing photo booth?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Our photo booth services are suitable for weddings, corporate events, exhibitions, conferences, product launches, brand activations, private celebrations, award ceremonies, and many other events where guest interaction and instant printed keepsakes add value.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20printing%20photo%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your live printing photo booth today</h2>
                    <p class="svc-text">Instant printed keepsakes for corporate events, weddings, and private celebrations anywhere in Dubai and across the UAE. Tell us about your event and we’ll get back to you with availability and pricing, usually within a few hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20printing%20photo%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20live%20printing%20photo%20booth.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
