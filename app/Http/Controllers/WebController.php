<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Siteweb(){
        return view('Siteweb');
    }
    public function Applicationweb(){
        return view('Applicationweb');
    }
    public function Applicationmobile(){
        return view('Applicationmobile');
    }
    public function Robotrpa(){
        return view('Robotrpa');
    }
    public function MarketingDigital(){
        return view('MarketingDigital');
    }
    public function Applicationdegestion(){
        return view('Applicationdegestion');
    }
    public function Cabinetconseils(){
        return view('Cabinetconseils');
    }
    public function Apropos(){
        return view('Apropos');
    }
    public function Contact(){
        return view('Contact');
    }
}
