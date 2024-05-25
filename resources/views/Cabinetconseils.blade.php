@extends('layout.app')
@section('title')
Solution-Cabinet conseils
@endsection
@section('siteweb')

<div class="container solution cabi" >
    <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6 kkl">
            <img class="img" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up" width="500" height="400" src="{{ asset('img/services.svg') }}" alt="services--v1"/>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 kk">
            <h3 class="roboto-light-italic" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up" style="color: #2e86c1">Nos services</h3>
            <p data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
                Les cabinets de conseil informatique offrent une large gamme de services pour aider les entreprises à optimiser leurs systèmes et processus informatiques. Voici quelques-uns des services les plus courants :
            </p>
            <ul>
                <li style="color: #2e86c1"  data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/1-circle.png" alt="1-circle"/>Stratégie et planification informatique:
                    <ul>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Évaluer l'environnement informatique actuel de l'entreprise et identifier les besoins futurs.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Développer une stratégie informatique alignée sur les objectifs commerciaux de l'entreprise.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Élaborer un plan de mise en œuvre pour la stratégie informatique.</li>
                    </ul>
                </li>
                <li style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/2-circle.png" alt="2-circle"/>Conseil en infrastructure informatique:
                    <ul>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Concevoir et mettre en place des infrastructures informatiques sécurisées et évolutives.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Recommander des solutions de matériel et de logiciels adaptées aux besoins de l'entreprise.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Gérer et optimiser les performances de l'infrastructure informatique.</li>
                    </ul>
                </li>
                <li style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/3-circle.png" alt="3-circle"/>Développement d'applications:
                    <ul>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Développer des applications personnalisées pour répondre aux besoins spécifiques de l'entreprise.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Intégrer des applications existantes avec d'autres systèmes.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Assurer la maintenance et le support des applications.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
           <ul>
            <li style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up" ><img width="25" height="25" src="https://img.icons8.com/fluency/48/4-circle.png" alt="4-circle"/>Gestion de projet informatique:
                <ul>
                    <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Gérer des projets informatiques complexes de la planification à la mise en œuvre.</li>
                    <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Assurer la communication et la coordination entre toutes les parties prenantes.</li>
                    <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Respecter les délais et les budgets du projet.</li>
                </ul>
            </li>
            <li style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/5-circle.png" alt="5-circle"/>Formation et assistance informatique:
                <ul>
                    <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Former les employés à l'utilisation des systèmes et logiciels informatiques.</li>
                    <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Fournir une assistance informatique aux employés pour résoudre les problèmes techniques.</li>
                    <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Gérer les demandes de service informatique.</li>
                </ul>
            </li>
           </ul>

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <ul>
                <li style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/6-circle.png" alt="6-circle"/>Audit informatique:
                    <ul>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Évaluer l'état général des systèmes et processus informatiques de l'entreprise.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Identifier les risques et les problèmes potentiels.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Recommander des améliorations pour optimiser les performances informatiques.</li>
                    </ul>
                </li>
                <li style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/7-circle.png" alt="7-circle"/>Externalisation informatique (infogérance):
                    <ul>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Gérer et exploiter tout ou partie des systèmes informatiques de l'entreprise.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Fournir des services de maintenance et de support informatique.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Libérer les ressources internes de l'entreprise pour se concentrer sur les activités principales.</li>
                    </ul>
                </li>
                <li style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/8-circle.png" alt="8-circle"/>L'analyse de données</li>
                <li style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/9-circle.png" alt="9-circle"/>L'Internet des objets (IoT)</li>

            </ul>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h6 style="text-align:center" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><p>En faisant appel à votre cabinet informatique, les clients peuvent profiter de nombreux avantages, notamment :</h6></p>
            <ul>
                <li style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/1-circle.png" alt="1-circle"/>Expertise et expérience :
                    <ul>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Votre équipe d'experts possède une connaissance approfondie des technologies informatiques et des meilleures pratiques du secteur.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Ils peuvent vous aider à identifier vos besoins spécifiques et à élaborer des solutions adaptées à votre entreprise.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Ils vous font bénéficier de leur expérience pour vous aider à éviter les erreurs coûteuses et à optimiser vos investissements informatiques.</li>
                    </ul>
                </li>
                <li style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/2-circle.png" alt="2-circle"/>Gain de temps et d'argent :
                    <ul>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>En externalisant la gestion de votre système informatique à votre cabinet, vous libérez votre temps et vos ressources pour vous concentrer sur vos activités principales.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Vous pouvez réduire vos coûts informatiques en bénéficiant d'une expertise à la demande et en évitant les frais de recrutement et de formation d'un personnel informatique interne.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Vous pouvez améliorer votre productivité en bénéficiant d'un système informatique fiable et performant.</li>
                    </ul>
                </li>

            </ul>
        </div>

        <div class="col-sm-12 col-md-6 col-lg6">
            <ul>
                <li style="margin-top: 50px" style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/3-circle.png" alt="3-circle"/>Meilleure sécurité et fiabilité
                    <ul>
                        <li  data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Votre cabinet informatique peut vous aider à mettre en place des mesures de sécurité robustes pour protéger vos données sensibles contre les cybermenaces</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Ils peuvent vous assurer que votre système informatique est fiable et disponible en permanence, ce qui est essentiel pour la continuité de votre activité.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Ils peuvent vous aider à respecter les réglementations en vigueur en matière de protection des données.</li>
                    </ul>
                </li>

                <li style="color: #2e86c1" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="25" height="25" src="https://img.icons8.com/fluency/48/4-circle.png" alt="4-circle"/>Service client de qualité
                    <ul>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Votre cabinet informatique s'engage à vous fournir un service client de qualité et à répondre rapidement à vos demandes.</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Ils vous offrent un point de contact unique pour tous vos besoins informatiques, ce qui vous simplifie la vie</li>
                        <li data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up"><img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Ils développent une relation de confiance avec vous et vous conseillent objectivement sur les meilleures solutions pour votre entreprise.</li>
                    </ul>
                </li>
            </ul>
        </div>


</div>
<div class="container ">
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-8 col-lg-8 lo">
            <h2 style="color: #2e86c1"  data-aos-duration="1000" data-aos-delay="1000"  class="roboto-light-italic" data-aos="fade-up">Présentation du cabinet</h2>

            <p data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
                Cabinet de conseil proposant des solutions dans les nouvelles technologies digitales, Marketing Digital & Communication, Entrepreneuriat web et Business en ligne
            </p>
            <p data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
                Cabinet spécialisé en Création et gestion de sites web, E-commerce, marketing stratégique, opérationnel et relationnel, communication digitale et visuelle (Graphic Design), techniques et stratégies de vente en ligne et Gestion de projets digitaux créés.
            </p>
            <p data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">
                l’Entreprise InnovaTech composée d’une équipe d’experts qui bénéficient d’expérience chez des annonceurs, web agenciers ou e-commerçants majeurs. Tous les consultants et conseillers seniors sont des experts reconnus de leurs champs d’action.
            </p>
            <a href="#" class="btn btnb" data-aos-duration="1000" data-aos-delay="1000" data-aos="fade-up">Consulter un expert</a>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
    </div>
</div>
@endsection
