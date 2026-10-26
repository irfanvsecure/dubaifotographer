{{-- svc_hero: the page H1 (pages.h1), intro, buttons and the 3-step quote form (service.css / service.js) --}}
@php
    $contact = \App\Models\Setting::get('contact', []) + ['phone' => '+971 52 294 6276', 'phone_link' => '+971522946276'];
    $venueLabel = $s['venue_label'] ?? 'Location';
@endphp
<section class="svc-hero" style="background-image: url('%%BASE%%/assets/images/{{ $s['image'] }}')">
    <span class="svc-corner svc-corner-tl"></span>
    <span class="svc-corner svc-corner-tr"></span>
    <span class="svc-corner svc-corner-bl"></span>
    <span class="svc-corner svc-corner-br"></span>
    <p class="svc-rec">@include('partials.icon', ['name' => 'circle']) REC</p>
    @if (! empty($s['exif']))<p class="svc-exif">{{ $s['exif'] }}</p>@endif

    <div class="svc-hero-inner">
        <div class="svc-hero-copy">
            <h1>{!! $page->h1 !!}</h1>
            <div class="svc-hero-text">{!! $s['text'] !!}</div>
            <div class="svc-buttons">
                <a class="svc-btn svc-btn-gold" href="#quote">Get a Quote</a>
                <a class="svc-btn svc-btn-ghost" href="{{ $whatsapp }}" target="_blank">WhatsApp Us</a>
            </div>
            <p class="svc-call">Prefer to talk? Call <a href="tel:{{ $contact['phone_link'] }}">{{ $contact['phone'] }}</a></p>
        </div>

        <div class="svc-quote" id="quote">
            <p class="svc-quote-title">{{ $s['form_title'] }}</p>
            <div class="svc-quote-text"><p>{{ $s['form_text'] }}</p></div>
            <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="{{ $s['form_title'] }}">
                @csrf
                <input type="hidden" name="form_name" value="{{ $s['form_title'] }}">
                <div class="svc-progress"><span></span></div>

                <fieldset class="svc-step is-active">
                    @foreach ($s['questions'] as $question)
                        <div class="svc-field">
                            <p class="svc-label">{{ $question['label'] }}</p>
                            <div class="svc-options">
                                @foreach ($question['options'] as $option)
                                    <label class="svc-option">
                                        <input type="radio" name="{{ $question['name'] }}" value="{{ $option }}" required>
                                        <span>{{ $option }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    <div class="svc-step-buttons">
                        <button type="button" class="svc-next">Next: date and {{ \Illuminate\Support\Str::lower($venueLabel) }}</button>
                    </div>
                </fieldset>

                <fieldset class="svc-step">
                    <div class="svc-field">
                        <label class="svc-label" for="svc-date">{{ $s['date_label'] ?? 'Preferred date' }}</label>
                        <input id="svc-date" type="date" name="date">
                    </div>
                    <div class="svc-field">
                        <label class="svc-label" for="svc-venue">{{ $venueLabel }}</label>
                        <input id="svc-venue" type="text" name="venue" placeholder="{{ $s['venue_placeholder'] }}">
                    </div>
                    <div class="svc-field">
                        <label class="svc-label" for="svc-guests">{{ $s['guests_label'] }}</label>
                        <select id="svc-guests" name="guests">
                            @foreach ($s['guests_options'] as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="svc-step-buttons">
                        <button type="button" class="svc-back">Back</button>
                        <button type="button" class="svc-next">Next: your details</button>
                    </div>
                </fieldset>

                <fieldset class="svc-step">
                    <div class="svc-field">
                        <label class="svc-label" for="svc-name">Your name</label>
                        <input id="svc-name" type="text" name="name" placeholder="Your name" required>
                    </div>
                    <div class="svc-field">
                        <label class="svc-label" for="svc-email">{{ $s['email_label'] ?? 'Email' }}</label>
                        <input id="svc-email" type="email" name="email" placeholder="{{ $s['email_label'] ?? 'Email' }}">
                    </div>
                    <div class="svc-field">
                        <label class="svc-label" for="svc-phone">Phone or WhatsApp</label>
                        <input id="svc-phone" type="tel" name="phone" placeholder="Phone or WhatsApp" required>
                    </div>
                    <div class="svc-step-buttons">
                        <button type="button" class="svc-back">Back</button>
                        <button type="submit">Get my quote</button>
                    </div>
                </fieldset>
            </form>
            <div class="svc-quote-note"><p>{{ $s['form_note'] }}</p></div>
        </div>
    </div>
</section>
