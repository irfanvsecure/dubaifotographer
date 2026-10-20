@extends('layouts.app')

@section('seo')
@include('seo.travel-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Travel-photography-services-in-Dubai.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Travel photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Stunning travel photography for every destination in the UAE — golden-hour shots against the Burj Khalifa, candid moments on Palm Jumeirah, and quiet frames across the desert dunes.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20travel%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your travel shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your travel shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your travel shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Who is travelling?</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="travellers" value="Solo" required>
                                    <span>Solo</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="travellers" value="Couple or honeymoon" required>
                                    <span>Couple or honeymoon</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="travellers" value="Family" required>
                                    <span>Family</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="travellers" value="Group of friends" required>
                                    <span>Group of friends</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Session length</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="session" value="One hour" required>
                                    <span>One hour</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session" value="Half day" required>
                                    <span>Half day</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session" value="Full day" required>
                                    <span>Full day</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. Burj Khalifa, Palm Jumeirah, desert">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How many locations?</label>
                            <select id="svc-guests" name="guests">
                                <option value="1 location">1 location</option>
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
                <p class="svc-fact-title">Since 2014</p>
                <p class="svc-fact-text">Licensed and insured production company</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Arabic and English</p>
                <p class="svc-fact-text">Bilingual crew</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Photo and video</p>
                <p class="svc-fact-text">One team, one booking</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48 hours</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">Our travel photographers cover Dubai, Abu Dhabi, Sharjah, and the wider UAE — including popular spots like the desert dunes, Palm Jumeirah, and iconic city landmarks across all seven Emirates.</p>
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
            <li >Solo travel</li>
            <li >Couples &amp; honeymoons</li>
            <li >Family vacations</li>
            <li >Destination portraits</li>
            <li >Flying dress</li>
            <li >Desert dunes</li>
            <li >Burj Khalifa</li>
            <li >Palm Jumeirah</li>
            <li >Sheikh Zayed Mosque</li>
            <li >Old Dubai</li>
            <li  aria-hidden="true" >Solo travel</li>
            <li  aria-hidden="true" >Couples &amp; honeymoons</li>
            <li  aria-hidden="true" >Family vacations</li>
            <li  aria-hidden="true" >Destination portraits</li>
            <li  aria-hidden="true" >Flying dress</li>
            <li  aria-hidden="true" >Desert dunes</li>
            <li  aria-hidden="true" >Burj Khalifa</li>
            <li  aria-hidden="true" >Palm Jumeirah</li>
            <li  aria-hidden="true" >Sheikh Zayed Mosque</li>
            <li  aria-hidden="true" >Old Dubai</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Stunning Travel Photography for Every Destination in the UAE</h2>
                <div class="svc-text">Most holiday albums end up looking the same. Two hundred selfies and one blurry shot of the Burj Khalifa taken from a taxi window. A trip to the UAE deserves better than that, and turning it into a story worth keeping starts with the right lens. Our travel photography service captures all of it, with a real eye for detail and authenticity.</div>
                <div class="svc-text">Dubai Fotographer is led by Abdul Rehman, and we specialise in portrait travel photography for couples, families and solo explorers. These are people who want more than a phone snapshot. They want images that still feel like memories when they look back at them years later. We’ve been doing this since 2014 as a fully licensed and insured production company, and our crew is bilingual in Arabic and English. Every travel photoshoot is tailored to your itinerary, your personality, and the locations that matter most to you, whether that’s the old souks in Deira or a rooftop bar in Downtown.</div>
                <div class="svc-text">We’re a trusted travel photographer across Dubai, Abu Dhabi and beyond. We bring local expertise; we know where the light falls and when the crowds thin out, and we keep the shooting style relaxed and natural. You get to enjoy the moment, and we’ll take care of everything else.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20travel%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Travel Photography Services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'plane'])
                        <span>Solo travel photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'grin-stars'])
                        <span>Couple &amp; honeymoon photoshoots</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Family vacation photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'map-marker-alt'])
                        <span>Destination portrait sessions</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Flying dress &amp; desert photoshoots</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Group &amp; friends photoshoots</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Solo-travel-photography-1-1024x682.webp" alt="Solo travel photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Solo travel photography</h3>
                            <div class="svc-panel-text"><p>Travel alone, and you’ll come home with loads of pictures of places and hardly any of yourself. Our travel photography sessions sort that out. We tag along and capture your journey authentically: candid street moments, landmark portraits, and golden-hour shots that tell your personal travel story, with you actually in the frame for once.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my solo shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Couple-honeymoon-photoshoots-UAE846-1024x682.webp" alt="Couple and honeymoon photoshoot in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Couple &amp; honeymoon photoshoots</h3>
                            <div class="svc-panel-text"><p>Celebrate the trip together with a romantic travel photoshoot across Dubai’s skyline, Palm Jumeirah or the desert dunes. You’ll get timeless portraits you’ll treasure long after the trip ends and the holiday tan has faded. See also our dedicated <a href="%%BASE%%/couple-photography-in-uae">couple photography</a> sessions.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my couple shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Family-vacation-photography-1024x682.webp" alt="Family vacation photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Family vacation photography</h3>
                            <div class="svc-panel-text"><p>Kids hate posing, so we don’t make them. We preserve real, unposed family moments during your UAE holiday, and our relaxed approach to portrait travel photography puts everyone at ease. What you get back are genuine smiles and natural, storybook-style images. It pairs beautifully with our <a href="%%BASE%%/family-photography-in-uae">family photography</a> sessions.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my family shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Destination-portrait-sessionsjpg-682x1024.webp" alt="Destination portrait session at a UAE landmark" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Destination portrait sessions</h3>
                            <div class="svc-panel-text"><p>Hire a travel photographer for a dedicated portrait session at iconic UAE locations, from the Sheikh Zayed Grand Mosque to Dubai Marina. We plan it entirely around your vision, where you’d like to go and how you want the photos to feel.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my portrait session</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/Flying-dress-photography-youll-treasure-for-yearsjpg-1024x639.webp" alt="Flying dress photoshoot in the UAE desert" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Flying dress &amp; desert photoshoots</h3>
                            <div class="svc-panel-text"><p>Lots of visitors ask for this one, and it’s easy to see why it’s a UAE favourite. Dramatic <a href="%%BASE%%/flying-dress-photography-in-uae">flying dress</a> and desert photoshoots against golden sand and open skies, the dress flying out behind you in the wind. Bold, editorial-style images, great for social media and keepsakes alike.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my desert shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/07/Group-friends-travel-photoshoots-1024x682.webp" alt="Group and friends travel photoshoot in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Group &amp; friends photoshoots</h3>
                            <div class="svc-panel-text"><p>Travelling with friends? We do fun, dynamic travel photoshoot sessions that capture your group’s energy and connection at the most photogenic spots in Dubai and Abu Dhabi.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my group shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us your travel dates, destinations, and the type of experience you’d like to capture. We’ll send a personalised quote, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20travel%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">The UAE’s most photogenic destinations</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Landmarks</button>
                    <button type="button" data-filter="1">Desert</button>
                    <button type="button" data-filter="2">Portraits</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Dubai-skyline-Burj-Khalifa-1024x682.webp" data-full="%%BASE%%/assets/images/2026/07/Dubai-skyline-Burj-Khalifa.jpg" data-tag="0" alt="Dubai skyline and Burj Khalifa travel photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Palm-Jumeirah.jpg" data-full="%%BASE%%/assets/images/2026/07/Palm-Jumeirah.jpg" data-tag="0" alt="Travel photoshoot on Palm Jumeirah" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Al-Fahidi-the-Creek.jpg" data-full="%%BASE%%/assets/images/2026/07/Al-Fahidi-the-Creek.jpg" data-tag="0" alt="Old Dubai, Al Fahidi and the Creek" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/DSC02540-1-2.jpg" data-full="%%BASE%%/assets/images/2026/07/DSC02540-1-2.jpg" data-tag="1" alt="Desert dunes travel photography in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Sheikh-Zayed-Mosque.jpg" data-full="%%BASE%%/assets/images/2026/07/Sheikh-Zayed-Mosque.jpg" data-tag="0" alt="Sheikh Zayed Mosque, Abu Dhabi" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Solo-travel-photography-1-1024x682.webp" data-full="%%BASE%%/assets/images/2026/07/Solo-travel-photography-1.jpg" data-tag="2" alt="Solo travel photography in Dubai" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Photography, Videography &amp; Memories Under One Roof</h2>
                <div class="svc-feature-text"><p>A photo can’t give you back the sound of your kids screaming with laughter as the dune buggy tips over the top of a dune. Video can. Along with our travel photography services, we do professional videography, so every laugh, every candid moment, and every breathtaking UAE backdrop gets saved in more than one format.</p><p>From your travel photoshoot, we can cut a cinematic highlight reel or a few short clips made for social media, and our team takes care of the lot under a single booking. It’s one team with one vision, and a smooth experience from the first shot to the final edit.</p><p>Honeymoons, family vacations, and milestone trips are where this combined approach gets booked the most. Think a 40th birthday, or the first holiday abroad with the grandkids.</p></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Add video to my quote</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/woman-taking-photograph-her-boyfriend-camera-near-sea_23-2147841588.jpg')"><span>Highlight reel</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/How-our-travel-photographers-plan-every-session.jpg')"><span>Social clips</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Family-vacation-photography.webp')"><span>Family trips</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">The UAE’s Most Photogenic Destinations</h2>
                <p class="svc-text">Local knowledge shapes pretty much everything we do. We know where the best light falls on Palm Jumeirah, and we know the quieter, less crowded angles near Dubai’s most iconic landmarks.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Desert dunes</span><span>Al Qudra and beyond, with dramatic golden-hour light</span></div>
                <div class="svc-table-row"><span>Dubai skyline</span><span>Burj Khalifa, Downtown and Dubai Marina</span></div>
                <div class="svc-table-row"><span>Palm Jumeirah</span><span>Candid and portrait moments</span></div>
                <div class="svc-table-row"><span>Old Dubai</span><span>Al Fahidi, the Creek and the old souks in Deira</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Sheikh Zayed Grand Mosque</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our Approach to Every Travel Photography Session</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>Tell us about your trip, preferred locations, and the style of images you’re after. We tailor every travel photoshoot around your goals, timeline, and travel companions.</p></li>
                <li><span class="svc-step-number">2</span><p>Our travel photographer maps out timing, locations, and lighting based on local expertise, ensuring your session runs smoothly and captures the UAE at its most photogenic.</p></li>
                <li><span class="svc-step-number">3</span><p>Relax and explore while we work around you. Whether candid or posed, every moment feels natural, unhurried, and true to your personality.</p></li>
                <li><span class="svc-step-number">4</span><p>Within days, receive a professionally edited, high-resolution gallery ready to share, print, or treasure — delivered hassle-free from your travel photography session.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>No confusing tiers, no hidden costs: choose a one-hour landmark session, a half-day multi-location shoot or full-day travel coverage.</p>
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
                            <h3>1.How do I book a travel photographer in the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Simply share your travel dates, preferred locations, and the type of session you want. We’ll confirm availability and send a tailored quote — usually within a few hours.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. How long does a typical travel photoshoot last?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Sessions range from one hour for quick landmark shoots to a full day for multi-location coverage. We’ll help you choose based on your itinerary and goals.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. Do you shoot across all of the UAE, not just Dubai?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Our travel photographers cover Dubai, Abu Dhabi, Sharjah, and the wider UAE, including popular spots like the desert dunes, Palm Jumeirah, and iconic city landmarks.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4.  How soon will I receive my edited photos?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Most galleries are delivered within a few days, professionally edited and ready to download, share, or print — so your memories stay fresh.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. Can I include videography with my photoshoot?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Absolutely. We offer combined photography and videography sessions, so you can capture your trip in both stills and motion with one team.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>6. What if the weather changes on the day of my shoot?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Our team monitors conditions closely and can adjust timing or locations as needed, ensuring your portrait travel photography session still delivers great results.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20travel%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book Your Travel Photography Session Today</h2>
                    <p class="svc-text">Let’s create something unforgettable — with flexible packages, fast turnaround, and a team that knows the UAE inside out, you’re in trusted hands from start to finish.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20travel%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20travel%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
