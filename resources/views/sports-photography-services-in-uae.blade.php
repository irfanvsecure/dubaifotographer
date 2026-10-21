@extends('layouts.app')

@section('seo')
@include('seo.sports-photography-services-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Sportdds-photography-services.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Sports photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Professional sports photography for tournaments, championships, school sports days, corporate events, and commercial athlete campaigns — capturing intensity, determination, and the defining moments of every competition.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20sports%20photography.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your sports event</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your sports event">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your sports event">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Type of event</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Tournament or match" required>
                                    <span>Tournament or match</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="School sports day" required>
                                    <span>School sports day</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Corporate sports day" required>
                                    <span>Corporate sports day</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="event_type" value="Athlete or brand shoot" required>
                                    <span>Athlete or brand shoot</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Coverage</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Single event" required>
                                    <span>Single event</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Full season" required>
                                    <span>Full season</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="coverage" value="Brand campaign" required>
                                    <span>Brand campaign</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. stadium, school campus, sports club">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many participants?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Under 50">Under 50</option>
                                <option value="50 to 200">50 to 200</option>
                                <option value="200 to 500">200 to 500</option>
                                <option value="Over 500">Over 500</option>
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
                <p class="svc-fact-text">Sports photography across the UAE</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Licensed and insured</p>
                <p class="svc-fact-text">Production company</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Arabic and English</p>
                <p class="svc-fact-text">Speaking crew</p>
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
                <p class="svc-text">We provide sports photography across Dubai and all seven Emirates for schools, clubs, organisations, businesses, and event organisers — at dedicated sports facilities, school campuses, hotel venues, or outdoor locations anywhere across the UAE.</p>
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
            <li >Tournaments</li>
            <li >Championships</li>
            <li >School sports days</li>
            <li >Corporate sports days</li>
            <li >Charity runs</li>
            <li >Club competitions</li>
            <li >Award ceremonies</li>
            <li >Athlete portraits</li>
            <li >Team photography</li>
            <li >Brand campaigns</li>
            <li  aria-hidden="true" >Tournaments</li>
            <li  aria-hidden="true" >Championships</li>
            <li  aria-hidden="true" >School sports days</li>
            <li  aria-hidden="true" >Corporate sports days</li>
            <li  aria-hidden="true" >Charity runs</li>
            <li  aria-hidden="true" >Club competitions</li>
            <li  aria-hidden="true" >Award ceremonies</li>
            <li  aria-hidden="true" >Athlete portraits</li>
            <li  aria-hidden="true" >Team photography</li>
            <li  aria-hidden="true" >Brand campaigns</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why Choose Dubai Fotographer for Sports Photography?</h2>
                <div class="svc-text">Here at Dubai Fotographer, this is led by Abdul Rehman; our team has been doing sports photography for organizations that are sports-related, schools, different clubs, businesses, and event organisers. This has been going on in Dubai and throughout the UAE since 2014. We are a fully licensed and insured production company, and our crew speaks both Arabic and English.</div>
                <div class="svc-text">Muddy school fields, floodlit stadiums, a padel court in somebody’s compound- we’ve shot sport in all of them since 2014. Before any assignment, there’s careful preparation. We ask about the schedule and the venue, and what the photos are really for, so what you get back shows the pace, the atmosphere, and the significance of the event and still hits your specific objectives.</div>
                <div class="svc-text">You might just need a sports photographer for hire for a single competition. You might want ongoing tournament coverage that runs the whole season, or commercial sports imagery for a brand campaign. We tailor each project to your requirements either way. Our technical expertise, creative composition, and professional post-production go into all of it, and the photography ends up supporting your marketing, your media coverage, event promotion, and long-term visual communication.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20sports%20photography.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Sports Photography for Every Client Type</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'trophy'])
                        <span>Competitive events &amp; tournaments</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Schools, clubs &amp; organisations</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Athletes, teams &amp; fitness brands</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Tournament-match-coveragejpg.jpg" alt="Tournament and match coverage in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Competitive events &amp; tournaments</h3>
                            <div class="svc-panel-text"><p>We cover local tournaments, regional championships, and professional competitions. In sport, if you wait for the moment, you miss it. So our crew anticipates the action instead of reacting to it. We photograph the celebrations, the team interactions, the coaching moments and the energy of the crowd. When the match is over, the client has a complete visual record of the competition and its atmosphere.</p><p>For larger tournaments, we sometimes add <a href="%%BASE%%/multi-camera-event-recording">multi-camera event recording</a> alongside still photography, so there is full video documentation too.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my tournament</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/School-sports-days.jpg" alt="School sports day photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Schools, clubs &amp; organisations</h3>
                            <div class="svc-panel-text"><p>Sports day photography shows student participation and achievement across the school year. For clubs and organisations, we document competitions, presentations and community events, and they use the photos in reports and on social media. Corporate tournaments and charity runs get the same structured approach.</p><p>Some schools also want photos of the wider campus, and our <a href="%%BASE%%/school-photography-services-in-uae">school photography</a> coverage handles that.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my sports day</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Athlete-team-portraits.jpg" alt="Athlete and team portraits in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Athletes, teams &amp; fitness brands</h3>
                            <div class="svc-panel-text"><p>For athletes and fitness brands, we shoot action imagery, athlete portraits and branding photographs. These support sponsorship campaigns, training programmes and marketing initiatives. We plan every shoot around the client’s objectives, whether the images are for advertising, editorial use or social media.</p><p>Many fitness and sports brands also book our <a href="%%BASE%%/ecommerce-brand-photography-in-uae">e-commerce brand photography</a> to keep their product and lifestyle imagery consistent.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my campaign</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your event, sport, and photography objectives and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20sports%20photography.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">A complete sports photography library</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Competitions</button>
                    <button type="button" data-filter="1">Schools and awards</button>
                    <button type="button" data-filter="2">Athletes</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/05/sports-photography-1-1.webp" data-full="%%BASE%%/assets/images/2026/05/sports-photography-1-1.webp" data-tag="0" alt="Rugby lineout captured by a sports photographer in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Tournament-match-coveragejpg.jpg" data-full="%%BASE%%/assets/images/2026/07/Tournament-match-coveragejpg.jpg" data-tag="0" alt="Tournament and match coverage in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/School-sports-days.jpg" data-full="%%BASE%%/assets/images/2026/07/School-sports-days.jpg" data-tag="1" alt="School sports day photography in the UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Award-ceremonies-1.jpg" data-full="%%BASE%%/assets/images/2026/07/Award-ceremonies-1.jpg" data-tag="1" alt="Award ceremony photography at a sports event" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Athlete-team-portraits.jpg" data-full="%%BASE%%/assets/images/2026/07/Athlete-team-portraits.jpg" data-tag="2" alt="Athlete and team portraits in Dubai" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Sports-photography-services.jpg" data-full="%%BASE%%/assets/images/2026/07/Sports-photography-services.jpg" data-tag="2" alt="Sports photography services in UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Capturing Fast-Paced Action Sports Photography</h2>
                <div class="svc-feature-text"><p>Point a camera at someone running, and you’ll mostly get a blurry back and half a ball. That’s not really action sports photography. Every sport has its own rhythm, and the decisive moments are tiny: the racket hitting the ball, the keeper’s fingers brushing the shot, all over in a fraction of a second. So you’re anticipating movement before it happens, reading the flow of the competition, and already positioned in the right spot when it comes.</p><p>Sometimes the sport is only part of a bigger day, a company sports day that rolls into an awards dinner, say. In that case, corporate clients usually bring in our <a href="%%BASE%%/corporate-event-photography-videography">corporate event photography</a> team too, so the whole day gets documented consistently, in one style.</p><p class="svc-feature-label">Flexible sports photography services:</p><ul><li><strong>One-off event coverage</strong> for a single competition, tournament day, school sports event, or corporate sporting occasion</li><li><strong>Tournament and league photography</strong> across an entire tournament, league, or sporting season</li><li><strong>Athlete and brand campaigns</strong> for sponsorship, advertising, editorial publications, and social media</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Plan my coverage</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/05/sports-photography-2.webp')"><span>Touchline</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/05/Sports-Photography.jpg')"><span>Fitness brands</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Award-ceremonies-1.jpg')"><span>Award ceremonies</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Sports Photography Across the UAE</h2>
                <p class="svc-text">We travel to you anywhere across Dubai, Abu Dhabi, and the wider UAE.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Sports facilities, school campuses, hotel venues and outdoor locations</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Tournaments, school and corporate sports events</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Planning Your Sports Photography</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We review the event schedule and venue layout to understand the flow of the competition and identify the best photography positions.</p></li>
                <li><span class="svc-step-number">2</span><p>We identify priority matches, athletes, or activities, and plan photography positions in advance for those key moments.</p></li>
                <li><span class="svc-step-number">3</span><p>Action, presentations, and supporting event coverage captured throughout the competition without interrupting the event or its organisation.</p></li>
                <li><span class="svc-step-number">4</span><p>The complete image collection professionally edited and delivered in high resolution, ready for immediate use across all platforms.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Professional sports event coverage begins well before the competition starts. Need the wider campus covered too? Our <a href="%%BASE%%/school-photography-services-in-uae">school photography</a> coverage handles that.</p>
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
                            <h3>1.What types of sporting events do you photograph?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We provide photography for tournaments, championships, school sports days, corporate sporting events, charity runs, community competitions, and many other sporting activities across the UAE.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. Do you provide sports photography throughout the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide sports photography services across Dubai and all seven Emirates for schools, clubs, organisations, businesses, and event organisers.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. Can you photograph both the competition and the event atmosphere?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Absolutely. Alongside the sporting action, we also capture team interactions, presentations, award ceremonies, spectators, and other moments that help tell the complete story of the event.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. Do you provide photography for commercial sports campaigns?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. As a commercial sports photographer, we create photography for athletes, sports brands, fitness businesses, sponsorship campaigns, advertising, and promotional content.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. When will we receive the final photographs?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>All selected photographs are professionally edited and delivered in high resolution, making them suitable for digital marketing, websites, social media, print, and other commercial or editorial applications.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20sports%20photography.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book Your Sports Photography Session Today</h2>
                    <p class="svc-text">Professional sports photography for tournaments, school events, corporate competitions, and commercial athlete campaigns across Dubai and all seven Emirates.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20sports%20photography.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20sports%20photography.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
