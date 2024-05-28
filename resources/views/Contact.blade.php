@extends('layout.app')
@section('title')
Contact
@endsection
@section('siteweb')
    <div class="container-fluid solution contact">
        <div class="row">
            <div class="col-12">
                <h2 class="text-grand contact kanit-extralight">Contact</h2>
                <span class="titre-secondaire">Prendre contact avec InnovaTech</span>
            </div>
        </div>
    </div>
   <div class="container solution">
    @livewire('Contact')
   </div>
@endsection
