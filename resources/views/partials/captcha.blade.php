{{-- Turnstile widget box; main.js fills it the first time the visitor touches the form --}}
@if (\App\Support\Captcha::enabled())
    <div class="form-captcha {{ $class ?? '' }}" data-captcha="{{ \App\Support\Captcha::siteKey() }}"></div>
@endif
