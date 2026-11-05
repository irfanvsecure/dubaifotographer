<?php

namespace App\Http\Controllers;

use App\Support\Captcha;
use App\Support\OwnerMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookingRequestController extends Controller
{
    private const CAPTCHA_FIELD = 'cf-turnstile-response';

    public function __invoke(Request $request): JsonResponse
    {
        if (! Captcha::verify($request->input(self::CAPTCHA_FIELD))) {
            return response()->json(['success' => false, 'message' => 'Please complete the security check.'], 422);
        }

        // Empty optional fields come through as "" from HTML forms
        foreach (['email', 'name', 'phone', 'message', 'form_name'] as $key) {
            if (! $request->filled($key)) {
                $request->merge([$key => null]);
            }
        }

        $data = $request->validate([
            'form_name' => ['nullable', 'string', 'max:200'],
            'name' => ['nullable', 'string', 'max:200'],
            'email' => ['nullable', 'email', 'max:200'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:5000'],
        ] + $this->optionalFieldRules());

        $formName = $data['form_name'] ?? 'Website enquiry';
        $fields = collect($request->except(['_token', 'form_name', self::CAPTCHA_FIELD]))
            ->map(fn ($value) => is_string($value) ? trim($value) : $value)
            ->filter(fn ($value) => $value !== null && $value !== '')
            ->all();

        if ($fields === []) {
            return response()->json(['success' => false, 'message' => 'Please fill in the form.'], 422);
        }

        $page = $request->headers->get('referer');
        $payload = [
            'at' => now()->toIso8601String(),
            'form' => $formName,
            'fields' => $fields,
            'page' => $page,
        ];

        Storage::append('booking-requests.log', json_encode($payload, JSON_UNESCAPED_UNICODE));

        $mailed = OwnerMail::send($formName, $fields, $page);

        return response()->json([
            'success' => true,
            'mailed' => $mailed,
        ]);
    }

    /**
     * Extra fields used across quote / booking / contact forms.
     *
     * @return array<string, list<string>>
     */
    private function optionalFieldRules(): array
    {
        $keys = [
            'address', 'service', 'coverage', 'date', 'time', 'setting', 'location', 'package',
            'venue', 'event_type', 'company', 'whatsapp', 'emirate', 'shoot_type',
            'budget', 'guests', 'notes', 'subject',
        ];

        $rules = [];
        foreach ($keys as $key) {
            $rules[$key] = ['nullable', 'string', 'max:500'];
        }

        return $rules;
    }
}
