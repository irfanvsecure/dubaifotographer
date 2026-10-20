{{--
    Heading + vertical list of rows (thumbnail, title, short text) separated by thin lines; dark background.
    items: [image, alt, title, text]
--}}
@props(['eyebrow', 'title', 'items'])
<section {{ $attributes->merge(['class' => 'section section-dark image-list-section']) }}>
    <div class="container">
        <p class="eyebrow">{{ $eyebrow }}</p>
        <h2 class="title">{{ $title }}</h2>
        <ul class="image-list">
            @foreach ($items as [$image, $alt, $itemTitle, $text])
                <li class="image-list-item">
                    <img src="%%BASE%%/assets/images/{{ $image }}" alt="{{ $alt }}" loading="lazy">
                    <div class="image-list-body">
                        <h3>{{ $itemTitle }}</h3>
                        <p>{{ $text }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
