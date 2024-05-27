@extends('layout.app')
@section('title')
Accueil-InnovaTech
@endsection
@section('accueil')
<div class=" barner-Accueil1 ">
    <div class="row">
        @include('layout.courousel')
           <a href="{{ route('Contacts') }}" class="bouton action1 btn">Nous contactez</a>

    </div>
</div>

<div class="container-fluid solution" style="text-align: center">
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-8 col-lg-8 ok-55555555"data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <p class="text-grand"><strong class="p-1">InnovaTech</strong> vous accompage vers votre réussite!</p>
            <p>
                Chez <strong> Innovatech</strong>, nous nous engageons à fournir à nos <strong> clients</strong> des solutions <strong>technologiques</strong> de pointe qui répondent à leurs besoins spécifiques et les aident à atteindre leurs <strong>objectifs</strong>.
            </p>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
    </div>
</div>


<div class="container barniere-2 solution">
    <div class="row">
        <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" class="kanit-semibold titre-principal" style="text-align: center">Nos services</h3>
        <div class="col-sm-12 col-md-6 col-lg-3 ">
            <a href="{{ route('Site-web') }}" class="a">
                <div class="nosulutions" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <img width="50" height="50" src="https://img.icons8.com/cotton/64/web-design--v1.png" alt="web-design--v1"/>
                    <h5 class="kanit-regular">Site web</h5>
                    <p>
                        Une présence en ligne efficace pour accroitere  votre visibilité
                    </p>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <a href="{{ route('Site-web') }}" class="a">
                <div class="nosulutions"data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <img width="50" height="50" src="https://img.icons8.com/pastel-glyph/64/globe.png" alt="globe"/>
                    <h5 class="kanit-regular">Application web</h5>
                    <p>
                        Une experience utilisateur unique pour tous  vos  bésoins
                    </p>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 " >
            <a href="{{ route('Site-web') }}" class="a">
                <div class="nosulutions "data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <img width="50" height="50" src="https://img.icons8.com/nolan/64/google-mobile.png" alt="google-mobile"/>
                    <h5 class="kanit-regular">Application mobile</h5>
                    <p>
                        Vous permet de fidéliser vos clients, d'améliorer l'accessibilité à vos produits et services et de réduire vos coûts
                    </p>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <a href="{{ route('Robot-rpa') }}" class="a">
                <div class="nosulutions "data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <img width="50" height="50" src="https://img.icons8.com/pastel-glyph/64/robot-2--v2.png" alt="robot-2--v2"/>
                    <h5 class="kanit-regular">Robot RPA</h5>
                    <p >
                       Vous permet d'automatiser vos taches répetitives et chronophages
                    </p>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <a href="{{ route('Marketing-Digital') }}" class="a">
                <div class="nosulutions "data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <img width="50" height="50" src="https://img.icons8.com/clouds/100/commercial.png" alt="commercial"/>
                    <h5 class="kanit-regular">Marketing Digital</h5>
                    <p >
                        Faites connaitres vos produits ou marques avec nos strategies marketing enfin d'accroitre votre chiffre d'affaire
                    </p>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <a href="{{ route('Application-de-gestion') }}" class="a">
                <div class="nosulutions "data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <img width="50" height="50" src="https://img.icons8.com/nolan/64/computer.png" alt="computer"/>
                    <h5 class="kanit-regular">Application de gestion</h5>
                    <p >
                        Gerez votre société avec nos applications développées sur mésure
                    </p>
                </div>
            </a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3">
            <a class="a" href="#">
                <div class="nosulutions "data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <img width="80" height="80" src="https://img.icons8.com/clouds/100/new-post.png" alt="new-post"/>
                    <h5 class="kanit-regular">Création des emails</h5>
                    <p >
                       Faites accroitre votre crédibilité, confiance et votre image en obtenant les e-mails pros
                    </p>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <a class="a" href="{{ route('Cabinet-conseils') }}">
                <div class="nosulutions "data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <img width="30" height="30" src="https://img.icons8.com/ios/50/informatics.png" alt="informatics"/>
                    <h5 class="kanit-regular">Cabinet des conseils</h5>
                    <p >
                        Un cabinet informatique est formé d'une équipe d'experts qui offre une large gamme de services pour répondre aux besoins informatiques
                    </p>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container solution">
    <div class="row ">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <img class="img" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100" src="{{ asset('img/pourquoi.jpg') }}" alt="">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <h3  class="kanit-semibold titre-principal" style="text-align: center">Pourquoi nous choisir?</h3>
            <p class="text">
                Innovatech est un cabinet de conseil en transformation digitale qui possède une vaste expérience et une expertise dans l'accompagnement des entreprises de toutes tailles dans leur parcours de transformation digitale. Nous sommes passionnés par l'aide aux entreprises à tirer parti du pouvoir de la technologie pour améliorer leurs opérations, accroître leur efficacité et stimuler leur croissance.
            </p>
            <p class="text">
                Voici les raisons de choisir innovatech: <br>
                <img width="20 " height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Expertise et expérience <br>
                <img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Approche centrée sur le client <br>
                <img width="20" height="20" src="https://img.icons8.com/emoji/48/check-mark-emoji.png" alt="check-mark-emoji"/>Engagement envers les résultats <br>
                <a class=" btn bouton" href="{{ route('Contacts') }}">Contactez-nous</a>
            </p>
        </div>
    </div>
</div>
<div class="container-fluid temoignage solution" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-8 col-lg-8">

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <h4 class="text-grand kanit-bold-italic" style="text-align: center">Jean-Pierre Mukendi</h4>
                    <h5 class="titre-secondaire" style="text-align: center">PDG d'Immo-Congo</h5>
                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-lg-12" style="text-align:justify">


                            <p >
                                "la collaboration avec Innovatech a été une expérience extrêmement positive pour Immo-Congo. La transformation digitale a permis à notre entreprise de se moderniser, d'accroître sa visibilité en ligne et de stimuler sa croissance. Nous sommes très satisfaits des résultats obtenus et nous recommandons vivement Innovatech à toutes les entreprises qui souhaitent se lancer dans une transformation digitale réussie.
                            </p>
                            <p >
                                Je tiens à remercier personnellement l'équipe d'Innovatech pour leur expertise, leur professionnalisme et leur engagement dans la réussite de notre projet. Ils ont été des partenaires précieux tout au long de ce processus et nous sommes fiers de la relation que nous avons bâtie avec eux. "<br>
                                <code style="text-align: center">Jean-Pierre Mukendi</code>
                            </p>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                        <div class="row">
                            <h4 class="text-grand kanit-bold-italic" style="text-align: center">Kasereka Kurubi</h4>
                        <h5 class="titre-secondaire">PDG de Sauvons le Congo</h5>

                            <div class="col-sm-12 col-md-12 col-lg-12" style="text-align:justify">

                        <p >
                            "Je félicite de tout cœur l'équipe d'Innovatech pour son engagement indéfectible, son expertise exceptionnelle et sa passion sincère pour l'autonomisation des organisations à but non lucratif comme la nôtre. Leur partenariat a joué un rôle déterminant dans la propulsion de Sauvons le Congo vers l'accomplissement de sa mission et un impact durable sur nos communautés.
                        </p>
                        <p >
                            Dès le départ, l'équipe d'Innovatech a fait preuve d'une compréhension profonde de nos défis et de nos aspirations. Ils ont pris le temps de s'immerger dans notre travail, acquérant une compréhension complète de notre mission, de notre public cible et de nos besoins opérationnels. Cette compréhension approfondie leur a permis d'élaborer une stratégie de transformation digitale sur mesure qui correspondait parfaitement à nos objectifs.
                        </p>
                        <p >
                            L'expertise d'Innovatech en marketing digital a propulsé notre portée et notre impact. Ils nous ont guidés dans le développement et l'exécution de campagnes ciblées qui ont élargi notre présence en ligne, sensibilisé à notre cause et attiré de nouveaux supporters d'horizons divers. Ces campagnes ont joué un rôle crucial dans l'amplification de notre impact et la promotion d'un changement positif." <br>
                            <code style="text-align: center">Kasereka Kurubi</code>
                        </p>
                  </div>
                            </div>
                        </div>
                  <div class="carousel-item">
                    <div class="row">
                        <h4 class="titre-principal kanit-bold-italic" style="text-align: center">Katang nawej</h4>
                    <h5 class="titre-secondaire">PDG de Sauvons le Congo</h5>

                        <div class="col-sm-12 col-md-12 col-lg-12" style="text-align:justify">


                    <p >
                       " Dès le départ, l'équipe d'Innovatech a fait preuve d'une compréhension profonde de nos besoins et aspirations uniques en tant qu'établissement d'enseignement. Ils ont pris le temps de s'immerger dans notre culture scolaire, notre programme d'études et notre infrastructure technologique, acquérant une compréhension complète de nos objectifs et de nos défis. Cette compréhension approfondie leur a permis d'élaborer une stratégie de transformation digitale sur mesure qui correspondait parfaitement à notre vision de l'éducation future.
                    </p>
                    <p >
                        L'expertise d'Innovatech en matière de technologie éducative nous a permis d'explorer des moyens innovants d'améliorer les expériences d'apprentissage de nos élèves. Nous avons introduit des technologies de réalité virtuelle (VR) et de réalité augmentée (AR) dans nos salles de classe, offrant aux élèves des expériences d'apprentissage immersives et interactives qui donnent vie aux concepts. Ces technologies innovantes ont suscité la curiosité des élèves, approfondi leur compréhension et favorisé l'amour de l'apprentissage. "<br>
                        <code style="text-align: center">Katang nawej</code>
                    </p>
              </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
    </div>
</div>
</div>
<div  class="container-fluid fond solution expli" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-4" data-aos-duration="1000" data-aos-delay="100">
            <div class="presentat">
                <video controls width="100%" src="{{ asset('videos/4094-176873194_small.mp4') }}"></video>
                <h2   class="kanit-semibold titre-principal" style="text-align: center">InnovaTech en vidéo</h2>
                <p class="text" style="text-align: center">
                    InnovaTech est une agence spécialisée en développement applications, communication, stratégie marketing que ce soit pour la création d'un site web ou d'acquisition de trafic.
                </p>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-4" data-aos-duration="1000" data-aos-delay="100">
            <div class="presentat">
                <video controls width="100%" src="{{ asset('videos/12716-241674181_small.mp4') }}"></video>
                <h2   class="kanit-semibold titre-principal" style="text-align: center">Nos différentes formations</h2>
                <p class="text" style="text-align: center">
                    Nos formations sont personnalisées et individualisées pour que vous puissiez gérer votre activité sur le web en toute indépendance: Référencement Naturel, Google Adwords, Social média.
                </p>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-4 "data-aos-duration="1000" data-aos-delay="100" style="margin-bottom: 20px">
            <div class="presentat">
                <video width="100%" controls src="{{ asset('videos/27706-365890968_small.mp4') }}"></video>
                <h2   class="kanit-semibold titre-principal" style="text-align: center">Notre méthodologie de développement</h2>
                <p style="text-align: center" class="text">
                    Notre maîtrise technologique nous permet de créer des sites web, des applis mobiles ou métiers sur-mesure et d'intégrer les principales solutions technologiques du marché.
                </p>
            </div>
        </div>
    </div>
</div>

<div id="cookie-alert" class="alert alert-info fixed-bottom" style="z-index: 1111111111111111111111111111111">
    <p>Ce site utilise des cookies pour améliorer votre expérience. En poursuivant votre navigation, vous acceptez leur utilisation.</p>
    <button type="button" class="btn btn-primary btn-sm accept-cookies">Accepter les cookies</button>
  </div>
<script>
  const cookieAlert = document.getElementById('cookie-alert');
const acceptButton = document.querySelector('.accept-cookies');

// Vérifier si le message a déjà été affiché dans cette session
const hasSeenAlert = localStorage.getItem('seenCookieAlert');
if (hasSeenAlert) {
  cookieAlert.style.display = 'none';
} else {
  localStorage.setItem('seenCookieAlert', 'true');
}

acceptButton.addEventListener('click', () => {
  // Définir le cookie avec une date d'expiration d'une heure à partir de maintenant
  const expires = new Date();
  expires.setTime(expires.getTime() + 3600000); // 1 heure en millisecondes
  document.cookie = `cookie_consent=accepted; expires=${expires.toUTCString()}; path=/`;
  cookieAlert.style.display = 'none';
});

// Vérifier si le cookie de consentement est défini et s'il est encore valide
if (document.cookie.indexOf('cookie_consent=') !== -1) {
  const cookieParts = document.cookie.split('; ');
  for (const part of cookieParts) {
    if (part.startsWith('cookie_consent=')) {
      const expiresString = part.split('=')[1];
      const expiresDate = new Date(expiresString);
      if (Date.now() > expiresDate.getTime()) {
        // Le cookie a expiré, effacer le stockage local et afficher le message
        localStorage.removeItem('seenCookieAlert');
        document.cookie = 'cookie_consent=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/';
        cookieAlert.style.display = 'block';
      }
      break;
    }
  }
}


</script>


<!-----------
<div class="container">
    <div class="row">
        <h2>Nos réalisation</h2>
        <div class="row">
            <div class="col-sm-12 col-md-2 col-lg-4">
                <a href="#">
                 <div class="realisation">
                     <div class="imgrealisation">
                         <img class="realisation-img" src="{{ asset('img/logo.jpg') }}" alt="">
                     </div>
                     <p>
                        Site wep permettant de vendre ou/et d'acheter et louer les biens immobilier en République Démocratique du Congo
                     </p>
                 </div>
                </a>
             </div>
             <div class="col-sm-12 col-md-2 col-lg-4"></div>
             <div class="col-sm-12 col-md-2 col-lg-4"></div>
             <div class="col-sm-12 col-md-2 col-lg-4"></div>
        </div>
    </div>
</div>
-------------->
@endsection
