@extends('layouts.app')

@section('seo')
@include('seo.interior-photographer-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Interior-photography-services-in-Dubai48-1.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Interior Photographers in Dubai, Serving All of The UAE</h1>
                <div class="svc-hero-text"><p>Professional interior photography for homes, hotels, offices, and commercial spaces — light, composition, and perspective working together to reveal the character of every room.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20interior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your interior shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your interior shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your interior shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Space type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="space_type" value="Home or villa" required>
                                    <span>Home or villa</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="space_type" value="Office" required>
                                    <span>Office</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="space_type" value="Retail or restaurant" required>
                                    <span>Retail or restaurant</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="space_type" value="Hotel or resort" required>
                                    <span>Hotel or resort</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">What you need</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="deliverables" value="Photos only" required>
                                    <span>Photos only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="deliverables" value="Photos and 360° tour" required>
                                    <span>Photos and 360° tour</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="deliverables" value="Day and twilight shots" required>
                                    <span>Day and twilight shots</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="Property or business name, area">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Size of the space</label>
                            <select id="svc-guests" name="guests">
                                <option value="1 to 2 rooms">1 to 2 rooms</option>
                                <option value="Apartment or small office">Apartment or small office</option>
                                <option value="Villa or full floor">Villa or full floor</option>
                                <option value="Hotel or large venue">Hotel or large venue</option>
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
                <p class="svc-fact-text">Of interior photography</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7</p>
                <p class="svc-fact-text">Emirates covered</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48-hour</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Licensed &amp; insured</p>
                <p class="svc-fact-text">Dubai-based, serving all of the UAE</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">We provide interior photography across all seven Emirates, working with hotels, offices, retail spaces, and residential properties throughout the UAE with the same level of care and production quality at every location.</p>
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
            <li >Interior design &amp; architecture</li>
            <li >Restaurants &amp; cafés</li>
            <li >Real estate</li>
            <li >Corporate offices</li>
            <li >Retail &amp; showrooms</li>
            <li >Healthcare facilities</li>
            <li >Luxury residences</li>
            <li >Hotels &amp; resorts</li>
            <li >Virtual tours</li>
            <li >Design portfolios</li>
            <li  aria-hidden="true" >Interior design &amp; architecture</li>
            <li  aria-hidden="true" >Restaurants &amp; cafés</li>
            <li  aria-hidden="true" >Real estate</li>
            <li  aria-hidden="true" >Corporate offices</li>
            <li  aria-hidden="true" >Retail &amp; showrooms</li>
            <li  aria-hidden="true" >Healthcare facilities</li>
            <li  aria-hidden="true" >Luxury residences</li>
            <li  aria-hidden="true" >Hotels &amp; resorts</li>
            <li  aria-hidden="true" >Virtual tours</li>
            <li  aria-hidden="true" >Design portfolios</li>
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
                <div class="svc-text">We’re interior photographers working right across the Emirates, and a lot of people would call us one of the leading teams for it. Hotels, offices, retail brands and homeowners all over the UAE come to us when they want their interiors shown with proper clarity and depth, not the flat, washed-out look you get from a phone.</div>
                <div class="svc-text">We’re a Dubai-based production team. Since 2014, we’ve been shooting commercial and residential interiors all around the UAE- hotels, restaurants, offices, retail spaces, a fair amount for property developers, and yes, even <a href="%%BASE%%/construction-site-photography-in-uae">construction sites</a>. So we always start by talking to you about your brand, the space and what your marketing goals are.</div>
                <div class="svc-text">Interior design photography, for us, has never been simple documentation. We use light, composition, and perspective to pull out the character of each room. Every <a href="%%BASE%%/architectural-photography-in-uae">architectural photoshoot</a> is planned, so the photos show how design, space, and functionality fit together. That experience is why we bring a refined, detail-driven eye to every shoot, whether we’re working with architects, designers, developers, or on <a href="%%BASE%%/real-estate-photography-videography-services-in-uae">real estate photography</a> projects.</div>
                <div class="svc-text">“Light doesn’t just illuminate a room — it reveals its personality. Every interior shoot begins with reading the light.” – Abdul Rehman</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20interior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Interior photography for every space type</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Office Interiors</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Interior Architecture</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'shopping-bag'])
                        <span>Commercial Interiors</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'hotel'])
                        <span>Hotel Interiors</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Residential Interiors</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'dot-circle'])
                        <span>360° Interior Photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Office-interior-photography-1024x574.webp" alt="Interior Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Office Interiors</h3>
                            <div class="svc-panel-text"><p>Corporate spaces captured with precision, highlighting layout, lighting, and design details that reflect your brand’s professionalism for websites, brochures, and portfolios.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my office shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Architects-designers.jpg" alt="Interior Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Interior Architecture</h3>
                            <div class="svc-panel-text"><p>Structural elements, spatial flow, and design intent documented to give architects and designers powerful visuals that showcase their creative vision across publications and award submissions.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my project</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Interior-photography-forrr-homes-hotels-commercial-spaces-1024x682.webp" alt="Interior Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Commercial Interiors</h3>
                            <div class="svc-panel-text"><p>Retail stores, showrooms, and commercial venues photographed to highlight branding, ambiance, and functionality, helping businesses attract customers and stand out. Pairs naturally with our <a href="%%BASE%%/product-photography-services-in-uae">product photography</a> for retail clients.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my commercial space</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Hotel-interior-photography-for-a-competitive-market.png" alt="Hotel interior photography for a competitive market" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Hotel Interiors</h3>
                            <div class="svc-panel-text"><p>Hotels and resorts showcased with elegant imagery covering lobbies, rooms, restaurants, and amenities. Closely connected to our full <a href="%%BASE%%/hotel-photography-service-in-uae">hotel photography</a> service for properties needing complete visual coverage.</p><p>We mix natural and artificial light so you still get the ambiance without losing detail in the dark corners. Usually we’ll shoot one round in daytime clarity and then stick around for the warm twilight shots, when the lights come on and the pool starts to glow.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my hotel shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/Interior-photography-for-homes-hotels-commercial-spaces.jpg" alt="Interior Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Residential Interiors</h3>
                            <div class="svc-panel-text"><p>Homes, apartments, and villas across Dubai captured with warm, inviting imagery ideal for real estate listings, interior portfolios, and personal use.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my home shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/07/phototune.ai_1784110351.png" alt="Interior Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>360° Interior Photography</h3>
                            <div class="svc-panel-text"><p>Immersive 360-degree virtual tours that let clients explore properties remotely, ideal for real estate, hospitality, and interior design presentations requiring interactive viewing.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my virtual tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Your space deserves to be seen at its best. Quotes are typically sent within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20interior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Interior photography across the UAE</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Residential</button>
                    <button type="button" data-filter="1">Commercial</button>
                    <button type="button" data-filter="2">Hospitality</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Interior-photography-services-in-Dubai48-1.jpg" data-full="%%BASE%%/assets/images/2026/07/Interior-photography-services-in-Dubai48-1.jpg" data-tag="0" alt="Interior photography services in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/phototune.ai_1784110351.png" data-full="%%BASE%%/assets/images/2026/07/phototune.ai_1784110351.png" data-tag="0" alt="Interior Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Office-interior-photography-768x430.webp" data-full="%%BASE%%/assets/images/2026/07/Office-interior-photography.webp" data-tag="1" alt="Interior Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Interior-photography-forrr-homes-hotels-commercial-spaces-768x512.webp" data-full="%%BASE%%/assets/images/2026/07/Interior-photography-forrr-homes-hotels-commercial-spaces.webp" data-tag="1" alt="Interior Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Hotel-interior-photography-for-a-competitive-market.png" data-full="%%BASE%%/assets/images/2026/07/Hotel-interior-photography-for-a-competitive-market.png" data-tag="2" alt="Hotel interior photography for a competitive market" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Interior-photography-for-homes-hotels-commercial-spaces.jpg" data-full="%%BASE%%/assets/images/2026/07/Interior-photography-for-homes-hotels-commercial-spaces.jpg" data-tag="2" alt="Interior photography for homes, hotels and commercial spaces" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">How our interior photographers capture every space</h2>
                <div class="svc-feature-text"><p>Every space has its own rhythm, and our job is to find it. We begin by studying the layout, natural light, and design intent before a single shot is taken. Using professional lighting, wide-angle lenses, and tethered shooting techniques, our interior photographers capture depth, texture, and detail with precision.</p><p>Whether it’s a hotel lobby, retail store, <a href="%%BASE%%/restaurant-photography-service-in-uae">restaurant</a>, or private residence, the goal is images that feel as impressive as the space itself and sit seamlessly alongside <a href="%%BASE%%/exterior-photography-in-uae">exterior photography</a> when documenting an entire property.</p><p class="svc-feature-label">Where your interior photography works:</p><ul><li>Real estate &amp; listings</li><li>Design portfolios for architects &amp; designers</li><li>Social media feed &amp; story content</li><li>Print &amp; digital brochures</li><li>Hospitality marketing: booking platforms, property websites, OTA listings, and seasonal campaigns</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Plan my shoot</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Real-estate-listings.jpg')"><span>Real estate &amp; listings</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Hospitality-marketing.jpg')"><span>Hospitality marketing</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Feed-story-content-1.jpg')"><span>Social media</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Interior Photography Across the UAE</h2>
                <p class="svc-text">Our experience spans a wide range of sectors across Dubai and the UAE, giving us the versatility to adapt our style and approach to every kind of space.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Homes, apartments and villas, hotels, offices and retail</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Hotels, offices, retail spaces and residential properties</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our interior photography process</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Consultation &amp; planning: we discuss your space, goals, and preferred style, then schedule a shoot time that works around your business hours, minimising disruption.</p></li>
                <li><span class="svc-step-number">2</span><p>On-site photography: our team arrives with professional lighting and equipment, capturing every angle with precision, composition, and attention to detail.</p></li>
                <li><span class="svc-step-number">3</span><p>Editing &amp; retouching: careful post-processing including colour correction and retouching to enhance textures, lighting, and overall visual quality before delivery.</p></li>
                <li><span class="svc-step-number">4</span><p>Final delivery: edited, high-resolution images delivered within your agreed timeframe, ready for websites, brochures, social media, or marketing materials.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Documenting an entire property? Pair your interiors with our <a href="%%BASE%%/exterior-photography-in-uae">exterior photography</a>.</p>
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
                            <h3>What areas do you cover for interior photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We provide interior photography across Dubai and all seven Emirates, working with hotels, offices, retail spaces, and residential properties throughout the UAE.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How long does a typical interior photography session take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Session length depends on the size and complexity of the space, ranging from 1–2 hours for smaller interiors to half-day or full-day shoots for larger commercial or hospitality properties.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer 360-degree or virtual tour photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We offer 360 interior photography and virtual tour services, ideal for real estate listings, hotels, and interior design presentations that require immersive viewing experiences.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How soon will I receive my edited photos?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Turnaround time varies by project scope, but we offer expedited delivery including a 48-hour option for clients who need images quickly for marketing or listings.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you photograph both residential and commercial interiors?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We handle residential, commercial, and hospitality interior photography, tailoring our lighting and composition approach to suit each type of space.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do I need to prepare my space before the shoot?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Light staging helps — decluttering and arranging furniture — but our photographers are experienced in working with spaces as-is to highlight their best features.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20interior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your interior photography session today</h2>
                    <p class="svc-text">Professional interior photography for hotels, offices, retail, and residential spaces anywhere in Dubai and across the UAE. Quotes are typically sent within a few hours during business hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20interior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20interior%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
