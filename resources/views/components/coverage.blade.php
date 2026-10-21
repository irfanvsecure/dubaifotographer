{{-- "Based in Dubai, serving all of the UAE" block with location cards (other Emirates) --}}
@props(['eyebrow' => '- Coverage', 'title' => 'Based in Dubai, serving all of the UAE'])
@php
    $places = [
        ['Abu Dhabi', '/photographer-in-abu-dhabi'],
        ['Sharjah', '/locations/photographer-in-sharjah'],
        ['Ajman', '/locations/photographer-in-ajman'],
        ['Ras Al Khaimah', '/locations/photographer-in-ras-al-khaimah'],
        ['Umm Al Quwain', '/locations/photographer-in-umm-al-quwain'],
        ['Fujairah', '/locations/photographer-in-fujairah'],
        ['Al Ain', '/locations/photographer-in-al-ain'],
    ];
@endphp
<section {{ $attributes->merge(['class' => 'section section-cream coverage']) }}>
    <div class="container">
        <p class="eyebrow">{{ $eyebrow }}</p>
        <h2 class="title">{{ $title }}</h2>
        <div class="text coverage-intro">
            <p>{{ $slot }}</p>
        </div>
        <div class="coverage-grid">
            @foreach ($places as [$name, $url])
                <{{ $url ? 'a' : 'div' }} class="coverage-card" @if ($url) href="%%BASE%%{{ $url }}" @endif>
                    <span class="coverage-icon">@include('partials.icon', ['name' => 'map-marker-alt'])</span>
                    <h3>{{ $name }}</h3>
                </{{ $url ? 'a' : 'div' }}>
            @endforeach
        </div>
    </div>
</section>
