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
        Bonjour monsieur/madame {{ $nom }} {{ $postnom }},<br>

    </p>
    <p>
        Nous vous confirmons avoir reçu votre message et nous allons vous répondre dans un bref delais pour vous donner une réponse.
    </p>
    <p>
        Vous pouvez nous écrire sur whatsapp au numero +243 854 688 281 ou nous appeler au +243 821 248 030 ou passer au bureau
    </p>
    <p>
        Service client innovatech
    </p>

</body>
</html>
