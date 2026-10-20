{{-- Booking block: intro + feature list on the left, booking form card on the right. features: [icon, title, text] --}}
@props(['eyebrow' => '- Book your shoot', 'title', 'features'])
<section {{ $attributes->merge(['class' => 'section booking']) }}>
    <div class="container">
        <div class="booking-row">
            <div class="booking-info">
                <p class="eyebrow">{{ $eyebrow }}</p>
                <p class="booking-title">{{ $title }}</p>
                <div class="text">{{ $slot }}</div>
                @foreach ($features as [$icon, $featureTitle, $text])
                    <div class="feature">
                        <span class="feature-icon">@include('partials.icon', ['name' => $icon])</span>
                        <div>
                            <p class="feature-title">{{ $featureTitle }}</p>
                            <p class="feature-text">{!! $text !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="booking-card">
                <p class="title center">Book Your Studio Session</p>
                <div class="text center">
                    <p>Please confirm that you would like to request the following appointment:</p>
                </div>
                @include('partials.booking-form')
            </div>
        </div>
    </div>
</section>
