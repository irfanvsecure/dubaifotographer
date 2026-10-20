{{-- Rounded photo (img element) next to a text column; slot = text column content --}}
@props(['image', 'alt' => ''])
<div {{ $attributes->merge(['class' => 'media-row']) }}>
    <img class="media-row-image" src="%%BASE%%/assets/images/{{ $image }}" alt="{{ $alt }}" loading="lazy">
    <div class="split-body">
        {{ $slot }}
    </div>
</div>
