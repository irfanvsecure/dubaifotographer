{{-- services_intro: intro text beside the "plan your shoot" card (services-overview.css) --}}
<section class="section services-page">
    <div class="container">
        <div class="services-intro">
            <div class="services-intro-copy">
                @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
                <h2 class="title">{{ $s['heading'] }}</h2>
                <div class="text">
                    {!! $s['body'] !!}
                </div>
            </div>

            <aside class="services-intro-card">
                <p class="svo-card-label">{{ $s['card_label'] }}</p>
                <ul class="svo-facts">
                    @foreach ($s['facts'] as $fact)
                        <li><strong>{{ $fact['number'] }}</strong> {{ $fact['text'] }}</li>
                    @endforeach
                </ul>
                <div class="services-buttons">
                    <a class="btn" href="%%BASE%%/booking-form">Book Your Session @include('partials.icon', ['name' => 'arrow-right'])</a>
                    <a class="btn btn-outline" href="tel:%20+971522946276">+971 52 2946276 @include('partials.icon', ['name' => 'phone-alt'])</a>
                </div>
                <a class="svo-wa" href="https://wa.me/971522946276" target="_blank" rel="noopener">@include('partials.icon', ['name' => 'whatsapp']) {{ $s['whatsapp_text'] }}</a>
            </aside>
        </div>
    </div>
</section>
