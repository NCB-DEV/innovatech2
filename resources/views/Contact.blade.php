@extends('layout.app')
@section('title')
Contact
@endsection
@section('siteweb')
    <div class="container-fluid contacts">
        <div class="row">
            <div class="col-12">
                <h2 class="text-couleur-orange position-text-centre">Contact</h2> <br>
                
            </div>
        </div>
    </div>
   <div class="container ">
    @livewire('Contact')
   </div>
   <div class="footk">
    @include('menu.footer')
</div>
@endsection
