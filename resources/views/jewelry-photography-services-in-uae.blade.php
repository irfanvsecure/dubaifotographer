@extends('layouts.app')

@section('seo')
@include('seo.jewelry-photography-services-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Jewelry-photography-services-in-Dubai.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Jewelry photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Studio and on-location jewelry photography for brands, designers, and retailers — every facet, gemstone, and finish captured with macro precision and expert retouching.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20jewelry%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your jewelry shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your jewelry shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your jewelry shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Shoot type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Still life or catalog" required>
                                    <span>Still life or catalog</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="On model" required>
                                    <span>On model</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Macro detail" required>
                                    <span>Macro detail</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Brand campaign" required>
                                    <span>Brand campaign</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Where</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="location" value="Our Dubai studio" required>
                                    <span>Our Dubai studio</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="location" value="Your boutique or office" required>
                                    <span>Your boutique or office</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="Our studio, or your boutique or showroom">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many pieces?</label>
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
                <p class="svc-fact-title">In-house retouching</p>
                <p class="svc-fact-text">Consistent across every frame</p>
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
                <p class="svc-text">Studio shoots in Dubai or on-location at your boutique, showroom, or office anywhere across the UAE — the same production standard wherever your jewelry is based.</p>
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
            <li >Still life</li>
            <li >Macro detail</li>
            <li >On-model shoots</li>
            <li >Wholesalers and manufacturers</li>
            <li >E-commerce jewelry brands</li>
            <li >Retailers and boutiques</li>
            <li >Independent designers</li>
            <li >Gemstone and diamond dealers</li>
            <li >Bridal and engagement</li>
            <li >Luxury and fine jewelry</li>
            <li  aria-hidden="true" >Still life</li>
            <li  aria-hidden="true" >Macro detail</li>
            <li  aria-hidden="true" >On-model shoots</li>
            <li  aria-hidden="true" >Wholesalers and manufacturers</li>
            <li  aria-hidden="true" >E-commerce jewelry brands</li>
            <li  aria-hidden="true" >Retailers and boutiques</li>
            <li  aria-hidden="true" >Independent designers</li>
            <li  aria-hidden="true" >Gemstone and diamond dealers</li>
            <li  aria-hidden="true" >Bridal and engagement</li>
            <li  aria-hidden="true" >Luxury and fine jewelry</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/phototune.ai_1784185165-683x1024.webp')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why Choose Dubai Fotographer for Your Jewelry Shoot</h2>
                <div class="svc-text">We’ve been doing this since 2014. That’s more than ten years of real shoots across the UAE, and every one of them taught us something.</div>
                <div class="svc-text">Dubai Fotographer is led by our founder, Abdul Rehman. Under him, there’s a full team: dedicated jewelry photographers, editors, and production specialists. They work as one unit, and they’re accountable as one unit too. So when it comes to lighting, macro detail, or retouching gold, diamonds, and gemstones, you’re getting people who actually know the work. Not someone figuring it out on your pieces.</div>
                <div class="svc-text">Here’s something a lot of clients don’t think to ask. Is the company licensed? Insured? We are both. Fully. We’re a proper production company, not a freelancer with a camera, and we run things with the openness you’d expect from a serious commercial partner.</div>
                <div class="svc-text">The client list helps too. We’ve produced visual content for big names like Amazon, Etisalat, and Emirates. Businesses in every Emirate trust us with their brand.</div>
                <div class="svc-text">Need it fast? On select projects, we turn things around in 48 hours. And you’ll deal with one person, a single point of contact, from the day you book right up to delivery. No chasing different people for updates.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20jewelry%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Jewelry photography for every format &amp; platform</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Still life jewelry photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Jewelry model photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Macro jewelry photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'shopping-bag'])
                        <span>E-commerce jewelry photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'trophy'])
                        <span>Jewelry branding photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'check-circle'])
                        <span>Retouching &amp; post-production</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Still-life-jewelry-photography-682x1024.webp" alt="Still life jewelry photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Still life jewelry photography</h3>
                            <div class="svc-panel-text"><p>Clean, detailed images on white or styled backgrounds — crisp and true-to-life for catalogs, websites, and e-commerce listings. Pairs naturally with our <a href="%%BASE%%/ecommerce-brand-photography-in-uae">e-commerce photography service</a>.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my catalog shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Jewelry-model-photography-672x1024.webp" alt="Jewelry model photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Jewelry model photography</h3>
                            <div class="svc-panel-text"><p>Rings, necklaces, and earrings worn naturally by professional models, adding lifestyle appeal that helps customers visualise your pieces in real life. It works well for a <a href="%%BASE%%/lifestyle-photography-in-uae">lifestyle campaign</a>.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my model shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Macro-jewelry-photography-682x1024.webp" alt="Macro jewelry photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Macro jewelry photography</h3>
                            <div class="svc-panel-text"><p>Extreme close-up shots highlighting gemstone clarity, metal finish, and fine craftsmanship — ideal for luxury branding where every tiny detail matters most.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my macro shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/E-commerce-jewelry-photography-1024x700.webp" alt="E-commerce jewelry photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>E-commerce jewelry photography</h3>
                            <div class="svc-panel-text"><p>Images optimised for Amazon, Noon, Shopify, and Instagram — consistent lighting and backgrounds that boost conversions across your online store.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my listings</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/Jewelry-branding-photography-683x1024.webp" alt="Jewelry branding photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Jewelry branding photography</h3>
                            <div class="svc-panel-text"><p>Campaign-style photography that reflects your brand’s identity and story — combining styling, mood, and precision lighting to elevate your collection beyond simple product shots.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my campaign</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/07/Retouching-post-production-682x1024.webp" alt="Jewelry retouching and post-production" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Retouching &amp; post-production</h3>
                            <div class="svc-panel-text"><p>Expert colour correction, blemish removal, and reflection cleanup — transforming raw shots into polished, gallery-ready images your brand can be proud of.</p></div>
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
            <p>Tell us about your collection and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20jewelry%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Where your jewelry images work</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Campaigns</button>
                    <button type="button" data-filter="1">Catalogs</button>
                    <button type="button" data-filter="2">Social</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Luxury-brand-campaigns.jpg" data-full="%%BASE%%/assets/images/2026/07/Luxury-brand-campaigns.jpg" data-tag="0" alt="Jewelry photography for luxury brand campaigns" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Professional-jewelry-photography-for-e-commerce-campaigns.jpg" data-full="%%BASE%%/assets/images/2026/07/Professional-jewelry-photography-for-e-commerce-campaigns.jpg" data-tag="0" alt="Professional jewelry photography for e-commerce and campaigns" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Luxury-brand-campaigns9.jpg" data-full="%%BASE%%/assets/images/2026/07/Luxury-brand-campaigns9.jpg" data-tag="1" alt="Jewelry photography for print and digital catalogs" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/view-luxurious-golden-ring-felt-jewelry-display_23-2150329655.jpg" data-full="%%BASE%%/assets/images/2026/07/view-luxurious-golden-ring-felt-jewelry-display_23-2150329655.jpg" data-tag="1" alt="Golden ring on a felt jewelry display" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Luxury-brand-campaigns0.jpg" data-full="%%BASE%%/assets/images/2026/07/Luxury-brand-campaigns0.jpg" data-tag="2" alt="Jewelry photography for social media reels and feed content" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Retouching-post-production-682x1024.webp" data-full="%%BASE%%/assets/images/2026/07/Retouching-post-production.webp" data-tag="2" alt="Retouched jewelry image ready for the gallery" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Jewelry Photography Studio in Dubai, Serving the Entire UAE</h2>
                <div class="svc-feature-text"><p>Our jewelry photography studio sits right in the heart of Dubai. And it’s set up for one thing. Jewelry.</p><p>That means tiny gemstone close-ups on one day and a full catalog production the next. We’ve got professional macro lenses, lighting setups we can adjust to the smallest angle, and separate styling stations where every piece gets cleaned, placed, and checked before it goes in front of the camera.</p><p>Can’t bring your pieces to us? No problem. We do on-location shoots at your boutique, your showroom or even your office, and we bring the full setup with us. Lights, lenses, all of it.</p><p class="svc-feature-label">Where your images work:</p><ul><li>Luxury brand campaigns</li><li>Catalogs, print and digital</li><li>Social media reels and feed content</li><li>Press and editorial</li><li>E-commerce listings on Amazon, Noon, Shopify and Instagram</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Book a studio session</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Jewelry-photography-studio-in-Dubai-serving-the-entire-UAE.jpg')"><span>Dubai studio</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Luxury-brggand-campaigns.jpg')"><span>Styling</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/E-commerce-listingsd.png')"><span>E-commerce listings</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Jewelry Photography Across the UAE</h2>
                <p class="svc-text">Now, the studio is in Dubai. Our clients aren’t only here, though. We work across the whole UAE, Abu Dhabi, Sharjah, and further out too.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Our jewelry photography studio, or your boutique or showroom</span></div>
                <div class="svc-table-row"><span>Abu Dhabi and Sharjah</span><span>On-location shoots at your boutique, showroom or office</span></div>
                <div class="svc-table-row"><span>Rest of the UAE</span><span>Ajman, Ras Al Khaimah, Umm Al Quwain, Fujairah and Al Ain</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">How our jewelry photography process works</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Consultation and briefing: we discuss your jewelry, brand style, platforms, and goals to understand exactly what each image needs to achieve for your business.</p></li>
                <li><span class="svc-step-number">2</span><p>Studio setup and styling: our team prepares lighting, backgrounds, and styling in advance, so your session runs smoothly with no wasted time on shoot day.</p></li>
                <li><span class="svc-step-number">3</span><p>The photoshoot: using macro lenses and precision lighting, we capture every gemstone, reflection, and fine detail with the accuracy your pieces deserve.</p></li>
                <li><span class="svc-step-number">4</span><p>Retouching and delivery: we retouch, colour-correct, and export platform-ready images optimised for e-commerce, print, and social media.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Selling more than jewelry online? See our <a href="%%BASE%%/ecommerce-brand-photography-in-uae">e-commerce photography</a> service.</p>
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
                            <h3>What does a jewelry photography service typically include?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>A full jewelry photography service covers styling, studio setup, shooting, and retouching — delivering polished, platform-ready images for e-commerce, print, or campaigns, all handled from start to finish.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer on-location jewelry photography across the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. While our studio is based in Dubai, we serve clients throughout the UAE and can travel to your boutique, showroom, or office for on-location shoots when needed.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>What is the difference between still life and model jewelry photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Still life shoots focus on clean product shots ideal for catalogs and e-commerce, while model shoots show pieces worn naturally, helping customers picture how each item looks in real life.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>How long does a typical jewelry photoshoot take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>This depends on the number of pieces and style required, but most shoots — from setup to final capture — are completed within a single day at our studio.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can you shoot small or intricate jewelry details like gemstones?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We use macro lenses and precision lighting specifically for capturing fine details, reflections, and textures in gemstones, metal finishes, and intricate designs.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20jewelry%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your jewelry photography session today</h2>
                    <p class="svc-text">Studio and on-location jewelry photography for brands, designers, and retailers anywhere in Dubai and across the UAE.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20jewelry%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20jewelry%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
