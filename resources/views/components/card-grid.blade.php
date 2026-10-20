{{--
    One row of white image cards (4 across on desktop); place inside <x-panel>.
    cards: [image, alt, eyebrow, title, text (HTML)]
--}}
@props(['cards'])
<div {{ $attributes->merge(['class' => 'card-grid']) }}>
    @foreach ($cards as [$image, $alt, $cardEyebrow, $cardTitle, $text])
        <article class="grid-card">
            <img src="%%BASE%%/assets/images/{{ $image }}" alt="{{ $alt }}" loading="lazy">
            <div class="grid-card-body">
                <p class="eyebrow">{{ $cardEyebrow }}</p>
                <h3>{{ $cardTitle }}</h3>
                <div class="text">{!! $text !!}</div>
            </div>
        </article>
    @endforeach
</div>
