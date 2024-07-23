<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactReceivedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public $name, public $email, public $message)
    {

    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('mail@gmail.com', 'No Reply'),
            subject: 'Mail di Contatto',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.contactReceived',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
