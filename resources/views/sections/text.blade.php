{{-- text: eyebrow, heading and body --}}
<section class="section section-text">
    <div class="container">
        @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
        <h2 class="title">{{ $s['heading'] }}</h2>
        <div class="text">{!! $s['body'] !!}</div>
    </div>
</section>
