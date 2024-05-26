@extends('layout.app')
@section('title')
InnovaTech-Hébérgement
@endsection
@section('siteweb')
    <div class=" solution aproposl">


                <img class="imgPrede" src="{{ asset('img/man-5218084.jpg') }}" alt="">
                <h1 class="titre-principal "> Hébérgement</h1>


    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 md-6 col-lg-6">
                <h2  class="kanit-semibold titre-principal" style="text-align: center">Trouvez la solution idéale pour votre site web</h2>
                <p class="text">
                    Un hébergeur fiable et performant garantira que votre site web est accessible rapidement et en toute sécurité. Il vous offrira également les fonctionnalités dont vous avez besoin pour faire évoluer votre site web et répondre à vos besoins.
                </p>
            </div>
            <div class="col-sm-12 md-6 col-lg-6">
                <img src="{{ asset('img/web-development-4202909_1920.png') }}" class="img" alt="">
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img class="img" src="{{ asset('img/6.jpg') }}" alt="">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text">
                <h3 class="kanit-semibold titre-principal" style="text-align: center">Types d'hébergement web:</h3>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Hébergement mutualisé:</strong> C'est l'option la plus abordable, mais vous partagez les ressources du serveur avec d'autres sites web. <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Hébergement VPS:</strong> Vous disposez de votre propre espace sur un serveur, ce qui vous offre plus de ressources et de contrôle. C'est une bonne option pour les sites web à croissance rapide ou qui ont des besoins spécifiques.
                <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Hébergement dédié:</strong> Vous louez un serveur entier, ce qui vous offre les meilleures performances et le plus de contrôle. <br>

                <a href="{{ route('Contacts') }}" class=" btn bouton">Contactez-nous</a>
            </div>
        </div>
    </div>
    
@endsection
