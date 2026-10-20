{{--
    Industries mosaic: one large tile, one wide tile and three small tiles.
    tiles: [image, title, text (HTML)] in this order: large, wide, small, small, small
--}}
@props(['eyebrow', 'title', 'tiles'])
@php
    [$large, $wide, $small] = [$tiles[0], $tiles[1], array_slice($tiles, 2)];
@endphp
<section {{ $attributes->merge(['class' => 'section mosaic-section']) }}>
    <div class="container">
        <div class="mosaic-head">
            <p class="eyebrow">{{ $eyebrow }}</p>
            <h2 class="title">{!! $title !!}</h2>
        </div>
        <div class="mosaic">
            <div class="mosaic-tile mosaic-large" style="background-image: url('%%BASE%%/assets/images/{{ $large[0] }}')">
                <p class="mosaic-title">{{ $large[1] }}</p>
                <div class="mosaic-text">{!! $large[2] !!}</div>
            </div>
            <div class="mosaic-side">
                <div class="mosaic-tile mosaic-wide" style="background-image: url('%%BASE%%/assets/images/{{ $wide[0] }}')">
                    <p class="mosaic-title">{{ $wide[1] }}</p>
                    <div class="mosaic-text">{!! $wide[2] !!}</div>
                </div>
                <div class="mosaic-row">
                    @foreach ($small as [$image, $tileTitle, $text])
                        <div class="mosaic-tile mosaic-small" style="background-image: url('%%BASE%%/assets/images/{{ $image }}')">
                            <p class="mosaic-title">{{ $tileTitle }}</p>
                            <div class="mosaic-text">{!! $text !!}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
