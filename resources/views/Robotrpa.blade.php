@extends('layout.app')
@section('title')
InnovaTech-Robot RPA
@endsection
@section('siteweb')
    <div class=" solution aproposl">


                <img class="imgPrede" src="{{ asset('img/man-5218084.jpg') }}" alt="">
                <h1 class="titre-principal "> Robot RPA</h1>


    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 md-6 col-lg-6">
                <h2  class="kanit-semibold titre-principal" style="text-align: center">automatiser vos tâches pour booster votre productivité</h2>
                <p class="text">
                    Dans le monde des affaires en constante évolution, il est crucial de trouver des moyens d'optimiser les processus et d'accroître la productivité. C'est là qu'interviennent les robots RPA (Robotic Process Automation). Les robots RPA sont des logiciels intelligents qui imitent les actions humaines pour effectuer des tâches répétitives et basées sur des règles. Ils peuvent être utilisés pour automatiser une large gamme de tâches, telles que la saisie de données, la création de rapports, l'envoi d'e-mails et la gestion des processus métier.
                </p>
            </div>
            <div class="col-sm-12 md-6 col-lg-6">
                <img src="{{ asset('img/robot-30659.svg') }}" class="img" alt="">
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img class="img" src="{{ asset('img/robot-2027195_1920.png') }}" alt="">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 text">
                <h3 class="kanit-semibold titre-principal" style="text-align: center">Avantages des robots RPA:</h3>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Amélioration de la productivité :</strong> Les robots RPA peuvent automatiser les tâches répétitives et chronophages, libérant ainsi vos employés pour se concentrer sur des tâches plus stratégiques et à plus forte valeur ajoutée. <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Réduction des coûts :</strong>  L'automatisation des tâches peut entraîner des économies de coûts importantes, car elle réduit le besoin de main-d'œuvre humaine.
                <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Amélioration de la précision :</strong> Les robots RPA sont capables d'effectuer des tâches avec une précision et une cohérence accrues, ce qui peut réduire le nombre d'erreurs. <br>

                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Meilleure conformité :</strong> Les robots RPA peuvent être utilisés pour automatiser les processus de conformité, ce qui peut aider les entreprises à respecter les réglementations en vigueur. <br>

                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> <strong>Amélioration de la satisfaction des clients :</strong> En automatisant les tâches et en améliorant l'efficacité, les robots RPA peuvent contribuer à améliorer la satisfaction des clients. <br>
                <a href="{{ route('Contacts') }}" class=" btn bouton">Contactez-nous</a>
            </div>
        </div>
    </div>
    
@endsection
