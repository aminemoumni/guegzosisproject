<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $subject;
    public $email;
    public $messagetext;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    
    public function __construct($name, $subject, $email, $messagetext)
    {
        $this->name = $name;
        $this->subject = $subject;
        $this->email = $email;
        $this->messagetext = $messagetext;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact_email')->subject('Subject: ' . $this->subject);
    }
}
