{{-- service_categories: one card per category, the links go to each service page --}}
<section class="section section-dark services">
    <div class="container">
        @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
        <h2 class="title light">{{ $s['heading'] }}</h2>
        <div class="service-cards">
            @foreach ($s['cards'] as $card)
                <article class="service-card">
                    <figure><img src="%%BASE%%/assets/images/{{ $card['image'] }}" alt="{{ $card['alt'] }}" loading="lazy"></figure>
                    <div class="service-card-body">
                        <h3>{{ $card['title'] }}</h3>
                        <ul class="service-links">
                            @foreach ($card['links'] as $link)
                                <li><a href="{{ \App\Support\Sections\SectionTypes::href($link['link']) }}">{{ $link['text'] }} @include('partials.icon', ['name' => 'arrow-right'])</a></li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
