@extends('layouts.app')

@section('seo')
@include('seo.influencer-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/IMG_8728-1-1-e1784536387476.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Brand &amp; influencer photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Professional photography that turns your online presence into something unforgettable — for content creators, entrepreneurs, and businesses.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20brand%20or%20influencer%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                            <p class="svc-label">What do you need?</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Branding photoshoot" required>
                                    <span>Branding photoshoot</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Influencer content" required>
                                    <span>Influencer content</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Personal branding" required>
                                    <span>Personal branding</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="shoot_type" value="Brand photography" required>
                                    <span>Brand photography</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Package</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="package" value="Single session" required>
                                    <span>Single session</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="package" value="Multi-look" required>
                                    <span>Multi-look</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="package" value="Full day" required>
                                    <span>Full day</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="package" value="Monthly retainer" required>
                                    <span>Monthly retainer</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. Downtown rooftop, DIFC, our studio">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How many looks?</label>
                            <select id="svc-guests" name="guests">
                                <option value="1">1</option>
                                <option value="2 to 3">2 to 3</option>
                                <option value="4 or more">4 or more</option>
                                <option value="Not sure yet">Not sure yet</option>
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
                <p class="svc-fact-title">1 to 3 hours</p>
                <p class="svc-fact-text">Typical session length</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Since 2014</p>
                <p class="svc-fact-text">Licensed and insured</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7 Emirates</p>
                <p class="svc-fact-text">Studio and location shoots</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">From Dubai’s iconic skyline to studios and lifestyle locations across the Emirates — we shoot wherever your brand story takes us.</p>
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
            <li >Branding photoshoots</li>
            <li >Influencer content</li>
            <li >Personal branding</li>
            <li >Social media</li>
            <li >Fashion &amp; beauty</li>
            <li >Food &amp; beverage</li>
            <li >Fitness &amp; wellness</li>
            <li >E-commerce &amp; retail</li>
            <li >Travel &amp; hospitality</li>
            <li >Tech &amp; startups</li>
            <li  aria-hidden="true" >Branding photoshoots</li>
            <li  aria-hidden="true" >Influencer content</li>
            <li  aria-hidden="true" >Personal branding</li>
            <li  aria-hidden="true" >Social media</li>
            <li  aria-hidden="true" >Fashion &amp; beauty</li>
            <li  aria-hidden="true" >Food &amp; beverage</li>
            <li  aria-hidden="true" >Fitness &amp; wellness</li>
            <li  aria-hidden="true" >E-commerce &amp; retail</li>
            <li  aria-hidden="true" >Travel &amp; hospitality</li>
            <li  aria-hidden="true" >Tech &amp; startups</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/DSC02540-1-1.jpg')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why Choose Us to Capture Your Brand?</h2>
                <div class="svc-text">Now and then, a client walks in after a bad shoot somewhere else, and you can see it on their face. There’s a folder of photos on their laptop they’ll never post. Choosing the right photographer really can make or break your brand’s visual presence, and we don’t treat that lightly at all. We’re experienced influencer and brand photographers in the UAE, and our <a href="%%BASE%%/services">photography services</a> put creative vision together with some proper strategic planning, so the content genuinely performs instead of looking good for a day and then vanishing.</div>
                <div class="svc-text">That’s the reason for all our questions before a shoot. What’s your niche? Who’s your audience, actually? Where do you want to be in a few months? Once we know, every image fits into the bigger brand story. Either way, it’s your style that leads, because a one-size-fits-all approach doesn’t really suit anyone.</div>
                <div class="svc-text">Mostly, people come back for the reliable turnaround times, the professional editing, and a collaborative process that keeps them comfortable and confident on camera, even if they tend to freeze up once a lens is on them. Whether you’re an influencer, entrepreneur, or growing business, we’ll make visuals that build trust, boost engagement, and truly represent who you are.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20brand%20or%20influencer%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our influencer and brand photography services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Branding photoshoot</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'instagram'])
                        <span>Influencer photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Personal branding photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'shopping-bag'])
                        <span>Brand photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Photoshoot for social media</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Branding-photoshoot-1024x683.webp" alt="Branding photoshoot in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Branding photoshoot</h3>
                            <div class="svc-panel-text"><p>This is a branding photoshoot built around you: your identity, your personality, the story behind what you do. It’s a good fit for entrepreneurs, businesses, and creators who want a professional visual presence online that people actually remember.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my branding shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/IMG_94671-2-1024x683.webp" alt="Photoshoot example from Dubai Fotographer portfolio" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Influencer photography</h3>
                            <div class="svc-panel-text"><p>Our influencer photography is meant to look like your real life, just on a good day. We focus on your lifestyle, your aesthetic, and your personality, and the result is authentic, scroll-stopping content that resonates with your audience and makes your personal brand stronger.</p><p>One client wanted a polished <a href="%%BASE%%/fashion-photography-in-uae">fashion photoshoot</a> to sort out her visual identity before a big launch.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my influencer shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Personal-branding-photography-682x1024.webp" alt="Personal branding photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Personal branding photography</h3>
                            <div class="svc-panel-text"><p>Clients hire people they trust. Our personal branding photography shows off your expertise and your personality, so entrepreneurs and professionals can build trust and credibility, and end up with a polished online presence people recognise straight away.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my personal branding</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Brand-photography-1024x683.webp" alt="Brand photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Brand photography</h3>
                            <div class="svc-panel-text"><p>Brand photography is about the bigger picture. We shoot your products, your workspace, and the story behind them, and plan it so the visuals all hang together. That cohesive look strengthens brand recognition and helps you connect authentically with your target audience.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my brand shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/social-media-1024x682.webp" alt="Photoshoot for social media in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Photoshoot for social media</h3>
                            <div class="svc-panel-text"><p>Sometimes you just need fresh posts. This is a dedicated photoshoot for social media content, shaped around your niche and what each platform needs. You get versatile, engaging images that keep your feed fresh and consistent for weeks.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my social shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Ready to create content that connects? Tell us about your brand and we’ll get back to you with availability and pricing.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20brand%20or%20influencer%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent brand and influencer shoots</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Portraits</button>
                    <button type="button" data-filter="1">Lifestyle</button>
                    <button type="button" data-filter="2">Brand</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/p1-1.jpg" data-full="%%BASE%%/assets/images/2026/07/p1-1.jpg" data-tag="0" alt="Professional influencer photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/How-our-photographers-plan-every-social-media-shoot.jpg" data-full="%%BASE%%/assets/images/2026/07/How-our-photographers-plan-every-social-media-shoot.jpg" data-tag="1" alt="Social media photoshoot planned by our photographers" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMGL0257-1-1-683x1024.webp" data-full="%%BASE%%/assets/images/2026/07/IMGL0257-1-1.jpg" data-tag="0" alt="Influencer portrait photography in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Branding-photoshoot-1024x683.webp" data-full="%%BASE%%/assets/images/2026/07/Branding-photoshoot.jpg" data-tag="2" alt="Branding photoshoot in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMG_94671-2-1024x683.webp" data-full="%%BASE%%/assets/images/2026/07/IMG_94671-2.webp" data-tag="1" alt="Photoshoot example from Dubai Fotographer portfolio" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Brand-photography-1024x683.webp" data-full="%%BASE%%/assets/images/2026/07/Brand-photography.webp" data-tag="2" alt="Brand photography in Dubai" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Social Media Photography Packages Built Around Your Needs</h2>
                <div class="svc-feature-text"><p>No two brands are the same, so it’d be a bit silly to sell them all the same package. That’s why our social media photography packages are flexible and built to fit your goals, your budget, and how much content you actually need.</p><p>If you just want a quick content refresh, a single-session shoot will do the job. If you’re after more, our larger packages come with multiple looks, a few different locations, outfit changes, and <a href="%%BASE%%/portrait-photography-in-uae">professional portrait sessions</a>, so you end up with a complete, versatile content library. You also get a curated mix of portraits, lifestyle shots, <a href="%%BASE%%/beauty-photography-in-uae">beauty shots,</a> and detail photography, all optimized for Instagram, TikTok, LinkedIn and wherever else you post.</p><p class="svc-feature-label">Choose the package that fits your goals:</p><ul><li>Single session</li><li>Multi-look package</li><li>Full day shoot</li><li>Monthly retainer or quarterly content plan</li><li>Custom package</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Quote my package</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Social-media-photography-package6371.webp')"><span>Multi-look package</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/social-media.webp')"><span>Social content</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Personal-branding-photography-682x1024.webp')"><span>Portraits</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Brand Photography Across the UAE</h2>
                <p class="svc-text">Keen on iconic Dubai locations? We’ll take you up to the Frame, down to the Marina, or for a wander through the old souks. Prefer something simple? There’s a tailored studio setup for that.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Downtown rooftops, DIFC, Dubai Marina, the Frame, Al Fahidi and the beach</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Studios and lifestyle locations</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our approach to brand photography</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We start by understanding your brand, goals, and content needs — discussing your style, target audience, and vision to plan a shoot that truly represents you.</p></li>
                <li><span class="svc-step-number">2</span><p>Our team scouts the perfect locations, creates shot lists, and plans lighting and styling details, ensuring every element aligns with your brand’s aesthetic and message.</p></li>
                <li><span class="svc-step-number">3</span><p>On shoot day, our photographers guide you through natural poses and authentic moments, capturing versatile content across multiple looks, settings, and platform-ready formats.</p></li>
                <li><span class="svc-step-number">4</span><p>We professionally edit every image for a polished, consistent look, then deliver your final gallery quickly — ready to elevate your social media presence immediately.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Want something different? Ask about laid-back <a href="%%BASE%%/lifestyle-photography-in-uae">lifestyle content</a> or <a href="%%BASE%%/flying-dress-photography-in-uae">flying dress photography</a> in the desert.</p>
                <a class="svc-btn svc-btn-dark" href="#quote">Book a consultation</a>
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
                            <h3>1.What is included in a branding photoshoot?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>A branding photoshoot typically includes a pre-shoot consultation, location or studio setup, multiple outfit changes, professional posing guidance, and a curated set of edited, high-resolution images tailored to your brand identity.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. How much does a social media photography package cost?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Pricing depends on session length, number of locations, and deliverables. We offer flexible packages to suit influencers, startups, and established brands — contact us for a custom quote based on your needs.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. Do you offer photography services for influencers only, or businesses too?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We work with both. Our services are designed for influencers building a personal brand as well as businesses and entrepreneurs looking for professional brand photography and consistent social media content.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. How long does a typical shoot take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Most sessions run between 1-3 hours, depending on the number of looks, locations, and content types required. Larger packages with multiple setups may take longer.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. Where do you shoot in the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We shoot across Dubai and beyond, including iconic city backdrops, studios, and lifestyle locations, chosen to match your brand’s aesthetic and content goals.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>6. How soon will I receive my edited photos?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Turnaround time varies by package, but most clients receive their professionally edited gallery within 3-7 business days after the shoot.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20brand%20or%20influencer%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your brand photography session today</h2>
                    <p class="svc-text">Professional brand and influencer photography anywhere in Dubai and across the UAE.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20brand%20or%20influencer%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20brand%20or%20influencer%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
