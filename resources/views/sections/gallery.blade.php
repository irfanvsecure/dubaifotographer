{{-- gallery: photo grid, images open larger on click --}}
<section class="section portfolio">
    <div class="container">
        <div class="portfolio-inner">
            @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
            <p class="title portfolio-title">{{ $s['heading'] }}</p>
            @if (! empty($s['text']))<div class="text portfolio-intro">{!! $s['text'] !!}</div>@endif
            <div class="portfolio-grid" data-lightbox>
                @foreach ($s['images'] as $image)
                    <img src="%%BASE%%/assets/images/{{ $image['image'] }}" alt="{{ $image['alt'] }}" loading="lazy">
                @endforeach
            </div>
        </div>
    </div>
</section>
