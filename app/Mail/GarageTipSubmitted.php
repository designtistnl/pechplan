<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GarageTipSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public array $data
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Een klant wil PechPlan afsluiten via uw garage',
            replyTo: [$this->data['user_email']],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.garage-tip',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
