{{--
    Content of a "Photographer in <emirate>" page (styles: assets/css/pages/location-page.css). Each location view passes $page:
    name, hero[image, eyebrow, title, text], intro[image, alt, eyebrow, title, paragraphs],
    services[eyebrow, title, text, items: [image, alt, url, title, text]],
    spots[eyebrow, title, text, items: [title, text]], permits[eyebrow, title, paragraphs, image, alt],
    faq[title, items: [question, answer]], quote[eyebrow, title, paragraphs]
    Paragraphs may contain HTML.

    Layout: quote form in the hero (above the fold), proof strip, intro, services, how booking works,
    shoot locations, recent work, Google reviews, permits, FAQ, closing call to action.
--}}
@php
    $contact = \App\Models\Setting::get('contact', []) + ['phone' => '+971 52 294 6276', 'phone_link' => '+971522946276', 'whatsapp' => '971522946276'];
    $whatsapp = 'https://wa.me/'.$contact['whatsapp'].'?text='.rawurlencode("Hi Dubai Fotographer, I'd like a quote for a shoot in {$page['name']}. Date: ");

    // [file, height of the 768px wide version, alt]
    $gallery = [
        ['DSC001721-1', 512, 'Recent photography work by Dubai Fotographer'],
        ['MANI9728-1-1', 1152, 'Recent photoshoot by Dubai Fotographer in the UAE'],
        ['IMG_8724-1-2', 1152, 'Professional photography by Dubai Fotographer team'],
        ['IMG_94671-2', 512, 'Photoshoot example from Dubai Fotographer portfolio'],
        ['IMGL0257-1-1', 1152, 'UAE photography project by Dubai Fotographer'],
        ['IMGL9434-1-1', 1152, 'Recent client shoot by Dubai Fotographer'],
    ];
@endphp

{{-- Hero: the pitch on the left, the quote form on the right --}}
<section class="lp-hero" style="background-image: url('%%BASE%%/assets/images/{{ $page['hero']['image'] }}')">
    <div class="lp-hero-inner">
        <div class="lp-hero-copy">
            <p class="lp-badge">@include('partials.icon', ['name' => 'map-marker-alt']) {{ $page['hero']['eyebrow'] }}</p>
            <h1>{{ $page['hero']['title'] }}</h1>
            <p class="lp-hero-text">{{ $page['hero']['text'] }}</p>
            <div class="lp-actions">
                <a class="btn" href="#quote">Get a Free Quote @include('partials.icon', ['name' => 'arrow-right'])</a>
                <a class="btn lp-btn-ghost" href="{{ $whatsapp }}" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp Us</a>
            </div>
            <ul class="lp-proof">
                <li><span class="lp-stars" aria-hidden="true">@for ($i = 0; $i < 5; $i++)@include('partials.icon', ['name' => 'star'])@endfor</span> 5.0 average client rating</li>
                <li>@include('partials.icon', ['name' => 'check-circle']) Since 2014</li>
                <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
            </ul>
        </div>

        <div class="lp-quote" id="quote">
            <p class="lp-quote-title">Get a free quote in {{ $page['name'] }}</p>
            <p class="lp-quote-text">Send the date and what you need. We reply the same day with availability and a clear price.</p>
            @include('partials.quote-form', ['location' => $page['name']])
            <p class="lp-quote-note">@include('partials.icon', ['name' => 'check-circle']) No obligation · Prefer to talk? <a href="tel:{{ $contact['phone_link'] }}">{{ $contact['phone'] }}</a></p>
        </div>
    </div>
</section>

{{-- Proof strip --}}
<section class="lp-stats" aria-label="Why clients book us">
    <ul class="lp-stats-list">
        <li><strong>2014</strong><span>Shooting across the UAE since</span></li>
        <li><strong>5.0</strong><span>Average client rating</span></li>
        <li><strong>7</strong><span>Emirates covered by one crew</span></li>
        <li><strong>Same day</strong><span>Reply with your quote</span></li>
    </ul>
</section>

{{-- Intro --}}
<section class="section lp-section">
    <div class="container lp-split">
        <figure class="lp-media">
            <img src="%%BASE%%/assets/images/{{ $page['intro']['image'] }}" alt="{{ $page['intro']['alt'] }}">
            <figcaption class="lp-media-card">
                <p class="lp-media-card-title">Your {{ $page['name'] }} crew</p>
                <ul>
                    <li>@include('partials.icon', ['name' => 'check-circle']) Arabic &amp; English speaking</li>
                    <li>@include('partials.icon', ['name' => 'check-circle']) Studio or on location</li>
                    <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
                </ul>
            </figcaption>
        </figure>
        <div class="lp-copy">
            <p class="lp-eyebrow">{{ $page['intro']['eyebrow'] }}</p>
            <h2 class="lp-title">{{ $page['intro']['title'] }}</h2>
            <div class="lp-text">
                @foreach ($page['intro']['paragraphs'] as $paragraph)
                    <p>{!! $paragraph !!}</p>
                @endforeach
            </div>
            <a class="lp-link" href="#quote">Check availability for your date @include('partials.icon', ['name' => 'arrow-right'])</a>
        </div>
    </div>
</section>

{{-- Services --}}
<section class="section section-cream lp-section">
    <div class="container">
        <div class="lp-head">
            <div>
                <p class="lp-eyebrow">{{ $page['services']['eyebrow'] }}</p>
                <h2 class="lp-title">{{ $page['services']['title'] }}</h2>
                <p class="lp-lead">{{ $page['services']['text'] }}</p>
            </div>
            <a class="btn btn-outline" href="%%BASE%%/services">All services @include('partials.icon', ['name' => 'arrow-right'])</a>
        </div>
        <div class="lp-services">
            @foreach ($page['services']['items'] as [$image, $alt, $url, $title, $text])
                <article class="lp-service">
                    <a class="lp-service-image" href="%%BASE%%{{ $url }}" tabindex="-1" aria-hidden="true"><img src="%%BASE%%/assets/images/{{ $image }}" alt="{{ $alt }}" loading="lazy"></a>
                    <div class="lp-service-body">
                        <h3><a href="%%BASE%%{{ $url }}">{!! $title !!}</a></h3>
                        <p>{{ $text }}</p>
                        <a class="lp-service-more" href="%%BASE%%{{ $url }}" aria-label="View {{ strip_tags(html_entity_decode($title)) }}">View service @include('partials.icon', ['name' => 'arrow-right'])</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- How booking works --}}
<section class="section lp-section">
    <div class="container">
        <div class="lp-head lp-head-center">
            <div>
                <p class="lp-eyebrow">- How booking works</p>
                <h2 class="lp-title">Your {{ $page['name'] }} shoot in three steps</h2>
            </div>
        </div>
        <ol class="lp-steps">
            <li>
                <span class="lp-step-number">1</span>
                <h3>Send your brief</h3>
                <p>Tell us the date, the location in {{ $page['name'] }} and what you need photographed or filmed.</p>
            </li>
            <li>
                <span class="lp-step-number">2</span>
                <h3>Get a clear quote</h3>
                <p>We reply the same day with crew availability and a written price. Nothing is booked until you confirm.</p>
            </li>
            <li>
                <span class="lp-step-number">3</span>
                <h3>We shoot and deliver</h3>
                <p>Our crew arrives early, plans the shots with you and delivers the edited gallery on the agreed date.</p>
            </li>
        </ol>
        <div class="lp-center">
            <a class="btn" href="#quote">Start with a free quote @include('partials.icon', ['name' => 'arrow-right'])</a>
        </div>
    </div>
</section>

{{-- Where we shoot --}}
<section class="section section-sand lp-section">
    <div class="container lp-spots">
        <div class="lp-spots-intro">
            <p class="lp-eyebrow">{{ $page['spots']['eyebrow'] }}</p>
            <h2 class="lp-title">{{ $page['spots']['title'] }}</h2>
            <p class="lp-lead">{{ $page['spots']['text'] }}</p>
            <p class="lp-spots-note">Have a different place in mind? Tell us in your quote request and we will check access for you.</p>
        </div>
        <ol class="lp-spot-list">
            @foreach ($page['spots']['items'] as [$title, $text])
                <li>
                    <span class="lp-spot-pin">@include('partials.icon', ['name' => 'map-marker-alt'])</span>
                    <div>
                        <h3>{{ $title }}</h3>
                        <p>{{ $text }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>

{{-- Recent work --}}
<section class="section lp-section">
    <div class="container">
        <div class="lp-head">
            <div>
                <p class="lp-eyebrow">- Recent work</p>
                <h2 class="lp-title">Recent Work by Our Team</h2>
                <p class="lp-lead">A selection of images from recent shoots by Dubai Fotographer across the UAE.</p>
            </div>
            <a class="btn btn-outline" href="%%BASE%%/portfolio">View portfolio @include('partials.icon', ['name' => 'arrow-right'])</a>
        </div>
        <div class="lp-gallery" data-lightbox>
            @foreach ($gallery as [$file, $height, $alt])
                <img src="%%BASE%%/assets/images/2026/07/{{ $file }}-768x{{ $height }}.webp" data-full="%%BASE%%/assets/images/2026/07/{{ $file }}.webp" width="768" height="{{ $height }}" alt="{{ $alt }}" loading="lazy">
            @endforeach
        </div>
    </div>
</section>

@include('partials.reviews', ['class' => 'lp-reviews'])

{{-- Permits and travel --}}
<section class="section section-cream lp-section">
    <div class="container lp-split lp-split-reverse">
        <figure class="lp-media lp-media-tall">
            <img src="%%BASE%%/assets/images/{{ $page['permits']['image'] }}" alt="{{ $page['permits']['alt'] }}" loading="lazy">
        </figure>
        <div class="lp-copy">
            <p class="lp-eyebrow">{{ $page['permits']['eyebrow'] }}</p>
            <h2 class="lp-title">{{ $page['permits']['title'] }}</h2>
            <div class="lp-text">
                @foreach ($page['permits']['paragraphs'] as $paragraph)
                    <p>{!! $paragraph !!}</p>
                @endforeach
            </div>
            <p class="lp-callout">@include('partials.icon', ['name' => 'check-circle']) We check what your location needs and arrange it with you before the shoot date.</p>
        </div>
    </div>
</section>

<x-faq class="lp-section" :dark="false" title="{{ $page['faq']['title'] }}" :items="$page['faq']['items']" />

{{-- Closing call to action --}}
<section class="section section-black lp-cta">
    <div class="container lp-cta-inner">
        <div class="lp-cta-copy">
            <p class="lp-eyebrow">{{ $page['quote']['eyebrow'] }}</p>
            <h2 class="lp-title">{{ $page['quote']['title'] }}</h2>
            <div class="lp-text">
                @foreach ($page['quote']['paragraphs'] as $paragraph)
                    <p>{!! $paragraph !!}</p>
                @endforeach
            </div>
        </div>
        <div class="lp-cta-actions">
            <a class="btn" href="#quote">Get a Free Quote @include('partials.icon', ['name' => 'arrow-right'])</a>
            <a class="btn lp-btn-ghost" href="{{ $whatsapp }}" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp Us</a>
            <a class="lp-cta-phone" href="tel:{{ $contact['phone_link'] }}">@include('partials.icon', ['name' => 'phone-alt']) {{ $contact['phone'] }}</a>
        </div>
    </div>
</section>
