@extends('layout.app')
@section('title')
InnovaTech-Hébérgement
@endsection
@section('siteweb')
    <div class=" solution aproposl">


        <img class="imgPrede" src="{{ asset('img/tech-1495181.jpg') }}" alt="">
        <h1 class="indie-flower-regular position-text-centre ban2">Hébégerment</h1>



    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 md-6 col-lg-6">
                <h2  class="text-couleur-orange">Trouvez la solution idéale pour votre site web</h2>
                <p class="text-couleur-blue">
                    Un hébergeur fiable et performant garantira que votre site web est accessible rapidement et en toute sécurité. Il vous offrira également les fonctionnalités dont vous avez besoin pour faire évoluer votre site web et répondre à vos besoins.
                </p>
                <p class="text-couleur-blue">
                    Chez innovatech, nous comprenons l'importance d'un hébergement fiable et performant pour le succès de votre site web. <br>
                    nos solutions d'hébergement offrent les Avantages ci-après: <br>


                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Polyvalence technologique :</strong> Nos serveurs sont conçus pour accueillir une variété de technologies. <br> Que vous utilisiez PHP,.NET,Perle,Python,Ruby,Javascript,Java ou toute autre technologie, nos infrastructures sont pretes à les prendres en charge.
                <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Performances élévées :</strong> Nos serveurs sont équipés de materiel de pointe et optimisés pour des performances exceptionnelles. Votre site web bénéficiera d'une vitesse de chargement rapide,d'une disponibilité élévée et d'une réactivité sans faille.  <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Sécurité renforcée </strong> La sécurité est notre priorité. Nous utilisons pare-feux, des protocoles de cryptage et des mesures de prévention des attaques pour proteger vos données et votre site web contre les menaces potentielles.<br>
                </p>
            </div>
            <div class="col-sm-12 md-6 col-lg-6">
                <img src="{{ asset('img/web-development-4202909_1920.png') }}" class="img " alt="">
            </div>
        </div>
    </div>
    <div  class="container hhhhhn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img class="img img1" src="{{ asset('img/6.jpg') }}" alt="">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text">
                <h3 class="text-couleur-orange">Types d'hébergement web:</h3>
                <p class="text-couleur-blue">
                    <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Hébergement mutualisé:</strong> C'est l'option la plus abordable, mais vous partagez les ressources du serveur avec d'autres sites web. <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Hébergement VPS:</strong> Vous disposez de votre propre espace sur un serveur, ce qui vous offre plus de ressources et de contrôle. C'est une bonne option pour les sites web à croissance rapide ou qui ont des besoins spécifiques.
                <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Hébergement dédié:</strong> Vous louez un serveur entier, ce qui vous offre les meilleures performances et le plus de contrôle. <br>

                <a style="margin-bottom: 30px" href="{{ route('Contacts') }}" class="boutons btn bouton">Contactez-nous</a>

                </p>
            </div>
        </div>
    </div>
    <div class="bas footlog">
        @include('menu.footer')
    </div>
@endsection
