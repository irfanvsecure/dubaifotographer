{{--
    Content of a "Photographer in <emirate>" page. Each location view passes $page:
    name, hero[image, eyebrow, title, text], intro[image, alt, eyebrow, title, paragraphs],
    services[eyebrow, title, text, items: [image, alt, url, title, text]],
    spots[eyebrow, title, text, items: [title, text]], permits[eyebrow, title, paragraphs, image, alt],
    faq[title, items: [question, answer]], quote[eyebrow, title, paragraphs]
    Paragraphs may contain HTML.
--}}
@php
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

<section class="loc-hero" style="background-image: url('%%BASE%%/assets/images/{{ $page['hero']['image'] }}')">
    <div class="loc-hero-inner">
        <p class="loc-eyebrow">{{ $page['hero']['eyebrow'] }}</p>
        <h1>{{ $page['hero']['title'] }}</h1>
        <div class="loc-text"><p>{{ $page['hero']['text'] }}</p></div>
        @include('partials.location-buttons')
        <ul class="loc-trust">
            <li>@include('partials.icon', ['name' => 'star']) 5.0 average client rating</li>
            <li>@include('partials.icon', ['name' => 'check-circle']) Since 2014</li>
            <li>@include('partials.icon', ['name' => 'check-circle']) Licensed &amp; insured</li>
        </ul>
    </div>
</section>

<section class="section loc-section">
    <div class="container">
        <div class="loc-row">
            <div class="loc-col-image">
                <img class="loc-image" src="%%BASE%%/assets/images/{{ $page['intro']['image'] }}" alt="{{ $page['intro']['alt'] }}">
            </div>
            <div class="loc-col-text">
                <p class="loc-eyebrow">{{ $page['intro']['eyebrow'] }}</p>
                <h2 class="loc-title">{{ $page['intro']['title'] }}</h2>
                @foreach ($page['intro']['paragraphs'] as $paragraph)
                    <div class="loc-text"><p>{!! $paragraph !!}</p></div>
                @endforeach
                @include('partials.location-buttons')
            </div>
        </div>
    </div>
</section>

<section class="section section-cream loc-section">
    <div class="container">
        <p class="loc-eyebrow">{{ $page['services']['eyebrow'] }}</p>
        <h2 class="loc-title">{{ $page['services']['title'] }}</h2>
        <div class="loc-text loc-intro"><p>{{ $page['services']['text'] }}</p></div>
        <div class="loc-grid">
            @foreach ($page['services']['items'] as [$image, $alt, $url, $title, $text])
                <article class="loc-card loc-card-4">
                    <a href="%%BASE%%{{ $url }}"><img src="%%BASE%%/assets/images/{{ $image }}" alt="{{ $alt }}" loading="lazy"></a>
                    <h3><a href="%%BASE%%{{ $url }}">{!! $title !!}</a></h3>
                    <div class="loc-text loc-text-small"><p>{{ $text }}</p></div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section section-sand loc-section">
    <div class="container">
        <p class="loc-eyebrow">{{ $page['spots']['eyebrow'] }}</p>
        <h2 class="loc-title">{{ $page['spots']['title'] }}</h2>
        <div class="loc-text loc-intro"><p>{{ $page['spots']['text'] }}</p></div>
        <div class="loc-grid">
            @foreach ($page['spots']['items'] as [$title, $text])
                <article class="loc-card loc-card-3">
                    <span class="loc-card-icon">@include('partials.icon', ['name' => 'map-marker-alt'])</span>
                    <h3>{{ $title }}</h3>
                    <div class="loc-text loc-text-small"><p>{{ $text }}</p></div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section loc-section">
    <div class="container">
        <div class="loc-row">
            <div class="loc-col-text">
                <p class="loc-eyebrow">{{ $page['permits']['eyebrow'] }}</p>
                <h2 class="loc-title">{{ $page['permits']['title'] }}</h2>
                @foreach ($page['permits']['paragraphs'] as $paragraph)
                    <div class="loc-text"><p>{!! $paragraph !!}</p></div>
                @endforeach
            </div>
            <div class="loc-col-image">
                <img class="loc-image" src="%%BASE%%/assets/images/{{ $page['permits']['image'] }}" alt="{{ $page['permits']['alt'] }}" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="section section-cream loc-section">
    <div class="container">
        <p class="loc-eyebrow">- Recent work</p>
        <h2 class="loc-title">Recent Work by Our Team</h2>
        <div class="loc-text loc-intro"><p>A selection of images from recent shoots by Dubai Fotographer across the UAE.</p></div>
        <div class="loc-gallery" data-lightbox>
            @foreach ($gallery as [$file, $height, $alt])
                <img src="%%BASE%%/assets/images/2026/07/{{ $file }}-768x{{ $height }}.webp" data-full="%%BASE%%/assets/images/2026/07/{{ $file }}.webp" width="768" height="{{ $height }}" alt="{{ $alt }}" loading="lazy">
            @endforeach
        </div>
    </div>
</section>

<x-faq class="loc-section" :dark="false" title="{{ $page['faq']['title'] }}" :items="$page['faq']['items']" />

<section class="section section-sand loc-section">
    <div class="container">
        <div class="loc-row loc-quote">
            <div class="loc-col-info">
                <p class="loc-eyebrow">{{ $page['quote']['eyebrow'] }}</p>
                <h2 class="loc-title">{{ $page['quote']['title'] }}</h2>
                @foreach ($page['quote']['paragraphs'] as $paragraph)
                    <div class="loc-text"><p>{!! $paragraph !!}</p></div>
                @endforeach
            </div>
            <div class="loc-form-box">
                <h3>Tell us about your shoot</h3>
                @include('partials.quote-form', ['location' => $page['name']])
            </div>
        </div>
    </div>
</section>
