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
	            <form method="post" action="{{route('register.store')}}">
                @csrf
	                <div class="details-section">
	                  <h3> S’ENREGISTRER </h3>
	                </div>
	                <div class="info">
                     <div class="form-group">
                    <input type="hidden" name="role" value="user">

	                      <p> username  <span> * </span></p>
	                      <input type="text" name="name" class="form-control details">
	                    </div>
	                    <div class="form-group">
	                      <p> Adresse de messagerie  <span> * </span></p>
	                      <input type="email" name="email" class="form-control details">
	                    </div>
	                    <div class="form-group">
	                      <p> Mot de passe <span> * </span> </p>
	                      <input type="password" name="password" class="form-control details">
	                    </div>
	                </div>
	                <div class="form-group">
	                  <input type="submit" class="woocommerce-Button button" name="submit" value="S’ENREGISTRER">
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
	                      <a href="{{ route('login.create') }}" class="btn woodmart-switch-to-register">CONNEXION</a>
	                  </div>
	              </div>
	          </div>
	      </div>
	    </div>  
	  </div>
	</div>

	@endsection
	
