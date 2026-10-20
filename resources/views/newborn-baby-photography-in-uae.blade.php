@extends('layouts.app')

@section('seo')
@include('seo.newborn-baby-photography-in-uae')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@section('content')
    {{-- Hero with the 3-step quote form --}}
    <section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/2026/07/Newborn-photofggraphy-services-in-Dubai-.jpg')">
        <span class="svc-corner svc-corner-tl"></span>
        <span class="svc-corner svc-corner-tr"></span>
        <span class="svc-corner svc-corner-bl"></span>
        <span class="svc-corner svc-corner-br"></span>
        <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
        <p class="svc-exif">1/250 f2.8 ISO 3200</p>

        <div class="svc-hero-inner">
            <div class="svc-hero-copy">
                <h1>Newborn photography services in Dubai, serving all of the UAE</h1>
                <div class="svc-hero-text"><p>Gentle, safety-first newborn photography for UAE families — capturing tiny fingers, soft yawns, and quiet moments that disappear all too quickly.</p></div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20newborn%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                            <p class="svc-label">Session</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Newborn" required>
                                    <span>Newborn</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Maternity and newborn" required>
                                    <span>Maternity and newborn</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Baby milestone" required>
                                    <span>Baby milestone</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="session_type" value="Cake smash" required>
                                    <span>Cake smash</span>
                                </label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Where</p>
                            <div class="svc-options">
                                <label class="svc-option">
                                    <input type="radio" name="setting" value="Our Dubai studio" required>
                                    <span>Our Dubai studio</span>
                                </label>
                                <label class="svc-option">
                                    <input type="radio" name="setting" value="At home" required>
                                    <span>At home</span>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. our Dubai studio, or your area">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-guests">Who is in the photos?</label>
                            <select id="svc-guests" name="guests">
                                <option value="Baby only">Baby only</option>
                                <option value="Baby and parents">Baby and parents</option>
                                <option value="With siblings">With siblings</option>
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
                <p class="svc-fact-title">5 to 20 days</p>
                <p class="svc-fact-text">The ideal age for a newborn shoot</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">48-hour</p>
                <p class="svc-fact-text">Turnaround on selected packages</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Studio and home</p>
                <p class="svc-fact-text">Visits across all 7 Emirates</p>
            </div>
            <div class="svc-fact">
                <p class="svc-fact-title">Since 2014</p>
                <p class="svc-fact-text">Licensed and insured</p>
            </div>
        </div>
    </section>

    {{-- Coverage across the UAE --}}
    <section class="svc-section svc-cream">
        <div class="svc-container svc-coverage">
            <div class="svc-coverage-copy">
                <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) Serving all seven Emirates</p>
                <h2 class="svc-title">Based in Dubai, serving all of the UAE</h2>
                <p class="svc-text">Our newborn photography studio is in Dubai, and our photographers also bring the studio experience to your home wherever you’re based, from Abu Dhabi to Sharjah, Ajman and beyond.</p>
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
            <li >Newborn sessions</li>
            <li >Swaddled poses</li>
            <li >Detail shots</li>
            <li >Sibling portraits</li>
            <li >Sitter sessions</li>
            <li >Crawler sessions</li>
            <li >Cake smash</li>
            <li >Milestone shoots</li>
            <li >Home visits</li>
            <li >Studio sessions</li>
            <li  aria-hidden="true" >Newborn sessions</li>
            <li  aria-hidden="true" >Swaddled poses</li>
            <li  aria-hidden="true" >Detail shots</li>
            <li  aria-hidden="true" >Sibling portraits</li>
            <li  aria-hidden="true" >Sitter sessions</li>
            <li  aria-hidden="true" >Crawler sessions</li>
            <li  aria-hidden="true" >Cake smash</li>
            <li  aria-hidden="true" >Milestone shoots</li>
            <li  aria-hidden="true" >Home visits</li>
            <li  aria-hidden="true" >Studio sessions</li>
        </ul>
    </section>

    {{-- About the team --}}
    <section class="svc-section">
        <div class="svc-container svc-about">
            <div class="svc-about-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Newborn-photography-services-in-Dubai051.jpg')">

            </div>
            <div class="svc-about-copy">
                <h2 class="svc-title">Why choose Dubai Fotographer for newborn photography?</h2>
                <div class="svc-text">Some of the babies we photographed back in our first year are in school now. Our newborn photography experience goes back to 2014, so that’s over a decade of capturing newborn moments, <a href="%%BASE%%/couple-photography-in-uae">couple shoots,</a> and growing families across all seven Emirates. We’re a fully licensed and insured production company, and we bring the expertise, the safety training, and the creative direction that genuinely delicate newborn work needs. A week-old baby isn’t a prop. It shouldn’t be treated like one.</div>
                <div class="svc-text">Our team of professional newborn photographers is led by experienced specialists. They understand infant handling, posing safety and studio hygiene standards, washed wraps, sanitised props, and warm hands. You’re not getting a couple of freelancers piecing together a shoot on the day. On selected packages, we also offer a 48-hour turnaround, without compromising editing quality, so you don’t sit around waiting months for your baby’s first portraits.</div>
                <div class="svc-text">From Dubai to Abu Dhabi and beyond, it comes down to our track record, our licensing, and consistent quality. That’s what makes us a trusted choice for the newborn photography services UAE families rely on.</div>
                <div class="svc-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-dark" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20newborn%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services (tabs) --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our newborn and baby photography services</h2>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab  is-active " role="tab" aria-selected="true" aria-controls="svc-panel-0" id="svc-tab-0">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Newborn photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-1" id="svc-tab-1">
                        @include('partials.icon', ['name' => 'users'])
                        <span>Maternity &amp; newborn photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-2" id="svc-tab-2">
                        @include('partials.icon', ['name' => 'grin-stars'])
                        <span>Baby portrait photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-3" id="svc-tab-3">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Baby girl &amp; baby boy photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-4" id="svc-tab-4">
                        @include('partials.icon', ['name' => 'map-pin'])
                        <span>Home newborn photography</span>
                    </button>
                    <button type="button" class="svc-tab " role="tab" aria-selected="false" aria-controls="svc-panel-5" id="svc-tab-5">
                        @include('partials.icon', ['name' => 'building'])
                        <span>Studio newborn photography</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel  is-active " role="tabpanel" id="svc-panel-0" aria-labelledby="svc-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/sweet-newborn-girl-romper-sleeping-round-cot_661495-32313-1024x682.webp" alt="Newborn photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Newborn photography</h3>
                            <div class="svc-panel-text"><p>Gentle, safety-first sessions capturing your baby’s first days with soft lighting, natural poses, and timeless detail shots — in-studio or at home across the UAE.</p><p>An experienced, professional newborn photographer leads every session. They know how to keep a baby comfortable. They know swaddling techniques, and our studio is temperature-controlled for babies who are only days old. We plan each shoot around your baby’s mood and schedule. If the baby needs to feed or sleep, we take a break.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my newborn shoot</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-1" aria-labelledby="svc-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/new-born-baby_981168-3616-1024x1024.webp" alt="Maternity and newborn photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Maternity &amp; newborn photography</h3>
                            <div class="svc-panel-text"><p>Combined packages documenting your pregnancy journey and your baby’s arrival together — a beautiful, connected story from bump to newborn portraits.</p><p>You can choose a combined newborn and <a href="%%BASE%%/maternity-photography-in-uae">maternity photography</a> bundle that captures your journey from bump to baby. Add-ons like premium albums, framed prints, and extra edited images let you personalize things further.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my combined package</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-2" aria-labelledby="svc-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Baby-portrait-photography-1024x682.webp" alt="Baby portrait photography in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Baby portrait photography</h3>
                            <div class="svc-panel-text"><p>Creative, personality-filled portraits for babies of all ages — from milestone shoots to playful sittings styled with props suited to your little one’s stage.</p><p>Beyond the newborn session, our baby portrait photography services across the UAE cover milestone shoots at 3, 6, 9 and 12 months. For families who prefer them, <a href="%%BASE%%/female-photographers-in-uae">female photographers</a> are available.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my baby portraits</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-3" aria-labelledby="svc-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Baby-girl-baby-boy-photography-1024x682.webp" alt="Baby girl and baby boy photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Baby girl &amp; baby boy photography</h3>
                            <div class="svc-panel-text"><p>Themed sessions tailored to your baby’s personality, featuring curated outfits, soft colour palettes, and gentle posing designed for girls and boys.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my themed session</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-4" aria-labelledby="svc-tab-4">
                        <img src="%%BASE%%/assets/images/2026/07/Home-newborn-photography-1024x682.webp" alt="Home newborn photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Home newborn photography</h3>
                            <div class="svc-panel-text"><p>Our photographers bring studio-quality equipment, props, and expertise directly to your home anywhere in the UAE — comfort without compromising quality.</p><p>A lot of families go for home sessions to keep their newborn in a familiar environment, with familiar smells and sounds, especially during those first delicate weeks.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my home session</a>
                        </div>
                    </div>
                    <div class="svc-panel " role="tabpanel" id="svc-panel-5" aria-labelledby="svc-tab-5">
                        <img src="%%BASE%%/assets/images/2026/07/Studio-newborn-photography-1024x773.webp" alt="Studio newborn photography in the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h3>Studio newborn photography</h3>
                            <div class="svc-panel-text"><p>Temperature-controlled, softly lit studio spaces built specifically for newborns — a calm, safe, and beautifully styled environment for every session.</p><p>It’s the ideal setting if you want a fully styled, distraction-free session. No barking dog. No delivery driver at the door. Just professional backdrops and all the equipment on hand.</p></div>
                            <a class="svc-btn svc-btn-dark" href="#quote">Quote my studio session</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gold call-to-action band --}}
    <section class="svc-band">
        <div class="svc-container svc-band-inner">
            <p>The tiniest moments deserve the greatest care. Tell us your baby’s due date and preferred setting and we’ll get back to you with availability and pricing, usually within a few hours.</p>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-dark" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20newborn%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </section>

    {{-- Recent work gallery with filters --}}
    <section class="svc-section">
        <div class="svc-container">
            <div class="svc-gallery-head">
                <p class="svc-gallery-title">Images your family will treasure for generations</p>
                <p class="svc-text">Tap a photo to see it larger.</p>
            </div>
            <div class="svc-gallery" data-gallery>
                <div class="svc-filters" aria-label="Gallery filter">
                    <button type="button" class="is-active" data-filter="all">All</button>
                    <button type="button" data-filter="0">Newborn</button>
                    <button type="button" data-filter="1">Family</button>
                    <button type="button" data-filter="2">Milestones</button>
                </div>
                <div class="svc-gallery-grid" data-lightbox>
                    <img src="%%BASE%%/assets/images/2026/07/Swaddled-poses049.jpg" data-full="%%BASE%%/assets/images/2026/07/Swaddled-poses049.jpg" data-tag="0" alt="Swaddled newborn poses" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Family-sibling-portraits.jpg" data-full="%%BASE%%/assets/images/2026/07/Family-sibling-portraits.jpg" data-tag="1" alt="Family and sibling portraits with a newborn" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Newborn-detail-shots.jpg" data-full="%%BASE%%/assets/images/2026/07/Newborn-detail-shots.jpg" data-tag="0" alt="Newborn detail shots of tiny fingers and toes" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Milestone-shots.jpg" data-full="%%BASE%%/assets/images/2026/07/Milestone-shots.jpg" data-tag="2" alt="Baby milestone shots at 3, 6, 9 and 12 months" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/First-birthday-joy.jpg" data-full="%%BASE%%/assets/images/2026/07/First-birthday-joy.jpg" data-tag="2" alt="First birthday cake smash photography" loading="lazy">
                    <img src="%%BASE%%/assets/images/2026/07/Celebrate-every-milestone-with-baby-photography.jpg" data-full="%%BASE%%/assets/images/2026/07/Celebrate-every-milestone-with-baby-photography.jpg" data-tag="1" alt="Celebrate every milestone with baby photography" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Dark feature section --}}
    <section class="svc-section svc-dark">
        <div class="svc-container svc-feature">
            <div class="svc-feature-copy">
                <h2 class="svc-title">How our newborn photographers plan every session</h2>
                <div class="svc-feature-text"><p>A week-old baby isn’t a prop. Every session is planned around your baby’s comfort and safety, from the first conversation to the last frame.</p><p class="svc-feature-label">What happens at every session:</p><ul><li><strong>Pre-session consultation.</strong> We discuss your baby’s routine, feeding schedule, and any preferences for props or themes before the day of the shoot.</li><li><strong>Warm, womb-like studio environment.</strong> Our studio is kept warm and calm throughout, mimicking a womb-like environment so your little one feels secure and settles naturally.</li><li><strong>Baby-led posing — never forced.</strong> If your newborn resists a setup, we gently adjust rather than push through — your baby’s comfort always comes first.</li><li><strong>Trained spotter at all times.</strong> A trained assistant or parent stays close by at all times, ensuring your baby’s head, neck, and body are properly supported throughout every setup.</li></ul></div>
                <a class="svc-btn svc-btn-gold" href="#quote">Plan my session</a>
            </div>
            <div class="svc-feature-photos">
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Trained-spotter-at-all-times475-e1784546505112.webp')"><span>Trained spotter</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/05/Professional-Newborn-Photography-Services-in-UAE.jpg')"><span>Baby-led posing</span></div>
                <div class="svc-feature-photo" style="background-image: url('%%BASE%%/assets/images/2026/07/Studio-at-home-newborn-photography-across-the-UAE.jpg')"><span>Studio or home</span></div>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="svc-section">
        <div class="svc-container svc-areas">
            <div class="svc-areas-copy">
                <h2 class="svc-title">Studio &amp; at-home newborn photography across the UAE</h2>
                <p class="svc-text">Rather stay at home? Our newborn photographers also do on-location sessions across the UAE. We pack the same props, the same lighting, and the same safety standards we use in-studio. Quality never depends on location.</p>
            </div>
            <div class="svc-table">
                <div class="svc-table-row svc-table-head"><span>Area</span><span>Where we usually work</span></div>
                <div class="svc-table-row"><span>Dubai</span><span>Our temperature-controlled studio, or at home</span></div>
                <div class="svc-table-row"><span>Abu Dhabi</span><span>Home sessions</span></div>
                <div class="svc-table-row"><span>Sharjah and Ajman</span><span>Home sessions</span></div>
                <div class="svc-table-row"><span>Other emirates</span><span>Ras Al Khaimah, Umm Al Quwain and Fujairah</span></div>
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="svc-section svc-grey">
        <div class="svc-container">
            <h2 class="svc-title">Our approach to every baby photography session</h2>
            <ol class="svc-steps">
                <li><span class="svc-step-number">1</span><p>We discuss your vision, preferred style, and baby’s due date, then schedule your session at a convenient time — ideally during pregnancy.</p></li>
                <li><span class="svc-step-number">2</span><p>We share simple tips on feeding and timing, then prepare our studio or your home with sanitised props, soft lighting, and a warm, comfortable environment.</p></li>
                <li><span class="svc-step-number">3</span><p>Our photographers guide the session at your baby’s pace, using gentle, baby-led posing with a spotter always close by to ensure comfort and safety throughout.</p></li>
                <li><span class="svc-step-number">4</span><p>Every image is carefully retouched and curated into a beautiful gallery, delivered digitally within days, with options for prints, albums, and keepsake products.</p></li>
            </ol>
            <div class="svc-steps-foot">
                <p>Want parents and siblings in the photos too? Add a <a href="%%BASE%%/family-photography-in-uae">family photoshoot</a> to your session.</p>
                <a class="svc-btn svc-btn-dark" href="#quote">Book during pregnancy</a>
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
                            <h3>1.When is the best time to book a newborn photoshoot?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>The ideal window is between 5 and 20 days after birth, when babies sleep deeply and pose most naturally. We recommend booking during pregnancy to secure your preferred date.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>2. Do you offer newborn photography at home or only in-studio?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Both. Our newborn photography studio in Dubai is available for styled sessions, and we also offer on-location photography across the UAE for families who prefer home comfort.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>3. Is newborn photography safe for my baby?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Our photographers follow strict safety protocols, including supported posing, sanitised props, temperature-controlled spaces, and baby-led pacing throughout every session.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>4. Can siblings and parents be included in the session?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Yes. Most of our packages include time for family and sibling portraits alongside your baby photography session, at no extra scheduling hassle.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>5. How long does a typical session take?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>Newborn sessions usually run 2 to 4 hours, allowing time for feeding, soothing, and outfit changes without rushing your baby.</p></div>
                    </details>
                    <details >
                        <summary>
                            <h3>6. What areas in the UAE do you cover?</h3>
                            <span class="svc-accordion-icon">
                                @include('partials.icon', ['name' => 'plus', 'class' => 'svc-closed'])
                                @include('partials.icon', ['name' => 'minus', 'class' => 'svc-opened'])
                            </span>
                        </summary>
                        <div class="svc-answer"><p>We serve families across Dubai, Abu Dhabi, Sharjah, Ajman, and the wider Emirates for both studio and home newborn photography.</p></div>
                    </details>
                </div>
            </div>
            <div class="svc-faq-box">
                <p class="svc-faq-box-title">Still have a question?</p>
                <p>Message the team on WhatsApp. The same person stays with you from the first message to the last file.</p>
                <a class="svc-btn svc-btn-green" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20newborn%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
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
                    <h2 class="svc-title">Book your newborn photography session today</h2>
                    <p class="svc-text">Safety-first newborn photography for families across Dubai and all seven Emirates — studio sessions and home visits.</p>
                    <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:+971522946276">+971 52 294 6276</a></p>
                </div>
                <div class="svc-book-buttons">
                    <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                    <a class="svc-btn svc-btn-ghost" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20newborn%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Phone action bar (mobile) --}}
    <div class="svc-mobile-bar">
        <a href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) Call</a>
        <a class="svc-mobile-wa" href="https://wa.me/971522946276?text=Hi%20Dubai%20Fotographer%2C%20I%27d%20like%20a%20quote%20for%20a%20newborn%20shoot.%20Date%3A%20%20Venue%3A%20" target="_blank">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp</a>
        <a class="svc-mobile-quote" href="#quote">@include('partials.icon', ['name' => 'file-alt']) Get a Quote</a>
    </div>
@endsection
