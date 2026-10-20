@extends('layouts.app')

@section('seo')
@include('seo.school-photography-services-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/05/dubai-fotographer-female-photography-team.webp')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>School photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Professional school photography for private schools, international schools, nurseries, and colleges — student portraits, graduation ceremonies, campus imagery, and ongoing event coverage across the UAE.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20school%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
                <p class="svc-call">Prefer to talk? Call <a href="tel:+971522946276">+971 52 294 6276</a></p>
            </div>

            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a quote for your school</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a quote for your school">
                    @csrf
                    <input type="hidden" name="form_name" value="Get a quote for your school">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">Institution</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="institution" value="Private school" required>
                                    <span>Private school</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="institution" value="International school" required>
                                    <span>International school</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="institution" value="Nursery" required>
                                    <span>Nursery</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="institution" value="College or university" required>
                                    <span>College or university</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">What do you need?</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="service" value="Student portraits" required>
                                    <span>Student portraits</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="service" value="Graduation or event" required>
                                    <span>Graduation or event</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="service" value="Campus photography" required>
                                    <span>Campus photography</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="service" value="Full academic year" required>
                                    <span>Full academic year</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="School name and emirate">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Roughly how many students?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Under 100">Under 100</option>
                                <option value="100 to 500">100 to 500</option>
                                <option value="500 to 1,000">500 to 1,000</option>
                                <option value="Over 1,000">Over 1,000</option>
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
                <p class="svc-fact-title">48h</p>
                <p class="svc-fact-text">Turnaround available</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Bilingual</p>
                <p class="svc-fact-text">Arabic / English crew</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Timetable-friendly</p>
                <p class="svc-fact-text">Scheduling</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">All 7 Emirates</p>
                <p class="svc-fact-text">Covered</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">We provide school photography across Dubai and all seven Emirates for educational institutions of every size. Whether your institution is based in the heart of Dubai or elsewhere across the Emirates, our team travels to your campus with full professional equipment, working efficiently within your timetable.</p>
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
            <li >Student portraits</li>
            <li >Graduation ceremonies</li>
            <li >Annual days</li>
            <li >Performances</li>
            <li >Sports days</li>
            <li >Classroom activities</li>
            <li >Campus life</li>
            <li >National day</li>
            <li >Science fairs</li>
            <li >Art exhibitions</li>
            <li  aria-hidden="true" >Student portraits</li>
            <li  aria-hidden="true" >Graduation ceremonies</li>
            <li  aria-hidden="true" >Annual days</li>
            <li  aria-hidden="true" >Performances</li>
            <li  aria-hidden="true" >Sports days</li>
            <li  aria-hidden="true" >Classroom activities</li>
            <li  aria-hidden="true" >Campus life</li>
            <li  aria-hidden="true" >National day</li>
            <li  aria-hidden="true" >Science fairs</li>
            <li  aria-hidden="true" >Art exhibitions</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg')">

                <p class="svc-about-name"><strong>Abdul Rehman</strong><br>Runs the team since 2014</p>
            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Professional School Photography for Educational Institutions</h2>
                <div class="svc-text">Ask the marketing person at just about any school how their photos are looking, and you’ll usually get a small sigh. The prospectus pictures are five years old, maybe more, and half the kids in them left long ago. Professional school photography is how you sort that out. It captures the people, the achievements, and the everyday experiences that make an educational institution feel like itself. We do individual <a href="%%BASE%%/portrait-photography-in-uae">student portraits</a>, graduation ceremonies, <a href="%%BASE%%/exterior-photography-in-uae">campus photography</a>, classroom activities, and all the school events that fill up the calendar.</div>
                <div class="svc-text">Abdul Rehman runs Dubai Fotographer, and since 2014 we’ve done school photography services for schools, nurseries, colleges and educational institutions across the UAE. We’re fully licensed and insured as a production company, and our crew speaks Arabic and English, which makes life easier with teachers, the front office and the odd worried parent. Every session gets planned around the school’s schedule. Classes carry on with hardly any disruption, and we still get the key people, facilities and events photographed efficiently, usually well before the last bell rings.</div>
                <div class="svc-text">Properly organised planning and experienced photographers who know how a school day goes- that’s honestly most of it. What you get is consistent, high-quality images that reflect the character, the environment and the achievements of your institution.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20school%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Photography for Every School Activity</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Graduation Ceremonies</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'microphone'])
                        <span>Annual Days and Performances</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'trophy'])
                        <span>Sports Competitions and Days</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Classroom and Campus Activities</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>School Portraits and Campus Photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/05/school-photography-2.webp" alt="School Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Graduation Ceremonies</h3>
                            <div class="svc-panel-text"><p>We show up at graduation days, award ceremonies and other formal academic events with the camera ready. When a student’s name gets read out and they walk across the stage for their certificate, that’s the one shot we really can’t miss. Parents get a proper photo rather than the back of someone’s head, and the school keeps a lasting visual record of every student’s achievement.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my graduation</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/05/school-photography-3.webp" alt="School Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Annual Days and Performances</h3>
                            <div class="svc-panel-text"><p>Most schools have one or two really big nights a year. We photograph annual day celebrations, cultural programmes, dramatic performances, exhibitions and other flagship school events across the academic year. We stay for the lot, from kids fidgeting backstage in costume right through to the last song.</p><p>Then you’ve got the cultural events, national day celebrations, science fairs, art exhibitions and community gatherings. Photos like that show the diversity and spirit of the school community.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my school event</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/school-photography-5.webp" alt="School Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Sports Competitions and Days</h3>
                            <div class="svc-panel-text"><p>Sport needs action photography, so that’s what this one is. Sports competitions, inter-school tournaments, sports days, extracurricular activities. It’s about showing student participation and achievement, the winners lifting the cup, of course, and the kids at the back who are still running flat out.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my sports day</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/05/school-photography-4.webp" alt="School Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Classroom and Campus Activities</h3>
                            <div class="svc-panel-text"><p>Funnily enough, loads of our favourite school photos come from totally normal days. We do ongoing photography of everyday learning, student interaction, classroom activities and campus life. A few visits in, the school has a balanced visual collection showing the full school experience throughout the year.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my campus shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/06/portrait-photography-3-1024x765.webp" alt="Portrait Photography in UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>School Portraits and Campus Photography</h3>
                            <div class="svc-panel-text"><p>There’s a school photo on nearly every family fridge. Families keep them as lasting memories. The school keeps them as consistent records, year after year. On portrait day, every student gets the same lighting and composition, so the photos work as <a href="%%BASE%%/live-printing-photo-booth-for-instant-guest-keepsakes">personal keepsakes</a> and fit straight into school records.</p><p>We also photograph the classrooms, specialist learning spaces, libraries, laboratories, <a href="%%BASE%%/sports-photography-services-in-uae">sports facilities</a> and the shared environments. Prospectuses, websites, newsletters, annual reports, other school publications- one set covers all of it.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my portrait day</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>Tell us about your institution and academic calendar, and we’ll get back to you with availability and pricing.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20school%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">School photography</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Portraits</button>
                    <button type="button" data-filter="1">Events</button>
                    <button type="button" data-filter="2">Campus</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/05/school-photography-1.webp" data-full="%%BASE%%/assets/images/2026/05/school-photography-1.webp" data-tag="0" alt="School Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/06/portrait-photography-3-1024x765.webp" data-full="%%BASE%%/assets/images/2026/06/portrait-photography-3.webp" data-tag="0" alt="Portrait Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/05/school-photography-2.webp" data-full="%%BASE%%/assets/images/2026/05/school-photography-2.webp" data-tag="1" alt="School Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/05/school-photography-3.webp" data-full="%%BASE%%/assets/images/2026/05/school-photography-3.webp" data-tag="1" alt="School Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/05/school-photography-4.webp" data-full="%%BASE%%/assets/images/2026/05/school-photography-4.webp" data-tag="2" alt="School Photography in UAE" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/school-photography-5.webp" data-full="%%BASE%%/assets/images/2026/07/school-photography-5.webp" data-tag="2" alt="School Photography in UAE" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">Flexible School Photography Packages</h2>
                <div class="svc-feature-text"><p>Every educational institution has different photography requirements — our packages are tailored to suit the size of the school, the type of photography required, and the academic calendar.</p><p class="svc-feature-label">Two ways to work with us:</p><ul><li><strong>Single-event school photography:</strong> a dedicated school event photographer for annual functions, graduation ceremonies, sports days, and other flagship occasions.</li><li><strong>Comprehensive school photography:</strong> a full-year solution covering student portraits, staff photography, campus imagery, and ongoing event coverage.</li></ul><p>Our flexible approach allows schools to combine multiple school photography services into a single project — ensuring the photography delivers long-term value while fitting seamlessly into existing operations.</p></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Ask about packages</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/05/School-Photography-services.webp')"><span>Event coverage</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/06/portrait-photography-2.webp')"><span>Our crew</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/05/school-photography-1.webp')"><span>Portrait albums</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">School Photography Across the UAE</h2>
                <p class="svc-text">Every school operates differently, so our approach gets built around your timetable, your photography objectives, and your administrative requirements.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Private schools, international schools and nurseries</span></div>
                <div class="svc-table-row"><span>Abu Dhabi and Al Ain</span><span>Schools, colleges and universities</span></div>
                <div class="svc-table-row"><span>Northern emirates</span><span>Sharjah, Ajman, Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Planning Your School Photography</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We discuss your photography objectives, priorities, and academic calendar to understand exactly what is needed and when.</p></li>
                <li><span class="svc-step-number">2</span><p>We coordinate with school staff and administration, and plan portrait sessions, campus photography, and event coverage in advance, around your timetable.</p></li>
                <li><span class="svc-step-number">3</span><p>Students, staff, facilities, and key activities photographed professionally and efficiently throughout the session.</p></li>
                <li><span class="svc-step-number">4</span><p>The final image collection professionally edited and delivered in high resolution, ready for use across all your platforms and communications.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>For nurseries and girls’ schools that prefer them, we send <a href="%%BASE%%/female-photographers-in-uae">female photographers</a>.</p>
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
                            <h3>1.What types of schools do you provide photography services for?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We work with private schools, international schools, nurseries, colleges, universities, and other educational institutions throughout the UAE.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. Do you provide photography for school events?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide school event photographer services for graduation ceremonies, annual days, sports events, performances, cultural programmes, exhibitions, and other school functions.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. Can you photograph both student portraits and the school campus?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Absolutely. We provide professional school portraits as well as photography of classrooms, facilities, outdoor spaces, and the wider campus to create a complete image library for your institution.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. Are your school photography packages customised?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Our school photography packages are tailored to your school’s requirements, including the type of photography, number of students, event coverage, and delivery needs.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. Do you provide school photography across the UAE?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. We provide school photography services across Dubai and all seven Emirates for educational institutions of every size.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20school%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your school photography session today</h2>
                    <p class="svc-text">Professional school photography for private schools, international schools, nurseries, and colleges across Dubai and all seven Emirates. Quotes are typically sent within a few hours during business hours.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20school%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20school%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
