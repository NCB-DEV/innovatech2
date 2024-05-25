<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $nom;
    public $postnom;
    public $telephone;
    public $email;
    public $message;
    public function __construct($nom,$postnom,$telephone ,$message)
    {
        $this->nom = $nom;
        $this->postnom = $postnom;
        $this->telephone = $telephone;
        $this->message = $message;
    }

    public function build()
    {
        return $this->view('mail.merci')
        ->subject('Confirmation de réception du message');
    }
}
