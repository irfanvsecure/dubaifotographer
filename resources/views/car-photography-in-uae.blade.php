@extends('layouts.app')

@section('seo')
@include('seo.car-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Car-photography-servicesin-Dubai.png')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Car photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Professional automotive photography for dealerships, luxury brands, collectors, and private owners — exterior, interior, studio, and 360° coverage across all seven Emirates.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20car%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your car shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your car shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your car shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Type of shoot</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Hero shots" required>
                                    <span>Hero shots</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Dealer inventory" required>
                                    <span>Dealer inventory</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="360° photography" required>
                                    <span>360° photography</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Studio shoot" required>
                                    <span>Studio shoot</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Where</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="location" value="Our studio" required>
                                    <span>Our studio</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="location" value="Dealership or showroom" required>
                                    <span>Dealership or showroom</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="location" value="Outdoor location" required>
                                    <span>Outdoor location</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="location" value="Private garage" required>
                                    <span>Private garage</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. dealership, showroom, outdoor location">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How many vehicles?</label>
                            <select id="svc-guests" name="guests">
                                <option value="1 vehicle">1 vehicle</option>
                                <option value="2 to 5">2 to 5</option>
                                <option value="6 to 20">6 to 20</option>
                                <option value="Over 20">Over 20</option>
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
                <p class="svc-fact-title">Licensed and insured</p>
                <p class="svc-fact-text">Production company</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Arabic and English</p>
                <p class="svc-fact-text">Bilingual crew</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48 hours</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Since 2014</p>
                <p class="svc-fact-text">All seven Emirates covered</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">We provide car photography throughout Dubai and all seven Emirates — at dealerships, showrooms, private collections, outdoor locations, or in our controlled studio environment, with the same standard of production quality regardless of location.</p>
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
            <li >Luxury &amp; prestige cars</li>
            <li >Sports cars</li>
            <li >Classic &amp; vintage models</li>
            <li >Collector vehicles</li>
            <li >Electric vehicles</li>
            <li >Motorcycles</li>
            <li >Commercial fleets</li>
            <li >Dealer inventory</li>
            <li >360° photography</li>
            <li >Studio photography</li>
            <li  aria-hidden="true" >Luxury &amp; prestige cars</li>
            <li  aria-hidden="true" >Sports cars</li>
            <li  aria-hidden="true" >Classic &amp; vintage models</li>
            <li  aria-hidden="true" >Collector vehicles</li>
            <li  aria-hidden="true" >Electric vehicles</li>
            <li  aria-hidden="true" >Motorcycles</li>
            <li  aria-hidden="true" >Commercial fleets</li>
            <li  aria-hidden="true" >Dealer inventory</li>
            <li  aria-hidden="true" >360° photography</li>
            <li  aria-hidden="true" >Studio photography</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why Choose Dubai Fotographer for Car Photography?</h2>
                <div class="svc-text">We’ve been photographing cars around the UAE since 2014, from dusty old 4x4s to supercars that arrive on the back of a truck so they don’t pick up a scratch. In that time, Dubai Fotographer has worked with automotive businesses, dealerships, luxury brands, collectors, and private clients, and every one of them got professional car photography tailored to their vehicles and their commercial objectives. We plan each project carefully, because the final images have to show the car accurately, no flattering tricks, while still keeping a consistent visual standard from the first shot to the last.</div>
                <div class="svc-text">Here at Dubai Fotographer, we provide car photography services across Dubai and the UAE. Our clients are dealerships, manufacturers, collectors, automotive brands, and private owners who’ve finally got the car they saved for and want proper photos of it. We plan every photoshoot around what the imagery is actually for. Location, lighting, style, and the character of the vehicle all come into play. A 1980s Land Cruiser parked in the dunes needs a completely different approach from a brand-new supercar under the lights in DIFC. Getting that right is how the final photographs show the car at its best.</div>
                <div class="svc-text">Maybe it’s a single vehicle. Maybe it’s an entire dealership inventory that needs shooting before the weekend rush. Or it’s a large-scale marketing campaign that calls for <a href="%%BASE%%/multi-camera-event-recording">multi-camera photography</a> on the day. Whatever you need, we adapt our approach to suit it. Technical precision, creative composition, and professional post-production all go into the work, and the automotive photography you get back is ready for sales, advertising, editorial publications, and long-term brand assets.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20car%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Car Photography Services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Professional car photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Vehicle photography for dealerships</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'dot-circle'])
                        <span>360° car photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Automotive studio photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/05/car-photography-1-1024x576.webp" alt="Car Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Professional car photography</h3>
                            <div class="svc-panel-text"><p>High-quality images showcasing a vehicle’s design, exterior styling, interior features, and key details — suitable for advertising, websites, campaigns, and editorial publications.</p><p>Ever tried selling your car on dubizzle? It looks amazing in the parking lot, then you snap a photo, and it suddenly looks five years older. Buyers scrolling through listings can’t walk around it, so the pictures have to do that job for them. Professional car photography shows each one with clarity and consistency, and the imagery works just as well in advertising and <a href="%%BASE%%/product-photography-services-in-uae">product photography</a> campaigns as it does on sales listings, in editorial features, on websites, and across social media.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my car shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/05/car-photography-2-1024x576.webp" alt="Car Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Vehicle photography for dealerships</h3>
                            <div class="svc-panel-text"><p>Clean, accurate inventory imagery for websites, online marketplaces, and printed materials — consistent visual standards across every vehicle in the collection.</p><p>Automotive photography making every vehicle in the inventory easy to compare and browse online — same setup, same lighting, same standard throughout.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my inventory</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/05/car-photography-3-1024x580.webp" alt="360° car photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>360° car photography</h3>
                            <div class="svc-panel-text"><p>Multi-angle interactive viewing for dealerships and automotive brands — giving buyers a more complete understanding of a vehicle before arranging a physical viewing.</p><p>Sometimes it’s one individual vehicle. Sometimes it’s a complete automotive collection, with <a href="%%BASE%%/360-video-booth-experience-for-immersive-event-engagement">360° photography</a> added for online listings. We tailor our approach to automotive photography to each project either way.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my 360° shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/05/Car-Photography-1024x682.webp" alt="Automotive studio photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Automotive studio photography</h3>
                            <div class="svc-panel-text"><p>Controlled lighting and distraction-free backgrounds placing full attention on the vehicle — ideal for commercial advertising, product launches, and catalogue photography.</p><p>Every vehicle deserves visuals that reflect its design, condition, and unique character. From dramatic <a href="%%BASE%%/exterior-photography-in-uae">exterior angles</a> to carefully composed <a href="%%BASE%%/interior-photographer-in-uae">interior photographs</a>, every image contributes to a consistent visual collection.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my studio shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your project and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20car%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent car photography</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Vehicles</button>
                    <button type="button" data-filter="1">Studio</button>
                    <button type="button" data-filter="2">Marketing</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/05/car-photography-1-1024x576.webp" data-full="%%BASE%%/assets/images/2026/05/car-photography-1.webp" data-tag="0" alt="Car Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/05/car-photography-2-1024x576.webp" data-full="%%BASE%%/assets/images/2026/05/car-photography-2.webp" data-tag="0" alt="Car Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/05/car-photography-3-1024x580.webp" data-full="%%BASE%%/assets/images/2026/05/car-photography-3.webp" data-tag="0" alt="360° car photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/05/Car-Photography-1024x682.webp" data-full="%%BASE%%/assets/images/2026/05/Car-Photography.jpg" data-tag="1" alt="Automotive studio photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/man-working-tablet-office_23-2149307827-e1784626300242.jpg" data-full="%%BASE%%/assets/images/2026/07/man-working-tablet-office_23-2149307827-e1784626300242.jpg" data-tag="2" alt="Advertising and campaign imagery for automotive brands" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/senior-man-car-showroom-choosing-car_1303-18965-e1784625953983.jpg" data-full="%%BASE%%/assets/images/2026/07/senior-man-car-showroom-choosing-car_1303-18965-e1784625953983.jpg" data-tag="0" alt="Vehicle photography in a car showroom" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Car photography tailored to your business objectives</h2>
                <div class="svc-feature-text"><p>Before any shoot, we take time to understand exactly how your images will be used. This shapes every decision around location, lighting, background, and styling.</p><p>Dealerships get clean, consistent imagery. Brands and agencies get bolder, dramatic, campaign-ready visuals. Collectors get photography capturing the craftsmanship of rare and classic cars — every detail, finish, and feature documented for archival, insurance, or private sale purposes. Manufacturers get photography reflecting the quality and precision of the build, for product documentation, press materials, and technical marketing.</p><p class="svc-feature-label">Built for every industry in the UAE:</p><ul><li>Dealership websites and marketplaces</li><li>Advertising and campaign imagery</li><li>Editorial, magazine and press</li><li>Social media reels and feed content</li><li>Brochures, print and digital</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Tell us how you will use the photos</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Dealership-websites-marketplaces.jpg')"><span>Dealership websites</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/social-media-1.jpg')"><span>Social media</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/broche-e1784626402654.jpg')"><span>Brochures</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Car Photography Across the UAE</h2>
                <p class="svc-text">Studio or your location: we travel to dealerships, private garages, or outdoor locations across the UAE.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Dealerships, showrooms, DIFC and our studio</span></div>
                <div class="svc-table-row"><span>Desert</span><span>Outdoor shoots in the dunes</span></div>
                <div class="svc-table-row"><span>Abu Dhabi and the northern emirates</span><span>Dealerships, private collections and outdoor locations</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Car Photography Process</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We discuss your goals, preferred style, and which features you want the imagery to highlight.</p></li>
                <li><span class="svc-step-number">2</span><p>Location or studio is planned in advance, and the vehicle is cleaned, positioned, and checked for reflections before the first frame.</p></li>
                <li><span class="svc-step-number">3</span><p>Exterior, interior, and detail photographs captured with careful attention to composition, lighting, and perspective throughout.</p></li>
                <li><span class="svc-step-number">4</span><p>Selected images professionally edited for consistency and delivered in high resolution, ready for immediate use across all platforms.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Every session is planned before the shoot begins — nothing about automotive photography should be improvised on the day.</p>
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
                            <h3>1. How much does portrait photography cost in the UAE?Do you provide car photography across the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide car photography services throughout Dubai and all seven Emirates for businesses, dealerships, collectors, and private vehicle owners.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. Can you photograph vehicles at our location?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We can photograph vehicles at dealerships, showrooms, private collections, commercial premises, outdoor locations, or other suitable venues depending on your requirements.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. Do you offer studio car photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We offer car photography studio sessions where controlled lighting and backgrounds create clean, professional images for advertising, catalogues, and marketing campaigns.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. Can you photograph multiple vehicles for dealerships?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We regularly work with dealerships and automotive businesses to produce consistent photography for individual vehicles or complete inventories across all seven Emirates.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. Where can the final photographs be used?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>The images are suitable for dealership websites, online marketplaces, brochures, advertising campaigns, social media, editorial publications, presentations, and other marketing materials.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20car%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book Your Car Photoshoot Today</h2>
                    <p class="svc-text">Automotive photography for dealerships, brands, collectors, and private owners anywhere in Dubai and across the UAE. Tell us about your project and we’ll get back to you with availability and pricing.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20car%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20car%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
