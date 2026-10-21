{{--
    Alternating photo / text rows (photo left, then right, ...).
    rows: [image, eyebrow, title, text (may contain HTML)]
--}}
@props(['eyebrow', 'title', 'rows'])
<section {{ $attributes->merge(['class' => 'section section-sand feature-section']) }}>
    <div class="container">
        <div class="feature-head">
            <p class="eyebrow">{{ $eyebrow }}</p>
            <h2 class="title">{{ $title }}</h2>
        </div>
        <div class="feature-list">
            @foreach ($rows as [$image, $rowEyebrow, $rowTitle, $text])
                <div class="feature-row">
                    <figure class="feature-media">
                        <img src="%%BASE%%/assets/images/{{ $image }}" alt="{{ $rowTitle }}" loading="lazy">
                    </figure>
                    <div class="feature-body">
                        <p class="eyebrow">{{ $rowEyebrow }}</p>
                        <h3>{{ $rowTitle }}</h3>
                        <div class="text">{!! $text !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
