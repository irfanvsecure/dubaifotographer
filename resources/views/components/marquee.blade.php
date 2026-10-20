{{-- Black scrolling text strip. text: the line shown (repeated twice for a seamless loop) --}}
@props(['text'])
<section {{ $attributes->merge(['class' => 'marquee-strip']) }}>
    <div class="marquee-track">
        <span>{{ $text }}</span>
        <span aria-hidden="true">{{ $text }}</span>
    </div>
</section>
