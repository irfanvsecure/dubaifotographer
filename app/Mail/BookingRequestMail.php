<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param  array<string, mixed>  $fields
     */
    public function __construct(
        public string $formName,
        public array $fields,
        public ?string $page = null,
    ) {}

    public function envelope(): Envelope
    {
        $replyEmail = $this->fields['email'] ?? null;
        $replyName = $this->fields['name'] ?? null;

        return new Envelope(
            subject: 'New enquiry: '.$this->formName,
            replyTo: filter_var($replyEmail, FILTER_VALIDATE_EMAIL)
                ? [new Address($replyEmail, is_string($replyName) ? $replyName : '')]
                : [],
        );
    }

    public function content(): Content
    {
        return new Content(
            html: 'emails.booking-request',
            text: 'emails.booking-request-text',
        );
    }
}
