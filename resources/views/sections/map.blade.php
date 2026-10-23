{{-- map: studio location with the click-to-load Google map --}}
<section class="section map">
    <div class="container">
        @if (! empty($s['eyebrow']))<p class="eyebrow center">{{ $s['eyebrow'] }}</p>@endif
        <p class="title center">{{ $s['heading'] }}</p>
        <div class="text center map-intro">{{ $s['text'] }}</div>
        @include('partials.map')
    </div>
</section>
