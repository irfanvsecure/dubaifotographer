@extends('layouts.app')

@section('seo')
@include('seo.portrait-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Portrait-photography-services-in-Dubai.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Portrait photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Professional portrait photography for individuals, families, and businesses — corporate headshots, beach sessions, family portraits, and fashion portraits across all seven Emirates.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20portrait%20session.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your portraits</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your portraits">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your portraits">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Portrait type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="portrait_type" value="Business headshot" required>
                                    <span>Business headshot</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="portrait_type" value="Corporate team" required>
                                    <span>Corporate team</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="portrait_type" value="Family" required>
                                    <span>Family</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="portrait_type" value="Fashion" required>
                                    <span>Fashion</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="portrait_type" value="Beach" required>
                                    <span>Beach</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="portrait_type" value="Close-up" required>
                                    <span>Close-up</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Setting</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="setting" value="Dubai studio" required>
                                    <span>Dubai studio</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="setting" value="Your office" required>
                                    <span>Your office</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="setting" value="Beach or outdoor" required>
                                    <span>Beach or outdoor</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. our Dubai studio, your office, a beach">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How many people?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Just me">Just me</option>
                                <option value="2 to 5">2 to 5</option>
                                <option value="6 to 20">6 to 20</option>
                                <option value="More than 20">More than 20</option>
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
                <p class="svc-fact-title">Licensed</p>
                <p class="svc-fact-text">&amp; insured production company</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Bilingual</p>
                <p class="svc-fact-text">Arabic / English crew</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48-hour</p>
                <p class="svc-fact-text">turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7</p>
                <p class="svc-fact-text">Emirates covered</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">We offer on-location portrait photography throughout the UAE, including offices, outdoor landmarks, and beach settings across all seven Emirates, in addition to sessions at our Dubai studio.</p>
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
            <li >Business headshots</li>
            <li >Corporate portraits</li>
            <li >Team portraits</li>
            <li >Family portraits</li>
            <li >Fashion portraits</li>
            <li >Beach sessions</li>
            <li >Close-up headshots</li>
            <li >LinkedIn profiles</li>
            <li >Model portfolios</li>
            <li >Press &amp; editorial</li>
            <li  aria-hidden="true" >Business headshots</li>
            <li  aria-hidden="true" >Corporate portraits</li>
            <li  aria-hidden="true" >Team portraits</li>
            <li  aria-hidden="true" >Family portraits</li>
            <li  aria-hidden="true" >Fashion portraits</li>
            <li  aria-hidden="true" >Beach sessions</li>
            <li  aria-hidden="true" >Close-up headshots</li>
            <li  aria-hidden="true" >LinkedIn profiles</li>
            <li  aria-hidden="true" >Model portfolios</li>
            <li  aria-hidden="true" >Press &amp; editorial</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Professional Portrait Photography for Every Individual &amp; Business</h2>
                <div class="svc-text">People make up their minds about you fast, often before you’ve said a word. That’s why first impressions matter, and a well-crafted portrait can say more than words ever could.</div>
                <div class="svc-text">Maybe you need a polished <a href="%%BASE%%/corporate-event-photography-videography">corporate headshot</a> for LinkedIn. Maybe it’s a striking business profile for your company website, or a warm <a href="%%BASE%%/family-photography-in-uae">family keepsake</a> to hang in the hallway. Whatever it is, our portrait photography studio brings technical skill and genuine care to every session across the UAE.</div>
                <div class="svc-text">Abdul Rehman leads the company. Since 2014, we’ve worked with individuals, families and businesses in all seven Emirates, as a fully licensed and insured production company with a bilingual Arabic and English crew.</div>
                <div class="svc-text">Our approach to professional portrait photography is fairly simple. Thoughtful lighting, relaxed direction, and a good eye for detail, so every client feels comfortable in front of the camera, even the ones who swear they’re “not photogenic.” We shoot in the studio, outdoors, and down by the beach, and we tailor each image to reflect your personality, your brand, or your story.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20portrait%20session.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Portrait Photography Services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Business portraits</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Corporate portraits</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Family portraits</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'grin-stars'])
                        <span>Fashion portraits</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'map-marker-alt'])
                        <span>Beach portraits</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Close-up sessions</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/DSC001721-1-1024x683.webp" alt="Recent photography work by Dubai Fotographer" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Business portraits</h3>
                            <div class="svc-panel-text"><p>People look at your LinkedIn photo a lot more than you’d guess, usually right before deciding whether to reply. Our business portraits are polished, but they still look like you on a good day, and they come across with confidence and credibility. You can use them on LinkedIn profiles, corporate websites, and whatever personal branding materials you’ve got going.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my headshot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/DSC00283-2-1-1024x683.webp" alt="Corporate portrait photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Corporate portraits</h3>
                            <div class="svc-panel-text"><p>You can always tell when half a team got proper studio headshots and the other half sent in a cropped wedding photo. We sort that out. Consistent, professional headshots and team portraits for companies of all sizes, so everyone matches and the brand identity stays the same across departments and offices, even if one of those offices is in Abu Dhabi and the other’s in Dubai.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my team portraits</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/05/Family-Photography-1024x682.webp" alt="Family portrait photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Family portraits</h3>
                            <div class="svc-panel-text"><p>These are the warm, natural ones, where we’re mostly just catching the genuine connection between you and your loved ones while you get on with things. Families tend to keep them as keepsakes, put them up as home décor, or book one for milestone celebrations like a big birthday or a new baby.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my family portrait</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/MANI9728-1-1-683x1024.webp" alt="Recent photoshoot by Dubai Fotographer in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Fashion portraits</h3>
                            <div class="svc-panel-text"><p>Here’s where we have some fun with creative styling and expert lighting. The images come out editorial-quality, which is what models, influencers, and anyone putting together a standout portfolio really need.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my fashion shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/Beach-portrait-photography-682x1024.webp" alt="Beach portrait photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Beach portraits</h3>
                            <div class="svc-panel-text"><p>There’s not much that beats natural light down by the water around sunset. We use scenic UAE coastal backdrops for relaxed, timeless outdoor portraits, and they work just as nicely for individuals as they do for couples and families.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my beach session</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/07/Close-up-portrait-sessions-684x1024.webp" alt="Close-up portrait session in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Close-up sessions</h3>
                            <div class="svc-panel-text"><p>These get up close. They’re detailed, expressive headshots that pick up character and emotion, the little things in a face. Ideal for personal branding, acting portfolios, or fine art prints you’d actually want hanging on a wall.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my close-up session</a>
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
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20portrait%20session.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent portrait sessions</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Studio</button>
                    <button type="button" data-filter="1">Outdoor</button>
                    <button type="button" data-filter="2">Fashion</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/why-choose-us-1-e1784629764145.jpg" data-full="%%BASE%%/assets/images/2026/07/why-choose-us-1-e1784629764145.jpg" data-tag="0" alt="Studio portrait with professional lighting in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Indoor-studio-photographydfgjhdg3674.jpg" data-full="%%BASE%%/assets/images/2026/07/Indoor-studio-photographydfgjhdg3674.jpg" data-tag="0" alt="Indoor studio portrait photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Desert-golden-dunes-683x1024.webp" data-full="%%BASE%%/assets/images/2026/07/Desert-golden-dunes.webp" data-tag="1" alt="Golden desert dunes in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/v-1-1.jpg" data-full="%%BASE%%/assets/images/2026/07/v-1-1.jpg" data-tag="1" alt="Outdoor portrait for personal brand content" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMG_8724-1-2-683x1024.webp" data-full="%%BASE%%/assets/images/2026/07/IMG_8724-1-2.webp" data-tag="2" alt="Model portfolio portrait in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/p4-2.jpg" data-full="%%BASE%%/assets/images/2026/07/p4-2.jpg" data-tag="2" alt="Editorial fashion portrait in Dubai" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Corporate and Business Portrait Photography for Professionals</h2>
                <div class="svc-feature-text"><p>Here in the UAE, a recruiter or a new client will quite often look at your photo before they’ve read a single line of your CV. In a market as competitive as this one, a strong professional image matters as much as your resume. That’s what our corporate portrait photography services are for. We shoot executives, entrepreneurs, and whole teams who want to make a lasting impression, online and off.</p><p>Come to us for a studio session, or we’ll do it on location and haul the equipment over to your office if that’s easier. Group sessions get the same care as individual headshots, so the whole team ends up looking unified and polished.</p><p class="svc-feature-label">Portraits for every platform:</p><ul><li>LinkedIn and professional profiles</li><li>Press and editorial</li><li>Social media and personal brand content</li><li>Model portfolios</li><li>Family keepsakes and home décor</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Quote my team portraits</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Corporate-and-Business-Portrait-Photography-for-Professionals-.jpg')"><span>Executives</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/LinkedIn-professional-profiles.jpg')"><span>LinkedIn headshots</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Indoor-studio-photography-720x1024.webp')"><span>Studio or your office</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Indoor &amp; Outdoor Portrait Photography Across the UAE</h2>
                <p class="svc-text">Choosing between a studio and an outdoor setting comes down to the look and feeling you want your images to convey.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Our Dubai studio, and offices from DIFC to Dubai Internet City</span></div>
                <div class="svc-table-row"><span>Old Dubai</span><span>Fashion shoots in the alleyways of Al Fahidi</span></div>
                <div class="svc-table-row"><span>Beach and outdoor</span><span>Golden hour on the coastline and outdoor landmarks</span></div>
                <div class="svc-table-row"><span>Abu Dhabi, Sharjah and beyond</span><span>Office and on-location team portraits</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Portrait Photography Process</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Consultation and planning: we discuss your goals, preferred style, location, wardrobe, and intended use to create a personalised session tailored to your needs.</p></li>
                <li><span class="svc-step-number">2</span><p>Professional photoshoot: our photographers guide you through posing, expressions, and lighting while capturing natural, high-quality portraits in the studio or at your chosen location.</p></li>
                <li><span class="svc-step-number">3</span><p>Selection and retouching: selected photographs are professionally edited to enhance colour, lighting, and detail while maintaining a natural and authentic appearance.</p></li>
                <li><span class="svc-step-number">4</span><p>Final delivery: professionally edited, high-resolution portraits delivered in a timely manner, ready for business profiles, social media, websites, or printing.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Planning a styled shoot? See our <a href="%%BASE%%/fashion-photography-in-uae">fashion photography</a> page.</p>
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
                            <h3>1. How much does portrait photography cost in the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Pricing depends on session type, location, and package. Our packages are designed to suit individuals, families, and businesses at different budgets, with custom quotes available for corporate and group sessions.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. Do you offer both studio and outdoor portrait photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide indoor sessions at our fully equipped studio as well as outdoor sessions across the UAE, including popular beach locations for a more natural, scenic look.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. How long does a typical portrait photoshoot take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Most sessions run between 30 minutes and 2 hours, depending on whether it’s a single headshot, a family portrait, or a corporate portrait photography session involving multiple team members.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. When will I receive my edited photos?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Edited, high-resolution images are typically delivered within a few business days through an online gallery, with faster turnaround available on select packages.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. Can you photograph large teams for corporate portraits?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Absolutely. Our corporate portrait photographer team regularly handles group sessions for businesses across the UAE, ensuring consistent lighting, styling, and branding across every individual portrait.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>6. Do you travel across the UAE for on-location shoots?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes, we offer on-location portrait photography throughout the UAE, including offices, outdoor landmarks, and beach settings, in addition to sessions at our Dubai studio.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20portrait%20session.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your portrait photography session today</h2>
                    <p class="svc-text">Studio, beach, and on-location portrait photography for individuals, families, and businesses anywhere in Dubai and across the UAE.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20portrait%20session.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20portrait%20session.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
