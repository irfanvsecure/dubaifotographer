{{-- svc_gallery: recent work with filter buttons --}}
<section class="svc-section">
    <div class="svc-container">
        <div class="svc-gallery-head">
            <p class="svc-gallery-title">{{ $s['title'] }}</p>
            @if (! empty($s['text']))<p class="svc-text">{{ $s['text'] }}</p>@endif
        </div>
        <div class="svc-gallery" data-gallery>
            <div class="svc-filters" aria-label="Gallery filter">
                <button type="button" class="is-active" data-filter="all">All</button>
                @foreach ($s['filters'] as $i => $filter)
                    <button type="button" data-filter="{{ $i }}">{{ $filter }}</button>
                @endforeach
            </div>
            <div class="svc-gallery-grid" data-lightbox>
                @foreach ($s['images'] as $image)
                    <img src="%%BASE%%/assets/images/{{ $image['image'] }}" data-full="%%BASE%%/assets/images/{{ $image['full'] ?? $image['image'] }}" data-tag="{{ $image['filter'] }}" alt="{{ $image['alt'] }}" loading="lazy">
                @endforeach
            </div>
        </div>
    </div>
</section>
