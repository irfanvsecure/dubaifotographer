@extends('layouts.app')

@section('seo')
@include('seo.luxury-food-photography-for-restaurants-hotels-and-brands')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/wmremove-transformed.jpeg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Food photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Culinary photography &amp; videography for restaurants, hotels, cafés, and food brands — menu shoots, commercial campaigns, and delivery-platform imagery.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20food%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                                    <input type="radio" name="shoot_type" value="Menu shoot" required>
                                    <span>Menu shoot</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Commercial campaign" required>
                                    <span>Commercial campaign</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Delivery apps" required>
                                    <span>Delivery apps</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Venue and lifestyle" required>
                                    <span>Venue and lifestyle</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Coverage</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Photo and video" required>
                                    <span>Photo and video</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Photo only" required>
                                    <span>Photo only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Video only" required>
                                    <span>Video only</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="Your restaurant or hotel, or our studio">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many dishes?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Up to 15">Up to 15</option>
                                <option value="15 to 25">15 to 25</option>
                                <option value="25 to 50">25 to 50</option>
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
                <p class="svc-fact-title">Licensed &amp; insured</p>
                <p class="svc-fact-text">Production company</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Arabic and English</p>
                <p class="svc-fact-text">Bilingual crew</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48-hour</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Styling included</p>
                <p class="svc-fact-text">Food and prop styling by our team</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">Our production team works with restaurants, hotels, cafés, and food businesses throughout Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain providing professional food photography and videography tailored to your business objectives, wherever in the UAE you’re based.</p>
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
            <li >Fine dining</li>
            <li >Casual dining</li>
            <li >Cafés &amp; coffee shops</li>
            <li >Hotels &amp; resorts</li>
            <li >Cloud kitchens</li>
            <li >Bakeries &amp; desserts</li>
            <li >Fast food</li>
            <li >Catering</li>
            <li >FMCG food</li>
            <li >Beverage brands</li>
            <li  aria-hidden="true" >Fine dining</li>
            <li  aria-hidden="true" >Casual dining</li>
            <li  aria-hidden="true" >Cafés &amp; coffee shops</li>
            <li  aria-hidden="true" >Hotels &amp; resorts</li>
            <li  aria-hidden="true" >Cloud kitchens</li>
            <li  aria-hidden="true" >Bakeries &amp; desserts</li>
            <li  aria-hidden="true" >Fast food</li>
            <li  aria-hidden="true" >Catering</li>
            <li  aria-hidden="true" >FMCG food</li>
            <li  aria-hidden="true" >Beverage brands</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/wmremove-transformed-1-e1783499728443.jpeg')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Culinary Photography That Brings Every Dish to Life</h2>
                <div class="svc-text">You know that feeling when you see a photo of a dish, and you’ve decided to order it before you’ve even read what’s in it? That’s what good food photography does. At <strong>Dubai Fotographer</strong>, we provide professional food photography across Dubai and the UAE. Restaurants, hotels, cafés, food brands, beverage companies, and other hospitality businesses come to us for compelling visual content that strengthens their brand and brings customers through the door.</div>
                <div class="svc-text">We’ve been at it since <strong>2014</strong>, working with hospitality businesses of every size, from a ten-seat café to big hotel groups. We’re a fully licensed and insured production company, and our crew is bilingual in Arabic and English.</div>
                <div class="svc-text"><strong>Abdul Rehman</strong> leads the company. Around him, there’s a team of photographers, videographers, food stylists, creative directors, editors, and production specialists- people who understand visual storytelling and also know how the hospitality industry actually works. On selected project types, there’s a 48-hour turnaround available too.</div>
                <div class="svc-text">We work across fine dining and luxury restaurants, <a href="%%BASE%%/hotel-photography-service-in-uae">hotels and resorts</a>, to gourmet food businesses. Every shoot is planned around your brand identity, customer expectations, and marketing goals rather than a one-size-fits-all approach.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20food%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Food Photography Services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'file-alt'])
                        <span>Menu photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'utensils'])
                        <span>Restaurant and brand identity</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'shopping-bag'])
                        <span>Commercial and advertising</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Luxury and fine dining</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/phototune.ai_1783501047.png" alt="Menu photography for restaurants in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Menu photography</h3>
                            <div class="svc-panel-text"><p>These days, customers look at digital menus, mobile apps, websites, and delivery platforms long before they decide what to buy. So our menu photography sticks to one simple goal: clean, appetizing imagery that shows every dish as it really is, with no exaggeration. Getting there takes careful food styling, professional lighting, good composition, and tight colour control.</p><p>On those apps, the photo is often the only thing a customer sees before deciding. If it looks good, they tap. If it doesn’t, they scroll past.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my menu shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/wmremove-transformed-2.jpeg" alt="Restaurant photography that strengthens brand identity" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Restaurant and brand identity</h3>
                            <div class="svc-panel-text"><p>A restaurant is more than its menu. So when we do <a href="%%BASE%%/restaurant-photography-service-in-uae">restaurant photography</a>, we don’t only shoot food. We mix the food imagery in with lifestyle storytelling: the inviting <a href="%%BASE%%/interior-photographer-in-uae">interiors</a> and the beautifully presented dishes, but also the chefs in action, customer interactions at the tables, the signature cocktails on the bar, and the architectural details.</p><p>Since it’s all one shoot, one style, your visual consistency holds up everywhere the photos end up: websites, social media, printed and digital menus, QR menus, advertising campaigns, your Google Business Profile, and the food delivery platforms.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my venue shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Commercial-Food-Photography-for-Adveertising-Campaigns-.png" alt="Commercial food photography for advertising campaigns" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Commercial and advertising</h3>
                            <div class="svc-panel-text"><p>Commercial food photography requires a different creative approach than menu photography. Advertising campaigns often demand highly polished visuals that communicate brand quality, premium ingredients, and product appeal within a single frame, whether that’s for national advertising, product launches, packaging design, billboards, digital advertising, social media campaigns, brand catalogues, or print publications.</p><p>Our production team combines creative direction, advanced lighting techniques, food styling, and professional retouching, an approach we also apply across our broader <a href="%%BASE%%/corporate-event-photography-videography">corporate production</a> work.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my campaign</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Luxury-Food-Photography-for-Premium-Hospitality-Brands.png" alt="Luxury food photography for premium hospitality brands" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Luxury and fine dining</h3>
                            <div class="svc-panel-text"><p>In fine dining, everything is about the details. The angle of a herb leaf. The exact dot of sauce. If the kitchen works to that standard, the photos should too. It’s the kind of work we do for Michelin-inspired restaurants, luxury hotels, fine dining venues, private chefs, exclusive dining experiences, and gourmet food brands.</p><p>What we don’t do is overdo it. No plastic-looking shine, nothing over-styled. The food should look as real and as good as it does when it lands on the table.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my fine dining shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your menu and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20food%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">From styling to advertising campaigns</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Dishes &amp; styling</button>
                    <button type="button" data-filter="1">Campaigns</button>
                    <button type="button" data-filter="2">Venues</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Culinary-stylingjpg.jpg" data-full="%%BASE%%/assets/images/2026/07/Culinary-stylingjpg.jpg" data-tag="0" alt="Culinary food styling for a restaurant shoot" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Commercial-Food-Photography-for-Advertising-Campaigns-.png" data-full="%%BASE%%/assets/images/2026/07/Commercial-Food-Photography-for-Advertising-Campaigns-.png" data-tag="1" alt="Commercial food photography for advertising" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/luxury-dine-dinning.jpg" data-full="%%BASE%%/assets/images/2026/07/luxury-dine-dinning.jpg" data-tag="0" alt="Luxury fine dining food photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Hospitality-library.jpg" data-full="%%BASE%%/assets/images/2026/07/Hospitality-library.jpg" data-tag="2" alt="Hospitality image library with interiors and chefs" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Production-That-Goes-Beyond-the-Camera-.png" data-full="%%BASE%%/assets/images/2026/07/Production-That-Goes-Beyond-the-Camera-.png" data-tag="1" alt="Food photography production in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Why-restaurants-food-brands-choose-Dubai-Fotographer.png" data-full="%%BASE%%/assets/images/2026/07/Why-restaurants-food-brands-choose-Dubai-Fotographer.png" data-tag="2" alt="Restaurant and food brand photography in the UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Photography for delivery platforms &amp; cloud kitchens</h2>
                <div class="svc-feature-text"><p>The growth of food delivery has made visual presentation more important than ever. Customers ordering online rely entirely on images when deciding what to purchase.</p><p class="svc-feature-label">We create photography tailored for:</p><ul><li>Talabat, Deliveroo, Zomato and Noon Food</li><li>Mobile ordering apps</li><li>Restaurant websites</li></ul><p>Restaurants and food brands work with one production partner and get ready-to-use marketing assets at the end. No juggling a stylist from one company, a photographer from another, and an editor somewhere else. One team, one schedule, one set of files that all match.</p></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Quote my delivery menu</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Delivery-platforms.png')"><span>Delivery apps</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/phototune.ai_1783501047.png')"><span>Menu grids</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Culinary-stylingjpg.jpg')"><span>Styling</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Food Photography Across the UAE</h2>
                <p class="svc-text">We’re based in Dubai and shoot for restaurants, hotels, and food brands across all seven Emirates. We can shoot in our studio or come to you on location.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Our studio, or on location at your restaurant or hotel</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Restaurants, hotels and food brands</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Production That Goes Beyond the Camera</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>A creative consultation first, basically a proper chat about what you want and why.</p></li>
                <li><span class="svc-step-number">2</span><p>Concept development and styling: food, prop and table styling with creative direction, worked out with your chef.</p></li>
                <li><span class="svc-step-number">3</span><p>Lighting design and the shoot itself, photography and videography in one session for a consistent look.</p></li>
                <li><span class="svc-step-number">4</span><p>Editing, colour correction and retouching, then content optimisation so each file suits Instagram, a printed menu or a delivery app.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Want the room and the team in the pictures too? See our <a href="%%BASE%%/restaurant-photography-service-in-uae">restaurant photography</a> service.</p>
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
                            <h3>1. How long does a restaurant food photography shoot take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>This depends on the number of dishes and whether the shoot includes interiors, chef portraits, or video. A typical menu shoot covering 15-25 dishes usually takes a half day to a full day.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. Do you provide food styling, or do we need our own stylist?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Food styling is included as part of our production process. Our team works with your chef to style each dish for camera while keeping it true to what’s actually served.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. Can you photograph dishes specifically for delivery apps like Talabat or Deliveroo?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We produce photography optimised for delivery platform listings, focusing on clear, accurate, appetizing imagery that performs well in app thumbnails and menu grids.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. Do you offer both photography and video in the same shoot?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Most hospitality clients combine photography and videography in one session, which keeps lighting, styling, and visual tone consistent across both formats.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5.Do you work with restaurants outside of Dubai?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We’re based in Dubai and shoot for restaurants, hotels, and food brands across all seven Emirates.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20food%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your food photography session today</h2>
                    <p class="svc-text">Menu shoots, commercial campaigns, and delivery-platform imagery anywhere across the UAE. Food and prop styling are handled by our team, and quotes are typically sent within a few hours during business hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20food%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20food%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
