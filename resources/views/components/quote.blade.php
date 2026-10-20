{{-- Founder quote next to his photo --}}
@props(['image' => '2026/06/WhatsApp-Image-2026-06-24-at-1.09.06-PM.jpeg', 'author' => '– Abdul Rehman'])
<section {{ $attributes->merge(['class' => 'section quote-section']) }}>
    <div class="container">
        <div class="split quote-split">
            <div class="split-media" style="background-image: url('%%BASE%%/assets/images/{{ $image }}')"></div>
            <div class="split-body">
                <div class="quote-text">{{ $slot }}</div>
                <div class="text"><p><strong>{{ $author }}</strong></p></div>
            </div>
        </div>
    </div>
</section>
