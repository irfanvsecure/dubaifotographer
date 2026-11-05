<?php

namespace App\Support;

use App\Mail\BookingRequestMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

/** Emails a website form to the studio. A mail failure never fails the form: the caller has already saved it. */
class OwnerMail
{
    /** @param  array<string, mixed>  $fields */
    public static function send(string $formName, array $fields, ?string $page): bool
    {
        $to = config('mail.enquiry_to') ?: config('mail.from.address');
        $mailers = array_values(array_unique(array_filter([
            config('mail.default'),
            // cPanel often accepts local sendmail when remote SMTP auth fails
            'sendmail',
        ])));

        $lastError = null;
        foreach ($mailers as $mailer) {
            try {
                Mail::mailer($mailer)->to($to)->send(new BookingRequestMail($formName, $fields, $page));

                return true;
            } catch (Throwable $e) {
                $lastError = $e;
                Log::warning('Form mailer failed', ['mailer' => $mailer, 'error' => $e->getMessage(), 'form' => $formName]);
            }
        }

        Log::error('Form mail failed on all mailers (form still saved)', ['error' => $lastError?->getMessage(), 'form' => $formName]);

        return false;
    }
}
