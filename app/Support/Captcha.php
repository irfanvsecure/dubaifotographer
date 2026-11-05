<?php

namespace App\Support;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/** Cloudflare Turnstile on the website forms (partials/captcha, main.js, BookingRequestController). */
class Captcha
{
    private const VERIFY_URL = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

    /** Off until both keys are set: one key alone would show a widget nobody checks, or reject every lead. */
    public static function enabled(): bool
    {
        return filled(self::siteKey()) && filled(config('services.turnstile.secret_key'));
    }

    public static function siteKey(): ?string
    {
        return config('services.turnstile.site_key');
    }

    public static function verify(mixed $token): bool
    {
        if (! self::enabled()) {
            return true;
        }

        if (! is_string($token) || $token === '') {
            return false;
        }

        try {
            $response = Http::asForm()->timeout(5)->post(self::VERIFY_URL, [
                'secret' => config('services.turnstile.secret_key'),
                'response' => $token,
            ]);
        } catch (ConnectionException $e) {
            // An outage at Cloudflare is not the visitor's fault, and each form is a lead
            Log::warning('Captcha check unavailable, form let through', ['error' => $e->getMessage()]);

            return true;
        }

        if ($response->serverError()) {
            Log::warning('Captcha check unavailable, form let through', ['status' => $response->status()]);

            return true;
        }

        return $response->json('success') === true;
    }
}
