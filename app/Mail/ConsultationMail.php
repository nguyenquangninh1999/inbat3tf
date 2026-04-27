<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConsultationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $name,
        public string $phone,
        public ?string $email,
        public ?string $note,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Tư vấn báo giá');
    }

    public function content(): Content
    {
        return new Content(view: 'emails.consultation');
    }
}
