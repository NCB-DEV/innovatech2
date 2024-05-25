<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\WelcomeMail;
use App\Mail\Message;
use App\Http\Requests\ContactMail;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{

    public $nom=" ";

    public $email=" ";

    public $postnom=" ";

    public $phone=" ";

    public $message=" ";

    public $afficherform=false;
    public $afficherVente=true;
    public $afficherLocation=false;
    public $successMessage;
    public $ok="";
    public function afficherdiv($div)
    {

        $this->afficherVente= ($div === 'vente');
        $this->afficherLocation = ($div === 'Location');
        $this->afficherform = ($div === 'afficherform');
    }
    protected $rules = [
        'nom' => 'required|string|min:3',
        'postnom' => 'required|string|min:3',
        'email' => 'required|email',
        'message'=>'required|min:1|max:250|string',
        'phone'=>'required|min:9|numeric'
    ];
    public function submit()
    {
        $this->validate();
        Mail::to($this->email)->send(new WelcomeMail($this->nom,$this->postnom,$this->phone,$this->message ));
        Mail::to("nathancimbela006@gmail.com")->send(new Message($this->nom,$this->postnom,$this->phone,$this->message,$this->email));
        $this->successMessage = 'votre message a été envoyé avec succès';
        $this->nom='';
        $this->postnom='';
        $this->phone="";
        $this->email="";
        $this->message=" ";
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
