@extends('layout.index')


@section('content')
<div class="page-title page-title-default title-size-default color-scheme-light title-design-centered">
    <div class="container">
        <header class="entry-header">
          <h1 class="entry-title">Mon Compte</h1>
            <div class="breadcrumbs">
              <a href="#">Home</a>
              <span class="current">
                / Mon Compte
              </span>
            </div>
        </header>
    </div>
</div>
               
                                                         


<div class="container">
  <div class="row">
    <div class="mainwrap"> 
      <div class="col-md-6">
        <div class="form-section">
            <form method="post" action="{{Route('login.store')}}">
               @csrf
                <div class="details-section">
                  <h3> CONNEXION </h3>
                </div>
                <div class="info">
                    <div class="form-group col-md-12">
                     
                      
                      
                      @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>

                                @endforeach
                            </ul>
                        </div>

                        @endif
                      
                      
                      
                      
                      
                      <p> Username or email address  <span> * </span></p>
                      <input type="email" class="form-control details" name="email" [(ngmodel)]="loginForm.email">
                    </div>
                    <div class="form-group col-md-12">
                      <p> Mot de passe <span> * </span> </p>
                      <input type="password" class="form-control details" name="password" [(ngmodel)]="loginForm.password">
                    </div>
                </div>
                <div class="form-group col-md-12">
                  <input type="submit" class="woocommerce-Button button" name="login" value="CONNEXION">
                </div>
                
                <div class="form-group col-md-12">
                  <input type="checkbox">
                  <p class="remember"> Remember me </p>
                  <a href="{{Route('login.forgetpassword')}}"> <p class="forgot"> Lost your password? </p> </a>
                </div>

                <div class="form-group col-md-12">
                    <div class="border-top"></div>
                  <p class="oui"> OU CONNECTEZ-VOUS AVEC </p>
                </div>

                <div class="clearfix"></div>

                <div class="form-group col-md-12">
                    <i class="fa fa-facebook social-media" aria-hidden="true"></i>  <input type="submit" class="woocommerce-Button button fb" name="fb" value="FACEBOOK">
                </div>
            </form>
        </div>
      </div>
      <div class="col-md-6">
          <div class="form-group col-md-12">
              <div class="details-section center">
                  <h3> S’ENREGISTRER </h3>
                  <p class="inscription"> L'inscription sur ce site vous permet d'accéder à l'état et à l'historique de vos commandes. Remplissez simplement les champs ci-dessous, et nous vous créerons un nouveau compte en un rien de temps. Nous vous demanderons uniquement les informations nécessaires pour accélérer et faciliter le processus d'achat. </p>
                  <div class="register">
                      <a href="{{route('register.create')}}" class="btn woodmart-switch-to-register">S’enregistrer</a>
                  </div>
              </div>
          </div>
      </div>
    </div>  
  </div>
</div>

@endsection
