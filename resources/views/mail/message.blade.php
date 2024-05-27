<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>message de remerciement</title>
</head>
<body>

    <?php $now=now(); ?>
    <img src="{{ asset('img/logo.jpg') }}" style="width: 100px" alt="">
    <h2>SERVICE CLIENT</h2>
    <H4>Département innovatech</H4>
    <h5>17, kikwit2, mazamba, mont-ngafula</h5>
    <h4>www.innovatechdrc.com</h4>
    <p>
        Kinshasa  le {{   $currentDate = $now->format('d/m/Y') }} à {{   $currentTime = $now->format('H:i:s')}} <br>
        Objet: Notificattion de réception de votre Méssage
    </p>
   <p>
    Vous avez reçu un message de monsieur {{ $nom }} {{ $postnom }} <br>
    veillez lui repondre à travers son numero whatsapt {{ $phone }} <br>
    son adresse mail est : {{ $email }}
    son message est : {{ $messages }}
   </p>
   <a  href="https://www.facebook.com/profile.php?id=61557642663268"><img class="iconn" src="{{ asset('img/Facebook-256.png') }}" style="margin:10px;width:20px" alt=""></a>



                <a href="https://www.linkedin.com/company/innovatech-drc"><img class="iconn" style="margin:10px;width:20px" src="{{ asset('img/LinkedIn-256.png') }}" alt=""></a>

                <a  href="https://wa.me/message/5FRTNAD43W7CO1"><img style="margin:10px;width:20px" class="iconn" src="{{ asset('img/WhatsApp-256.png') }}" alt=""></a>
</body>
</html>
