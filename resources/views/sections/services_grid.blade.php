{{-- services_grid: every service grouped in cards on a dark band (services-overview.css) --}}
<section class="section section-dark svo-services" id="all-services">
    <div class="container">
        <div class="svo-head">
            @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
            <h3 class="title light">{{ $s['heading'] }}</h3>
            @if (! empty($s['text']))<p class="text light svo-head-text">{{ $s['text'] }}</p>@endif
        </div>

        <div class="svo-cards">
            @foreach ($s['cards'] as $card)
                <article class="svo-card">
                    <figure><img src="%%BASE%%/assets/images/{{ $card['image'] }}" alt="{{ $card['alt'] }}" loading="lazy"></figure>
                    <div class="svo-card-body">
                        <p class="svo-card-title">{{ $card['title'] }}</p>
                        <ul class="svo-links">
                            @foreach ($card['links'] as $link)
                                <li><a href="{{ \App\Support\Sections\SectionTypes::href($link['link']) }}">{{ $link['text'] }} @include('partials.icon', ['name' => 'arrow-right'])</a></li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="services-book">
            <p>{{ $s['book_text'] }}</p>
            <div class="buttons">
                <a class="btn" href="%%BASE%%/booking-form">Book Your Session @include('partials.icon', ['name' => 'arrow-right'])</a>
                <a class="btn btn-outline svo-btn-ghost" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) WhatsApp us</a>
            </div>
        </div>
    </div>
</section>
