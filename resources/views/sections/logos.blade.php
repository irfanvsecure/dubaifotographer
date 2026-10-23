{{-- logos: client logo carousels; row 2 scrolls the other way --}}
<section class="section clients">
    <div class="container">
        <p class="title center">{{ $s['heading'] }}</p>
        @foreach (collect($s['items'])->groupBy(fn ($logo) => (int) ($logo['row'] ?? 1))->sortKeys()->values() as $row => $logos)
            <div class="swiper logo-carousel" @if ($row === 1) dir="rtl" @endif>
                <div class="swiper-wrapper">
                    @foreach ($logos as $logo)
                        <div class="swiper-slide">
                            <img src="%%BASE%%/assets/images/{{ $logo['image'] }}" width="100" height="{{ $row === 0 ? 70 : 100 }}" alt="{{ $logo['alt'] }}">
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>
