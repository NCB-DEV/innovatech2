<div class="container-fluid  footers ">
    <div class="row">
        <div class="col-sm-12 col-lg-4 col-md-4">

              <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo_f" src="{{ asset('img/innovatech.png') }}" alt="">
              </a> <br>
              <p>
                votre partenaire dans la transformation digitale de votre entreprise
              </p>
              <p>
                <img width="20" height="20" src="https://img.icons8.com/color/48/marker--v1.png" alt="marker--v1"/>C. mont-ngafula , Q.Mazamba , Av. Kikwit2 , N°17
              </p>
                <a  href="https://www.facebook.com/profile.php?id=61557642663268"><img class="iconn" src="{{ asset('img/Facebook-256.png') }}" style="margin:10px;width:20px" alt=""></a>



                <a href="https://www.linkedin.com/company/innovatech-drc"><img class="iconn" style="margin:10px;width:20px" src="{{ asset('img/LinkedIn-256.png') }}" alt=""></a>

                <a  href="https://wa.me/message/5FRTNAD43W7CO1"><img style="margin:10px;width:20px" class="iconn" src="{{ asset('img/WhatsApp-256.png') }}" alt=""></a>

        </div>
        <div class="col-sm-12 col-lg-4 col-md 4">
            <h4 style="text-align: center;margin-top:60px" class="">HORAIRE DE TRAVAIL</h4>
            <p style="text-align: center" class="kanit-black-italic">
                <img width="20" height="20" src="https://img.icons8.com/color/48/time.png" alt="time"/>9H-17H:Lundi-vendredi <br>
                <img width="20" height="20" src="https://img.icons8.com/color/48/time.png" alt="time"/>9H-13H:samedi
            </p>
        </div>
        <div class="col-sm-12 col-lg-4 col-md-4" style="text-align: center">
            <h1 style="text-align: center;margin-top:60px">NewsLetters</h1 >
            <p>
                Abonnez-vous à notre NewsLetters pour ne pas manquer nos nouvelles
            </p>
            <form action="{{ route('abonnement') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    @error('mail')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <input type="text" name="mail" class="form-control" placeholder="Adresse email" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn bouton" type="submit" id="button-addon2">Inscrivez-vous</button>
                  </div>
            </form>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            copyright 2022-2024 InnovaTech
        </div>
    </div>
</div>
