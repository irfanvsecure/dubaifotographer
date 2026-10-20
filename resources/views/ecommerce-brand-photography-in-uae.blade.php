@extends('layouts.app')

@section('seo')
@include('seo.ecommerce-brand-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/phototune.ai_1783503818.png')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>E-commerce photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>White background, creative, and lifestyle product photography for Shopify, Amazon, Noon, and brand websites — built for brands that sell online.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20e-commerce%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your product shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your product shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your product shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Photo style</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="style" value="White background" required>
                                    <span>White background</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="style" value="Creative product" required>
                                    <span>Creative product</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="style" value="Lifestyle" required>
                                    <span>Lifestyle</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="style" value="A mix" required>
                                    <span>A mix</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Where you sell</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="platform" value="Website or Shopify" required>
                                    <span>Website or Shopify</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="platform" value="Amazon or Noon" required>
                                    <span>Amazon or Noon</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="platform" value="Social media" required>
                                    <span>Social media</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="platform" value="Several" required>
                                    <span>Several</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="Our Dubai studio, or your address">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many products?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Under 10">Under 10</option>
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
                <p class="svc-fact-title">Since 2014</p>
                <p class="svc-fact-text">Dubai, Abu Dhabi and across the UAE</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48 hours</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Arabic and English</p>
                <p class="svc-fact-text">Bilingual crew</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Licensed and insured</p>
                <p class="svc-fact-text">Production company</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">While many of our clients are based in Dubai, we provide e-commerce photography across all seven Emirates, travelling to you or working from our Dubai studio depending on the shoot.</p>
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
            <li >White background</li>
            <li >Creative product</li>
            <li >Brand lifestyle</li>
            <li >Cosmetics and beauty</li>
            <li >Jewellery</li>
            <li >Fashion and apparel</li>
            <li >Shopify</li>
            <li >Amazon</li>
            <li >Noon</li>
            <li >WooCommerce</li>
            <li  aria-hidden="true" >White background</li>
            <li  aria-hidden="true" >Creative product</li>
            <li  aria-hidden="true" >Brand lifestyle</li>
            <li  aria-hidden="true" >Cosmetics and beauty</li>
            <li  aria-hidden="true" >Jewellery</li>
            <li  aria-hidden="true" >Fashion and apparel</li>
            <li  aria-hidden="true" >Shopify</li>
            <li  aria-hidden="true" >Amazon</li>
            <li  aria-hidden="true" >Noon</li>
            <li  aria-hidden="true" >WooCommerce</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why Choose Dubai Fotographer</h2>
                <div class="svc-text">That’s our job at Dubai Fotographer. We create professional <a href="%%BASE%%/product-photography-services-in-uae">product photography</a> for e-commerce brands across the UAE, so your products look consistent everywhere they show up- on your website, on online marketplaces, and in your marketing campaigns.</div>
                <div class="svc-text">We’ve been doing it since 2014. Abdul Rehman leads the company, and we’re a fully licensed and insured production company. Over the years, we’ve worked with brands from all kinds of industries. Some need clean catalogue images on a plain white background. Others want creative <a href="%%BASE%%/lifestyle-photography-in-uae">lifestyle photography</a> with mood and styling. We do both.</div>
                <div class="svc-text">No two projects get the same treatment, though. We plan each shoot around your products, your audience, and the platforms where the images are going to live.</div>
                <div class="svc-text">Got ten products? Fine. Got a huge catalogue with hundreds of items? Also fine. You get reliable project planning, clear communication the whole way through, and professional e-commerce photography built around your business objectives.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20e-commerce%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Three ways we photograph your products</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>White background photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Creative product photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Brand lifestyle photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/White-background-photography-1024x782.webp" alt="White background product photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>White background photography</h3>
                            <div class="svc-panel-text"><p>Clean, consistent catalogue images with controlled studio lighting — uniform appearance across your entire range.</p><p>White background shots are a must. Every product listing needs them. A plain white image shows what the product is.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my catalogue</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Brand-campaigns-1024x682.webp" alt="Creative product photography for brand campaigns" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Creative product photography</h3>
                            <div class="svc-panel-text"><p>Thoughtful styling, lighting, and composition for website banners, advertising campaigns, and social media.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my campaign</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Context-conversion-1024x682.webp" alt="Brand lifestyle product photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Brand lifestyle photography</h3>
                            <div class="svc-panel-text"><p>Products in authentic settings with environments, props, or models that help customers visualise everyday use.</p></div>
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
            <p>Tell us about your products and platforms and we’ll come back with a tailored quote, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20e-commerce%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Industries we work with</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Beauty</button>
                    <button type="button" data-filter="1">Fashion</button>
                    <button type="button" data-filter="2">Campaigns</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Cosmetics-beauty.png" data-full="%%BASE%%/assets/images/2026/07/Cosmetics-beauty.png" data-tag="0" alt="Cosmetics and beauty product photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Jewellery-e1783509207344.jpg" data-full="%%BASE%%/assets/images/2026/07/Jewellery-e1783509207344.jpg" data-tag="0" alt="Jewellery product photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Fashion-apparel-e1783509657840.png" data-full="%%BASE%%/assets/images/2026/07/Fashion-apparel-e1783509657840.png" data-tag="1" alt="Fashion and apparel photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/06/female-photographer-influencer-shoot-dubai-1024x571.webp" data-full="%%BASE%%/assets/images/2026/06/female-photographer-influencer-shoot-dubai.webp" data-tag="1" alt="Female Photographers in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Brand-campaigns-1024x682.webp" data-full="%%BASE%%/assets/images/2026/07/Brand-campaigns.webp" data-tag="2" alt="Creative product photography for brand campaigns" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Context-conversion-1024x682.webp" data-full="%%BASE%%/assets/images/2026/07/Context-conversion.webp" data-tag="2" alt="Brand lifestyle product photography" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">E-Commerce Photography for Online Brands That Sell on First Impression</h2>
                <div class="svc-feature-text"><p>Online, people judge fast. Really fast. Before anyone reads your product description, they’ve already looked at the photo and made up their mind. That’s the whole point of professional e-commerce photography. It gets those details across before the customer reads a single word.</p><p>What you sell changes the details, not the care. <a href="%%BASE%%/fashion-photography-in-uae">Fashion</a>, <a href="%%BASE%%/jewelry-photography-services-in-uae">jewelry</a>, beauty products, home décor, general consumer goods- we shoot all of them. And your whole catalogue keeps one uniform look, so a customer browsing page after page feels like they’re in the same shop.</p><p class="svc-feature-label">Built for:</p><ul><li>Shopify and WooCommerce</li><li>Amazon and Noon</li><li>Brand websites</li><li>Social media</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Plan my product shoot</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/jewelry-photography-1024x576.webp')"><span>Detail</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Photography-that-helps-customers-buy-with-confidence-e1783504926195.jpg')"><span>Marketplaces</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Choosing-the-right-approach-for-your-catalogue-1024x682.webp')"><span>Studio or on location</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">E-Commerce Photography Across the UAE</h2>
                <p class="svc-text">Where do we shoot? Wherever works for you. We do studio e-commerce photography, and we do it on location.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Our Dubai studio, or on location at your premises</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>We travel to you, or work from our Dubai studio</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">How we plan &amp; run every shoot</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Tell us about your products and platforms, and we come back with a tailored quote, usually within a few hours.</p></li>
                <li><span class="svc-step-number">2</span><p>Planning and brief: we discuss products, brand guidelines, image requirements, and target platforms before a single light is set up.</p></li>
                <li><span class="svc-step-number">3</span><p>Production: each item is photographed using professional equipment and controlled lighting, in the studio or on location.</p></li>
                <li><span class="svc-step-number">4</span><p>Editing and delivery: professional retouching, colour correction, and delivery in formats ready for every platform.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Selling jewellery? See our <a href="%%BASE%%/jewelry-photography-services-in-uae">jewelry photography</a> service for macro detail without reflections.</p>
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
                        <div class="svc-answer"><p>We photograph a wide variety of products, including fashion, cosmetics, jewellery, electronics, home décor, packaged food, retail products, and consumer goods. If your products require a specialised setup, we’ll recommend the most suitable approach during planning.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you photograph clothing on models?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We offer model photography, mannequin photography, ghost mannequin images, and flat lays. The right approach depends on your brand style and where the images will be used.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide lifestyle product photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Alongside catalogue photography, we create lifestyle and brand photography placing products in realistic environments — ideal for websites, advertising campaigns, and social media.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How long does an e-commerce photography project take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Timelines vary depending on the number of products and the complexity of the shoot. Smaller projects may be completed within a few days; larger catalogues require additional production and editing time. We provide an estimated timeline before work begins.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide photography services outside Dubai?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide e-commerce photography across all seven Emirates, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20e-commerce%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your e-commerce photography project today</h2>
                    <p class="svc-text">Product photography, lifestyle content, and catalogue imagery anywhere across the UAE.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20e-commerce%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20an%20e-commerce%20product%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
