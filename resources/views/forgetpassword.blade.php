@extends('layout/index')
@section('content')

<div class="entry-content topclass">
  <div class="container">
    <div class="forget-password">
      <p> Mot de passe perdu ? Veuillez saisir votre identifiant ou votre adresse e-mail. Vous recevrez un lien par e-mail pour créer un nouveau mot de passe. </p>
      <form id="forget-password-form" role="form" method="post" action="{{ url('password-reset') }}">
       @csrf
        <div class="form-group col-md-12 email-stuff">
          <p> Identifiant ou e-mail </p>
          <input type="email" name="email" class="form-control details">
        </div>
        <div class="form-group col-md-12 button-woo">
          <button type="submit" class="woocommerce-Button button forgotpass" value="Réinitialisation du mot de passe">Réinitialisation du mot de passe</button>
        </div>
    </form>
    </div>
  </div>
</div>


@endsection