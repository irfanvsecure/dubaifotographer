@extends('layouts.app')

@section('seo')
@include('seo.product-photography-services-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Product-photography-services-in-Dubai3.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Product photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>White background packshots, 360° spin photography, lifestyle imagery, and macro shots — built for Amazon, Noon, Shopify, and brand websites.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                                    <input type="radio" name="shoot_type" value="White background" required>
                                    <span>White background</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Lifestyle" required>
                                    <span>Lifestyle</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="360° spin" required>
                                    <span>360° spin</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Macro detail" required>
                                    <span>Macro detail</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Where</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="location" value="In our studio" required>
                                    <span>In our studio</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="location" value="On location" required>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="Our studio, or your address">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many products?</label>
                            <select id="svc-guests" name="guests">
                                <option value="1 to 10">1 to 10</option>
                                <option value="10 to 50">10 to 50</option>
                                <option value="50 to 200">50 to 200</option>
                                <option value="Over 200">Over 200</option>
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
                <p class="svc-fact-text">Of product photography</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">7 Emirates</p>
                <p class="svc-fact-text">Covered by our team</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48h turnaround</p>
                <p class="svc-fact-text">On selected packages</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Licensed &amp; insured</p>
                <p class="svc-fact-text">Shot for Amazon, Etisalat and du</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">Studio shoots in Dubai Design District, or our mobile team comes to you anywhere across the UAE. Same studio-quality standard, same team, regardless of location.</p>
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
            <li >Food &amp; beverage</li>
            <li >Electronics &amp; gadgets</li>
            <li >Cosmetics &amp; beauty</li>
            <li >Jewellery &amp; luxury accessories</li>
            <li >Fashion &amp; apparel</li>
            <li >Amazon &amp; Noon sellers</li>
            <li >Health &amp; wellness</li>
            <li >Home décor &amp; furniture</li>
            <li >Shopify</li>
            <li >WooCommerce</li>
            <li  aria-hidden="true" >Food &amp; beverage</li>
            <li  aria-hidden="true" >Electronics &amp; gadgets</li>
            <li  aria-hidden="true" >Cosmetics &amp; beauty</li>
            <li  aria-hidden="true" >Jewellery &amp; luxury accessories</li>
            <li  aria-hidden="true" >Fashion &amp; apparel</li>
            <li  aria-hidden="true" >Amazon &amp; Noon sellers</li>
            <li  aria-hidden="true" >Health &amp; wellness</li>
            <li  aria-hidden="true" >Home décor &amp; furniture</li>
            <li  aria-hidden="true" >Shopify</li>
            <li  aria-hidden="true" >WooCommerce</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/ffghbgk-1024x682.webp')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why choose Dubai Fotographer?</h2>
                <div class="svc-text">We’re not a freelancer with a camera, we’re a licensed, insured company delivering professional product photography services across the UAE since 2014. Led by founder Abdul Rehman, our in-house team of photographers, editors, and production specialists ensures every ecommerce photography project stays consistent from planning to final delivery.</div>
                <div class="svc-text">We’ve shot for brands like Amazon, Etisalat, and du, and our fully equipped studio in Dubai Design District handles everything from white-background packshots to <a href="%%BASE%%/360-video-booth-experience-for-immersive-event-engagement">360 spin product shoots</a>, with mobile teams available across all seven Emirates. With a 48-hour turnaround on selected packages and a single point of contact managing your entire shoot, our professional product photographers give your brand the expertise, accountability, and consistency it deserves.</div>
                <div class="svc-text">“Great product photos don’t happen by accident — they come from the right lighting, the right eye for detail, and a genuine understanding of what makes a product sell online.” <strong>– Abdul Rehman</strong></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our product photography services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'product-hunt'])
                        <span>Professional product photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'dot-circle'])
                        <span>360° product photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Lifestyle product photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Macro product photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'shopping-bag'])
                        <span>Ecommerce &amp; marketplace photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'check-circle'])
                        <span>Product image editing &amp; retouching</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Professional-product-photography-1024x682.webp" alt="Professional product photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Professional product photography</h3>
                            <div class="svc-panel-text"><p>Capture clean, high-resolution product images with accurate colors, balanced lighting, and sharp details, ideal for ecommerce websites, catalogs, brochures, and online marketplaces.</p><p>We deliver product images that are high-resolution, professionally edited, and ready to be used on online stores, in digital catalogs, for <a href="%%BASE%%/influencer-photography-in-uae">social media</a>, and in various marketing materials.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my packshots</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/360°-product-photography-1-1024x676.webp" alt="360° product photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>360° product photography</h3>
                            <div class="svc-panel-text"><p>Showcase every angle of your products with interactive 360° spin photography, helping customers explore items more confidently and improving engagement on your website.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my 360° spin</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Lifestyle-product-photography-681x1024.webp" alt="Lifestyle product photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Lifestyle product photography</h3>
                            <div class="svc-panel-text"><p>Present your products in real-life settings that connect with your audience, strengthen your brand identity, and demonstrate how each item fits into everyday use.</p><p>We do many types of shots, from simple white background packshots to more <a href="%%BASE%%/lifestyle-photography-in-uae">creative lifestyle photography</a>. From clean product imagery to subtle <a href="%%BASE%%/fashion-photography-in-uae">fashion photography</a> that brings your collection to life, every image reflects the right style, composition, and attention to detail while staying true to your brand.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my lifestyle shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Macro-product-photography-682x1024.webp" alt="Macro product photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Macro product photography</h3>
                            <div class="svc-panel-text"><p>Highlight fine textures, intricate craftsmanship, and small product details through close-up macro photography, making premium and delicate items stand out to potential buyers.</p><p>From everyday retail product shoots to premium <a href="%%BASE%%/jewelry-photography-services-in-uae">jewelry photography</a>, every project is approached with the same focus on quality, consistency, and attention to detail.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my macro shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/Ecommerce-marketplace-photography-1024x682.webp" alt="Ecommerce and marketplace photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Ecommerce &amp; marketplace photography</h3>
                            <div class="svc-panel-text"><p>Receive marketplace-ready images optimized for Amazon, Noon, Shopify, and other ecommerce platforms, ensuring your listings meet platform requirements and look professionally presented.</p><p>Whether you sell on your own website or across multiple marketplaces, we produce images that meet every platform’s technical requirements while maintaining your brand’s visual identity.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my listings</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/07/Product-image-editing-retouching-682x1024.webp" alt="Product image editing and retouching" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Product image editing &amp; retouching</h3>
                            <div class="svc-panel-text"><p>Every photograph is professionally edited with color correction, background removal, dust cleanup, and retouching to deliver polished, consistent images ready for immediate use.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my editing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your products and platforms and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent product shoots</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Packshots</button>
                    <button type="button" data-filter="1">Lifestyle</button>
                    <button type="button" data-filter="2">Detail</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/phototune.ai_1784191515.png" data-full="%%BASE%%/assets/images/2026/07/phototune.ai_1784191515.png" data-tag="0" alt="White background product packshot" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Lifestyle-brand-imagery.jpg" data-full="%%BASE%%/assets/images/2026/07/Lifestyle-brand-imagery.jpg" data-tag="1" alt="Lifestyle and brand product imagery" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/macro.png" data-full="%%BASE%%/assets/images/2026/07/macro.png" data-tag="2" alt="Macro product detail photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Lifesdtyle-brand-imagery.jpg" data-full="%%BASE%%/assets/images/2026/07/Lifesdtyle-brand-imagery.jpg" data-tag="0" alt="Packaging product photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/phototune.ai_1784192561-745x1024.webp" data-full="%%BASE%%/assets/images/2026/07/phototune.ai_1784192561.webp" data-tag="1" alt="Product photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/06/jewelry-photography-1024x576.webp" data-full="%%BASE%%/assets/images/2026/06/jewelry-photography.webp" data-tag="2" alt="Jewelry Photography Services in UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Product photography studio in Dubai, serving all of the UAE</h2>
                <div class="svc-feature-text"><p>Our product photography studio in Dubai is built for brands that need consistent, high-quality <a href="%%BASE%%/services">photography services</a> at scale, fully equipped with professional lighting, backdrops, and equipment to handle everything from single products to full catalog shoots.</p><p>Based in Dubai Design District, we welcome businesses in-studio for controlled, precision shoots, or we bring our production team on-location anywhere across the UAE – Abu Dhabi, Sharjah, and beyond.</p><p>Whether you’re an <a href="%%BASE%%/ecommerce-brand-photography-in-uae">e-commerce brand</a> in Dubai needing white-background pack shots, a cosmetics brand in Abu Dhabi wanting a detailed macro <a href="%%BASE%%/beauty-photography-in-uae">beauty photoshoot</a>, or a retailer in Sharjah looking for lifestyle product photography, our studio setup and mobile teams adapt to your product and location.</p><p class="svc-feature-label">Images built for every sales channel:</p><ul><li>Amazon and Noon</li><li>Shopify and WooCommerce</li><li>Brand websites and social media</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Book a studio session</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Product-image-effffditing-retouching.jpg')"><span>Studio</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/phototune.ai_1784185165-683x1024.webp')"><span>360° spin</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Ecommerce-product-photography-for-brands-businesses.png')"><span>Ecommerce</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Product photography across the UAE</h2>
                <p class="svc-text">No matter where you’re based in the UAE, you get the same studio-quality standard, backed by a team that understands local marketplaces and shopper expectations.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Our studio in Dubai Design District, or on-location</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>On-location shoots, from macro beauty to catalogue</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our product photography process</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Consultation and planning: we discuss your products, branding, image requirements, and intended platforms to create a shoot plan tailored to your business objectives.</p></li>
                <li><span class="svc-step-number">2</span><p>Styling and photography: our team carefully prepares each product and captures high-quality images using professional lighting, studio equipment, and proven techniques.</p></li>
                <li><span class="svc-step-number">3</span><p>Editing and retouching: every image undergoes expert retouching, color correction, background refinement, and quality checks.</p></li>
                <li><span class="svc-step-number">4</span><p>Final delivery: your edited images arrive in the required formats, optimized for ecommerce websites, marketplaces, social media, print, and marketing campaigns.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Any catalogue size, from a single hero product to hundreds of SKUs. Quotes are typically sent within a few hours during business hours.</p>
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
                            <h3>What types of products do you photograph?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We photograph a wide variety of products, including fashion apparel, jewellery, cosmetics, skincare, electronics, home décor, food items, accessories, and other consumer goods for ecommerce, catalogues, and advertising.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer 360° product photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide 360° product photography that allows customers to view your products from every angle, making your online listings more interactive and engaging.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How long does a product photography project take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Project timelines depend on the number of products, shoot style, and editing requirements. We offer a 48-hour turnaround on selected packages and provide a clear timeline before the project begins.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide photo editing and retouching?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Every image includes professional editing — colour correction, background removal, dust cleanup, and detailed retouching to ensure a polished final result.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you serve businesses outside Dubai?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. While our product photography studio is based in Dubai, we work with businesses across all seven Emirates, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you create images for Amazon and other ecommerce platforms?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Absolutely. We produce marketplace-ready images that meet the requirements of Amazon, Noon, Shopify, and other ecommerce platforms, helping your listings look professional and compliant.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your product photography session today</h2>
                    <p class="svc-text">Studio or on-location product photography anywhere in Dubai and across the UAE. Tell us about your products and platforms and we’ll get back to you with availability and pricing, usually within a few hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
