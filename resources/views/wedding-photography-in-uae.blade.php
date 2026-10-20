@extends('layouts.app')

@section('seo')
@include('seo.wedding-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Wedding-photography-services-in-Dubai.png')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Wedding photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Natural, timeless imagery for every celebration — from intimate ceremonies to grand multi-day events across all seven Emirates.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20wedding.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your wedding</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your wedding">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your wedding">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Celebration</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="wedding_type" value="Traditional or cultural" required>
                                    <span>Traditional or cultural</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="wedding_type" value="Luxury wedding" required>
                                    <span>Luxury wedding</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="wedding_type" value="Civil ceremony" required>
                                    <span>Civil ceremony</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="wedding_type" value="Destination or multi-day" required>
                                    <span>Destination or multi-day</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Coverage</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Wedding day" required>
                                    <span>Wedding day</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Engagement or pre-wedding" required>
                                    <span>Engagement or pre-wedding</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Both" required>
                                    <span>Both</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="Hotel, wedding hall or residence">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many guests?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Under 50">Under 50</option>
                                <option value="50 to 200">50 to 200</option>
                                <option value="200 to 500">200 to 500</option>
                                <option value="Over 500">Over 500</option>
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
                <p class="svc-fact-text">Of wedding photography</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Cultural and religious</p>
                <p class="svc-fact-text">Weddings welcomed</p>
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
                <p class="svc-text">Whether your ceremony is at a luxury hotel, an outdoor venue, a private residence, or a traditional wedding hall, we travel to your location with full professional equipment across all seven Emirates.</p>
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
            <li >Civil ceremonies</li>
            <li >Destination weddings</li>
            <li >Luxury weddings</li>
            <li >Traditional weddings</li>
            <li >Cultural &amp; religious weddings</li>
            <li >Multi-day wedding events</li>
            <li >Private family celebrations</li>
            <li >Engagement photography</li>
            <li >Pre-wedding photoshoots</li>
            <li  aria-hidden="true" >Civil ceremonies</li>
            <li  aria-hidden="true" >Destination weddings</li>
            <li  aria-hidden="true" >Luxury weddings</li>
            <li  aria-hidden="true" >Traditional weddings</li>
            <li  aria-hidden="true" >Cultural &amp; religious weddings</li>
            <li  aria-hidden="true" >Multi-day wedding events</li>
            <li  aria-hidden="true" >Private family celebrations</li>
            <li  aria-hidden="true" >Engagement photography</li>
            <li  aria-hidden="true" >Pre-wedding photoshoots</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Professional-wedding-photography-for-every-celebration-e1784199231831.avif')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Professional Wedding Photography for Every Celebration</h2>
                <div class="svc-text">Professional wedding photography helps keep the memories of any celebration alive long after it is over. It captures the feelings, the people, and all the small things that make that day special. Whether a wedding is small and private or a big party, the pictures should capture how it felt and document the important moments carefully.</div>
                <div class="svc-text">Here at Dubai Fotographer, we offer wedding photography services everywhere in the UAE. Our goal is to make natural-looking, timeless pictures that tell the complete story of your wedding day. We started in 2014, with Abdul Rehman leading the way, and have worked for many couples across the UAE. We are a fully licensed and insured production company, and we have a crew that speaks both Arabic and English. Also, for brides who like, we have <a href="%%BASE%%/female-photographers-in-uae">female photographers</a> ready.</div>
                <div class="svc-text">Since each celebration is unique, we spend time before the event finding out about your schedule, where it will be held, and what is most important to you. This way, we can be ready for key moments and work without problems throughout the day. We capture real interactions, those important little details, and all the big steps, even offering a <a href="%%BASE%%/live-printing-photo-booth-for-instant-guest-keepsakes">live photo printing station</a> for guests to take home pictures right away.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20wedding.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Capturing Every Stage of Your Wedding Day</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Bridal Preparations</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'check-circle'])
                        <span>Wedding Ceremony</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Couple and Family Portraits</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'grin-stars'])
                        <span>Reception and Celebrations</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Bridal-preparations.jpg" alt="Bridal preparations photographed before a wedding in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Bridal Preparations</h3>
                            <div class="svc-panel-text"><p>Walk into the bride’s room an hour before the ceremony, and you’ll see why we get there early. Hair’s half done. Someone is ironing a dupatta on the bed. An aunt is on the phone telling the driver to hurry up, and the bride is somehow the calmest person there. That excitement before the ceremony gives us some of the most personal photographs of the whole day.</p><p>Final touches to the wedding attire. A sister fixing the veil. Candid moments with family and the bridal party, the kind nobody remembers happening until they see the photo. That’s what we’re there to catch: the anticipation and emotion that set the tone for the celebration.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my wedding day</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Wedding-ceremony057.jpg" alt="Wedding ceremony photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Wedding Ceremony</h3>
                            <div class="svc-panel-text"><p>The ceremony is at the heart of every wedding. We’re there for the key moments: the exchange of vows, the ring ceremony, the meaningful traditions your families have carried for years, and the genuine reactions of the people watching. A dad wiping his eyes. A best friend grinning. We stay discreet and keep to the side, so the experience unfolds naturally, and nobody is interrupted.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my ceremony</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Couple-family-portraits-e1784186536872.jpg" alt="Couple and family wedding portraits in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Couple and Family Portraits</h3>
                            <div class="svc-panel-text"><p>Then the portraits. It’s a chance for timeless photographs of the couple together, and with family members and close friends. Getting thirty relatives into one shot takes a bit of patience. We give gentle direction, crack a joke or two, and keep things relaxed. That’s what makes natural portraits that show genuine relationships and emotions.</p><p>A dedicated <a href="%%BASE%%/couple-photography-in-uae">couple photography session</a> gives you time for a few quiet moments together- ten minutes, twenty if the schedule allows- while we make timeless portraits that reflect your personalities and your relationship.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my portraits</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Reception-celebrations-e1784186657991.jpg" alt="Wedding reception photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Reception and Celebrations</h3>
                            <div class="svc-panel-text"><p>After the formalities give way to celebration, the mood changes completely. We carry on documenting the speeches, guest interactions, first dances, cake cutting, and the atmosphere of the reception. These candid moments complete the story of the wedding day. They keep the energy and joy you shared with family and friends long after the last guest has gone home.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my reception</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Every moment, preserved. Tell us about your wedding for availability and pricing.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20wedding.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Wedding moments</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Traditions</button>
                    <button type="button" data-filter="1">Bride</button>
                    <button type="button" data-filter="2">Couple and family</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Ceremony-traditions.jpg" data-full="%%BASE%%/assets/images/2026/07/Ceremony-traditions.jpg" data-tag="0" alt="Wedding ceremony traditions" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMGL9395-1.jpg" data-full="%%BASE%%/assets/images/2026/07/IMGL9395-1.jpg" data-tag="1" alt="Bride on the wedding stage" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Bridal-preparations-1-e1784188253263.jpg" data-full="%%BASE%%/assets/images/2026/07/Bridal-preparations-1-e1784188253263.jpg" data-tag="1" alt="Bride getting ready before the ceremony" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Ceremony-traditions499.jpg" data-full="%%BASE%%/assets/images/2026/07/Ceremony-traditions499.jpg" data-tag="2" alt="Couple at the wedding venue entrance" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Ceremony-traggditions.jpg" data-full="%%BASE%%/assets/images/2026/07/Ceremony-traggditions.jpg" data-tag="2" alt="Couple portrait on the wedding day" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/phototune.ai_1784188907.png" data-full="%%BASE%%/assets/images/2026/07/phototune.ai_1784188907.png" data-tag="2" alt="Bride with her family" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Engagement and Pre-Wedding Photography</h2>
                <div class="svc-feature-text"><p>Your wedding story begins long before the ceremony. These sessions celebrate the journey and help couples feel completely comfortable in front of the camera.</p><p>Our engagement photography gives you timeless portraits that capture the excitement leading up to your wedding. We can shoot at a place that means something to you two, out in scenic outdoor settings, or at one of the iconic venues across the UAE. The images work for save-the-date cards, wedding websites, invitations, or simply as personal keepsakes.</p><p>Pre-wedding photoshoots are beautifully planned portraits, shot before the main ceremony day. You get to connect with the camera, and with us, before the wedding itself. Thinking about a flying dress shoot in the desert, or a more cinematic pre-wedding session? We’ll coordinate both as a single production: one team, one plan, one day.</p></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add a pre-wedding shoot</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Engagement-photography-1024x682.webp')"><span>Engagement</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Pre-wedding-photoshoots-682x1024.webp')"><span>Pre-wedding</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/wedding-photography-5.webp')"><span>Couple session</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Wedding Photography Across the UAE</h2>
                <p class="svc-text">We’ve shot small nikahs in a family majlis with twenty guests. We’ve shot ballroom receptions with eight hundred guests. Every celebration is unique, so we adapt our photography to your schedule, your venue and your personal preferences.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Luxury hotels, ballrooms and outdoor venues</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Hotels, wedding halls and private residences</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Planning Your Wedding Photography Session</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>A few weeks out, we sit down with you: schedule first, then the venue, your preferred photography style and any family traditions you’d like included.</p></li>
                <li><span class="svc-step-number">2</span><p>We walk through the wedding day timeline together and list the important family members for the family session and group photographs.</p></li>
                <li><span class="svc-step-number">3</span><p>We talk about portrait locations and lighting, coordinate with planners and other vendors where required, and confirm your photography priorities.</p></li>
                <li><span class="svc-step-number">4</span><p>On the day we stay discreet and capture genuine moments as they unfold, then your photographs are professionally edited and delivered in high resolution.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Planning a family shoot as well? See our <a href="%%BASE%%/family-photography-in-uae">family photography</a> service.</p>
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
                            <h3>Do you provide wedding photography services across the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide wedding photography throughout Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you photograph cultural and religious weddings?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We regularly photograph weddings with different cultural traditions, religious ceremonies, and family customs while respecting the unique requirements of each celebration.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer wedding photography packages?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Our wedding photography packages can be tailored to suit the size of your celebration, the coverage required, and any additional photography services you may need.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can we request specific family or group photographs?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Before your wedding, we discuss any important family groupings or must-have photographs to ensure they are included during the day.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>When will we receive our wedding photographs?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Delivery times vary depending on the size of the wedding, but all selected photographs are professionally edited and delivered in high resolution once post-production has been completed.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20wedding.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your Dream Wedding Photography Today</h2>
                    <p class="svc-text">Natural, timeless wedding photography for every celebration anywhere in Dubai and across the UAE. Tell us about your wedding and we’ll get back to you with availability and pricing, usually within a few hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20wedding.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20wedding.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
