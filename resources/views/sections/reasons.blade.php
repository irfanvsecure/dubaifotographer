{{-- reasons: icon cards (about.css) --}}
<section class="section section-cream ab-why">
    <div class="container">
        <div class="ab-head">
            @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
            <h2 class="title">{{ $s['heading'] }}</h2>
        </div>
        <div class="ab-reasons">
            @foreach ($s['items'] as $item)
                <div class="ab-reason">
                    <span class="ab-reason-icon">@include('partials.icon', ['name' => $item['icon']])</span>
                    <h3>{{ $item['title'] }}</h3>
                    <p>{{ $item['text'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
