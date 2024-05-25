<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;
    public $nom,$postnom,$phone,$messages,$email;
    /**
     * Create a new message instance.
     */
    public function __construct($nom,$postnom,$phone,$messages,$email)
    {
        $this->nom=$nom;
        $this->postnom=$postnom;
        $this->phone=$phone;
        $this->messages=$messages;
        $this->email=$email;
    }public function build()
    {
        return $this->view('mail.message')
        ->subject('reception de message');
    }
}
