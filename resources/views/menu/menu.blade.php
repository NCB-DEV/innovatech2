
<nav class="navbar navbar-text navbar-expand-lg  navbar-light ">

    <div class="container menu">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img class="logo" src="{{ asset('img/innovatech.png') }}" alt="">
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  ul" id="navbarNavDropdown">
        <ul class="navbar-nav ul">
          <li class="nav-item li">
            <a class="nav-link active li" aria-current="page" href="{{ url('/') }}">Accueil</a>
          </li>
          <li class="nav-item li">
            <a class="nav-link li" href="{{ route('A-propos') }}">A propos</a>
          </li>
          <li class="nav-item dropdown li">
            <a class="nav-link dropdown-toggle li" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Solutions
            </a>
            <ul class="dropdown-menu sous-ul" aria-labelledby="navbarDropdownMenuLink">
              <li class="li"><a class="dropdown-item  li" href="{{ route('Site-web') }}">Application web & mobile</a></li>
              <li class="li"><a class="dropdown-item li" href="{{ route('Hebergement') }}">Hébergement web</a></li>
              <li class="li"><a class="dropdown-item li" href="{{ route('Robot-rpa') }}">Robot RPA</a></li>
              <li class="li"><a class="dropdown-item li" href="{{ route('Marketing-Digital') }}">Marketing Digital</a></li>
              <li class="li"><a class="dropdown-item li" href="{{ route('Application-de-gestion') }}">Logiciels de gestion</a></li>

            </ul>
          </li>

          <li class="nav-item li">
            <a class="nav-link li" href="{{ route('Contacts') }}">Contact</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
