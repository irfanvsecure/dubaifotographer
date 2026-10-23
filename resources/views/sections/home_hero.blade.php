{{-- home_hero: the page H1 (pages.h1), intro, two buttons, trust points and the 3-step quote form (service.css / service.js) --}}
@php
    $trustIcons = ['star', 'check-circle', 'check-circle', 'map-marker-alt'];
@endphp
<section class="hero">
    <div class="hero-inner">
        <div class="hero-copy">
            <p class="eyebrow">{{ $s['eyebrow'] }}</p>
            <h1>{!! $page->h1 !!}</h1>
            <div class="hero-text">
                {!! $s['text'] !!}
            </div>
            <div class="buttons">
                <a class="btn" href="{{ \App\Support\Sections\SectionTypes::href($s['primary_button']['link']) }}">{{ $s['primary_button']['text'] }} @include('partials.icon', ['name' => 'arrow-right'])</a>
                <a class="btn btn-outline" href="{{ \App\Support\Sections\SectionTypes::href($s['secondary_button']['link']) }}">{{ $s['secondary_button']['text'] }} @include('partials.icon', ['name' => 'phone-alt'])</a>
            </div>
            <ul class="hero-trust">
                @foreach ($s['trust'] ?? [] as $i => $point)
                    <li>@include('partials.icon', ['name' => $trustIcons[$i] ?? 'check-circle']) {{ $point }}</li>
                @endforeach
            </ul>
        </div>

        <div class="svc-quote" id="quote">
            <p class="svc-quote-title">{{ $s['form_title'] }}</p>
            <div class="svc-quote-text"><p>{{ $s['form_text'] }}</p></div>
            <form class="svc-form" method="post" action="%%BASE%%/booking-request" data-ajax data-steps aria-label="Get a free quote">
                @csrf
                <input type="hidden" name="form_name" value="Home page quote">
                <div class="svc-progress"><span></span></div>

                <fieldset class="svc-step is-active">
                    <div class="svc-field">
                        <p class="svc-label">What do you need?</p>
                        <div class="svc-options">
                            <label class="svc-option"><input type="radio" name="service" value="Corporate event" required><span>Corporate event</span></label>
                            <label class="svc-option"><input type="radio" name="service" value="Product or e-commerce" required><span>Product or e-commerce</span></label>
                            <label class="svc-option"><input type="radio" name="service" value="Real estate or hotel" required><span>Real estate or hotel</span></label>
                            <label class="svc-option"><input type="radio" name="service" value="Portrait, family or wedding" required><span>Portrait, family or wedding</span></label>
                        </div>
                    </div>
                    <div class="svc-field">
                        <p class="svc-label">Coverage</p>
                        <div class="svc-options">
                            <label class="svc-option"><input type="radio" name="coverage" value="Photo and video" required><span>Photo and video</span></label>
                            <label class="svc-option"><input type="radio" name="coverage" value="Photo only" required><span>Photo only</span></label>
                        </div>
                    </div>
                    <div class="svc-step-buttons">
                        <button type="button" class="svc-next">Next: date and location</button>
                    </div>
                </fieldset>

                <fieldset class="svc-step">
                    <div class="svc-field">
                        <label class="svc-label" for="svc-date">Preferred date</label>
                        <input id="svc-date" type="date" name="date">
                    </div>
                    <div class="svc-field">
                        <label class="svc-label" for="svc-venue">Location</label>
                        <input id="svc-venue" type="text" name="venue" placeholder="e.g. our studio, your office, a hotel">
                    </div>
                    <div class="svc-field">
                        <label class="svc-label" for="svc-emirate">Which emirate?</label>
                        <select id="svc-emirate" name="emirate">
                            <option value="Dubai">Dubai</option>
                            <option value="Abu Dhabi">Abu Dhabi</option>
                            <option value="Sharjah">Sharjah</option>
                            <option value="Another emirate">Another emirate</option>
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
                        <label class="svc-label" for="svc-email">Email</label>
                        <input id="svc-email" type="email" name="email" placeholder="Email">
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
