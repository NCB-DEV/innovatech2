<?php

namespace App\Http\Controllers;

use App\Mail\newsleter;
use Illuminate\Http\Request;
use App\Http\Requests\newslter;
use App\Http\Requests\ContactMail;
use Illuminate\Support\Facades\Mail;

class envoiMail extends Controller
{
    public function abonnement(newslter $req){
         Mail::to($req->mail)->send(new newsleter($req->mail ));
         return redirect()->back();
    }
}
