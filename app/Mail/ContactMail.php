<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data; // This data will be passed to the email view
    }

//    public function build()
//    {
//        return $this->from(config('mail.from.address'))
//            ->subject('New Contact Message')
//            ->view('emails.contact-mail')
//            ->with('data', $this->data);
//    }

    /**
     * Create a new message instance.
     */


//    /**
//     * Get the message envelope.
//     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Message',
        );
    }
//
//    /**
//     * Get the message content definition.
//     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-mail',
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
