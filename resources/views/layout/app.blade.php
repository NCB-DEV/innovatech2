<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset('aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400..700&family=Indie+Flower&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400..700&family=Indie+Flower&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid contact">
        <div class="row">
            <div class="col-3">
                <a  href="https://www.facebook.com/profile.php?id=61557642663268">

                    <img width="25" height="25" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/>
                </a>
                <a href="https://www.linkedin.com/company/innovatech-drc">
                    <img width="25" height="25" src="https://img.icons8.com/fluency/48/linkedin.png" alt="linkedin"/>
                </a>

                <a  href="https://wa.me/message/5FRTNAD43W7CO1">
                    <img width="25" height="25" src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp--v1"/>
                </a>
            </div>
            <div class="col-5"></div>
            <div class="col-4">
                <a class="akl" href="mailto:service.client@innovatechdrc.com"><img width="25" height="25" src="https://img.icons8.com/color/48/apple-mail.png" alt="apple-mail"/>service.client@innovatechdrc.com</a>
                <a class="akl"  href="tel:+243821248030"> <img width="25" height="25" src="https://img.icons8.com/color/48/apple-phone.png" alt="apple-phone"/>+243 821 248 030</a>
            </div>
        </div>
    </div>
    @include('menu.menu')
    @yield('accueil')
    @yield('siteweb')



<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('aos/aos.js') }}"></script>
<script>
    AOS.init();
</script>
</body>
</html>
