@extends('layout.app')
@section('title')
A propos
@endsection
@section('siteweb')
    <div class=" solution aproposl">


                <img class="imgPrede" src="{{ asset('img/man-5218084.jpg') }}" alt="">
                <h1 class="titre-principal "> Qui sommes-nous?</h1>


    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 md-6 col-lg-6">
                <h2  class="kanit-semibold titre-principal" style="text-align: center">Nous sommes votre partenaire de confiance</h2>
                <p class="text">
                    Innovatech est un partenaire de transformation digitale qui accompagne les entreprises, les organisations et les personnalités publiques dans leur quête d'atteindre leurs objectifs commerciaux, sociaux ou autres en utilisant la puissance du digital.
                </p>
            </div>
            <div class="col-sm-12 md-6 col-lg-6">
                <img src="{{ asset('img/people-1979261.jpg') }}" class="img" alt="">
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img class="img" src="{{ asset('img/6.jpg') }}" alt="">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text">
                <h3 class="kanit-semibold titre-principal" style="text-align: center">Grâce à son expertise et à sa gamme complète de services, Innovatech aide ses clients à :</h3>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Améliorer leur présence en ligne</strong> en créant des sites Web et des applications mobiles attrayants et performants, en optimisant leur référencement et en développant des stratégies de marketing digital efficaces. <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Renforcer leurs relations avec leurs clients</strong> en mettant en place des solutions de CRM et de marketing automation, en créant des expériences client personnalisées et en offrant un excellent service client digital.
                <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Augmenter leurs ventes et leur rentabilité</strong> en développant des stratégies de e-commerce efficaces, en optimisant leurs processus de vente et en tirant parti des données pour prendre des décisions plus éclairées. <br>
                Améliorer leur efficacité opérationnelle en automatisant des tâches, en mettant en place des solutions de gestion de documents et en utilisant des outils de collaboration en ligne. <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Avoir un impact social positif</strong> en développant des solutions digitales pour relever des défis sociaux, en sensibilisant à des questions importantes et en connectant les gens avec des causes qui leur tiennent à cœur. <br>
                <a href="{{ route('Contacts') }}" class=" btn bouton">Contactez-nous</a>
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <h2 class="kanit-semibold titre-principal" style="text-align: center">C'est par ici que commence votre chemin</h2>
                <p class="text">
                    Supprimez les conjectures et Obtenez des réponses précises et fiables à toutes vos demandes de services.
                </p>
                <img src="{{ asset('img/people-1979261.jpg') }}" class="img" alt="">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="row">
                    <div class="col-12">
                        <h3 class="titre-secondaire">NOTRE VISION</h3>
                        <p class="text">
                            Devenir une entreprise de référence en RD Congo et en Afrique qui propulse d’autres entreprises à atteinte  leurs objectifs Business ou Sociaux.
                        </p>
                    </div>
                    <div class="col-12">
                        <h3 class="titre-secondaire">NOTRE MISSION</h3>
                        <p class="text">
                            Accompagner les entreprises et particuliers dans leur processus de transformation digital afin d’augmenter leur productivité.
                        </p>
                    </div>
                    <div class="col-12">
                        <h3 class="titre-secondaire">NOTRE BUT OU OBJECTIF</h3>
                        <p class="text">
                            <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Améliorer le système existant des entreprises et les révolutionner grâce aux solutions numériques adaptées. <br>
                            <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Promouvoir le développement du secteur numérique en RD Congo. <br>
                            <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> Promouvoir la jeunesse Congolaise, sa potentialité, ses innovations et ses œuvres. <br>
                            <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Stimuler la jeunesse Congolaise dans l’usage des outils numériques à travers nos conférences et formations.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="kanit-semibold titre-principal" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" style="text-align: center">Nos valeurs</h3>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" style="text-align: center" class="text">
            Notre réussite sur différents projets émane de certains principes prônés
au sein de notre entreprise.
        </p>
        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" class="col-sm-12 col-md-4 col-lg-4">
                <div class="valeur1">
                    <img style="height: 200px" src="{{ asset('img/2.png') }}" class="img" alt="">
                    <h3 class="titre-secondaire">1.Adaptabilité</h3>
                    <p style="text-align: center" class="text">
                        Les solutions que nous offrons sont adaptées aux besoinx de nos clients.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="valeur2">
                    <img style="height: 200px" src="{{ asset('img/man-5218084.jpg') }}" class="img" alt="">
                    <h3 class="titre-secondaire">2.Résponsabilité</h3>
                    <p class="text" style="text-align: center">
                        Nos engagement sont toujours à la hauteur des compétences que nous couvrons au sein de l'entreprise.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="valeur3">
                    <img style="height: 200px" src="{{ asset('img/services.jpeg') }}" class="img" alt="">
                    <h3 class="titre-secondaire">3.Ecoute des clients</h3>
                    <p class="text" style="text-align: center">
                        Nous utilisons des approches qui qui impliquent le client à chaque étape de l'évolution du projet.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
