@extends('layouts.app')

@section('seo')
@include('seo.beauty-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Beauty-photography-services-in-Dubai.png')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Beauty photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Professional beauty photography for brands, cosmetic companies, salons, clinics, and independent beauty professionals — product, model, hair, and makeup imagery across the UAE.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20beauty%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your beauty shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your beauty shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your beauty shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">What do you need?</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Product photography" required>
                                    <span>Product photography</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Model photography" required>
                                    <span>Model photography</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Product and model" required>
                                    <span>Product and model</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Hair or makeup" required>
                                    <span>Hair or makeup</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Your business</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="business" value="Brand or e-commerce" required>
                                    <span>Brand or e-commerce</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="business" value="Salon or clinic" required>
                                    <span>Salon or clinic</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="business" value="Makeup or hair artist" required>
                                    <span>Makeup or hair artist</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="business" value="Agency" required>
                                    <span>Agency</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. your salon, clinic or our Dubai studio">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How many products or looks?</label>
                            <select id="svc-guests" name="guests">
                                <option value="1 to 5">1 to 5</option>
                                <option value="6 to 20">6 to 20</option>
                                <option value="21 to 50">21 to 50</option>
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
                <p class="svc-fact-title">Licensed and insured</p>
                <p class="svc-fact-text">Production company</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Arabic and English</p>
                <p class="svc-fact-text">Bilingual crew, female photographers</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48 hours</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">5.0</p>
                <p class="svc-fact-text">Average client rating</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">Whether your studio, salon, or brand is based in Dubai or elsewhere in the UAE, our team travels to your preferred location with full professional equipment, or welcomes you to our Dubai studio for a controlled indoor shoot.</p>
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
            <li >Cosmetic &amp; skincare brands</li>
            <li >Beauty salons</li>
            <li >Hair salons</li>
            <li >Aesthetic clinics</li>
            <li >Makeup artists</li>
            <li >Wellness brands</li>
            <li >Independent professionals</li>
            <li >Beauty e-commerce</li>
            <li >Product launches</li>
            <li >Campaign imagery</li>
            <li  aria-hidden="true" >Cosmetic &amp; skincare brands</li>
            <li  aria-hidden="true" >Beauty salons</li>
            <li  aria-hidden="true" >Hair salons</li>
            <li  aria-hidden="true" >Aesthetic clinics</li>
            <li  aria-hidden="true" >Makeup artists</li>
            <li  aria-hidden="true" >Wellness brands</li>
            <li  aria-hidden="true" >Independent professionals</li>
            <li  aria-hidden="true" >Beauty e-commerce</li>
            <li  aria-hidden="true" >Product launches</li>
            <li  aria-hidden="true" >Campaign imagery</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why Choose Dubai Fotographer?</h2>
                <div class="svc-text">Dubai Fotographer provides beauty photography services for beauty brands, cosmetic companies, salons, aesthetic clinics and independent professionals, from a big skincare label to a nail artist working out of a home studio. Since 2014, our licensed and insured team has created high-quality commercial imagery tailored to your products, your services, and your marketing goals. Our crew is bilingual in Arabic and English, and that includes <a href="%%BASE%%/female-photographers-in-uae">female photographers</a>, so we can support diverse client requirements, whether that’s a women-only salon or a clinic that prefers a female crew for treatment shots.</div>
                <div class="svc-text">A vegan skincare start-up and a luxury fragrance house don’t want the same photos. We worked that out pretty early on. Every beauty brand has its own identity, its own audience, and its own objectives. So we plan each project around your specific requirements, not some standard photography style we hand out to everybody.</div>
                <div class="svc-text">Our clients run from independent beauty professionals, a lash tech building up her Instagram, a brow artist with a single chair, to established cosmetic brands sitting on shelves in every mall. Whoever you are, the photography should reflect the quality of your products and services, and stay practical for long-term commercial use, so you aren’t stuck reshooting every three months.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20beauty%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Beauty Product &amp; Model Photography</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'shopping-bag'])
                        <span>Beauty product photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Model, hair &amp; makeup</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'grin-stars'])
                        <span>Campaigns &amp; launches</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Styles for your brand</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/packaging-1024x682.webp" alt="Beauty product and packaging photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Beauty product photography</h3>
                            <div class="svc-panel-text"><p>Stick a jar of moisturiser on a marble slab and fine; it looks nice enough. Now show somebody’s skin glowing a week after they started using it, and that’s when people reach for their wallets. Beauty product photography is about the packaging, the textures, and the tiny product details: that little swirl on top of a cream, the shimmer in a highlighter when you tilt it towards the window.</p><p>A lot of businesses just want clean cosmetic photography for their websites and online stores. White background. Sharp edges. Colours that look like the real product when it turns up in the post.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my products</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Beauty-product-model-photographyjpg.jpg" alt="Beauty model photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Model, hair &amp; makeup</h3>
                            <div class="svc-panel-text"><p><a href="%%BASE%%/fashion-photography-in-uae">Model photography</a> has another job entirely. It shows customers the results, and the experience they’re buying into with the brand. Others get more out of pictures with professional models, makeup artists, or hairstylists in them. Take haircare brands. For them we’ll show off colour, texture, styling and movement, a fresh blowout swinging out as someone turns their head, so people can see how good the products are and how skilled the salon is at the same time.</p><p>There’s technical precision in all of it, plus some creative direction, and the <a href="%%BASE%%/ecommerce-brand-photography-in-uae">commercial photography</a> that comes out lives up to what modern beauty brands expect.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my model shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Advertising-social-campaigns502.jpg" alt="Beauty advertising and social campaign photography" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Campaigns &amp; launches</h3>
                            <div class="svc-panel-text"><p>People scroll past a hundred lipsticks a day. The one they stop on usually has a better photo, not a better formula. A customer might find your brand on <a href="%%BASE%%/influencer-photography-in-uae">social media</a>, land on your website, or catch a new product launch in their feed. Wherever it happens, professional beauty photography is what gets the quality, style, and identity behind your business across in that first second.</p><p>Commercial campaigns. <a href="%%BASE%%/product-photography-services-in-uae">Product launches</a>. A portfolio update for a makeup artist. Branded content for the next three months of Instagram. Whatever it is, we create professional photographs that help beauty businesses present themselves with confidence.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my campaign</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Beauty-photography-services-in-Dubai.jpg" alt="Beauty photography services in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Styles for your brand</h3>
                            <div class="svc-panel-text"><p>Whatever your positioning, the photography should reinforce it in every image, from product shots to campaign visuals.</p><ul><li><strong>Luxurious and premium:</strong> rich textures, dark moody tones, and precise detail photography communicating exclusivity and quality for high-end beauty brands.</li><li><strong>Natural and wellness:</strong> soft light, clean backgrounds, and ingredient-focused imagery for brands positioned around natural, organic, or wellness-led beauty.</li><li><strong>Minimalist and modern:</strong> clean compositions, controlled palettes, and precise product photography for contemporary, trend-led beauty and cosmetic brands.</li></ul></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my brand shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your brand and we’ll match you with the right professional, usually getting back to you within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20beauty%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent beauty photography</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Models</button>
                    <button type="button" data-filter="1">Products</button>
                    <button type="button" data-filter="2">Campaigns</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Beauty-product-model-photographyjpg.jpg" data-full="%%BASE%%/assets/images/2026/07/Beauty-product-model-photographyjpg.jpg" data-tag="0" alt="Beauty model photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/web.jpg" data-full="%%BASE%%/assets/images/2026/07/web.jpg" data-tag="0" alt="Beauty portrait for a website and online store" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/editorial.jpg" data-full="%%BASE%%/assets/images/2026/07/editorial.jpg" data-tag="0" alt="Beauty editorial photography in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/packaging-1024x682.webp" data-full="%%BASE%%/assets/images/2026/07/packaging.jpg" data-tag="1" alt="Beauty product and packaging photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Advertising-social-campaigns502.jpg" data-full="%%BASE%%/assets/images/2026/07/Advertising-social-campaigns502.jpg" data-tag="2" alt="Beauty advertising and social campaign photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Beauty-photography-services-in-Dubai.jpg" data-full="%%BASE%%/assets/images/2026/07/Beauty-photography-services-in-Dubai.jpg" data-tag="2" alt="Beauty photography services in Dubai" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Beauty Photography for Every Stage of Your Marketing</h2>
                <div class="svc-feature-text"><p>Consistent product and lifestyle imagery across your entire website and e-commerce product pages, same visual standard throughout. Campaign-ready visuals for paid social, influencer content, digital advertising, and seasonal promotions.</p><p>Careful planning goes into it, along with professional lighting, creative direction, and consistent post-production. What you end up with is imagery that helps your business present itself with confidence across every platform.</p><p class="svc-feature-label">Where your photos work:</p><ul><li>Websites and online stores</li><li>Advertising and social campaigns</li><li>Packaging and product detail imagery</li><li>Brochures, print and digital</li><li>Press and editorial</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Tell us where the photos will run</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/web.jpg')"><span>Online stores</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/broucher.jpg')"><span>Brochures</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/editorial.jpg')"><span>Press and editorial</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Beauty Photography Across the UAE</h2>
                <p class="svc-text">Studio sessions in Dubai or on-location anywhere across the UAE.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Our Dubai studio, or your salon, clinic or studio</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>On-location shoots with full professional equipment</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Beauty Photography Process</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We discuss your brand, campaign objectives, and the platforms where the photography will be used.</p></li>
                <li><span class="svc-step-number">2</span><p>We plan the visual style, lighting approach, and overall aesthetic, and co-ordinate products, models, styling, and locations or studio setup before shoot day.</p></li>
                <li><span class="svc-step-number">3</span><p>Professional product and beauty imagery captured with consistent lighting and creative direction throughout.</p></li>
                <li><span class="svc-step-number">4</span><p>High-resolution photographs professionally edited and delivered, ready for immediate commercial use.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Prefer a female crew for treatment shots? Our <a href="%%BASE%%/female-photographers-in-uae">female photographers</a> can cover your session.</p>
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
                            <h3>1. What types of businesses do you provide beauty photography for?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We work with cosmetic brands, skincare companies, beauty salons, hair salons, makeup artists, beauty clinics, wellness brands, and other businesses within the beauty industry.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. Do you photograph both beauty products and models?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide both beauty product photography and model-based photography, depending on your campaign objectives and marketing requirements.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. Can the photographs be used for e-commerce and advertising?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. The final images are suitable for websites, online stores, advertising campaigns, social media, catalogues, brochures, and other commercial marketing materials.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. Do you provide beauty photography services across the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide beauty photography throughout Dubai and all seven Emirates for businesses, agencies, and independent beauty professionals.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. How are the final photographs delivered?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>All selected images are professionally edited and delivered in high resolution, making them ready for immediate use across both digital and print platforms.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20beauty%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book Your Beauty Photography Session Today</h2>
                    <p class="svc-text">Product, model, cosmetic, and hair photography for beauty businesses anywhere in Dubai and across the UAE.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20beauty%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20beauty%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
