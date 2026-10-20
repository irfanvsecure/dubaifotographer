@extends('layouts.app')

@section('seo')
@include('seo.restaurant-photography-service-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/resturnet.png')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Restaurant photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Food, menu, interior, and lifestyle photography for restaurants, cafés, and hotel dining venues — visual content that works across every platform.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20restaurant%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">What to shoot</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Food and menu" required>
                                    <span>Food and menu</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Interiors" required>
                                    <span>Interiors</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Lifestyle" required>
                                    <span>Lifestyle</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Full venue" required>
                                    <span>Full venue</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Venue type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="venue_type" value="Fine dining" required>
                                    <span>Fine dining</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="venue_type" value="Café or casual" required>
                                    <span>Café or casual</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="venue_type" value="Hotel dining" required>
                                    <span>Hotel dining</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="venue_type" value="Delivery kitchen" required>
                                    <span>Delivery kitchen</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="Restaurant name and area">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many dishes?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Up to 10">Up to 10</option>
                                <option value="10 to 30">10 to 30</option>
                                <option value="30 to 60">30 to 60</option>
                                <option value="Over 60">Over 60</option>
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
                <p class="svc-fact-text">Of hospitality photography</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">7 Emirates</p>
                <p class="svc-fact-text">Covered by our team</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48h turnaround</p>
                <p class="svc-fact-text">Available</p>
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
                <p class="svc-text">We work with restaurants, cafés, hotel dining venues, and hospitality businesses throughout all seven Emirates, adapting our coverage to suit different venues, dining concepts, and production schedules.</p>
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
            <li >Food photography</li>
            <li >Menu photography</li>
            <li >Interiors</li>
            <li >Lifestyle</li>
            <li >Fine dining</li>
            <li >Cafés</li>
            <li >Bakeries &amp; desserts</li>
            <li >Hotel dining</li>
            <li >Cloud kitchens</li>
            <li >Social media</li>
            <li  aria-hidden="true" >Food photography</li>
            <li  aria-hidden="true" >Menu photography</li>
            <li  aria-hidden="true" >Interiors</li>
            <li  aria-hidden="true" >Lifestyle</li>
            <li  aria-hidden="true" >Fine dining</li>
            <li  aria-hidden="true" >Cafés</li>
            <li  aria-hidden="true" >Bakeries &amp; desserts</li>
            <li  aria-hidden="true" >Hotel dining</li>
            <li  aria-hidden="true" >Cloud kitchens</li>
            <li  aria-hidden="true" >Social media</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Restaurant-Photography-That-Creates-Lasting-First-Impressions2.jpg')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Restaurant Photography That Creates Lasting First Impressions</h2>
                <div class="svc-text">Professional restaurant photography is how you control that picture. It lets customers get a feel for your venue before they ever walk through the door: the dishes, plated the way your chef intended, the <a href="%%BASE%%/interior-photographer-in-uae">interiors</a> you put real thought into, and the atmosphere that makes your business different from the one next door.</div>
                <div class="svc-text">Dubai Fotographer works with restaurants, cafés, <a href="%%BASE%%/hotel-photography-service-in-uae">hotels</a> and hospitality brands all over the UAE. No two venues have the same character, so we shoot each one differently, and always with your marketing objectives in mind.</div>
                <div class="svc-text">The company started in 2014, and Abdul Rehman has led it ever since. We’re fully licensed and insured as a production company; our crew speaks both Arabic and English, and most of our <a href="%%BASE%%/ecommerce-brand-photography-in-uae">commercial photography</a> is done for the hospitality industry, so we know how a busy kitchen works. Plenty of photographers can light a plate. Fewer know not to stand in a waiter’s path at 8 pm on a Friday.</div>
                <div class="svc-text">“A restaurant photograph has one job: make the person looking at it want to be sitting at that table, eating that dish.” <strong>– Abdul Rehman</strong></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20restaurant%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our restaurant photography services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'utensils'])
                        <span>Food photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'file-alt'])
                        <span>Menu photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Interior photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Restaurant lifestyle photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Professional-Restaurant-Photography-for-Hospitalfity-Brands-.jpg" alt="Restaurant food photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Food photography</h3>
                            <div class="svc-panel-text"><p>We once spent an hour on a single dessert because the caramel kept melting under the lights. A dish that took your kitchen twenty minutes to plate shouldn’t end up looking flat in a photo. Exceptional food deserves photography that shows the care and craftsmanship that went into it, and that’s what we’re after.</p><p>We look closely at presentation, at texture, at colour and all the little details a diner would notice when the plate lands in front of them. Some shots are close-up photographs, so one individual creation fills the frame. Others are wider compositions, where you see the dish sitting on the table with the glasses and the room behind it, as part of the dining experience.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my food shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Menu-photography.png" alt="Menu photography for restaurants in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Menu photography</h3>
                            <div class="svc-panel-text"><p>Most of our menu clients come back every season to add new items. When diners are looking at a menu, they want to know what’s actually going to turn up. Clear, consistent menu photography tells them, and it gives you a polished presentation whether it’s on printed menus, digital ordering platforms, or your hospitality website.</p><p>We shoot every item in the same way with consistency in mind, so when new dishes are introduced later on, they slot straight in and updating the menu is simple.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my menu</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Interior-photographyjpg.jpg" alt="Restaurant interior photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Interior photography</h3>
                            <div class="svc-panel-text"><p>Evening shoots usually look best for restaurants with warm lighting. People remember the room as much as the food. How guests perceive your venue has a lot to do with the dining environment, and our interior photography is there to show the design, the layout, the lighting, and the general atmosphere of the space. It helps customers visualise what the evening will be like before they arrive.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my interiors</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Restaurant-lifestyle-photography.jpg" alt="Restaurant lifestyle photography with chefs, staff and guests" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Restaurant lifestyle photography</h3>
                            <div class="svc-panel-text"><p>We ask staff to act normal, and after ten minutes they forget we’re there. These are the shots that make a restaurant feel like a restaurant. A chef bent over the pass finishing a plate. Staff stopping to chat with guests. A table of diners enjoying their meal, someone mid-laugh.</p><p>Lifestyle imagery like that adds warmth and authenticity to your visual content, and alongside your food and interior photography, it gets the atmosphere of your venue across in a way still shots of empty tables never can.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my lifestyle shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your venue and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20restaurant%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <button type="button" data-filter="0">Websites &amp; menus</button>
                    <button type="button" data-filter="1">Social &amp; PR</button>
                    <button type="button" data-filter="2">Advertising</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Website-booking-platforms.jpg" data-full="%%BASE%%/assets/images/2026/07/Website-booking-platforms.jpg" data-tag="0" alt="Restaurant photography for website and booking platforms" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/ChatGPT-Image-Jul-6-2026-05_21_21-PM.png" data-full="%%BASE%%/assets/images/2026/07/ChatGPT-Image-Jul-6-2026-05_21_21-PM.png" data-tag="0" alt="Menu and digital ordering photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/social-media3.jpg" data-full="%%BASE%%/assets/images/2026/07/social-media3.jpg" data-tag="1" alt="Restaurant photography for social media" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/pr.jpg" data-full="%%BASE%%/assets/images/2026/07/pr.jpg" data-tag="1" alt="Media-ready restaurant imagery for PR and press" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/media-advertize895-68.jpg" data-full="%%BASE%%/assets/images/2026/07/media-advertize895-68.jpg" data-tag="2" alt="Restaurant advertising campaign visuals" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Restaurant-lifestyle-photographyjpg-682x1024.webp" data-full="%%BASE%%/assets/images/2026/07/Restaurant-lifestyle-photographyjpg.webp" data-tag="2" alt="Restaurant lifestyle photography in Dubai" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Photography for different dining concepts</h2>
                <div class="svc-feature-text"><p>Every dining concept has its own style, audience, and brand identity. Rather than applying the same creative approach to every project, we tailor our photography to suit the experience each business wants to create.</p><p class="svc-feature-label">Dining concepts we shoot:</p><ul><li>Fine dining: refined presentation, elegant interiors, attention to detail</li><li>Cafés &amp; casual: approachable, vibrant, and welcoming visual style</li><li>Bakeries &amp; desserts: craftsmanship, freshness, and product presentation</li><li>Hotel dining: food and hospitality experience balanced together</li><li>Delivery &amp; cloud kitchens: platform-ready imagery that converts on listing pages</li></ul><p>We shoot with long-term use in mind. For hospitality businesses, we build up a versatile image library over time, so there’s always something ready for the next campaign, and future marketing never loses its visual consistency. It carries real, authentic <a href="%%BASE%%/lifestyle-photography-in-uae">lifestyle photography</a> through every customer touchpoint.</p></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Plan my shoot</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Professional-Restaurant-Photography-for-Hospitality-Brandss-819x1024.webp')"><span>Hospitality brands</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Restaurant-Photography-for-Long-Term-Brand-Consistency-1024x917.webp')"><span>Brand consistency</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Interior-photographyjpg.jpg')"><span>Interiors</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Restaurant Photography Across the UAE</h2>
                <p class="svc-text">Whenever possible, we plan the shoot around your service schedule. Sessions can be carried out before opening, between service periods, or during quieter hours.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Restaurants, cafés and hotel dining venues</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Restaurants, cafés and hotel dining venues</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">How we plan and run every restaurant shoot</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Pre-shoot planning: we discuss your menu, signature dishes, interior spaces, branding, and how the final photographs will be used.</p></li>
                <li><span class="svc-step-number">2</span><p>Efficient shoot day: we work with your team to minimise disruption to service, capturing plated dishes, interiors, and lifestyle moments.</p></li>
                <li><span class="svc-step-number">3</span><p>Editing: every selected photograph is professionally edited, ready for both digital and print applications.</p></li>
                <li><span class="svc-step-number">4</span><p>Delivery: a collection of professional images that sit well together on your menus, website, social media and advertising.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Want the whole venue covered? See our <a href="%%BASE%%/interior-photographer-in-uae">interior photography</a> service.</p>
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
                            <h3>What does restaurant photography include?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Restaurant photography can include food, beverages, interiors, dining spaces, chefs at work, staff interactions, and lifestyle imagery that reflects the overall guest experience. The scope is planned around your marketing objectives and the type of content you require.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you photograph restaurants outside Dubai?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide restaurant photography across all seven Emirates, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you photograph restaurants during operating hours?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Whenever possible, we plan the shoot around your service schedule to minimise disruption. Sessions can be carried out before opening, between service periods, or during quieter hours.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How long does a restaurant photography session take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>A menu update may only require a few hours, while a complete visual content project covering food, interiors, and lifestyle imagery may take a full day or longer. We confirm timing during the planning stage.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Where can the photographs be used?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>The final images can be used across websites, digital and printed menus, online ordering platforms, social media, advertising campaigns, brochures, press features, and other marketing materials, delivered in high resolution for both digital and print use.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20restaurant%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your restaurant photography session today</h2>
                    <p class="svc-text">Food, menu, interior, and lifestyle photography anywhere in Dubai and across the UAE. Fine dining, cafés, hotel restaurants, bakeries, and more: tell us about your venue and we’ll get back to you with availability and pricing, usually within a few hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20restaurant%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20restaurant%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
