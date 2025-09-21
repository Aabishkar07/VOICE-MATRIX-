<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    /**
     * Create a new message instance.
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        // Build a more descriptive subject including name and service if available
        $name = data_get($this->mailData, 'name');
        $service = data_get($this->mailData, 'service');
        $fromEmail = data_get($this->mailData, 'email');
        $subject = 'New Contact Message';
        if ($name) {
            $subject .= " from {$name}";
        }
        if ($service) {
            $subject .= " about {$service}";
        }

        return new Envelope(
            subject: $subject,
            replyTo: $fromEmail ? [new Address($fromEmail, $name ?: null)] : [],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'frontend.mail.contactmail',

        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

