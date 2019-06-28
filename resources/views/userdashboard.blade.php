
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

<!-- UserSidebar -->
<div class="user-sidebar">
  <div class="container">
    <div class="row">
      <div class="col-md-3 sidebar">
        <h4> MON COMPTE </h4>
        <ul class="nav nav-pills nav-stacked tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Tableau de bord</a></li>
          <li><a href="#tab2" data-toggle="tab"> Commandes </a></li>
          <li><a href="#tab3" data-toggle="tab"> Cartes cadeau </a></li>
          <li><a href="#tab4" data-toggle="tab"> Followings </a></li>
          <li><a href="#tab5" data-toggle="tab"> Tickets Support </a></li>
          <li><a href="#tab6" data-toggle="tab"> Adresses </a></li>
          <li><a href="#tab7" data-toggle="tab"> Détails du compte </a></li>
          <li><a href="#tab1" data-toggle="tab"> Mon Compte </a></li>
          <li><a href="{{route('login.destroy')}}"> Déconnexion </a></li>
        </ul>
      </div>

      <div class="tab-content">
        <div class="tab-pane active text-style" id="tab1">
          <div class="account-section">
            <div class="col-md-9 account-content">
              <div class="account" *ngif="userData">
                <p><span> Bonjour </span> <strong> </strong>
                 (<span> vous n’êtes pas </span> <strong> </strong> ? <a href="{{route('login.destroy')}}"> Déconnexion) </a>
                </p>
                <p class="bord"> À partir du tableau de bord de votre compte, vous pouvez visualiser vos commandes récentes, gérer vos adresses de livraison et de facturation ainsi que changer votre mot de passe et les détails de votre compte. 
                </p> 
              </div>

              <div class="column-section">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-section">
                          <div class="frontside">
                              <div class="card">
                                  <a href="#tab2" data-toggle="tab">
                                      <div class="woodmart-my-account-links text-center">
                                          <i class="fa fa-file-text-o extra" aria-hidden="true"></i>
                                          <h4 class="card-title">Commandes</h4>
                                      </div>
                                  </a>
                              </div>
                          </div>
                          
                          <div class="card">
                              <a href="#tab5" data-toggle="tab">
                                  <div class="woodmart-my-account-links text-center">
                                      <i class="fa fa-ticket extra" aria-hidden="true"></i>
                                      <h4 class="card-title">Tickets Support</h4>
                                  </div>
                              </a>
                          </div>
                          
                          <div class="card">
                              <a href="#tab8" data-toggle="tab">
                                  <div class="woodmart-my-account-links text-center">
                                  <i class="fa fa-heart-o extra" aria-hidden="true"></i>
                                      <h4 class="card-title">Mon compte</h4>
                                  </div>
                              </a>
                          </div> 
                    </div> 
                          
                    <div class="col-xs-12 col-sm-6 col-md-4 col-section">
                        <div class="card">
                            <a href="#tab3" data-toggle="tab">
                                <div class="woodmart-my-account-links text-center">
                                    <i class="fa fa-gift extra" aria-hidden="true"></i>
                                    <h4 class="card-title">Cartes cadeau</h4>
                                </div>
                            </a>
                        </div>

                        <div class="card">
                          <a href="#tab6" data-toggle="tab">
                              <div class="woodmart-my-account-links text-center">
                              <i class="fa fa-street-view extra" aria-hidden="true"></i>
                                  <h4 class="card-title">Adresses</h4> 
                              </div>
                          </a>
                        </div>

                        <div class="card">
                            <a href="{{route('login.destroy')}}">
                                <div class="woodmart-my-account-links text-center">
                                    <i class="fa fa-sign-out extra" aria-hidden="true"></i>
                                    <h4 class="card-title">Déconnexion</h4>  
                                </div>
                            </a>
                        </div>
                    </div>
                            
                    <div class="col-xs-12 col-sm-6 col-md-4 col-section">
                        <div class="card">
                            <a href="#tab3" data-toggle="tab">
                                <div class="woodmart-my-account-links text-center">
                                    <i class="fa fa-universal-access extra" aria-hidden="true"></i>
                                    <h4 class="card-title">Followings</h4>
                                </div>
                            </a>
                        </div>

                        <div class="card">
                          <a href="#tab7" data-toggle="tab">  
                              <div class="woodmart-my-account-links text-center">
                                  <i class="fa fa-user-circle extra" aria-hidden="true"></i>
                                  <h4 class="card-title">Détails du compte</h4> 
                              </div>
                          </a>
                        </div>
                    </div>      
                </div>
              </div>
            </div>  
          </div>
        </div>
      
        <div class="tab-pane text-style" id="tab2">
          <div class="col-md-9">
            <div class="box-body">
              <table id="userorder" class="table table-bordered table-striped">
                <thead>
                  <tr class="tr-heading">
                    <th> COMMANDE </th>
                    <th> DATE </th>
                    <th> ÉTAT </th>
                    <th> TOTAL </th>
                    <th class="action">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <span> <a href="#"> No.1234 </a> </span></td>
                    <td> <span class="article"> 25/09/2018 </span></td>
                    <td> <span class="article"> En cours </span> </td>
                    <td> <span class="pour"> $11.15 </span> <span class="article"> pour 1 article </span> </td>
                    <td class="voir"> <a href="#" class="button btn-section"> VOIR </a>
                                      <a href="#" class="button btn-section support"> SUPPORT <i class="fa fa-life-ring" aria-hidden="true"></i>  </a> 
                    </td> 
                  </tr>
                </tbody>
                <tfoot>   
                </tfoot>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane text-style" id="tab3">
          <div class="col-md-9">
            <div class="cards-section">
                <h3>MES CARTES CADEAU</h3>
                <p> Pas de Carte Cadeau trouvée. </p>
            </div>
          </div>
        </div>

        <div class="tab-pane text-style" id="tab4">
        </div>

        <div class="tab-pane text-style" id="tab5">
          <div class="col-md-9">
            <div class="box-body">
              <table id="userorder" class="table table-bordered table-striped">
                <thead>
                  <tr class="tr-heading">
                    <th> STATUT </th>
                    <th> TICKET(S) </th>
                    <th> CATÉGORIE </th>
                    <th> PRIORITÉ </th>
                    <th class="action">MENU</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> </td>
                    <td> </td>
                    <td class="center"> <span class="article"> Vous n'avez pas encore de ticket de support! </span> </td>
                    <td> </td>
                    <td> </td>
                     
                  </tr>
                </tbody>
                <tfoot>
                    
                </tfoot>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane text-style" id="tab6">
          <div class="col-md-9">
            <div class="main-section">
              <div class="address-section">
                <p> Les adresses suivantes seront utilisées par défaut sur la page de commande. </p>
              </div>  
              <div class="row">
                  <div class="col-md-6">
                    <div class="addresse">
                      <h3> ADRESSE DE FACTURATION </h3>
                      <a href="#" class="edit">Modifier</a>
                      <div class="info">
                        <p>Suraj a.ka. Maari</p>
                        <p> Spidrontech </p>
                        <p>Hinjewadi</p>
                        <p>Pune</p>
                        <p>Ngaba</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="addresse">
                      <h3> ADRESSE DE LIVRAISON </h3>
                      <a href="#" class="edit">Modifier</a>
                      <div class="info">
                        <p>Suraj a.ka. Maari</p>
                        <p> Spidrontech </p>
                        <p>Hinjewadi</p>
                        <p>Pune</p>
                        <p>Ngaba</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="tab-pane text-style" id="tab7">
          <div class="user-section">
            <div class="container">
              <div class="row">   
                <div class="col-md-9">
                    <div class="form-section info">
                      <form #editaccount="ngForm">
                       @csrf
                        <div class="info">
                          <div class="form-row">
                            <!-- <div class="alert alert-success">
                            </div> -->
                            <div class="form-group col-md-6">
                                <label for="inputprenom4"> Prénom <span> * </span></label>
                                <input type="text" class="form-control details" name="name" [(ngmodel)]="editAccountForm.name">
                                <p class="error">
                                </p>
                            </div>
                          </div>

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputnumero4"> Nom <span> * </span></label>
                              <input type="text" class="form-control details" name="last_name">
                              <p class="error" *ngif="error.last_name">
                              </p>
                            </div>
                              
                            <div class="form-group col-md-12">
                                <label for="inputnom4"> Nom à afficher <span> * </span> </label>
                                <input type="text" class="form-control details" name="display_name" [(ngmodel)]="editAccountForm.display_name">
                                <p class="comment"> Indique comment votre nom apparaîtra dans la section relative au compte et dans les avis </p>
                                <p class="error">
                                </p>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="inputaddresse4"> Adresse de messagerie <span> * </span> </label>
                                <input type="email" class="form-control details">
                                <p class="error">
                                </p>
                            </div>
                          </div>
                        </div>

                         <div class="whole-border">
                            <div class="details-sectionn">
                                <h3> CHANGEMENT DE MOT DE PASSE </h3>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="inputmotde4"> Mot de passe actuel (laisser vide pour le conserver) </label>
                                <input type="password" class="form-control details" name="currentPassword">
                                <div class="error">
                                </div>
                              </div>
                               
                              <div class="form-group col-md-12">
                                <label for="inputnov4"> Nouveau mot de passe (laisser vide pour conserver l’actuel) </label>
                                <input type="password" class="form-control details" name="password">
                                <p class="error">
                                </p>
                              </div>

                                <div class="form-group col-md-12">
                                    <label for="inputconfirm4"> Confirmer le nouveau mot de passe </label>
                                    <input type="password" class="form-control details" name="password_confirmation">
                                </div>
                            </div>
                          </div>

                          <div class="form-row">
                            <button type="submit" class="woocommerce-Button button">
                                Enregistrer les modifications
                            </button>
                          </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
</div>

@endsection