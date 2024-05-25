@extends('layout.app')
@section('title')
Solution-Applications de gestion
@endsection
@section('siteweb')
<div class="container-fluid solution ban1">
    <div class="row">
        <div class="col-12 "data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
            <h1 style="font-size: 3em" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">Applications de gestion</h1>
            <span data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">Optimiser la gestion de votre entreprise grace à nos solutions digitales</span>
        </div>
    </div>
</div>
<div class="ban2 container solution">
    <div class="row">
        <div class="col-12">
            <h2 style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">Votre Application en quelques étapes</h2>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
                    <div class="etape border ">
                        <img width="50" height="50" src="https://img.icons8.com/neon/96/1-circle.png" alt="1-circle"/>
                        <h3>Entretien</h3>
                        <p>
                            Contactez-nous pour discuter de vos idées et objectifs. Lors de cette rencontre, par téléphone ou en visioconférence ou encore en présentiel, nous définissons ensemble les fonctionnalités essentielles et la structure de votre application.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
                    <div class="etape border">
                        <img width="50" height="50" src="https://img.icons8.com/neon/96/2-circle.png" alt="2-circle"/>
                        <h3>Conception</h3>
                        <p>
                            Nous construisons votre application adaptée à vos besoins, optimisée  et compatible avec tous les appareils. Nous renforcons également la sécurité et le rendons conforme aux normes en vigueur.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
                    <div class="etape border">
                        <img width="50" height="50" src="https://img.icons8.com/neon/96/3-circle.png" alt="3-circle"/>
                        <h3>Validation et publication</h3>
                        <p>
                            Une fois le développement terminé, nous examinons ensemble l'application pour finaliser les derniers détails. Suite à votre validation, nous vous remettons l'exécutable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container ban3 solution" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
    <div class="row">
        <div class="col-12">
            <h2 data-aos-duration="1000" data-aos-delay="1000" style="color: #2e86c1" data-aos="fade-up">Présentation de la solution</h2>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
                        Nous vous proposons une solution abordable et rapide à mettre en place pour être présent sur internet. Nous utilisons les technologies modernes et sécurisées pour vous offrir un site web moderne responsive et securisé.
                    </p>
                    <ul>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Disponible rapidement </li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Compatible avec Windows et Apple</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Optimisée et sécurisée</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Communication transparente et régulière tout au long du projet</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
                    <p> Grâce à notre expertise en création de sites web, nous vous offrons une solution disponible rapidement, abordable et adaptée à votre projet. Les sites web que nous concevons sont optimisés pour le référencement et assurent donc une visibilité maximale en ligne. En complément, vous bénéficiez d'une courte formation vous permettant une prise en main rapide. Découvrez nos réalisations pour en savoir plus ou contactez-nous pour discuter de votre projet.
                        </p>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="container solution ban4" >
    <div class="row">
        <div class="col-12">
            <h2 style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">Tarifs</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-4"></div>
                    <div class="col-sm-12 col-md-6 col-lg-4 " data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
                        <div class="fonction">
                            <h3 style="color: #2e86c1">Application de gestion</h3>
                            <span>Optimiser les operations de votre entrepise</span>
                            <h1>$200</h1>
                            <a href="{{ route('Contacts') }}" class="btn btnb">Prendre rendez-vous</a>
                            <h4 style="color: #2e86c1">Type d'application</h4>
                            <ul>
                                <li><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Gestion commerciale</li>
                                <li><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Comptabilité</li>
                                <li><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Gestion des ressources humaines</li>
                                <li><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/> Gestion de la relation client (CRM)</li>

                                <li><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Gestion de projet</li>
                                <li><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Communication</li>
                                <li><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Caisse</li>

                            </ul>


                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-4"></div>

               </div>
        </div>
    </div>
</div>
<div class="container-fluid solution ban5" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
    <div class="row">
        <div class="col-12">
            <h2 style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">Besoin de plus d'informations?</h2>
            <span data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">Contactez-moi pour que je réponde à toutes vos questions. </span> <br>
            <a href="{{ route('Contacts') }}" class="btn btnb">Demander un rendez-vous</a>
        </div>
    </div>
</div>


@endsection
