@extends('layout.app')
@section('title')
InnovaTech-Marketing digital
@endsection
@section('siteweb')
    <div class=" solution aproposl">


                <img class="imgPrede" src="{{ asset('img/man-5218084.jpg') }}" alt="">
                <h1 class="titre-principal "> Marketing digital</h1>


    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 md-6 col-lg-6">
                <h2  class="kanit-semibold titre-principal" style="text-align: center">InnovaTech, votre partenaire dans la publicité digital</h2>
                <p class="text">
                    Dans le monde numérique actuel, il est indispensable pour les entreprises d'avoir une présence en ligne solide et attrayante. C'est là qu'intervient le marketing digital. InnovaTech met pour vous un ensemble des strategies marketing pour promouvoir votre marque, votre produit ou votre service
                </p>
            </div>
            <div class="col-sm-12 md-6 col-lg-6">
                <img src="{{ asset('img/email-marketing-7579810_1920.png') }}" class="img" alt="">
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img class="img" src="{{ asset('img/6.jpg') }}" alt="">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text">
                <h3 class="kanit-semibold titre-principal" style="text-align: center">Nos services marketing</h3>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Référencement (SEO) :</strong> Optimiser votre site web pour qu'il soit mieux classé dans les résultats de recherche. <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Marketing de contenu :</strong> Créer et partager du contenu de qualité qui attire et engage votre public cible.
                <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Publicité en ligne :</strong> Placer des annonces sur des plateformes telles que Google Ads et les réseaux sociaux. <br>

                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Marketing des réseaux sociaux :</strong>  Utiliser les réseaux sociaux pour vous connecter avec votre public cible et créer des relations. <br>

                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Marketing d'affiliation :</strong> Promouvoir les produits ou services d'autres entreprises en échange d'une commission. <br>



                <a href="{{ route('Contacts') }}" class=" btn bouton">Contactez-nous</a>
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <h2 class="kanit-semibold titre-principal" style="text-align: center">Avantages du Marketing Digital</h2>
                <p class="text">
                    Le marketing digital offre de nombreux avantages aux entreprises
                </p>
                <img src="{{ asset('img/people-1979261.jpg') }}" class="img" alt="">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="row">
                    <div class="col-12">
                        <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Portée étendue :</strong>Le marketing digital vous permet d'atteindre un public mondial. <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Ciblage précis : </strong> Vous pouvez cibler vos campagnes marketing en fonction de divers facteurs, tels que l'âge, l'emplacement, les intérêts et le comportement.
                <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Mesurabilité :</strong>  Vous pouvez suivre les résultats de vos campagnes marketing et mesurer leur retour sur investissement (ROI). <br>

                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Rentabilité :</strong>   Le marketing digital peut être un moyen très rentable de promouvoir votre entreprise. <br>

                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Flexibilité :</strong> Vous pouvez adapter vos campagnes marketing en fonction de vos besoins et de votre budget. <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
