@extends('layouts.app')

@section('seo')
@include('seo.maternity-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Maternity-photography-services-in-Dubai.avif')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Maternity photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Studio and outdoor maternity photography for mothers across Dubai, Abu Dhabi, and the wider UAE — capturing the glow, grace, and quiet excitement of expecting a baby.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20maternity%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                            <p class="svc-label">Session type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Studio" required>
                                    <span>Studio</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Outdoor" required>
                                    <span>Outdoor</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="At home" required>
                                    <span>At home</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Boudoir" required>
                                    <span>Boudoir</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Package</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="package" value="Maternity only" required>
                                    <span>Maternity only</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="package" value="Maternity and newborn" required>
                                    <span>Maternity and newborn</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. our Dubai studio, beach, desert, home">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Who is in the photos?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Just me">Just me</option>
                                <option value="Me and my partner">Me and my partner</option>
                                <option value="With our children">With our children</option>
                                <option value="Whole family">Whole family</option>
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
                <p class="svc-fact-title">28 to 34 weeks</p>
                <p class="svc-fact-text">The ideal time to book</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7 Emirates</p>
                <p class="svc-fact-text">Studio, outdoor and home sessions</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Since 2014</p>
                <p class="svc-fact-text">Licensed and insured studio</p>
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
            <li >Studio maternity</li>
            <li >Outdoor golden hour</li>
            <li >Desert dunes</li>
            <li >Jumeirah Beach</li>
            <li >Al Qudra Lakes</li>
            <li >Family maternity</li>
            <li >Maternity boudoir</li>
            <li >Bump to baby</li>
            <li >Gowns and drapes</li>
            <li >Home sessions</li>
            <li  aria-hidden="true" >Studio maternity</li>
            <li  aria-hidden="true" >Outdoor golden hour</li>
            <li  aria-hidden="true" >Desert dunes</li>
            <li  aria-hidden="true" >Jumeirah Beach</li>
            <li  aria-hidden="true" >Al Qudra Lakes</li>
            <li  aria-hidden="true" >Family maternity</li>
            <li  aria-hidden="true" >Maternity boudoir</li>
            <li  aria-hidden="true" >Bump to baby</li>
            <li  aria-hidden="true" >Gowns and drapes</li>
            <li  aria-hidden="true" >Home sessions</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Why-choose-Dubai-Fotographer-for-maternity-photography.jpg')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why Choose Dubai Fotographer for Maternity Photography?</h2>
                <div class="svc-text">It was 2014 when we started out. Since then, Dubai Fotographer has become a trusted, fully licensed and insured photography studio, and we work in Dubai, Abu Dhabi, and just about everywhere else in all seven Emirates. The photographers, stylists and editors are one team, under one accountable roof, so your maternity photoshoot gets the same consistent, professional-grade quality from the first chat about planning right up to the day the gallery hits your inbox. Your photos never get handed to some outside editor you’ve never met.</div>
                <div class="svc-text">Sure, you need to know your way around a camera. Still, what our reputation really rests on is real client trust, more than technical skill on its own. We’ve done work for a few recognizable brands, and hundreds of families have come to us wanting meaningful, <a href="%%BASE%%/services">professional photography services</a> for the moments that mean something to them. Over time, our maternity photographers have picked up all the little posing, lighting, and comfort tricks that only matter during pregnancy: where to slide a cushion, when to call a water break, which angles go easy on a sore lower back. It’s why the images come out authentic and beautifully executed.</div>
                <div class="svc-text">And the practical stuff is covered too. Turnaround times are fast. Packages are transparent, no hidden extras. Our bilingual team will travel to you anywhere in the UAE. Basically, you’re with genuine experts who prioritize your comfort, your story, and your memories, and we don’t do a one-size-fits-all approach, ever.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20maternity%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Maternity photography services for every vision</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Studio maternity photoshoot</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'map-pin'])
                        <span>Outdoor maternity photoshoot</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Family maternity photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Maternity boudoir photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'grin-stars'])
                        <span>Maternity &amp; newborn photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'file-alt'])
                        <span>Customised photography packages</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Studio-maternity-photoshoot-683x1024.webp" alt="Studio maternity photoshoot in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Studio maternity photoshoot</h3>
                            <div class="svc-panel-text"><p>If you’re due in August, trust us, you want to be indoors. This is a private session in our climate-controlled studio. We’ve got maternity gowns we picked out ourselves, silk drapes, and soft lighting that shows your glow and your growing bump without you needing to pose too much.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my studio shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Outdoor-maternity-photoshoot-1024x683.webp" alt="Outdoor maternity photoshoot in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Outdoor maternity photoshoot</h3>
                            <div class="svc-panel-text"><p>We usually shoot these in the golden hour, out at Dubai’s desert dunes, on Jumeirah Beach, or by Al Qudra Lakes. The backdrops are natural and a bit dreamy, and you don’t need much else. A lot of mums tell us these are the pregnancy photos they end up framing.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my outdoor shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Family-maternity-photography-1024x700.webp" alt="Family maternity photography session in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Family maternity photography</h3>
                            <div class="svc-panel-text"><p>You can bring your partner and your children along. Kids are usually shy for the first ten minutes and then won’t stop running around, which is fine; some of the best shots come from that. It’s a nice way to keep this chapter of your growing family together in one set of pictures.</p><p>A few book <a href="%%BASE%%/portrait-photography-in-uae">solo portraits</a>, and plenty go for <a href="%%BASE%%/family-photography-in-uae">family maternity photography</a> so the partner and the little ones get in the pictures too.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my family shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Maternity-boudoir-photography-1024x682.webp" alt="Maternity boudoir photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Maternity boudoir photography</h3>
                            <div class="svc-panel-text"><p>This one is more private. It’s elegant and tasteful, and it’s about feeling good in your body during pregnancy. Mums who’ve done it often say they felt more confident afterwards, and these are usually the portraits they keep for themselves.</p><p>If you’d feel more comfortable with a <a href="%%BASE%%/female-photographers-in-uae">female photographer</a>, say so, and we’ll happily accommodate your preference.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my boudoir shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/Maternity-newborn-photography-1024x682.webp" alt="Maternity and newborn photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Maternity &amp; newborn photography</h3>
                            <div class="svc-panel-text"><p>Lots of parents book this as a pair. We do the bump photos before the birth, then come back for a newborn photoshoot in your baby’s first days at home. You end up with the full story in one style.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my combined package</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/07/Customised-photography-packages-1024x574.webp" alt="Customised maternity photography packages" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Customised photography packages</h3>
                            <div class="svc-panel-text"><p>We’ll put a package together around your budget. You can choose edited images, printed photos, or albums, and we can come to your home anywhere in the UAE.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my package</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Most mothers-to-be book between 28 and 34 weeks. Our calendar fills up quickly — don’t leave it too late.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20maternity%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent maternity sessions</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Studio</button>
                    <button type="button" data-filter="1">Outdoor</button>
                    <button type="button" data-filter="2">Boudoir</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Professional-maternity-photography-for-mothers-across-the-UAE.jpg" data-full="%%BASE%%/assets/images/2026/07/Professional-maternity-photography-for-mothers-across-the-UAE.jpg" data-tag="0" alt="Professional maternity photography for mothers across the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Outdoor-golden-hour.jpg" data-full="%%BASE%%/assets/images/2026/07/Outdoor-golden-hour.jpg" data-tag="1" alt="Outdoor golden hour maternity photoshoot in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Studio-portraits.jpg" data-full="%%BASE%%/assets/images/2026/07/Studio-portraits.jpg" data-tag="0" alt="Studio maternity portraits in our Dubai studio" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/How-our-maternity-photographers-plan-every-session-e1784097603924.jpg" data-full="%%BASE%%/assets/images/2026/07/How-our-maternity-photographers-plan-every-session-e1784097603924.jpg" data-tag="1" alt="Outdoor couple maternity photoshoot in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Boudoir.jpg" data-full="%%BASE%%/assets/images/2026/07/Boudoir.jpg" data-tag="2" alt="Maternity boudoir photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Studio-maternity-photoshoot-e1784033343911.jpg" data-full="%%BASE%%/assets/images/2026/07/Studio-maternity-photoshoot-e1784033343911.jpg" data-tag="0" alt="Studio maternity photoshoot in Dubai" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Maternity, Newborn &amp; Family Sessions Under One Roof</h2>
                <div class="svc-feature-text"><p>The pregnancy journey doesn’t end with the baby bump, and honestly, we don’t either. Once the maternity photography is out of the way, loads of families come straight back to us for <a href="%%BASE%%/newborn-baby-photography-in-uae">newborn photoshoots</a>. Those are all about catching the fleeting first days before they disappear, and they disappear a lot faster than anyone tells you.</p><p>If you like, book a combined newborn and maternity photography package, and we’ll follow the story from bump to baby. Or tack on some <a href="%%BASE%%/family-photography-in-uae">family photography</a> so your partner and children get in on the celebration as well.</p><p>Keeping the same consistent photographer through all these chapters makes a real difference. The photos hold a cohesive style, you’re dealing with familiar faces you already trust, and everything stays smooth and easy while your family carries on growing, one beautiful session at a time.</p></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add a newborn session</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Newborn-follow-up.jpg')"><span>Newborn follow-up</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Family-sessionssss.jpg')"><span>Family sessions</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Maternity-newborn-family-sessions-under-one-roof-e1784097655709.jpg')"><span>From bump to baby</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Maternity Photography Across the UAE</h2>
                <p class="svc-text">Studio, outdoor, and home maternity photography for mothers across Dubai and all seven Emirates.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Our private studio, desert dunes, Jumeirah Beach and Al Qudra Lakes</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Outdoor and home sessions</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Maternity Photography Process</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Share your due date, style preferences, and vision. We’ll recommend the ideal timing and package for your maternity photoshoot.</p></li>
                <li><span class="svc-step-number">2</span><p>We finalise your location, wardrobe, and props together — studio, outdoor golden-hour, or home session across the UAE.</p></li>
                <li><span class="svc-step-number">3</span><p>Relax and be guided through easy, natural poses while our photographers capture your glow, confidence, and the beauty of your pregnancy.</p></li>
                <li><span class="svc-step-number">4</span><p>Within days, receive your beautifully edited photos, ready to treasure, share with loved ones, or preserve in a printed album.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Prefer a relaxed session at home? Have a look at our <a href="%%BASE%%/lifestyle-photography-in-uae">lifestyle sessions</a>.</p>
                <a class="svc-btn svc-btn-dark" href="#quote">Book your consultation</a>
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
                            <h3>When is the best time to book a maternity photoshoot?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Most mothers-to-be book their maternity photoshoot between 28 and 34 weeks, when the bump is beautifully round but movement and posing are still comfortable.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer maternity photography packages that include newborn sessions?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We offer combined maternity and newborn photography packages, allowing you to document your pregnancy journey and your baby’s first days with one consistent photographer.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Can we include our partner and other children in the session?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Our family maternity photography sessions are designed to include your partner, children, or entire family for a heartfelt, complete story.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you provide maternity gowns and props, or should we bring our own?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We offer a curated wardrobe of maternity gowns, silk drapes, and props, though you’re always welcome to bring outfits that reflect your personal style.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Do you offer outdoor and studio maternity photoshoots?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Choose a studio maternity photoshoot for privacy and controlled lighting, or an outdoor session at Dubai’s beaches, desert, or lakes.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>Which areas in the UAE do you serve?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We provide maternity photography across Dubai, Abu Dhabi, Sharjah, and the wider UAE, with home service options available depending on location.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20maternity%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Request a maternity photography quote</h2>
                    <p class="svc-text">Tell us about your pregnancy and vision and we’ll get back to you with availability and pricing, usually within a few hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20maternity%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20maternity%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
