{{-- Gold "Book Your Studio Session" card with the booking form (contact, booking form, services) --}}
<div {{ $attributes->merge(['class' => 'session-card']) }}>
    <p class="session-title">Book Your Studio Session</p>
    <div class="session-text">{{ $slot }}</div>
    @include('partials.booking-form', ['withLocation' => false, 'class' => 'booking-form-pill'])
</div>
