@extends('layouts.app')

@section('seo')
@include('seo.couple-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/IMGL9434-1-1.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Couple photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Every love story deserves more than a snapshot — it deserves to be told beautifully. Real moments, expertly captured, that you’ll treasure for a lifetime.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20couple%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your couple shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your couple shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your couple shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Session type</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Desert" required>
                                    <span>Desert</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Beach" required>
                                    <span>Beach</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Studio" required>
                                    <span>Studio</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Boudoir" required>
                                    <span>Boudoir</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Portraits" required>
                                    <span>Portraits</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Wedding" required>
                                    <span>Wedding</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Occasion</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Just us" required>
                                    <span>Just us</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Engagement" required>
                                    <span>Engagement</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Anniversary" required>
                                    <span>Anniversary</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Holiday in the UAE" required>
                                    <span>Holiday in the UAE</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. Al Qudra, a beach, our Business Bay studio">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How many locations?</label>
                            <select id="svc-guests" name="guests">
                                <option value="One location">One location</option>
                                <option value="Two locations">Two locations</option>
                                <option value="Desert and beach">Desert and beach</option>
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
                <p class="svc-fact-title">Licensed</p>
                <p class="svc-fact-text">&amp; insured studio</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Studio</p>
                <p class="svc-fact-text">&amp; home visits</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48-hour</p>
                <p class="svc-fact-text">turnaround on select sessions</p>
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
                <p class="svc-text">We shoot in-studio at our Business Bay base or on location anywhere from Dubai to Abu Dhabi, Sharjah, and beyond — with select sessions offering 48-hour turnaround.</p>
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
            <li >Desert dunes</li>
            <li >Beach sunsets</li>
            <li >Studio portraits</li>
            <li >Boudoir</li>
            <li >Engagement shoots</li>
            <li >Anniversaries</li>
            <li >Wedding couples</li>
            <li >Flying dress</li>
            <li >Travel sessions</li>
            <li >Dubai skyline</li>
            <li  aria-hidden="true" >Desert dunes</li>
            <li  aria-hidden="true" >Beach sunsets</li>
            <li  aria-hidden="true" >Studio portraits</li>
            <li  aria-hidden="true" >Boudoir</li>
            <li  aria-hidden="true" >Engagement shoots</li>
            <li  aria-hidden="true" >Anniversaries</li>
            <li  aria-hidden="true" >Wedding couples</li>
            <li  aria-hidden="true" >Flying dress</li>
            <li  aria-hidden="true" >Travel sessions</li>
            <li  aria-hidden="true" >Dubai skyline</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Capture Your Love Story with a Couple Photoshoot</h2>
                <div class="svc-text">Most couples have hundreds of pictures together, and nearly all of them are selfies held at arm’s length, with someone’s thumb creeping into the corner. Every love story deserves more than a snapshot. It deserves to be told beautifully, by someone who’s actually watching. Our couple photoshoot sessions across the UAE are really about the small things. The quiet glances. The laughter when one of you trips over a dune.</div>
                <div class="svc-text">You pick the place. Some couples go for golden desert dunes, some want the glittering Dubai skyline all lit up at night, and loads just want a relaxed beachfront sunset with their sandals in their hands. Our couple photography team takes care of the creative direction and brings the technical skill to every frame, so you get timeless <a href="%%BASE%%/portrait-photography-in-uae">portraits</a> back that actually show your bond.</div>
                <div class="svc-text">We’ve been photographing couples across the UAE since 2014, and somewhere along the way we stopped counting proposals. Dubai Fotographer is led by our founder, Abdul Rehman, with a fully licensed, insured production team behind him. Every session is shot by our own experienced photographers, not freelancers we’ve found the night before, and they know UAE locations, lighting, and permits inside out.</div>
                <div class="svc-text">From the first consultation to final delivery, one accountable team looks after your entire experience. That means consistent quality, real expertise, and no guesswork about who’s turning up or when your photos are coming.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20couple%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our couple photography services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'map-pin'])
                        <span>Desert couple photoshoot</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'map-marker-alt'])
                        <span>Beach couple photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Couple studio photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Couples boudoir photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Couple portrait photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'grin-stars'])
                        <span>Wedding couple photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Desert-couple-photoshoot-683x1024.webp" alt="Desert couple photoshoot in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Desert couple photoshoot</h3>
                            <div class="svc-panel-text"><p>Head out to Al Qudra at about five in the evening, and it’s obvious why we keep going back. The golden dunes start to glow, the sky usually does something a bit dramatic, and that soft evening light handles half the work for us. Our desert couple photoshoot sessions are romance against Dubai’s most iconic natural backdrop, and honestly you hardly need to pose at all.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my desert shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Beach-couple-photography-1024x682.webp" alt="Beach couple photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Beach couple photography</h3>
                            <div class="svc-panel-text"><p>Now and then a couple wants a sunrise stroll before anybody else turns up. Most of them would rather wait for the sunset silhouettes, though. Either way, our beach couple photography sessions along Dubai’s coastline turn out warm, breezy, and effortlessly romantic images you’ll cherish, and you’ll be tipping sand out of your shoes for days afterwards.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my beach shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Couple-studio-photography-684x1024.webp" alt="Couple studio photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Couple studio photography</h3>
                            <div class="svc-panel-text"><p>If the idea of wind whipping your hair around doesn’t appeal, that’s fair enough. Couple studio photography means controlled lighting and a polished finish, elegant backdrops and a proper professional setup. You get timeless portraits, and the weather and the elements don’t get a say.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my studio shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Couples-boudoir-photography-1024x682.webp" alt="Couples boudoir photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Couples boudoir photography</h3>
                            <div class="svc-panel-text"><p>This is the more intimate one. Tasteful and beautifully lit, we set our couples boudoir photography sessions up so they feel comfortable and private for both of you, genuinely romantic instead of awkward. Whatever you’re happy with is what we do, simple as that.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my boudoir session</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/Couple-portrait-photography-682x1024.webp" alt="Couple portrait photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Couple portrait photography</h3>
                            <div class="svc-panel-text"><p>The good old classic. Our couple portrait photography is refined and all about connection and detail: how your hands fit together, the way you look at each other when you think nobody’s watching. Those timeless images usually end up framed on a wall, tucked into albums or saved as anniversary keepsakes.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my portraits</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/06/wedding-photographer-couple-1024x572.webp" alt="Wedding couple photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Wedding couple photography</h3>
                            <div class="svc-panel-text"><p>The big day, or the quiet bits after it. Our wedding couple photography catches the emotion, the elegance, and every joyful detail of your Dubai celebration, down to the heels somebody kicked off on the dance floor around midnight.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my wedding shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us a little about your session, your preferred location, and your ideal date, and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20couple%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent couple sessions</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Beach and desert</button>
                    <button type="button" data-filter="1">Outdoor</button>
                    <button type="button" data-filter="2">Indoor</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Beach-coastline.jpg" data-full="%%BASE%%/assets/images/2026/07/Beach-coastline.jpg" data-tag="0" alt="Couple photoshoot on the beach and coastline" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Desert-golden-dunes-683x1024.webp" data-full="%%BASE%%/assets/images/2026/07/Desert-golden-dunes.webp" data-tag="0" alt="Golden desert dunes in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Corniche-heritage-e1784535742150.jpg" data-full="%%BASE%%/assets/images/2026/07/Corniche-heritage-e1784535742150.jpg" data-tag="1" alt="Couple photoshoot among heritage buildings" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/05/couple-photography-2.webp" data-full="%%BASE%%/assets/images/2026/05/couple-photography-2.webp" data-tag="1" alt="Outdoor couple photography session" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Studio4.jpg" data-full="%%BASE%%/assets/images/2026/07/Studio4.jpg" data-tag="2" alt="Couple studio photography in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Workspace.jpg" data-full="%%BASE%%/assets/images/2026/07/Workspace.jpg" data-tag="2" alt="Relaxed indoor couple photography session" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Couple Photography Packages Built Around Your Occasion</h2>
                <div class="svc-feature-text"><p>Think about a couple three months in versus a couple who’ve just booked their wedding venue. They want completely different things from a shoot, and that’s kind of the whole point. No two couples are after the same session, so we built our couple photoshoot packages to bend around your occasion, your timeline, and your budget, not the other way round.</p><p class="svc-feature-label">Popular choices:</p><ul><li>A relaxed one-hour outdoor shoot if you’re newly dating</li><li><a href="%%BASE%%/wedding-photography-in-uae">Wedding couple photography</a> with multiple locations and outfit changes</li><li><a href="%%BASE%%/travel-photography-in-uae">Travel photography sessions</a> for couples on holiday in the UAE</li><li>Couple studio photography for anniversaries</li></ul><p>Every package comes with professional editing and a curated gallery at the end.</p></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Build my package</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/05/couple-photography-1.webp')"><span>Newly dating</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/IMGL9434-1-1-683x1024.webp')"><span>Wedding couples</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/05/couple-photography-3-e1784535101480.webp')"><span>Anniversaries</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Desert and beach couple photoshoots across the UAE</h2>
                <p class="svc-text">The UAE offers some of the world’s most stunning backdrops for romantic photography, making it an ideal destination for unforgettable couple sessions.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Beach and coastline</span><span>Sunrise strolls to sunset silhouettes along Dubai’s coastline</span></div>
                <div class="svc-table-row"><span>Desert and golden dunes</span><span>Al Qudra and beyond</span></div>
                <div class="svc-table-row"><span>Studio</span><span>Our Business Bay base</span></div>
                <div class="svc-table-row"><span>City</span><span>The Dubai skyline and landmarks</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Corniche and heritage</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">The couple photoshoot experience, step by step</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Consultation and booking: share your ideas, preferred style, and location. We’ll discuss your vision, recommend the perfect setting, and schedule your couple photoshoot at your convenience.</p></li>
                <li><span class="svc-step-number">2</span><p>Planning and location scouting: our team helps you choose outfits, timing, and locations while providing practical tips to ensure a relaxed, enjoyable, and well-organised photography experience.</p></li>
                <li><span class="svc-step-number">3</span><p>Photography session: your couple’s photographer captures genuine emotions, natural interactions, and beautifully composed portraits in a comfortable environment with professional guidance throughout.</p></li>
                <li><span class="svc-step-number">4</span><p>Editing and photo delivery: we carefully retouch every selected image, enhancing colours and details before delivering a high-quality online gallery filled with timeless memories you’ll cherish for years.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Want something dramatic? Ask about a <a href="%%BASE%%/flying-dress-photography-in-uae">flying dress photography session</a> against the UAE’s iconic landscapes.</p>
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
                            <h3>1.How much does a couple photoshoot in Dubai cost?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>A branding photoshoot typically includes a pre-shoot consultation, location or studio setup, multiple outfit changes, professional posing guidance, and a curated set of edited, high-resolution images tailored to your brand identity.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. What is the best time of day for couple photography?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Pricing depends on session length, number of locations, and deliverables. We offer flexible packages to suit influencers, startups, and established brands — contact us for a custom quote based on your needs.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. How long does a typical couple photoshoot take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We work with both. Our services are designed for influencers building a personal brand as well as businesses and entrepreneurs looking for professional brand photography and consistent social media content.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. Can we combine multiple locations in one session?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Most sessions run between 1-3 hours, depending on the number of looks, locations, and content types required. Larger packages with multiple setups may take longer.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. Do we need permission to shoot at certain locations?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We shoot across Dubai and beyond, including iconic city backdrops, studios, and lifestyle locations, chosen to match your brand’s aesthetic and content goals.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>6. How soon will we receive our edited photos?</h3>
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
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20couple%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Let’s design a couple photoshoot that feels completely, authentically you</h2>
                    <p class="svc-text">Whether you’re picturing a golden desert couple photoshoot, a breezy beach couple photography session, or a polished studio portrait — our team is ready to bring your vision to life anywhere across the UAE.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20couple%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20couple%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
