{{-- svc_coverage: emirates served, a card per location page --}}
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
<section class="svc-section svc-cream">
    <div class="svc-container svc-coverage">
        <div class="svc-coverage-copy">
            <p class="svc-badge">@include('partials.icon', ['name' => 'map-marker-alt']) {{ $s['badge'] }}</p>
            <h2 class="svc-title">{{ $s['heading'] }}</h2>
            <p class="svc-text">{{ $s['text'] }}</p>
            @if (! empty($s['extra']))<p class="svc-text">{!! $s['extra'] !!}</p>@endif
        </div>
        <div class="svc-places">
            @foreach ($places as [$name, $url])
                <a class="svc-place" href="%%BASE%%{{ $url }}">
                    <span class="svc-place-icon">@include('partials.icon', ['name' => 'map-marker-alt'])
                    </span>
                    <span class="svc-place-name">{{ $name }}</span>
                </a>
            @endforeach
            <a class="svc-place svc-place-other" href="#quote">
                <span class="svc-place-name">Event somewhere else?<small>Send the venue and we will confirm</small></span>
                @include('partials.icon', ['name' => 'arrow-right'])
            </a>
        </div>
    </div>
</section>
