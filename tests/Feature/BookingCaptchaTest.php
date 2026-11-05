<?php

namespace Tests\Feature;

use App\Support\Captcha;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BookingCaptchaTest extends TestCase
{
    private const TOKEN_FIELD = 'cf-turnstile-response';

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake();
        config(['services.turnstile.site_key' => 'site', 'services.turnstile.secret_key' => 'secret']);
    }

    private function send(array $extra = [])
    {
        return $this->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class)
            ->postJson('/booking-request', ['name' => 'Test', 'phone' => '123'] + $extra);
    }

    public function test_a_form_without_a_token_is_rejected_and_not_saved(): void
    {
        Http::fake();

        $this->send()->assertStatus(422);

        Http::assertNothingSent();
        Storage::assertMissing('booking-requests.log');
    }

    public function test_a_token_cloudflare_rejects_is_refused(): void
    {
        Http::fake(['*' => Http::response(['success' => false])]);

        $this->send([self::TOKEN_FIELD => 'bad'])->assertStatus(422);

        Storage::assertMissing('booking-requests.log');
    }

    public function test_a_good_token_goes_through_and_is_not_saved_with_the_lead(): void
    {
        Http::fake(['*' => Http::response(['success' => true])]);

        $this->send([self::TOKEN_FIELD => 'good'])->assertOk()->assertJson(['success' => true]);

        $log = Storage::get('booking-requests.log');
        $this->assertStringContainsString('Test', $log);
        $this->assertStringNotContainsString(self::TOKEN_FIELD, $log);
    }

    public function test_a_token_sent_as_an_array_is_refused(): void
    {
        Http::fake();

        $this->send([self::TOKEN_FIELD => ['x']])->assertStatus(422);
    }

    public function test_a_lead_is_kept_when_cloudflare_is_down(): void
    {
        Http::fake(fn () => throw new ConnectionException('down'));

        $this->send([self::TOKEN_FIELD => 'any'])->assertOk();

        Storage::assertExists('booking-requests.log');
    }

    public function test_one_key_alone_leaves_the_captcha_off(): void
    {
        config(['services.turnstile.site_key' => null]);
        Http::fake();

        $this->assertFalse(Captcha::enabled());
        $this->send()->assertOk();
    }
}
