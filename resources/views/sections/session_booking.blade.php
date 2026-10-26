{{-- session_booking: text and check points beside the gold booking card (services-overview.css) --}}
@php
    $contact = \App\Models\Setting::get('contact', []) + ['phone' => '+971 52 294 6276', 'phone_link' => '+971522946276'];
@endphp
<section class="section section-cream services-session">
    <div class="container">
        <div class="svo-book">
            <div class="svo-book-copy">
                @if (! empty($s['eyebrow']))<p class="eyebrow">{{ $s['eyebrow'] }}</p>@endif
                <p class="title">{{ $s['heading'] }}</p>
                <p class="text">{{ $s['text'] }}</p>
                <ul class="svo-checks">
                    @foreach ($s['checks'] ?? [] as $check)
                        <li>@include('partials.icon', ['name' => 'check-circle']) {{ $check }}</li>
                    @endforeach
                </ul>
                <p class="svo-call">Rather talk it through? <a href="tel:{{ $contact['phone_link'] }}">{{ $contact['phone'] }}</a></p>
            </div>
            <x-session-card class="services-card">{{ $s['form_text'] }}</x-session-card>
        </div>
    </div>
</section>
