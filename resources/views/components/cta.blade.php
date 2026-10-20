{{-- Closing call to action on black --}}
@props(['eyebrow', 'title', 'book' => 'Book Your Session', 'phone' => '+971 52 2946276'])
<section {{ $attributes->merge(['class' => 'section section-black cta']) }}>
    <div class="container">
        <div class="cta-box">
            <p class="eyebrow center">{{ $eyebrow }}</p>
            <h2 class="cta-title">{{ $title }}</h2>
            <div class="text center light cta-text">{{ $slot }}</div>
        </div>
        <x-cta-buttons class="cta-buttons" :book="$book" :phone="$phone" />
    </div>
</section>
