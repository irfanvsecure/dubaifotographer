{{-- Image + text row. image = background image path under assets/images; slot = paragraphs --}}
@props(['image', 'eyebrow' => null, 'title', 'reverse' => false, 'buttons' => true])
<div {{ $attributes->merge(['class' => 'split'.($reverse ? ' split-reverse' : '')]) }}>
    <div class="split-media" style="background-image: url('%%BASE%%/assets/images/{{ $image }}')"></div>
    <div class="split-body">
        @if ($eyebrow)
            <p class="eyebrow">{{ $eyebrow }}</p>
        @endif
        <h2 class="title">{{ $title }}</h2>
        {{ $slot }}
        @if ($buttons)
            <x-cta-buttons />
        @endif
    </div>
</div>
