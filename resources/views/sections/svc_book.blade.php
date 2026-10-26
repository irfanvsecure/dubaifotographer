{{-- svc_book: closing booking card --}}
@php
    $contact = \App\Models\Setting::get('contact', []) + ['phone' => '+971 52 294 6276', 'phone_link' => '+971522946276'];
@endphp
<section class="svc-book">
    <div class="svc-container">
        <div class="svc-book-card">
            <span class="svc-book-ring"></span>
            <div class="svc-book-copy">
                <h2 class="svc-title">{{ $s['heading'] }}</h2>
                <p class="svc-text">{{ $s['text'] }}</p>
                <p class="svc-book-phone">Phone / WhatsApp: <a href="tel:{{ $contact['phone_link'] }}">{{ $contact['phone'] }}</a></p>
            </div>
            <div class="svc-book-buttons">
                <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-ghost" href="{{ $whatsapp }}" target="_blank">WhatsApp Us</a>
            </div>
        </div>
    </div>
</section>
