@extends('layouts.app')

@section('seo')
@include('seo.lifestyle-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Lifestyle-photography-services-in-D.png')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Lifestyle photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Natural, story-driven imagery for brands, campaigns, and marketing channels — product, brand, portrait, and luxury lifestyle photography.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20lifestyle%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                                    <input type="radio" name="shoot_type" value="Products in context" required>
                                    <span>Products in context</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Brand campaign" required>
                                    <span>Brand campaign</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Lifestyle portraits" required>
                                    <span>Lifestyle portraits</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Luxury lifestyle" required>
                                    <span>Luxury lifestyle</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Models and location</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="support" value="Need both" required>
                                    <span>Need both</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="support" value="Models only" required>
                                    <span>Models only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="support" value="Location only" required>
                                    <span>Location only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="support" value="We have both" required>
                                    <span>We have both</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. your office, home or a location idea">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Where will the images be used?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Website">Website</option>
                                <option value="Social media">Social media</option>
                                <option value="Advertising campaign">Advertising campaign</option>
                                <option value="Several channels">Several channels</option>
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
                <p class="svc-fact-text">Of brand photography</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7</p>
                <p class="svc-fact-text">Emirates covered</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">5.0</p>
                <p class="svc-fact-text">Average client rating</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Licensed &amp; insured</p>
                <p class="svc-fact-text">Production company since 2014</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">We photograph on location or at venues that best suit the creative direction of each project, travelling across the UAE with full production equipment so location doesn’t limit the quality of the final imagery.</p>
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
            <li >Corporate brands</li>
            <li >Healthcare</li>
            <li >Retail &amp; e-commerce</li>
            <li >Real estate</li>
            <li >Restaurants &amp; cafés</li>
            <li >Hospitality</li>
            <li >Beauty &amp; skincare</li>
            <li >Fashion &amp; apparel</li>
            <li >Social media content</li>
            <li >Editorial</li>
            <li  aria-hidden="true" >Corporate brands</li>
            <li  aria-hidden="true" >Healthcare</li>
            <li  aria-hidden="true" >Retail &amp; e-commerce</li>
            <li  aria-hidden="true" >Real estate</li>
            <li  aria-hidden="true" >Restaurants &amp; cafés</li>
            <li  aria-hidden="true" >Hospitality</li>
            <li  aria-hidden="true" >Beauty &amp; skincare</li>
            <li  aria-hidden="true" >Fashion &amp; apparel</li>
            <li  aria-hidden="true" >Social media content</li>
            <li  aria-hidden="true" >Editorial</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Photography-Lifestyle-Photography-That-Reflects-Your-Brand-Identity.jpg')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Lifestyle Photography That Reflects Your Brand Identity</h2>
                <div class="svc-text">Stick a product on a white background and people know what it looks like. They still have no idea whether it belongs in their life. Professional lifestyle photography fixes that. A cup of karak going cold next to a laptop while someone answers one last email. A handbag thrown onto the passenger seat on the way to a meeting in Business Bay. Photographs like that feel natural and relatable.</div>
                <div class="svc-text">We’ve been at it since 2014, with Abdul Rehman leading the company from the start. Over the years, we’ve worked with businesses across a wide range of industries as a fully licensed and insured production company. Every project is tailored to the products, people, and environments that best represent your brand, which makes it ideal for <a href="%%BASE%%/fashion-photography-in-uae">fashion campaigns</a> and seasonal collections.</div>
                <div class="svc-text">We handle the whole creative process ourselves. Picking the locations. Planning the styling. Directing the talent, which sometimes means getting a nervous model to stop staring at the lens. Then refining the final images until they’re right.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20lifestyle%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Lifestyle Photography Services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'shopping-bag'])
                        <span>Lifestyle Product Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Brand Lifestyle Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Lifestyle Portrait Photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'grin-stars'])
                        <span>Luxury Lifestyle Photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/lifestyle.jpg" alt="Lifestyle product photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Lifestyle Product Photography</h3>
                            <div class="svc-panel-text"><p>Honestly, a jar of face cream on white tells you it’s a jar. That’s it. Put it next to a toothbrush with the lid off and suddenly you can picture your own bathroom. That’s lifestyle product photography: products in realistic environments, so customers see what they’re for and how they get used. Cosmetics, home décor, technology, food, consumer goods- we’ve shot them all like this. It looks authentic. The product still wins every time.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my product shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/bussiness-phottographyjpg.jpg" alt="Brand lifestyle photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Brand Lifestyle Photography</h3>
                            <div class="svc-panel-text"><p>People, locations, and carefully selected styling, mixed together until the photos start saying something about your company’s personality and values. Not just “here’s what we sell.” Clients use these on websites, in campaigns, and on social media. We’ve even had a few end up in annual reports, which made the finance team very happy.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my campaign</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Lifestyle-portrait-photography-e1784201722815.jpg" alt="Lifestyle portrait photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Lifestyle Portrait Photography</h3>
                            <div class="svc-panel-text"><p>Most people would rather do anything than stand in front of a grey backdrop. Fair. So this is the relaxed alternative to traditional studio portraits. We shoot individuals somewhere that feels natural and relevant to their work or personality: their own kitchen, their own site, their own messy desk. Approachable, still professional, and true to the individual.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my portrait</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Luxury-lifestyle-photography-1024x682.webp" alt="Luxury lifestyle photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Luxury Lifestyle Photography</h3>
                            <div class="svc-panel-text"><p>Different pace altogether. Carefully selected locations, refined styling, thoughtful composition. We do this for premium products, hospitality brands, real estate developments, and exclusive experiences, where even a cushion in the wrong spot gets noticed.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my luxury shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your brand and campaign. We’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20lifestyle%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <button type="button" data-filter="0">Campaigns</button>
                    <button type="button" data-filter="1">Fashion &amp; beauty</button>
                    <button type="button" data-filter="2">Hospitality</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Website-campaign-imagery.png" data-full="%%BASE%%/assets/images/2026/07/Website-campaign-imagery.png" data-tag="0" alt="Website and campaign lifestyle imagery" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/phototune.ai_1784203088-e1784203371848.png" data-full="%%BASE%%/assets/images/2026/07/phototune.ai_1784203088-e1784203371848.png" data-tag="0" alt="Lifestyle social media content" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Fashion-editorial.jpg" data-full="%%BASE%%/assets/images/2026/07/Fashion-editorial.jpg" data-tag="1" alt="Fashion and editorial lifestyle photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/phototune.ai_1784203732.png" data-full="%%BASE%%/assets/images/2026/07/phototune.ai_1784203732.png" data-tag="1" alt="Beauty and skincare lifestyle photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Luxury-hospitality-lifestyle-photography916.jpg" data-full="%%BASE%%/assets/images/2026/07/Luxury-hospitality-lifestyle-photography916.jpg" data-tag="2" alt="Luxury and hospitality lifestyle photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Luxury-lifestyle-photographyjj-1024x682.webp" data-full="%%BASE%%/assets/images/2026/07/Luxury-lifestyle-photographyjj.webp" data-tag="2" alt="Lifestyle Photography in UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Professional Lifestyle Photography for Brands &amp; Businesses</h2>
                <div class="svc-feature-text"><p>Last-minute confession from behind the camera: the photos brands end up loving are rarely the “perfect” ones. They’re the slightly messy ones. A half-eaten manakish on the counter. A dog walking right through the frame. Somebody laughing at something we didn’t catch. That stuff is why strong lifestyle photography is built around authenticity.</p><p>We don’t bother with overly staged compositions, but the photographs still keep the quality and consistency anyone would expect from <a href="%%BASE%%/ecommerce-brand-photography-in-uae">commercial photography</a>.</p><p class="svc-feature-label">We know where the images are going before we shoot:</p><ul><li>Website</li><li>Advertising</li><li><a href="%%BASE%%/influencer-photography-in-uae">Social media</a> content</li><li>Printed materials</li><li>Editorial use</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Plan my shoot</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/reflect-how-a-product-service-or-brand-naturally-fits-into-its-intended-setting-1024x683.webp')"><span>Real settings</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Luxury-hospitality-lifestyle-photography916.jpg')"><span>Refined styling</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Lifestyle-photography-services-in-D.png')"><span>Natural moments</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Lifestyle Photography Across the UAE</h2>
                <p class="svc-text">We provide lifestyle photography across all seven Emirates, on location or at venues that best suit the creative direction of the project.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>On location, at your venue or in a real home or office setting</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Brand, hospitality and real estate shoots</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">How We Plan &amp; Run Every Lifestyle Shoot</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We discuss your brand, campaign objectives, intended audience, and how the images will be used.</p></li>
                <li><span class="svc-step-number">2</span><p>We plan locations, styling, props, and models where required.</p></li>
                <li><span class="svc-step-number">3</span><p>On the day, our team creates natural interactions and well-balanced compositions while adapting to the environment and available light.</p></li>
                <li><span class="svc-step-number">4</span><p>Every selected image is professionally edited for consistency in colour, tone, and presentation before final delivery in high resolution.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>“Lifestyle photography works when it stops looking like photography — when it feels like the brand simply lives that way.”</p>
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
                            <h3>What is lifestyle photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Lifestyle photography creates natural, story-driven images that place people or products in realistic environments. Unlike traditional studio photography, it focuses on showing how a product, service, or brand fits into everyday life while maintaining a professional commercial standard.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>What types of businesses use lifestyle photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Lifestyle photography is suitable for a wide range of industries, including fashion, beauty, hospitality, food and beverage, real estate, retail, healthcare, and corporate businesses. It’s commonly used for websites, advertising campaigns, social media, brochures, and other marketing materials.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide lifestyle photography outside Dubai?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide lifestyle photography across all seven Emirates, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain. We photograph on location or at venues that best suit the creative direction of the project.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you arrange models and shoot locations?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Depending on your project requirements, we can assist with sourcing suitable locations, coordinating models, and planning styling elements to ensure the final imagery aligns with your brand and campaign objectives.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Where can lifestyle photography be used?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Lifestyle photographs can be used across company websites, social media platforms, advertising campaigns, brochures, editorial publications, product packaging, presentations, and other marketing materials.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20lifestyle%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your lifestyle photography project today</h2>
                    <p class="svc-text">Natural, story-driven imagery for brands anywhere in Dubai and across the UAE. Tell us about your brand and campaign, and we’ll come back with availability and pricing.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20lifestyle%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20lifestyle%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
