@extends('layouts.app')

@section('seo')
@include('seo.home')
@endsection

@push('styles')
    <link rel="stylesheet" href="%%BASE%%/assets/vendor/swiper/swiper.min.css">
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/service.css">
    <link rel="stylesheet" href="%%BASE%%/assets/css/pages/home.css">
@endpush

@push('scripts')
    <script src="%%BASE%%/assets/vendor/swiper/swiper.min.js"></script>
    <script src="%%BASE%%/assets/js/service.js"></script>
@endpush

@php
    $phone = '+971 52 2946276';
    $locations = [
        ['Dubai', null],
        ['Abu Dhabi', '/photographer-in-abu-dhabi'],
        ['Sharjah', '/locations/photographer-in-sharjah'],
        ['Ajman', '/locations/photographer-in-ajman'],
        ['Ras Al Khaimah', '/locations/photographer-in-ras-al-khaimah'],
        ['Umm Al Quwain', '/locations/photographer-in-umm-al-quwain'],
        ['Fujairah', '/locations/photographer-in-fujairah'],
        ['Al Ain', '/locations/photographer-in-al-ain'],
    ];
    $clientsTop = [
        ['amazon.png', 'Amazon', 70],
        ['sharjah-municipality.png', 'Sharjah Municipality', 70],
        ['rta.png', 'RTA', 70],
        ['isnaad.png', 'Isnaad', 70],
        ['imdaad.png', 'Imdaad', 70],
        ['arabyads.jpg', 'Arabyads', 70],
    ];
    $clientsBottom = [
        ['dubai-health-authority.png', 'Dubai Health Authority', 100],
        ['etisalat.png', 'Etisalat', 100],
        ['du.png', 'du', 100],
        ['botim.png', 'Botim', 100],
        ['emirates.png', 'Emirates', 100],
        ['fcm.png', 'FCM', 100],
    ];
    $services = [
        [
            'title' => 'Corporate & commercial',
            'image' => '2026/07/Corporate-commercial.webp',
            'alt' => 'Corporate and commercial photography in Dubai',
            'links' => [
                ['Corporate events', '/corporate-event-photography-videography'],
                ['Jewelry photography', '/jewelry-photography-services-in-uae'],
                ['Live streaming', '/professional-live-streaming-services-across-dubai-and-the-uae'],
                ['360° video booth', '/360-video-booth-experience-for-immersive-event-engagement'],
            ],
        ],
        [
            'title' => 'Real estate & hospitality',
            'image' => '2026/07/Real-estate-hospitality-e1783339326792.webp',
            'alt' => 'Real estate and hospitality photography in Dubai',
            'links' => [
                ['Hotel photography', '/hotel-photography-service-in-uae'],
                ['Restaurant photography', '/restaurant-photography-service-in-uae'],
                ['Architectural photography', '/architectural-photography-in-uae'],
                ['Drone photography', '/cinematic-drone-photography-videography-uae-compliant-licensed'],
            ],
        ],
        [
            'title' => 'Portrait & lifestyle',
            'image' => '2026/07/Portrait-lifestyle.webp',
            'alt' => 'Portrait and lifestyle photography in Dubai',
            'links' => [
                ['Family photography', '/family-photography-in-uae'],
                ['Maternity photography', '/maternity-photography-in-uae'],
                ['Fashion photography', '/fashion-photography-in-uae'],
                ['Influencer photography', '/influencer-photography-in-uae'],
            ],
        ],
        [
            'title' => 'Specialty',
            'image' => '2026/07/Why-choose-Dubai-Fotographer-for-live-streaming-1.webp',
            'alt' => 'Specialty photography and live streaming services in the UAE',
            'links' => [
                ['Wedding photography', '/wedding-photography-in-uae'],
                ['Newborn photography', '/newborn-baby-photography-in-uae'],
                ['Car photography', '/car-photography-in-uae'],
                ['Sports photography', '/sports-photography-services-in-uae'],
            ],
        ],
    ];
    $portfolio = [
        ['IMGL9288-1.webp', 'Dubai Fotographer portfolio – professional photoshoot in Dubai'],
        ['DSC05279-1-1024x683.webp', 'Dubai Fotographer portfolio – event photography in the UAE'],
        ['Untitled-design.webp', 'Dubai Fotographer portfolio – commercial photography sample'],
        ['Untitled-design-3.webp', 'Dubai Fotographer portfolio – lifestyle photography sample'],
        ['Untitled-design-1.webp', 'Dubai Fotographer portfolio – studio photography sample'],
        ['Untitled-design-2.webp', 'Dubai Fotographer portfolio – brand photography sample'],
        ['20190701_143134080_iOS-1-e1783417004923.webp', 'Dubai Fotographer portfolio – on-location photoshoot in the UAE'],
        ['IMGL9434-1-683x1024.webp', 'Dubai Fotographer portfolio – corporate event coverage'],
    ];
    $stats = [
        ['Years in the UAE', 10, '+'],
        ['Emirates covered', 7, ''],
        ['Turnaround available', 48, ''],
        ['Average client rating', 5, '.0'],
    ];
    $process = [
        ['Discovery & consultation', 'We discuss goals, requirements, timelines, locations, and deliverables.'],
        ['Planning & creative direction', 'A production strategy, shot list, and schedule aligned to your objectives.'],
        ['Production', 'Photography and videography executed in-studio, on location, or both.'],
        ['Editing & post-production', 'Professional editing, retouching, and color correction.'],
        ['Delivery', 'Assets delivered ready for web, social, advertising, and print.'],
    ];
    $faqs = [
        ['1. How much does a professional photographer in Dubai charge?', 'Pricing depends on the service category, shoot duration, location, and whether videography is included. The fastest way to get an accurate quote is to share your shoot type and date through our booking form or by calling our team directly.'],
        ['2. Do you provide photography and videography together?', 'Yes. Every project can include combined photography and videography, handled by the same production crew rather than separate vendors, which keeps visual style, lighting, and color grading consistent.'],
        ['3. Do you only shoot in Dubai, or across the whole UAE?', 'We are based in Dubai and shoot across the entire UAE, including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain, for both studio and on-location productions.'],
        ['4. How fast is turnaround on edited photos and video?', 'A 48-hour turnaround is available on selected project types. Larger productions are scheduled with a clear delivery timeline agreed before the shoot.'],
        ['5. Is your team licensed and insured?', 'Yes. Dubai Fotographer operates as a fully licensed and insured production company, and all aerial work is conducted under the appropriate UAE drone licensing.'],
    ];
@endphp

@section('content')
    {{-- Hero --}}
    <section class="hero">
        <div class="hero-inner">
            <div class="hero-copy">
                <p class="eyebrow">Dubai · Abu Dhabi · All UAE</p>
                <h1>Professional Photography Services in Dubai,<br> serving all of the UAE</h1>
                <div class="hero-text">
                    <p>We provide professional Photography Services in Dubai, offering full-service photography &amp; video production for every Emirate since 2014.</p>
                </div>
                <div class="buttons">
                    <a class="btn" href="#quote">Request a quote @include('partials.icon', ['name' => 'arrow-right'])</a>
                    <a class="btn btn-outline" href="tel:%20+971522946276">Call / WhatsApp @include('partials.icon', ['name' => 'phone-alt'])</a>
                </div>
                <ul class="hero-trust">
                    <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
                    <li>@include('partials.icon', ['name' => 'check-circle']) Since 2014</li>
                    <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
                    <li>@include('partials.icon', ['name' => 'map-marker-alt']) All 7 Emirates</li>
                </ul>
            </div>

            {{-- 3-step quote form (styles and steps come from service.css / service.js) --}}
            <div class="svc-quote" id="quote">
                <p class="svc-quote-title">Get a free quote</p>
                <div class="svc-quote-text"><p>Three quick steps. We reply the same day.</p></div>
                <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a free quote">
                    @csrf
                    <input type="hidden" name="form_name" value="Home page quote">
                    <div class="svc-progress"><span></span></div>

                    <fieldset class="svc-step is-active">
                        <div class="svc-field">
                            <p class="svc-label">What do you need?</p>
                            <div class="svc-options">
                                <label class="svc-option"><input type="radio" name="service" value="Corporate event" required><span>Corporate event</span></label>
                                <label class="svc-option"><input type="radio" name="service" value="Product or e-commerce" required><span>Product or e-commerce</span></label>
                                <label class="svc-option"><input type="radio" name="service" value="Real estate or hotel" required><span>Real estate or hotel</span></label>
                                <label class="svc-option"><input type="radio" name="service" value="Portrait, family or wedding" required><span>Portrait, family or wedding</span></label>
                            </div>
                        </div>
                        <div class="svc-field">
                            <p class="svc-label">Coverage</p>
                            <div class="svc-options">
                                <label class="svc-option"><input type="radio" name="coverage" value="Photo and video" required><span>Photo and video</span></label>
                                <label class="svc-option"><input type="radio" name="coverage" value="Photo only" required><span>Photo only</span></label>
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
                            <input id="svc-venue" type="text" name="venue" placeholder="e.g. our studio, your office, a hotel">
                        </div>
                        <div class="svc-field">
                            <label class="svc-label" for="svc-emirate">Which emirate?</label>
                            <select id="svc-emirate" name="emirate">
                                <option value="Dubai">Dubai</option>
                                <option value="Abu Dhabi">Abu Dhabi</option>
                                <option value="Sharjah">Sharjah</option>
                                <option value="Another emirate">Another emirate</option>
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
                <div class="svc-quote-note"><p>No obligation. You get a written quote within one working day.</p></div>
            </div>
        </div>
    </section>

    {{-- Clients --}}
    <section class="section clients">
        <div class="container">
            <p class="title center">Our Clients</p>
            @foreach ([$clientsTop, $clientsBottom] as $row => $logos)
                <div class="swiper logo-carousel" @if ($row === 1) dir="rtl" @endif>
                    <div class="swiper-wrapper">
                        @foreach ($logos as [$file, $alt, $height])
                            <div class="swiper-slide">
                                <img src="%%BASE%%/assets/images/clients/{{ $file }}" width="100" height="{{ $height }}" alt="{{ $alt }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Services: one card per category, the links go to each service page --}}
    <section class="section section-dark services">
        <div class="container">
            <p class="eyebrow">- Our services</p>
            <h2 class="title light">Photography Services Across Multiple Industries</h2>
            <div class="service-cards">
                @foreach ($services as $service)
                    <article class="service-card">
                        <figure><img src="%%BASE%%/assets/images/{{ $service['image'] }}" alt="{{ $service['alt'] }}" loading="lazy"></figure>
                        <div class="service-card-body">
                            <h3>{{ $service['title'] }}</h3>
                            <ul class="service-links">
                                @foreach ($service['links'] as [$label, $url])
                                    <li><a href="%%BASE%%{{ $url }}">{{ $label }} @include('partials.icon', ['name' => 'arrow-right'])</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Portfolio --}}
    <section class="section portfolio">
        <div class="container">
            <div class="portfolio-inner">
                <p class="eyebrow">- Recent work</p>
                <p class="title portfolio-title">Our Portfolio</p>
                <div class="text portfolio-intro">Click any image to view it larger — a small sample of our Photography Services in Dubai and the range of shoots our team produces across the UAE.</div>
                <div class="portfolio-grid" data-lightbox>
                    @foreach ($portfolio as [$file, $alt])
                        <img src="%%BASE%%/assets/images/2026/07/{{ $file }}" alt="{{ $alt }}" loading="lazy">
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Stats + Google reviews: proof right after the work --}}
    <x-stats :items="$stats" />
    @include('partials.reviews')

    {{-- Since 2014 --}}
    <section class="section">
        <div class="container">
            <div class="split split-plain">
                <div class="split-media" style="background-image: url('%%BASE%%/assets/images/2026/07/Photography-videography-services-across-the-UAE-e1783166971694.jpg')"></div>
                <div class="split-body">
                    <p class="eyebrow">- Since 2014</p>
                    <h2 class="title">Photography &amp; Videography Services Across the UAE</h2>
                    <div class="text">Nobody searching for a photography studio is really just looking for someone who owns a camera. Whether it’s a business or an individual, what they actually want is a creative partner, someone who can take an idea and turn it into visuals that build trust and help with real business growth. That’s what we do at Dubai Fotographer. We provide professional Photography Services in Dubai, plus videography coverage across the UAE.</div>
                    <div class="text">We’re based in Dubai and serve all seven Emirates. As a fully licensed and insured production company, we keep everything under one roof: studio photography services, on-location production, <a href="%%BASE%%/ecommerce-brand-photography-in-uae">commercial photography</a>, professional videography services, <a href="%%BASE%%/cinematic-drone-photography-videography-uae-compliant-licensed">drone services</a>, <a href="%%BASE%%/corporate-event-photography-videography">event coverage,</a> and creative post-production. One team, one point of contact, from the first idea to the final file.</div>
                    <div class="buttons">
                        <a class="btn" href="#quote">Book Your Session @include('partials.icon', ['name' => 'arrow-right'])</a>
                        <a class="btn btn-outline" href="tel:%20+971522946276">{{ $phone }} @include('partials.icon', ['name' => 'phone-alt'])</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Industries --}}
    <x-mosaic class="section-sand" eyebrow="- Industries" title="Photography Studio Built for every industry<br> in the UAE" :tiles="[
        ['2026/07/IMGL0298-1.jpg', 'Fashion & beauty', 'Campaigns, lookbooks, and influencer content for designers, beauty brands, and personal labels across the UAE.'],
        ['2026/04/Multi-Platform-Live-Streaming.jpg', 'Corporate & business', 'Executive profles, conferences, annual reports, internal communications.'],
        ['2026/07/Real-estate-hospitality-e1783339326792.jpg', 'Hospitality', 'Interiors, food, guest experience.'],
        ['2026/07/Real-estate.jpg', 'Real estate', 'Architecture &amp; developments.'],
        ['2026/07/Retail-e-commerce-.jpg', 'Retail & e-commerce', 'Product &amp; lifestyle visuals.'],
    ]" />

    {{-- Founder quote --}}
    <x-founder>
        One team handles photography, videography, editing, drone and event coverage — no juggling vendors, no inconsistent style.
    </x-founder>

    {{-- Studio, production and permits: one tab per topic (tabs from service.css / service.js) --}}
    <section class="svc-section svc-grey home-tabs">
        <div class="svc-container">
            <p class="eyebrow">- One team, start to finish</p>
            <p class="svc-title home-tabs-title">How our photography studio works for you</p>
            <div class="svc-tabs" data-tabs>
                <div class="svc-tab-list" role="tablist">
                    <button type="button" class="svc-tab is-active" role="tab" aria-selected="true" aria-controls="home-panel-0" id="home-tab-0">
                        @include('partials.icon', ['name' => 'users'])
                        <span>End-to-end production</span>
                    </button>
                    <button type="button" class="svc-tab" role="tab" aria-selected="false" aria-controls="home-panel-1" id="home-tab-1">
                        @include('partials.icon', ['name' => 'shopping-bag'])
                        <span>Commercial production</span>
                    </button>
                    <button type="button" class="svc-tab" role="tab" aria-selected="false" aria-controls="home-panel-2" id="home-tab-2">
                        @include('partials.icon', ['name' => 'camera-retro'])
                        <span>Studio + on-location</span>
                    </button>
                    <button type="button" class="svc-tab" role="tab" aria-selected="false" aria-controls="home-panel-3" id="home-tab-3">
                        @include('partials.icon', ['name' => 'star'])
                        <span>Why choose us</span>
                    </button>
                    <button type="button" class="svc-tab" role="tab" aria-selected="false" aria-controls="home-panel-4" id="home-tab-4">
                        @include('partials.icon', ['name' => 'file-alt'])
                        <span>Permits &amp; approvals</span>
                    </button>
                </div>
                <div class="svc-tab-panels">
                    <div class="svc-panel is-active" role="tabpanel" id="home-panel-0" aria-labelledby="home-tab-0">
                        <img src="%%BASE%%/assets/images/2026/07/Gemini_Generated_Image_pfort8pfort8pfor-1-e1783415922230-720.webp" alt="Photography studio team in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h2>Photography Studio Offering End-to-End Creative Production</h2>
                            <div class="svc-panel-text"><p>Dubai Fotographer has been going for more than a decade now. Over that stretch, we’ve helped quite a mix of people get professional visual content tailored to their goals. Businesses, entrepreneurs, hospitality brands, real estate developers, event organizers, retailers, and loads of individuals who simply wanted the job done right.</p> <p>Abdul Rehman runs the company. With him are the photographers, videographers, drone operators, editors, and production specialists, and they all work as one accountable team, not a scattered group of freelancers who’ve never met. You’ll deal with a single point of contact who looks after your shoot from the very first planning call to final delivery. Because of that, the creative direction, the color grading and the quality standards don’t wander about from one project to the next.</p> <p>Our photography studio in Dubai is fully equipped for professional studio productions. But if the shoot can’t come to us, we’ll go to it. The mobile production teams spend a fair bit of time on the road, and they’re regularly over in Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.</p></div>
                            <div class="svc-panel-buttons">
                                <a class="svc-btn svc-btn-dark" href="#quote">Book Your Session</a>
                                <a class="svc-btn svc-btn-outline" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) {{ $phone }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="svc-panel" role="tabpanel" id="home-panel-1" aria-labelledby="home-tab-1">
                        <img src="%%BASE%%/assets/images/2026/07/Gemini_Generated_Image_5zsumq5zsumq5zsu-720.webp" alt="Commercial photography and video production in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h2>Commercial Photography Services &amp; Video Production for Modern Businesses</h2>
                            <div class="svc-panel-text"><p>Customers make up their minds about a brand pretty quickly, and a lot of that comes down to what they see. Visual content plays a critical role here. Good, high-quality imagery and video help businesses improve engagement and run stronger marketing campaigns, on their websites, on social media, in advertising and in their sales materials.</p> <p>Our team turns out visual assets for all kinds of jobs. There’s corporate branding and event coverage. There’s product marketing, through our dedicated <a href="%%BASE%%/product-photography-services-in-uae">product photography</a>. We do hospitality promotion for <a href="%%BASE%%/hotel-photography-service-in-uae">hotels</a> and <a href="%%BASE%%/restaurant-photography-service-in-uae">restaurants</a>, and <a href="%%BASE%%/real-estate-photography-videography-services-in-uae">real estate marketing</a> for developers and agents. On top of that, we support ongoing social media content needs and public relations campaigns, the kind where every post and every press release has to look just as good as the last one.</p> <p>We keep photography and videography in a single production workflow, and that’s what lets businesses hold onto consistent branding at every customer touchpoint. Funnily enough, plenty of clients first get in touch because they’re after a professional photographer in Dubai. It doesn’t take long before they see how useful it is to have a complete production partner who can handle both still and motion content, from start to finish.</p></div>
                            <div class="svc-panel-buttons">
                                <a class="svc-btn svc-btn-dark" href="#quote">Book Your Session</a>
                                <a class="svc-btn svc-btn-outline" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) {{ $phone }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="svc-panel" role="tabpanel" id="home-panel-2" aria-labelledby="home-tab-2">
                        <img src="%%BASE%%/assets/images/2026/07/Gemini_Generated_Image_eyla0eyla0eyla0e-720.webp" alt="Photography studio and on-location production in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h2>Photography Services Built for Creativity, Flexibility &amp; Results</h2>
                            <div class="svc-panel-text"><p>Every project needs a different approach, and we stopped pretending otherwise a long time ago. Some clients are happiest in a controlled studio environment, where every light sits exactly where we put it. Others need a full production crew to show up at a hotel, a corporate office, a construction site, a retail location, or an event venue, and now and then that’s all in the same week.</p> <p>The Dubai photography studio is well set up for it. We’ve got professional lighting systems, a good choice of backdrop solutions, high-resolution camera equipment, and advanced editing capabilities, which, between them, cover a wide range of photography services for commercial and creative productions. Then there are the on-location teams. They can turn more or less any environment into a working production space, a boardroom, a half-built villa, a hotel lobby at 6 am before the guests come down. It doesn’t matter much where the project takes place; the visual quality stays consistent.</p> <p>Some weeks it’s <a href="%%BASE%%/portrait-photography-in-uae">corporate portraits</a>. Other weeks it’s <a href="%%BASE%%/fashion-photography-in-uae">fashion campaigns</a>, real estate marketing, <a href="%%BASE%%/luxury-food-photography-for-restaurants-hotels-and-brands">luxury food photography,</a> or drone coverage. Whatever the assignment, we build our production approach around the client’s objectives, not the other way round, and we never try to force every project into the same formula.</p></div>
                            <div class="svc-panel-buttons">
                                <a class="svc-btn svc-btn-dark" href="#quote">Book Your Session</a>
                                <a class="svc-btn svc-btn-outline" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) {{ $phone }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="svc-panel" role="tabpanel" id="home-panel-3" aria-labelledby="home-tab-3">
                        <img src="%%BASE%%/assets/images/2026/07/Photography-videography-services-across-the-UAE-1024x683.webp" alt="Professional photography and videography services across the UAE" loading="lazy">
                        <div class="svc-panel-body">
                            <h2>Why Businesses Choose Us as Their Preferred Photography Studio</h2>
                            <div class="svc-panel-text"><p>A lot of businesses type “Photography Services in Dubai” into Google, thinking they just need someone with technical expertise. Then they actually start working with a photographer and realise that’s only part of it. What they needed all along was photography services from a team that gets branding, sticks to deadlines, understands what the commercial objectives are, and answers messages. Clear communication goes a surprisingly long way.</p> <p>As for why clients end up choosing us, a few reasons keep coming up. There’s more than a decade of industry experience behind everything we shoot. Photography and videography come from the same accountable team, so if something goes wrong, there’s no blaming another vendor. And we do studio and on-location production capabilities, with experienced photographers, videographers, and licensed drone operators on the job.</p><p>We’re fully licensed and insured. For projects that need it, the crew is bilingual in Arabic and English. On selected project types, there’s a 48-hour turnaround as well, and we don’t let the editing quality drop just to hit it.</p> <p>The bit we care about most, honestly, is the reason you’re doing the shoot. Is it about increasing bookings? Improving brand perception? Attracting customers, or documenting important milestones for the company? Once we know, we build the whole production around that outcome. You won’t get a one-size-fits-all package from us.</p></div>
                            <div class="svc-panel-buttons">
                                <a class="svc-btn svc-btn-dark" href="#quote">Book Your Session</a>
                                <a class="svc-btn svc-btn-outline" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) {{ $phone }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="svc-panel" role="tabpanel" id="home-panel-4" aria-labelledby="home-tab-4">
                        <img src="%%BASE%%/assets/images/2026/08/Photgraphy-services-in-Dubai.webp" alt="Photography and drone permits for shoots in Dubai" loading="lazy">
                        <div class="svc-panel-body">
                            <h2>How Our Photography Studio Handles Permits for Shoots Across the UAE</h2>
                            <div class="svc-panel-text"><p>Shooting in Dubai often means navigating permit requirements before a single frame is captured and it’s one of the most overlooked parts of planning a shoot. Our photography studio helps clients understand what’s needed depending on location and shoot type, including drone photography, which requires separate approval given UAE airspace regulations.</p> <p>Rather than leaving clients to figure this out alone, our team factors permit requirements into the planning stage, so shoot days aren’t delayed or derailed by last-minute paperwork. For drone coverage specifically, our crew is experienced in flying under the required approvals, giving clients aerial shots without the compliance risk of unauthorized flights. It’s one less thing to worry about when planning your shoot.</p></div>
                            <div class="svc-panel-buttons">
                                <a class="svc-btn svc-btn-dark" href="#quote">Book Your Session</a>
                                <a class="svc-btn svc-btn-outline" href="tel:+971522946276">@include('partials.icon', ['name' => 'phone-alt']) {{ $phone }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section class="section section-dark process">
        <div class="container">
            <p class="eyebrow">- How we work</p>
            <h2 class="title light">Our Creative Production Process</h2>
            <ol class="process-list">
                @foreach ($process as $i => [$step, $description])
                    <li class="process-step">
                        <span class="process-number">0<span data-count="{{ $i + 1 }}">{{ $i + 1 }}</span></span>
                        <div class="process-body">
                            <p class="process-title">{{ $step }}</p>
                            <p class="process-text">{{ $description }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- Locations --}}
    <x-coverage eyebrow="- Serving all seven Emirates">
        As a Dubai-based company, we proudly serve clients throughout the UAE, with production teams travelling across every Emirate, bringing full studio-grade lighting, camera, and drone equipment to every location.
    </x-coverage>

    {{-- FAQ --}}
    <x-faq class="faq-soft" :items="$faqs" />

    {{-- Booking --}}
    <x-booking class="booking-large" eyebrow="- BOOK YOUR SHOOT" title="Book your photography or videography session" :features="[
        ['plane', 'Licensed & insured', 'All productions are carried out by a fully licensed and insured<br> UAE photography and videography company.'],
        ['stopwatch', 'Fast response', 'Quotes typically sent within a few hours during business hours.'],
        ['map-pin', 'All 7 Emirates', 'We travel to you anywhere across Dubai, Abu Dhabi, and the wider UAE.'],
        ['mobile-alt', 'Prefer to talk?', 'Call +971 52 294 6276 or message us on WhatsApp.'],
    ]">
        <p>Tell us about your project and we’ll get back to you with<br> availability and pricing, usually within a few hours.</p>
    </x-booking>

    {{-- Map --}}
    <section class="section map">
        <div class="container">
            <p class="eyebrow center">- FIND US</p>
            <p class="title center">Visit our Dubai studio</p>
            <div class="text center map-intro">Based in Dubai and just as comfortable on location anywhere across the UAE — drop by the studio or have us come to you.</div>
            @include('partials.map')
        </div>
    </section>

    {{-- Call to action --}}
    <x-cta eyebrow="- Let's create something" title="Book Our Photography Services today">
        <p>Anywhere in Dubai, Abu Dhabi, or across the UAE</p>
    </x-cta>
@endsection
