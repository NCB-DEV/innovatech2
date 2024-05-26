@extends('layout.app')
@section('title')
InnovaTech-logiciels de gestion
@endsection
@section('siteweb')
    <div class=" solution aproposl">


                <img class="imgPrede" src="{{ asset('img/man-5218084.jpg') }}" alt="">
                <h1 class="titre-principal ">Logiciels de gestion</h1>


    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 md-6 col-lg-6">
                <h2  class="kanit-semibold titre-principal" style="text-align: center">Optimisez vos opérations et boostez votre croissance</h2>
                <p class="text">
                    Nos logiciels de gestion peuvent vous aider à gérer efficacement votre entreprise, à améliorer votre productivité et à prendre des décisions stratégiques éclairées.
                </p>
            </div>
            <div class="col-sm-12 md-6 col-lg-6">
                <img src="{{ asset('img/woman-1459220_1920.png') }}" class="img" alt="">
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img class="img" src="{{ asset('img/computer-1294359.svg') }}" alt="">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text">
                <h3 class="kanit-semibold titre-principal" style="text-align: center">Types de logiciels de gestion </h3>
                <p class="text" style="text-align: center">
                    Nous proposons une large gamme de logiciels de gestion, chacun répondant à vos besoins spécifiques.
                </p>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>ERP (Enterprise Resource Planning) :</strong> Les logiciels ERP intègrent les différentes fonctions de votre entreprise, telles que la comptabilité, la gestion de la chaîne d'approvisionnement, la gestion des stocks et la gestion de la relation client, dans un seul système centralisé. <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>CRM (Customer Relationship Management) :</strong> Les logiciels CRM vous aident à gérer vos relations avec vos clients, en suivant leurs interactions avec votre entreprise, en stockant leurs informations et en vous permettant de leur fournir un meilleur service.
                <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Gestion de projet :</strong> Les logiciels de gestion de projet vous aident à planifier, organiser et suivre vos projets, en veillant à ce que tout se déroule comme prévu et dans les délais. <br>

                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Comptabilité et facturation :</strong>Les logiciels de comptabilité et de facturation vous aident à suivre vos revenus et vos dépenses, à créer des factures et à gérer votre trésorerie. <br>

                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Gestion des stocks :</strong>Les logiciels de gestion des stocks vous aident à suivre vos niveaux de stock, à commander des produits lorsqu'ils sont nécessaires et à éviter les ruptures de stock. <br>
                <a href="{{ route('Contacts') }}" class=" btn bouton">Contactez-nous</a>
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <h2 class="kanit-semibold titre-principal" style="text-align: center">Avantages des logiciels de gestion</h2>
                <p class="text">
                    L'utilisation de logiciels de gestion dans votre entreprise peut vous offrir de nombreux avantages, notamment :
                </p>
                <img src="{{ asset('img/people-1979261.jpg') }}" class="img" alt="">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="row">
                    <div class="col-12">
                        <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Amélioration de l'efficacité:</strong> Les logiciels de gestion peuvent automatiser de nombreuses tâches manuelles, ce qui vous permet de gagner du temps et d'améliorer votre efficacité. <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Meilleure prise de décision :</strong> Les logiciels de gestion vous donnent accès à des données précieuses sur votre entreprise, ce qui vous permet de prendre des décisions plus éclairées.
                <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Augmentation de la productivité : </strong> En automatisant des tâches et en améliorant l'efficacité, les logiciels de gestion peuvent augmenter la productivité de vos employés. <br>

                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Réduction des coûts :</strong>Les logiciels de gestion peuvent vous aider à réduire vos coûts en optimisant vos processus et en éliminant le gaspillage. <br>

                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Amélioration de la satisfaction des clients :</strong>Les logiciels de gestion peuvent vous aider à améliorer votre service client en vous permettant de mieux gérer vos relations avec vos clients. <br>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection
