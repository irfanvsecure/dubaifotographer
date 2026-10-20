@extends('layouts.app')

@section('seo')
@include('seo.flying-dress-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/06/flying-dress-photography.webp')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Flying dress photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Elegant portraits that combine flowing fashion, striking landscapes, and expert photography — desert, beach, and skyline sessions planned around your style.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20flying%20dress%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your flying dress shoot</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your flying dress shoot">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your flying dress shoot">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Occasion</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Solo portrait" required>
                                    <span>Solo portrait</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Couple or engagement" required>
                                    <span>Couple or engagement</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Maternity" required>
                                    <span>Maternity</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="occasion" value="Birthday or travel" required>
                                    <span>Birthday or travel</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Location</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="location" value="Desert dunes" required>
                                    <span>Desert dunes</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="location" value="Beach" required>
                                    <span>Beach</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="location" value="City skyline" required>
                                    <span>City skyline</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="location" value="Not sure yet" required>
                                    <span>Not sure yet</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. desert, beach, hotel or landmark">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">How many people in the shoot?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Just me">Just me</option>
                                <option value="2 people">2 people</option>
                                <option value="3 to 5">3 to 5</option>
                                <option value="More than 5">More than 5</option>
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
                <p class="svc-fact-text">Portraits across the UAE</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Licensed and insured</p>
                <p class="svc-fact-text">Production company</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48 hours</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7 Emirates</p>
                <p class="svc-fact-text">We travel to your location</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">Our photographers travel to your preferred location across every Emirate, delivering the same consistent style, styling guidance, and editing quality wherever you shoot.</p>
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
            <li >Personal branding</li>
            <li >Travel &amp; tourist shoots</li>
            <li >Content creators</li>
            <li >Birthdays</li>
            <li >Maternity</li>
            <li >Anniversaries</li>
            <li >Engagements</li>
            <li >Solo portraits</li>
            <li >Desert dunes</li>
            <li >City skylines</li>
            <li  aria-hidden="true" >Personal branding</li>
            <li  aria-hidden="true" >Travel &amp; tourist shoots</li>
            <li  aria-hidden="true" >Content creators</li>
            <li  aria-hidden="true" >Birthdays</li>
            <li  aria-hidden="true" >Maternity</li>
            <li  aria-hidden="true" >Anniversaries</li>
            <li  aria-hidden="true" >Engagements</li>
            <li  aria-hidden="true" >Solo portraits</li>
            <li  aria-hidden="true" >Desert dunes</li>
            <li  aria-hidden="true" >City skylines</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why Choose Dubai Fotographer for Your Desert Photoshoot</h2>
                <div class="svc-text">We’ve been loading cameras into the car and heading out to the dunes since 2014. In that time, Dubai Fotographer has provided professional photography services across the UAE, and our portraits mix creative vision with careful planning and a good bit of technical expertise. Every Dubai dress photoshoot is tailored to you. Location, styling, timing, photography approach- all of it has to line up, or the shots just fall flat.</div>
                <div class="svc-text">Here at Dubai Fotographer, the flying dress photoshoots are personalised and tailored to your style, your preferences, and the atmosphere you’re after- soft and dreamy, or loud and dramatic. We handle the details. We choose the ideal location. We pick the best time of day, normally that last hour before sunset when everything turns gold. And we give you posing guidance all the way through, when to toss the dress, when to keep still and let the wind take it.</div>
                <div class="svc-text">From the first consultation to the delivery of your edited photographs, we keep it simple: a smooth, professional process, backed by years of hands-on experience across the UAE. You’ll know where to be, what to bring, and roughly when your gallery is going to land. Maybe you’re on a short trip with one free evening. Maybe you live twenty minutes down the road. Either way, it’s that consistency that shapes every session we deliver.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20flying%20dress%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Flying Dress Photoshoots Designed Around Your Style</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Solo &amp; travel portraits</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'grin-stars'])
                        <span>Couples, maternity &amp; branding</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'map-marker-alt'])
                        <span>Desert, beach &amp; skyline</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Milestones &amp; keepsakes</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/05/flying-dress-photography-1-e1784528109863.webp" alt="Flying dress photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Solo &amp; travel portraits</h3>
                            <div class="svc-panel-text"><p>Imagine yards of red chiffon caught in the desert wind and trailing out behind you like a flag. That’s the shot people come for. You might be celebrating a special occasion, a birthday or an anniversary. It might be a solo photoshoot that’s just for you, or one stop on a UAE <a href="%%BASE%%/travel-photography-in-uae">travel photoshoot</a> while you’re visiting. Or maybe you simply want a unique portrait experience you won’t find back home.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my solo shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Flying-dress-photography-youll-treasure-for-yearsjpg-1024x639.webp" alt="Flying dress photography you’ll treasure for years" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Couples, maternity &amp; branding</h3>
                            <div class="svc-panel-text"><p>Maybe you’re booking a solo <a href="%%BASE%%/portrait-photography-in-uae">portrait session</a>. Maybe you’re celebrating a <a href="%%BASE%%/couple-photography-in-uae">couple milestone</a>, planning a <a href="%%BASE%%/maternity-photography-in-uae">maternity shoot</a> with the bump front and centre, or making content for personal branding. Whatever it’s for, we adapt the photography to the purpose of the session.</p><p>While we’re shooting, we give clear direction- where to stand, which way to turn, when to let go of the fabric- but we also leave space for natural expressions to come through on their own. That’s how the photographs end up looking confident and authentic.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my session</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Professional-Flying-Dress-Photography-in-the-UAE.jpg" alt="Flying dress photoshoot in the desert dunes" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Desert, beach &amp; skyline</h3>
                            <div class="svc-panel-text"><p>No two people picture the same thing when they book a Dubai flying dress photoshoot. One client turns up with a mood board full of red gowns against glass towers. The next just wants sand, sky and a bit of quiet. Some people love bold, dramatic portraits against modern city architecture. Others are pulled towards open desert landscapes, or the easy, relaxed feel of coastal locations with the waves coming in.</p><p>The dress you choose, its colour, the posing style and the location all work together, so the photographs reflect your personality, not one look we roll out for everybody.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my location shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/flying.jpg" alt="Flying dress portrait in a red gown" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Milestones &amp; keepsakes</h3>
                            <div class="svc-panel-text"><p>Ten years on, the heat won’t be what you remember. It’ll be the photo. For some people that’s a special milestone: turning 30, getting engaged, finally making the trip to Dubai after years of saying “next year”. For others, it’s a personal achievement, or a memorable visit to the UAE with someone they love.</p><p>Beyond personal keepsakes, plenty of clients use their portraits for announcements, framed artwork, professional portfolios, and social media. A big print over the sofa. A profile picture that finally looks like you on a good day.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my milestone shoot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your vision and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20flying%20dress%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Recent flying dress photoshoots</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Desert</button>
                    <button type="button" data-filter="1">City and coast</button>
                    <button type="button" data-filter="2">Portraits</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Professional-Flying-Dress-Photography-in-the-UAE.jpg" data-full="%%BASE%%/assets/images/2026/07/Professional-Flying-Dress-Photography-in-the-UAE.jpg" data-tag="0" alt="Flying dress photoshoot in the desert dunes" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/flying-dress-photography.avif" data-full="%%BASE%%/assets/images/2026/07/flying-dress-photography.avif" data-tag="0" alt="Flying dress desert photoshoot in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/flying.jpg" data-full="%%BASE%%/assets/images/2026/07/flying.jpg" data-tag="1" alt="Flying dress portrait in a red gown" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Flying-dress-photography-youll-treasure-for-yearsjpg-1024x639.webp" data-full="%%BASE%%/assets/images/2026/07/Flying-dress-photography-youll-treasure-for-yearsjpg-e1784527429155.jpg" data-tag="1" alt="Flying dress photography you’ll treasure for years" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/05/flying-dress-photography-1-e1784528109863.webp" data-full="%%BASE%%/assets/images/2026/05/flying-dress-photography-1-e1784528109863.webp" data-tag="2" alt="Flying dress photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/IMGL0298-1.jpg" data-full="%%BASE%%/assets/images/2026/07/IMGL0298-1.jpg" data-tag="2" alt="Outdoor portrait session in Dubai" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Flying Dress Photography That Captures Every Detail</h2>
                <div class="svc-feature-text"><p>Putting on a flowing gown is the easy part. Getting it to fly the right way, at the right second, in the right light- that’s where the real work is. The movement of the fabric matters. So does the direction of natural light, the positioning of the subject, and the timing of each photograph, sometimes down to a split second when the wind suddenly picks up. The portraits look effortless. Behind them sits a high level of technical precision.</p><p>That’s what gives the shots the feel of natural <a href="%%BASE%%/lifestyle-photography-in-uae">lifestyle visuals</a>, authentic and engaging instead of stiff. Professional editing then finishes the final collection off. We refine the colour, the lighting, and the overall consistency, but keep a natural appearance, so no plastic-looking skin and no fake skies.</p></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Plan my shoot</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Professional-Flying-Dress-Photography-in-the-UAE.jpg')"><span>Desert dunes</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/flying.jpg')"><span>City</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Flying-dress-photography-youll-treasure-for-yearsjpg-e1784527429155.jpg')"><span>Golden hour</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Photoshoots Across Dubai’s Most Iconic Locations</h2>
                <p class="svc-text">Our photographers shoot across deserts, beaches, city skylines, and other scenic destinations all over the UAE. In the final images, you see the graceful movement of the dress and the beauty of the surroundings at the same time.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Desert dunes</span><span>Open sand, sky and golden-hour light</span></div>
                <div class="svc-table-row"><span>Beaches</span><span>Relaxed coastal sessions with the waves coming in</span></div>
                <div class="svc-table-row"><span>City skylines</span><span>Bold portraits against modern city architecture</span></div>
                <div class="svc-table-row"><span>Resorts and landmarks</span><span>Scenic destinations all over the UAE</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Every Stage Planned Before the Camera Comes Out</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We discuss your preferred photography style and creative vision.</p></li>
                <li><span class="svc-step-number">2</span><p>We select a suitable location and time of day, and coordinate dress colours and styling preferences.</p></li>
                <li><span class="svc-step-number">3</span><p>We provide posing guidance throughout the session.</p></li>
                <li><span class="svc-step-number">4</span><p>We professionally edit and deliver the final photographs.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>A successful flying dress photoshoot begins with careful planning long before the session, so the day flows naturally and makes the best use of light and surroundings.</p>
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
                            <h3>1.Do you provide flying dress photography across the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We offer flying dress photography throughout Dubai and the UAE, with sessions available at a variety of outdoor and landmark locations.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. Can I choose the location for my photoshoot?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Absolutely. We can photograph your session at your preferred location or recommend settings that complement the style of your portraits and the flowing dress.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. Do you help with posing during the session?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Throughout the shoot, we provide clear and natural posing guidance to help you feel comfortable and create elegant, confident photographs.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. Is a flying dress photoshoot suitable for special occasions?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Flying dress sessions are popular for birthdays, engagements, anniversaries, maternity portraits, solo portraits, and memorable travel photography.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. When will I receive my photographs?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>All selected images are professionally edited and delivered in high resolution after post-production, making them suitable for both digital sharing and high-quality printing.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20flying%20dress%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book Your Flying Dress Photoshoot Today</h2>
                    <p class="svc-text">Solo, couples, travel, and special-occasion sessions anywhere across the UAE. Tell us about your vision and we’ll get back to you with availability and pricing.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20flying%20dress%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20flying%20dress%20photoshoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
