@extends('layout.index')

@section('content')
<div class="vendor-section">
  <div class="demander-compte">
    <h1> Demandez Un Compte Marchant  </h1>
    <div class="nous-section">
      <p> Nous répondrons à toutes vos questions sur les ventes en ligne, droit partenariat ci-dessous. </p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <div class="form-section">
        <form id="verdor-registration-form"  role="form" method="post" action="{{route('vendor.register')}}">
        <input type="hidden" name="role" value="vendor">
         @csrf
          <div class="details-section">
            <h3> DÉTAILS DE CONNEXION </h3>
          </div>
            <div class="info">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputnom4">Adresse de messagerie <span> * </span></label>
                  <input type="email" class="form-control details" id="" name="email"><br>
                </div>
                
                <div class="form-group col-md-6">
                  <label for="inputvotre4"> Mot de passe <span> * </span> </label>
                  <input type="password" name="password" class="form-control details"><br>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="details-section">
                  <h3> INFORMATIONS PERSONNELLES </h3>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputnumero4">Nom & Prénom <span> * </span></label>
                    <input type="text" name="fullname" class="form-control details"><br>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputcompagnie4">Numéro de Téléphone <span> * </span></label>
                    <input type="text" name="phone" class="form-control details"><br>
                  </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputvotre4"> Nom de votre Boutique <span> * </span> </label>
                  <input type="text" name="shopName" class="form-control details"><br>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputnumero4"> Pays <span> * </span></label>
                    <select class="select_box" name="country" >
                      <option value="">test</option>
                    </select>
                    <br>
                  </div>

                  <div class="form-group col-md-6">
                      <label for="inputcompagnie4" > Adresse <span> * </span></label>
                      <input type="text" name="address" class="form-control details"><br>
                  </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputnumero4">Ville / Commune <span> * </span></label>
                  <input type="text" name="city" class="form-control details"><br>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputcompagnie4">Sélectionnez l'endroit d'où vous travaillez <span> * </span></label>
                    <select class="select_box" name="workplace" required="required">
                      <option value="Kinshasa" selected="selected">Kinshasa</option>
                    </select><br>
                </div>
             </div>
             <div class="clearfix"></div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputmessage4">Que vais-je vendre </label>
              <textarea class="form-control vendre-info" name="sellingInformation"></textarea>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 details-section">
              <h3> DONNÉES BANCAIRES </h3>
          </div>

          <div class="form-row">
              <div class="form-group col-md-12">
                <div class="receiver-section">
                  <label class="commento"> Comment vais-je recevoir mes paiements? </label>
                    <p> <input type="radio" checked="checked" name="mode" value="Credit">
                      Carte de Crédit
                    </p>
                    <p> <input type="radio" name="mode" value="Cash">
                        Cash
                    </p>
                </div>
             </div>
          </div>
          <div class="clearfix"></div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputvotre4"> Numéro de carte </label>
            <input type="text" name="cardnumber" class="form-control details">
          </div>
        </div>  
        <div class="clearfix"></div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputnom4"> Date d'expiration </label>
              <input type="text" name="expiry" class="form-control details">
            </div>
            <div class="form-group col-md-6">
              <label for="inputvotre4"> CCV </label>
              <input type="text" name="ccv" class="form-control details">
            </div>
       </div>
       <div class="clearfix"></div>
       <div class="form-row">
          <div class="col-md-12">
            <div class="checbox-section">
                <input type="checkbox" name="" checked="checked" required="required">
                <p class="accept">J'accepte les <a href="#" target="_blank"> Termes &amp; Conditions </a>
                  <span class="required">
                    *
                    </span>
                  </p>
            </div>
          </div>
       </div>
       <div class="clearfix"></div>
      <div class="form-row">
          <div class="form-group col-md-12">
              <input type="submit" class="enregister-button" name="register" value="S’ENREGISTRER">
          </div>
      </div>
      </form>
      <div class="clearfix"></div>
      <!-- <div class="form-row"> -->
        <div class="vendor-section">
            <div class="demander-compte responde">
              <h2 class="respond-section"> Faites-vous répondre à toutes vos questions.  </h2>
              <div class="nous-section toutes">
                <p> Nous répondrons ici à toutes vos questions sur les ventes en ligne. </p>
              </div>
            </div>
        </div>

        <div class="wpb_wrapper">
          <p>Lundi à&nbsp; Vendredi de&nbsp;
            <strong>08:00 à 18:00 UTC +1</strong>
          </p>
        </div>

        <a class="btn btn-color-primary" data-target="#ContactModalCenter" data-toggle="modal">
          CONTACT OUR COMPANY
        </a>

        <div class="social-media-section socialIcons">
          <ul>
            <li> <i class="fa fa-facebook social social-fb" aria-hidden="true"></i> </li>
            <li> <i class="fa fa-twitter social social-twitter" aria-hidden="true"></i> </li>
            <li> <i class="fa fa-google-plus social social-google" aria-hidden="true"></i> </li>
            <li> <i class="fa fa-envelope-o social social-msg" aria-hidden="true"></i> </li>
            <li> <i class="fa fa-pinterest social social-pin" aria-hidden="true"></i> </li>
          </ul>
        </div>
      <!-- </div> -->
        </div>
      </div>
    </div>
</div>


@endsection