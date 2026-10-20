@extends('layouts.app')

@section('seo')
@include('seo.fashion-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/IMG_94671-1.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Fashion photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Editorial-quality fashion photography for UAE designers, brands, e-commerce stores, and models — from studio lookbooks to on-location campaigns across all seven Emirates.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20fashion%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                            <p class="svc-label">Shoot type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Fashion portraits" required>
                                    <span>Fashion portraits</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="E-commerce" required>
                                    <span>E-commerce</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Lookbook or campaign" required>
                                    <span>Lookbook or campaign</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Model portfolio" required>
                                    <span>Model portfolio</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Where</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="setting" value="Our Dubai studio" required>
                                    <span>Our Dubai studio</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="setting" value="On location" required>
                                    <span>On location</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. our Dubai studio, desert, hotel">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How many looks or outfits?</label>
                            <select id="svc-guests" name="guests">
                                <option value="1 to 5">1 to 5</option>
                                <option value="6 to 15">6 to 15</option>
                                <option value="16 to 50">16 to 50</option>
                                <option value="Over 50">Over 50</option>
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
                <p class="svc-fact-title">48-hour</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7 Emirates</p>
                <p class="svc-fact-text">Studio and on-location shoots</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Since 2014</p>
                <p class="svc-fact-text">Licensed and insured</p>
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
                <p class="svc-text">Our studio is based in Dubai. Whether you’re a designer in Abu Dhabi, a boutique in Sharjah, or an e-commerce brand anywhere in the Emirates, our team travels to meet your production needs on location or welcomes you to our Dubai studio.</p>
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
            <li >Fashion portraits</li>
            <li >Lookbooks</li>
            <li >Campaigns</li>
            <li >E-commerce</li>
            <li >Menswear</li>
            <li >Flat-lay</li>
            <li >Model portfolios</li>
            <li >Editorial</li>
            <li >Retouching</li>
            <li >Boutique labels</li>
            <li  aria-hidden="true" >Fashion portraits</li>
            <li  aria-hidden="true" >Lookbooks</li>
            <li  aria-hidden="true" >Campaigns</li>
            <li  aria-hidden="true" >E-commerce</li>
            <li  aria-hidden="true" >Menswear</li>
            <li  aria-hidden="true" >Flat-lay</li>
            <li  aria-hidden="true" >Model portfolios</li>
            <li  aria-hidden="true" >Editorial</li>
            <li  aria-hidden="true" >Retouching</li>
            <li  aria-hidden="true" >Boutique labels</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/MANI9830-2copy.jpg')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Serving the UAE’s Fashion Landscape</h2>
                <div class="svc-text">We’ve been at this in the UAE for over a decade now, and one thing’s become pretty clear in that time. A fashion client doesn’t just want somebody who turns up with a camera. They want technical expertise, sure, but they also want genuine creative direction, someone who’ll act as a full production partner and not disappear the moment the shoot wraps.</div>
                <div class="svc-text">On paper, we’re a fully licensed and insured fashion photography company. In practice, that means a bilingual Arabic and English crew who’ll work with you in Dubai, Abu Dhabi, or anywhere else across all seven Emirates.</div>
                <div class="svc-text">The fashion photography studio has everything you’d expect: professional lighting, plenty of backdrops, and post-production capabilities in-house. Behind all that, there’s a dedicated team of photographers, stylists, retouchers, and production specialists, and they all run through one accountable process. You won’t find yourself chasing a bunch of scattered freelancers who’ve never worked together before. That’s really how we’ve earned trust with designers, models, and fashion brands, by keeping the quality consistent, talking clearly, and getting work back fast without cutting corners on detail.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20fashion%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Fashion photography for every format &amp; purpose</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Fashion portrait photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Studio fashion photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Men’s fashion photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'shopping-bag'])
                        <span>Fashion e-commerce photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Apparel &amp; fashion product photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'bolt'])
                        <span>Fashion photo retouching</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/IMGL0232-1-e1784100989419-781x1024.webp" alt="Fashion photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Fashion portrait photography</h3>
                            <div class="svc-panel-text"><p>This is the part where we get to play a little. We take studio lighting, add some proper creative direction, and end up with striking portraits that have that polished, editorial-quality feel. Models put them in their books, brands use them for campaigns, and, to be fair, they work for both.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my portraits</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/IMG_8728-1-e1784101033508-698x1024.webp" alt="Fashion photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Studio fashion photography</h3>
                            <div class="svc-panel-text"><p>What we love about the studio is that we’re in charge of everything: the lighting, the backdrops, the styling, even how a sleeve hangs. That’s why it’s our first pick for clean, high-impact visuals, the kind that end up in lookbooks, catalogues or a brand campaign.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my studio shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Mens-fashion-photography-e1784101586139.webp" alt="Fashion photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Men’s fashion photography</h3>
                            <div class="svc-panel-text"><p>Menswear is a different game. There’s less drama to it and a lot more focus on the cut, the texture and how the fit sits across the shoulders. We keep the pictures sharp and confident while still looking natural, whether that’s a tailored suit for a lookbook or a bit of streetwear for a brand’s next drop.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my menswear shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Fashion-e-commerce-photography-1024x683.webp" alt="Fashion photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Fashion e-commerce photography</h3>
                            <div class="svc-panel-text"><p>Anyone buying clothes online wants to know exactly what’s going to arrive. So the lighting stays consistent from one piece to the next, the colour accuracy is true to life, and the backgrounds are kept clean. Those platform-ready images help online clothing stores boost conversions, and they cut down on returns as well.</p><p>We shoot both on-model and flat-lay fashion photography, whichever suits your catalogue best, and often a mix of the two. We also produce high-quality visuals for cosmetics, skincare, <a href="%%BASE%%/jewelry-photography-services-in-uae">jewelry,</a> and personal care products too, all shot to meet e-commerce standards.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my e-commerce shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/Apparel-fashion-product-photography-1024x682.webp" alt="Fashion photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Apparel &amp; fashion product photography</h3>
                            <div class="svc-panel-text"><p>Here the clothes get the spotlight and nothing else does. We shoot with professional precision to bring out the fabric, the fit and the finish, so your collection looks market-ready whether it’s headed for the website or for print.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my apparel shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/07/Fashion-photo-retouching-683x1024.webp" alt="Fashion photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Fashion photo retouching</h3>
                            <div class="svc-panel-text"><p>We clean up skin, colour and detail, but we stop at a natural finish. Nobody wants models who look like they’re made of plastic. Every image meets the polished standards that modern fashion publishing expects, without us going overboard on it.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my retouching</a>
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
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20fashion%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent fashion shoots</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Campaigns</button>
                    <button type="button" data-filter="1">E-commerce</button>
                    <button type="button" data-filter="2">Portraits</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Premium-fashion-photography-for-UAE-brands-designers.jpg" data-full="%%BASE%%/assets/images/2026/07/Premium-fashion-photography-for-UAE-brands-designers.jpg" data-tag="0" alt="Premium fashion photography for UAE brands and designers" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Fashion-e-commerce-photography-built-for-online-stores.jpg" data-full="%%BASE%%/assets/images/2026/07/Fashion-e-commerce-photography-built-for-online-stores.jpg" data-tag="1" alt="Fashion e-commerce photography built for online stores" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Lookbooks-campaigns.jpg" data-full="%%BASE%%/assets/images/2026/07/Lookbooks-campaigns.jpg" data-tag="0" alt="Lookbook and campaign fashion photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/E-commerce-marketplace-listings.jpg" data-full="%%BASE%%/assets/images/2026/07/E-commerce-marketplace-listings.jpg" data-tag="1" alt="Fashion photography for e-commerce and marketplace listings" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMGL0232-1-e1784100989419.jpg" data-full="%%BASE%%/assets/images/2026/07/IMGL0232-1-e1784100989419.jpg" data-tag="2" alt="Fashion photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Feed-story-content.jpg" data-full="%%BASE%%/assets/images/2026/07/Feed-story-content.jpg" data-tag="0" alt="Fashion feed and story content for social media" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Model portfolio photography for new &amp; working models</h2>
                <div class="svc-feature-text"><p>Whether you’re just starting out or building on an established career, a strong portfolio is your most valuable tool in the modeling industry. As trusted model portfolio photographers in Dubai, we create versatile, high-quality images that showcase your range, from beauty close-ups and full-body <a href="%%BASE%%/portrait-photography-in-uae">fashion portraits</a> to striking <a href="%%BASE%%/flying-dress-photography-in-uae">flying dress shots</a> across the UAE’s deserts that adds movement, elegance, and editorial appeal to your portfolio.</p><p>Our modeling portfolio photographers work closely with you to plan looks, poses, and styling that highlight your individuality while meeting the standards agencies and casting directors expect.</p><p class="svc-feature-label">Fashion imagery across every channel:</p><ul><li>E-commerce and marketplace listings for your website, Amazon, Noon, and Instagram</li><li>Agency-ready model portfolios</li><li>Feed and story content for social media</li><li>Editorial magazine features</li><li>Lookbooks and campaigns for collection launches</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Quote my portfolio</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/MANI9728-1.jpg')"><span>Model portfolios</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Model-portfolios.jpg')"><span>Agency-ready images</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Magazine-features.4.jpg')"><span>Editorial</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Fashion Photography Across the UAE</h2>
                <p class="svc-text">It doesn’t matter much if it’s studio fashion photography or on-location shoots out in the desert or a hotel lobby. Each project across the UAE gets the same proven expertise, authoritative craftsmanship, and reliable delivery from us.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Our fashion photography studio, and on location across the city</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Designers and boutique labels, on location</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Fashion Photography Process</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We understand your brand, goals, and vision — discussing styling, mood boards, and shot lists to align on creative direction.</p></li>
                <li><span class="svc-step-number">2</span><p>Our team coordinates hair, makeup, wardrobe, and location or studio setup so every detail is planned before the shoot begins.</p></li>
                <li><span class="svc-step-number">3</span><p>Professional lighting and precision equipment used to capture your fashion portraits, products, or campaign imagery with creativity and expertise.</p></li>
                <li><span class="svc-step-number">4</span><p>Every selected image professionally retouched and delivered as polished, high-resolution files ready for website, social, or print campaigns.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Running an online store? See our <a href="%%BASE%%/ecommerce-brand-photography-in-uae">e-commerce brand photography</a> and <a href="%%BASE%%/product-photography-services-in-uae">product shots</a>.</p>
                <a class="svc-btn svc-btn-dark" href="#quote">Start with a consultation</a>
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
                            <h3>What does a fashion photography service include?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Our fashion photography services cover fashion portraits, studio and on-location shoots, e-commerce product photography, lookbooks, campaign imagery, and professional photo retouching — all tailored to your brand’s needs.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer fashion photography in Dubai and Abu Dhabi?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We are a fashion photography studio based in Dubai, serving clients across Abu Dhabi and the wider UAE, working from our studio or travelling to your preferred location.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you handle fashion e-commerce photography for online stores?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Our fashion e-commerce photography is designed for online clothing brands, with consistent lighting, accurate colour, and clean presentation to boost conversions across your listings.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide model portfolio photography for new models?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Our model portfolio photographers work with both new and experienced models, creating versatile portfolios that meet agency and casting director standards.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Is photo retouching included in your packages?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Our fashion photo retouching services are available as part of most packages, ensuring every image has a polished, natural, publication-ready finish.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How do I book a fashion photoshoot?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Contact our team with your project details — we’ll schedule a consultation to discuss styling, location, and creative direction before your shoot begins.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20fashion%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your fashion photography shoot today</h2>
                    <p class="svc-text">Editorial-quality fashion photography for brands, designers, and models anywhere in Dubai and across the UAE.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20fashion%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20fashion%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
