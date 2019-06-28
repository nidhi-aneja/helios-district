<! doctype html>
<html><head>
	<title>Helios :: Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">	

  	<link rel="icon" type="image/x-icon" href="favicon.ico">
  	
  	@section('css')
  	

  	@show
</head>
<body>
	<div class="home">
	  <div id="header" class="header">
	      <div class="top-header">
	          <div class="container">
	              <div class="currency">
	                  <div class="dropdown">
	                        <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">			Dollar américain ($)
	                        </a>
	                        <ul class="dropdown-menu" role="menu">
	                          	<li><a href="#">Franc congolais (Fr)</a></li>
	                        </ul>
	                  </div>
	              </div>
	              <div class="support-link">
	                  <a data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-envelope-o"></i> &nbsp; Newsletter</a>
	                  <a href="contactus.html">contact us</a>
	                  <a href="faq.html">faq</a>
	              </div>
	          </div>
	      </div>
	      <!-- top-header -->
	      <!-- MAIN HEADER -->
	      <div class="container main-header">
	          <div class="row">
	              <div class="col-xs-12 col-sm-2 logos">
	                  <a href="{{Route('home')}}"><img alt="Helios" src="{{asset('images/helios-logo-2.png')}}"></a>
	              </div>
	              <div class="col-xs-7 col-sm-6 header-search-box">
	                  <form class="form-inline">
	                        <div class="form-group input-serach border-ri">
	                          <input type="text" placeholder="Keyword here...">
	                        </div>
	                        <div class="form-group form-category">
	                          <select class="select-category form-control">
	                              <option value="2">All Categories</option>
	                              <option value="1">Men</option>
	                              <option value="2">Women</option>
	                          </select>
	                        </div>
	                        <button type="submit" class="pull-right btn-search">  <i class="fa fa-search"></i> </button>
	                  </form>
	              </div>
	              <div class="col-md-2 login shopping-cart-box pop-up-model" id="cart-block">
	                <div class="before-login">
	                    <a href="#" class="cart-link" id="cntr">
	                    <span class="title">connection / inscription</span>
	                    </a>
	                    <div class="cart-block frm">
	                    <div class="cart-block-content">
	                        <div class="cart-block-list log-register">
	                            <p>SE CONNECTER  </p>
	                            <p><a href="/login" class="registerlink"> Créer un compte </a></p>
	                            
	                           <form method="post" action="{{Route('login.store')}}" class='loginpop'>
               @csrf
	                                <div class="form-group">
	                                    <label for="email">Username or email address</label>
	                                    <input type="text" class="form-control" name="email">
	                                </div>
	                                <div class="form-group">
	                                    <label for="email">Password</label>
	                                    <input type="password" class="form-control" name="password">
	                                </div>
	                                <div class="form-group">
	                                    <input type="submit" class="btn btn-danger btfull" value="CONNEXION">
	                                </div>
	                                <div class="toal-cart">
	                                    <span>
	                                        <input type="checkbox"> Remember me
	                                    </span>
	                                    <span class="toal-price pull-right">
	                                        <a href="{{Route('login.forgetpassword')}}">Lost your password</a>
	                                    </span>
	                                </div>
	                                <div class="other-login">
	                                    -  OU CONNECTEZ-VOUS AVEC -
	                                </div> 
	                                <div class="form-group">
	                                    <button type="button" class="btn btn-primary fb-btn"> <i class="fa fa-facebook"></i> &nbsp; Facebook</button>
	                                </div> 
	                            </form>
	                        </div>
	                    </div>
	                    </div>
	                </div>

	                <div class="afterlogin-menu cart-link" style="display: none;">
	                    <div class="user-info-top">
	                        <div class="dropdown">
	                            <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>Mon compte</span><    /a>
	                            <ul class="dropdown-menu mega_dropdown" role="menu">
	                                <li><a href="#">User</a></li>
	                                <li><a href="#">Tableau de bord</a></li>
	                                <li><a href="#">Commandes</a></li>
	                                <li><a href="#">Cartes cadeau</a></li>
	                                <li><a href="#">Followings</a></li>
	                                <li><a href="#">Tickets Support</a></li>
	                                <li><a href="#">Détails du compte</a></li>
	                                <li><a href="#" style="color:red">Déconnexion</a></li>
	                            </ul>
	                        </div>
	                        <div class="dropdown">
	                            <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>Mon compte</span></a>
	                            <ul class="dropdown-menu mega_dropdown" role="menu">
	                                <li><a href="#">Vendor</a></li>
	                                <li><a href="#">Tableau de bord</a></li>
	                                <li><a href="#">Commandes</a></li>
	                                <li><a href="#">Cartes cadeau</a></li>
	                                <li><a href="#">Followings</a></li>
	                                <li><a href="#">Tickets Support</a></li>
	                                <li><a href="#">Détails du compte</a></li>
	                                <li><a href="#" style="color:red">Déconnexion</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	              </div>
	              <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
	                <div class="cart-box">  
	                    <a href="/productdetail" class="cart-linkl">
	                        <i class="fa fa-heart-o" aria-hidden="true"></i>
	                        <span class="notify notify-left addfav">0</span>
	                    </a>
	                    <a class="cart-linkc" href="order.html">
	                        <!-- <span class="title">Shopping cart</span> -->
	                        <span class="total"> <i class="fa fa-shopping-bag" aria-hidden="true"></i> &nbsp; &nbsp;&nbsp; $0.00</span>
	                        <span class="notify notify-left">2</span>
	                    </a>
	                </div>
	                <div class="cart-block">
	                    <div class="cart-block-content">
	                        <div class="cart-block-list">
	                        <ul>
	                            <li class="product-info">
	                                <div class="p-left">
	                                    <a href="#" class="remove_link"> <i class="fa fa-times"></i></a>
	                                    <a href="/productdetail">
	                                        <img class="img-responsive" src="images/product-100x122.jpg" alt="p10">
	                                    </a>
	                                </div>
	                                <div class="p-right">
	                                    <a href="/productdetail">
	                                    <p class="p-name">Donec Ac Tempus</p>
	                                    <p class="delivery-time">Shipping Duration: <span>1 à 2 jours</span></p>
	                                    <p class="cusion">Vendu par: <span>HDs Cuisine</span></p>
	                                    <p class="p-rice"><span class="default-no">1 x</span> &nbsp; <i class="fa fa-usd"></i>61,19 </p>
	                                    </a>    
	                                </div>
	                            </li>
	                            <li class="product-info">
	                                <div class="p-left">
	                                    <a href="#" class="remove_link"><i class="fa fa-times"></i></a>
	                                    <a href="#">
	                                        <img class="img-responsive" src="images/product-100x122.jpg" alt="p10">
	                                    </a>
	                                </div>
	                                <div class="p-right">
	                                    <p class="p-name">Donec Ac Tempus</p>
	                                    <p class="delivery-time">Shipping Duration: <span>1 à 2 jours</span></p>
	                                    <p class="cusion">Vendu par: <span>HDs Cuisine</span></p>
	                                    <p class="p-rice"><span class="default-no">1 x</span> &nbsp; <i class="fa fa-usd"></i>61,19 </p>
	                                </div>
	                            </li>
	                        </ul>
	                        </div>
	                        <div class="toal-cart">
	                            <span><b>SOUS-TOTAL:</b></span>
	                            <span class="toal-price pull-right"> <i class="fa fa-usd"></i> 122.38</span>
	                        </div>
	                        <div class="cart-buttons">
		                        <a href="/viewcart" type="button" class="btn check-cart">Voir le panier</a>
		                        <a href="/checkout" class="btn-check-out">Validation de la commande</a>
	                        </div>
	                    </div>
	                </div>
	              </div>
	          </div>
	      </div>
	      <!-- END MANIN HEADER -->
	      <div id="nav-top-menu" class="nav-top-menu">
	          <div class="container">
	              <div class="row">
	                  <div class="col-sm-3" id="box-vertical-megamenus">
	                      <div class="box-vertical-megamenus">
	                          <h4 class="title">
	                              <span class="title-menu"> PARCOURIR CATÉGORIES </span>
	                              <span class="btn-open-mobile pull-left home-page"><i class="fa fa-bars"></i></span>
	                              <span class="btn-open-mobile pull-right chrven-dw"><i class="fa fa-chevron-down"></i></span>
	                              
	                          </h4>
	                           @foreach($parentcat as $pc)
	                          <div class="vertical-menu-content is-home">
	                              <ul class="vertical-menu-list">
	                                  <li>
	                                      <a href="">
	                                          <img class="icon-menu" alt="" src="">{{($pc->name)}}
	                                      </a>
	                                      
	                                    
	                                
	                                      <div class="vertical-dropdown-menu">
	                                          <div class="vertical-groups col-sm-12">
                                                @foreach($pc->subcategories as $sc)
	                                              <div class="mega-group col-sm-4">
	                                                  <h4 class="mega-group-header">
	                                                    <a href="#"><span>{{($sc->name)}}</span></a></h4>
	                                                     @foreach($sc->childcategories as $cc)
	                                                  	<ul class="group-link-default">
                                                     
	                                                      <li>
	                                                          <a href="#">{{$cc->name}}</a>
	                                                      </li>
	                                                  
	                                                  </ul>
	                                                   @endforeach
	                                              </div>
	                                              @endforeach
	                                          </div>
	                                      </div>
	                                      
	                                  </li>
	                              </ul>
	                          </div>
	                           @endforeach
	                      </div>
	                  </div>
	                  <div id="main-menu" class="col-sm-9 main-menu">
	                      <nav class="navbar navbar-default">
	                          <div class="container-fluid">
	                              <div class="navbar-header">
	                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                                      <i class="fa fa-bars"></i>
	                                  </button>
	                                  <a class="navbar-brand" href="#">MENU</a>
	                              </div>
	                              <div id="navbar" class="navbar-collapse collapse no-border">
	                                  <ul class="nav navbar-nav">
	                                      <!-- <li class="dropdown">
	                                          <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
	                                          <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
	                                              <li class="block-container col-sm-3">
	                                                  <ul class="block">
	                                                      <li class="img_container">
	                                                          <a href="#">
	                                                              <img class="img-responsive" src="assets/data/men.png" alt="sport">
	                                                          </a>
	                                                      </li>
	                                                      <li class="link_container group_header">
	                                                          <a href="#">MEN'S</a>
	                                                      </li>
	                                                      <li class="link_container"><a href="#">Skirts</a></li>
	                                                      <li class="link_container"><a href="#">Jackets</a></li>
	                                                      <li class="link_container"><a href="#">Tops</a></li>
	                                                      <li class="link_container"><a href="#">Scarves</a></li>
	                                                      <li class="link_container"><a href="#">Pants</a></li>
	                                                  </ul>
	                                              </li>
	                                               <li class="block-container col-sm-3">
	                                                  <ul class="block">
	                                                      <li class="img_container">
	                                                          <a href="#">
	                                                              <img class="img-responsive" src="assets/data/women.png" alt="sport">
	                                                          </a>
	                                                      </li>
	                                                      <li class="link_container group_header">
	                                                          <a href="#">WOMEN'S</a>
	                                                      </li>
	                                                      <li class="link_container"><a href="#">Skirts</a></li>
	                                                      <li class="link_container"><a href="#">Jackets</a></li>
	                                                      <li class="link_container"><a href="#">Tops</a></li>
	                                                      <li class="link_container"><a href="#">Scarves</a></li>
	                                                      <li class="link_container"><a href="#">Pants</a></li>
	                                                  </ul>
	                                              </li>
	                                               <li class="block-container col-sm-3">
	                                                  <ul class="block">
	                                                      <li class="img_container">
	                                                          <a href="#">
	                                                              <img class="img-responsive" src="assets/data/kid.png" alt="sport">
	                                                          </a>
	                                                      </li>
	                                                      <li class="link_container group_header">
	                                                          <a href="#">Kids</a>
	                                                      </li>
	                                                      <li class="link_container"><a href="#">Shoes</a></li>
	                                                      <li class="link_container"><a href="#">Clothing</a></li>
	                                                      <li class="link_container"><a href="#">Tops</a></li>
	                                                      <li class="link_container"><a href="#">Scarves</a></li>
	                                                      <li class="link_container"><a href="#">Accessories</a></li>
	                                                  </ul>
	                                              </li>
	                                               <li class="block-container col-sm-3">
	                                                  <ul class="block">
	                                                      <li class="img_container">
	                                                          <a href="#">
	                                                              <img class="img-responsive" src="assets/data/trending.png" alt="sport">
	                                                          </a>
	                                                      </li>
	                                                      <li class="link_container group_header">
	                                                          <a href="#">TRENDING</a>
	                                                      </li>
	                                                      <li class="link_container"><a href="#">Men's Clothing</a></li>
	                                                      <li class="link_container"><a href="#">Kid's Clothing</a></li>
	                                                      <li class="link_container"><a href="#">Women's Clothing</a></li>
	                                                      <li class="link_container"><a href="#">Accessories</a></li>
	                                                  </ul>
	                                              </li>
	                                          </ul>
	                                      </li> -->
	                                      <li><a href="{{Route('login.create')}}">Votre Compte</a></li>
	                                      <li><a href="/whoweare">Qui sommes-nous?</a></li>
	                                  </ul>
	                              </div><!-- nav-collapse -->
	                          </div>
	                      </nav>
	                  </div>
	              </div>
	              <!-- userinfo on top-->
	              <div id="form-search-opntop">
	              </div>
	              <!-- userinfo on top-->
	              <div id="user-info-opntop">
	              </div>
	              <!-- CART ICON ON MMENU -->
	              <div id="shopping-cart-box-ontop">
	                  <i class="fa fa-shopping-cart"></i>
	                  <div class="shopping-cart-box-ontop-content"></div>
	              </div>
	          </div>
	      </div>
	  </div>
	</div>
	<!-- End header -->

	
    @yield('content')
	
	
	<!-- Footer -->
	<footer id="footer">
	  	<div class="container">
	        <div id="introduce-box" class="row">
	             <div class="col-md-3">
	                 <div id="address-box">
	                     <a href="#"><img src="images/helios-logo-1.png" alt="Helios Logo" class="img-responsive logo"></a>
	                     <div id="address-list">
	                       <ul class="list">
	                         <li> <p class="tit-contain">Achetez-nous du temps, pas des produits.</p>
	                         </li><li><i class="fa fa-location-arrow" aria-hidden="true"></i><p class="tit-name">Funa, Kinshasa, RDC</p> </li>
	                         <li> <i class="fa fa-mobile" aria-hidden="true"></i><p class="tit-phone">Phone: 0977190449</p></li>
	                         <li> <i class="fa fa-envelope-o" aria-hidden="true"></i> <p class="tit-phone email"> Email: heliosdistricts@hotmail.com </p></li>
	                         <li></li>
	                        </ul>
	                     </div>
	                 </div> 
	             </div>
	             <div class="col-md-7">
	                 <div class="row">
	                     <div class="col-sm-4">
	                         <div class="introduce-title">RECENT POSTS</div>
	                         <!-- <ul id="introduce-company"  class="introduce-list">
	                             <li><a href="#">About Us</a></li>
	                             <li><a href="#">Testimonials</a></li>
	                             <li><a href="#">Affiliate Program</a></li>
	                             <li><a href="#">Terms & Conditions</a></li>
	                             <li><a href="#">Contact Us</a></li>
	                         </ul> -->
	                     </div>
	                     <div class="col-sm-4">
	                         <div class="introduce-title">GAGNEZ DE L’ARGENT AVEC NOUS</div>
	                         <ul id="introduce-Account" class="introduce-list">
	                             <li><a href="sellproduct.html" class="gagnez-de">Comment vendre mes produits avec HDs</a></li>
	                             <li><a href="{{Route('vendor.view')}}" class="gagnez-de">Demandez Un Compte Marchant</a></li>
	                         </ul>
	                     </div>
	                     <div class="col-sm-4">
	                         <div class="introduce-title">LAISSEZ-NOUS VOUS AIDER</div>
	                         <ul id="introduce-support" class="introduce-list">
	                             <li><a href="{{Route('login.create')}}" class="gagnez-de">Votre Compte</a></li>
	                             <li><a href="returnpolicy.html" class="gagnez-de">Retours &amp; Remboursements</a></li>
	                             <li><a href="terms-conditions.html" class="gagnez-de">Termes &amp; Conditions</a></li>
	                             <li><a href="conditions.html" class="gagnez-de">Conditions d’Utilisation</a></li>
	                             <li><a href="privacy-policy.html" class="gagnez-de">Politique de Confidentialité</a></li>
	                             <li><a href="contactus.html" class="gagnez-de">Contactez-Nous</a></li>
	                         </ul>
	                     </div>
	                 </div>
	             </div>
	             <div class="col-md-2">
	                 <div id="contact-box">
	                     <div class="introduce-title">SUIVEZ-NOUS ICI !</div>
	                     <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="gagnez-de"> <p class="tit-name news"> Newsletter </p> </a>
	                 </div>
	                 
	             </div>
	        </div>
	    </div>
    </footer>

    <div class="copyrights-wrapper copyrights-two-columns">
      	<div class="container">
	        <div class="min-footer">
	          	<div class="col-left"> Copyright: <i class="fa fa-copyright"></i> 
	            	<strong><span>HeliosDistricts.com</span></strong>. All rights reserved.
	          	</div>
	          	<div class="col-right">
	             	<img src="assets/payments.png" class="lazyloading" alt="payments">
	            </div>
          	</div>
        </div>
  	</div>
  	<!-- End footer -->

  	<!-- Modal -->
  	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		        <div class="inner-popup">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			            <span aria-hidden="true">×</span>
			          </button>
			        </div>
			        <div class="modal-body modalBody">
			          <h1> Inscris-toi à la Newsletter pour 5% de réduction sur ta prochaine commande ! </h1>
			          <p> Soyez le premier au courant des dernières tendances et obtenez des offres exclusives </p>
			          <div class="signup-stuff">
			          <span>
			              <input type="text" name="" class="form-control newstext" placeholder="Your email address">
			              <button type="button" class="btn btn-default signup"> SIGN UP </button>
			          </span>
			          <p> Will be used in accordance with our <span> Privacy Policy </span> </p>
			        </div>
			        </div> 
				    <div class="modal-footer">
				    </div>
		  		</div>
			</div>
		</div>
	</div>
	<!-- End Modal-->

	<!-- footer js --> 
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	@section('js')
  	@show

</body></html>