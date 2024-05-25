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
</body>
</html>
