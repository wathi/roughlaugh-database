<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
  use Queueable, SerializesModels;

  public function __construct(
    public string $name,
    public string $email,
    public string $messageText,
  ) {}

  public function envelope(): Envelope
  {
    return new Envelope(
      subject: 'Rough x Laugh Contact Form',
      from: $this->email,
    );
  }

  public function content(): Content
  {
    return new Content(
      view: 'emails.contact',
      with: [
        'name' => $this->name,
        'email' => $this->email,
        'messageText' => $this->messageText,
      ],
    );
  }
}
