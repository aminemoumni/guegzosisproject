<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailSender extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $locale;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    
    public function __construct($name, $email, $locale)
    {
        $this->name = $name;
        $this->email = $email;
        $this->locale = $locale;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->locale == "en"){
            $object = "Thank you for contacting us!";
        } else {
            $object = "Merci de nous contacter!";
        }
        return $this->view('emails.contact_email_sender')->subject($object);
    }
}
