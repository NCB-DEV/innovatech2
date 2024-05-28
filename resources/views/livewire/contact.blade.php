<div>
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item items">
                      <a wire:click="afficherdiv('vente')" class="nav-link active" aria-current="page" href="#"><img width="20" height="20" src="https://img.icons8.com/offices/30/whatsapp.png" alt="whatsapp"/>whatsapp</a>
                    </li>
                    <li class="nav-item items">
                      <a wire:click="afficherdiv('Location')" class="nav-link" href="#"><img width="20" height="20" src="https://img.icons8.com/fluency/48/phone--v1.png" alt="phone--v1"/>Téléphone</a>
                    </li>
                    <li class="nav-item items">
                        <a wire:click="afficherdiv('afficherform')" class="nav-link" href="#"><img width="20" height="20" src="https://img.icons8.com/office/16/form.png" alt="form"/>formulaire</a>
                      </li>
                  </ul>

            </div>
        </div>
    </div>

    <div id="vente" @if($afficherVente) style="display:block" @else style="display:none" @endif class="contactjj solution">
        <h3 class="titre-secondaire"><img width="25" height="25" src="https://img.icons8.com/offices/30/whatsapp.png" alt="whatsapp"/>whatsapp</h3>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contacts"  style="text-align: center">
                        <p class="text" style="text-align: center">
                            Veillez nous ecrire sur whatsapp
                        </p>
                        <a style="font-weight: bold;font-size:2em"  href="https://wa.me/message/5FRTNAD43W7CO1"><img width="35" height="35" src="https://img.icons8.com/offices/30/whatsapp.png" alt="whatsapp"/> +243 854 688 281</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="location" @if($afficherLocation) style="display:block" @else style="display:none" @endif class="contactjj solution">
        <h3 class="titre-secondaire"><img width="25" height="25" src="https://img.icons8.com/fluency/48/phone--v1.png" alt="phone--v1"/>Téléphone</h3>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contacts" style="text-align: center">
                        <p class="text">
                            Veillez nous appeler
                        </p>
                        <img width="35" height="35" src="https://img.icons8.com/fluency/48/phone--v1.png" alt="phone--v1"/><a style="font-weight: bold;font-size:2em" href="tel:+243 821 248 030">+243 821 248 030</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="afficherform" @if($afficherform) style="display:block" @else style="display:none" @endif class="contactjjj solution">
        <h3 class="titre-secondaire"><img width="25" height="25" src="https://img.icons8.com/office/16/form.png" alt="form"/>Formulaire</h3>
        <div class="container">
            <div class="row fior " >
                <div class="col-12 formss">
                    <div class="contacts">
                        <p style="text-align: center" class="text">
                            Veillez remplir ce formulaire pour nous écrire
                            @if ($successMessage)
                                         <div class="alert alert-success" role="alert">
                                             {{ $successMessage }}
                                         </div>
                                     @endif
                        </p>
                        <div class="row text">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <img  class="img" src="{{ asset('img/job-interview-3410427_1280.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <form wire:submit.prevent="submit">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">

                                                <div  wire:message.error="nom">
                                                    <span class="text-danger" class="error-message">{{ $errors->first('nom') }}</span>
                                                </div>
                                            <label for="nom">Nom<span style="color: red">*</span></label>
                                            @error('form.nom')
                                               <div class="invalid-feedback">{{ $messages }}</div>
                                            @enderror
                                            <input  wire:model="nom" class="form-control is-invalid" type="text" name="" id="nom" placeholder=" Nom">
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div  wire:message.error="postnom">
                                                <span class="text-danger" class="error-message">{{ $errors->first('postnom') }}</span>
                                            </div>
                                            <label for="postnom">Postnom<span style="color: red">*</span></label>
                                            @error('postnom')
                                               <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <input wire:model="postnom"  class="form-control is-invalid" type="text" name="" id="postnom" placeholder=" Postnom">
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div  wire:message.error="phone">
                                                <span class="text-danger" class="error-message">{{ $errors->first('phone') }}</span>
                                            </div>
                                            <label for="phone">Téléphone<span style="color: red">*</span></label>
                                            @error('phone')
                                               <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <input wire:model="phone" class="form-control is-invalid" type="text" name="" id="phone" placeholder=" Téléphone">
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div  wire:message.error="email">
                                                <span class="text-danger" class="error-message">{{ $errors->first('email') }}</span>
                                            </div>
                                            <label for="nom">E-mail<span style="color: red">*</span></label>
                                            @error('email')
                                               <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <input wire:model="email" class="form-control is-invalid" type="email" name="" id="mail" placeholder=" E-mail">
                                        </div>
                                        <div class="col-12">
                                            <div  wire:message.error="message">
                                                <span class="text-danger" class="error-message">{{ $errors->first('message') }}</span>
                                            </div>
                                            <label for="message">Méssage<span style="color: red">*</span></label>
                                            @error('message')
                                               <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <textarea wire:model="message" name="message" class="form-control is-invalid" id="message" cols="30" rows="5" placeholder=" Message"></textarea>
                                        </div>
                                        <div class="col-6">
                                            <button  style="margin-top: 10px" type="submit" class="bouton btn btnb">Envoyer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('js/validation.js') }}"></script>
</div>
