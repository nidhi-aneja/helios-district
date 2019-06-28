@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
  		
  	<!-- admin -->
  	<link rel="stylesheet" href="{{asset('assets/plugins/datepicker/datepicker3.css')}}">
  	<link rel="stylesheet" type="{{asset('text/css" href="assets/lib/jquery-ui/jquery-ui.css')}}" />
  	<link rel="stylesheet" href="{{asset('assets/plugins/datatables/dataTables.bootstrap.css')}}">
  	<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  	<!-- admin style -->
  	<!-- Theme style -->
  	<link rel="stylesheet" href="{{asset('css/AdminLTE.css')}}">
  	<link rel="stylesheet" href="{{asset('css/skins/_all-skins.min.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('css/merchant.css')}}">
@endsection
@section('content')

	<div class="page-title page-title-default title-size-default color-scheme-light title-design-centered">
	    <div class="container">
	        <header class="entry-header">
	        <h1 class="entry-title">Tableau de Bord Commerçant</h1>
	            <div class="breadcrumbs">
	            <a href="#">Home &nbsp;</a>
	            <span class="current">/ &nbsp; TABLEAU DE BORD COMMERÇANT</span>
	            </div>
	        </header>
	    </div>
	</div>

	<div class="main-dashboard-wrapper">
	    <div class="container">
	        <div class="row pdTop">
	            <div class="wrapper">
	            	<header class="main-header">
					    <!-- Logo -->
					    <a href="#" class="logo">
					        <!-- mini logo for sidebar mini 50x50 pixels -->
					        <span class="logo-mini"> <img src="{{asset('images/sm-logo.ico')}}" class="sm-logo"> </span>
					        <!-- logo for regular state and mobile devices -->
					        <span class="logo-lg"><b>My store</b></span>
					    </a>
					    <!-- Header Navbar: style can be found in header.less -->
					    <nav class="navbar navbar-static-top">
					        <!-- Sidebar toggle button-->
					        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					            <span class="sr-only">Toggle navigation</span>
					        </a>

					        <div class="navbar-custom-menu">
					            <ul class="nav navbar-nav">
					                <!-- Notifications: style can be found in dropdown.less -->
					                <li class="dropdown notifications-menu">
					                    <a href="/merchantdashboard/notifications" class="dropdown-toggle popoverw" data-content="Tableau de notifications" data-placement="bottom" data-toggle="popover" data-trigger="hover">
					                        <i class="fa fa-bell-o"></i>
					                        <span class="label label-warning">10</span>
					                    </a>
					                </li>
					                
					                <li class="dropdown messages-menu">
					                    <a href="/merchantdashboard/enquiry" class="dropdown-toggle popoverw" data-content="Tableau d'information" data-placement="bottom" data-toggle="popover" data-trigger="hover">
					                        <i class="fa fa-question-circle-o"></i>
					                        <span class="label label-success">4</span>
					                    </a>
					                </li>
					                
					                <li class="dropdown tasks-menu">
					                    <a href="/merchantdashboard/notices" class="dropdown-toggle popoverw" data-content="Notification de Bord" data-placement="bottom" data-toggle="popover" data-trigger="hover">
					                        <i class="fa fa-bullhorn"></i>
					                        <span class="label label-danger">9</span>
					                    </a>
					                </li>

					                <li>
					                    <a href="/merchantdashboard/knowledgebase" class="dropdown-toggle popoverw" data-content="Base de connaissances" data-placement="bottom" data-toggle="popover" data-trigger="hover"><i class="fa fa-book"></i></a>
					                </li>
					                
					                <li class="dropdown user user-menu">
					                    <a href="/merchantdashboard/profilemanager" class="dropdown-toggle" data-toggle="dropdown">
					                        <img src="{{asset('images/user2-160x160.jpg')}}" class="user-image" alt="Image">
					                        <span class="hidden-xs">Alexander Pierce</span>
					                    </a>
					                </li>
					            </ul>
					        </div>
					    </nav>
					</header> 

					<aside class="main-sidebar">
						<!-- sidebar: style can be found in sidebar.less -->
						<section class="sidebar">
						    <!-- sidebar menu: : style can be found in sidebar.less -->
						    <ul class="sidebar-menu">
							    <li>
							       <a href="merchant-dashboard.html"><i class="fa fa-home"></i> <span>Accueil </span></a>
							    </li>
							    <li class="treeview">
							        <a href="#">
							          	<i class="fa fa-pie-chart"></i>
							          	<span>Produits</span>
							          	<span class="pull-right-container">
							            	<i class="fa fa-angle-left pull-right"></i>
							          	</span>
							        </a>
							        <ul class="treeview-menu">
							          	<li><a href="products.html"><i class="fa fa-cubes"></i> Produits </a></li>
							          	<li><a href="add-new-products.html"><i class="fa fa-plus"></i> Ajouter Nouveau </a></li>
							        </ul>
							    </li>
							    <li>
							       <a href="list-of-orders.html"><i class="fa fa-shopping-cart"></i> <span>Commandes </span></a>
							    </li>
							    <li>
							       <a href="payments.html"><i class="fa fa-credit-card"></i> <span>Payements </span></a>
							    </li>
							    <li class="treeview">
							        <a href="#">
							            <i class="fa fa-gift"></i>
							            <span>Coupons</span>
							            <span class="pull-right-container">
							            	<i class="fa fa-angle-left pull-right"></i>
							            </span>
							        </a>
							        <ul class="treeview-menu">
							            <li><a href="coupons-manage.html"><i class="fa fa-gift"></i> Coupons </a></li>
							            <li><a href="addnewcoupons.html"><i class="fa fa-plus"></i> Ajouter Nouveau </a></li>
							        </ul>
							    </li>
							    <li>
							       <a href="attributes.html"><i class="fa fa-shopping-cart"></i> <span>Attributs </span></a>
							    </li>
							    <li>
							       <a href="supports.html"><i class="fa fa-life-ring"></i> <span>Support </span></a>
							    </li>
							    <li>
							       <a href="followers.html"><i class="fa fa-child"></i> <span>Followers </span></a>
							    </li>
							    <li>
							       <a href="reports.html"><i class="fa fa-pie-chart"></i> <span>Rapports </span></a>
							    </li>
							    <li>
							       <a href="settings.html"><i class="fa fa-cogs"></i> <span>Paramètres  </span></a>
							    </li>
							    <li>
							       <a href="{{Route('login.destroy')}}"><i class="fa fa-power-off"></i> <span>Déconnexion </span></a>
							    </li>
						  	</ul>
						</section>
					</aside>

					<div class="content-wrapper">
					  <section class="content">
					    <div class="row pd-BT">
					      <div class="col-md-12">
					        <div class="header-account-info">
					          <div class="col-md-9">
					            <div class="col-md-3">
					              <div class="profile">
					                <a href="#"> <img src="{{asset('images/avatar.png')}}"></a>
					              </div>
					            </div>
					            <div class="col-md-9">
					              <div class="user-login-info">
					                <h3>Bienvenue sur Helios Districts le Tableau de Bord</h3>
					                <p class="member-name">Kimya</p>
					                <p class="last-activity"> <i class="fa fa-clock-o"></i> Last Login : &nbsp;<span>12.00</span>
					                   <span> ( 1/01/2018 )</span></p>
					              </div>
					            </div>
					          </div>
					          <div class="col-md-3">
					            <div class="stats">
					              <div class="product-limit-stats">
					                <span><i class="fa fa-cube img-c"></i></span> &nbsp; <span class="p-title">26</span> / <span>∞</span>
					              </div>
					              <div class="disk-space-stats">
					                <span><i class="fa fa-hdd-o  img-c"></i></span> &nbsp; <span class="p-title">4.95 MB</span> / <span>∞</span>
					              </div>
					            </div>
					          </div>
					        </div>
					      </div>
					    </div>

					    <div class="clearfix"></div>

					    <div class="row">
					      <div class="col-md-3 col-sm-6 col-xs-12">
					        <div class="info-box">
					          	<a href="/merchantdashboard/reports">
						          <span class="info-box-icon bg-aqua"><i class="fa fa-usd"></i></span>

						          <div class="info-box-content">
						            <span class="info-box-text"> <i class="fa fa-usd"></i> 0.00 </span>
						            <span class="info-box-number">ventes brutes de ce mois</span>
						          </div>
					          	</a>
					        </div>
					      </div>
					      
					      <div class="col-md-3 col-sm-6 col-xs-12">
					        <div class="info-box">
					          	<a href="/merchantdashboard/reports">
						          <span class="info-box-icon bg-red"><i class="fa fa-money"></i></span>

						          <div class="info-box-content">
						            <span class="info-box-text"> <i class="fa fa-usd"></i> 0.00 </span>
						            <span class="info-box-number">frais d'administration de ce mois</span>
						          </div>
					          	</a>
					        </div>
					      </div>
					      
					      <!-- fix for small devices only -->
					      <div class="clearfix visible-sm-block"></div>

					      <div class="col-md-3 col-sm-6 col-xs-12">
					        <div class="info-box">
					          	<a href="/merchantdashboard/reports">
						          <span class="info-box-icon bg-green"><i class="fa fa-cubes"></i></span>

						          <div class="info-box-content">
						            <span class="info-box-text"> 1 article </span>
						            <span class="info-box-number">ventes de ce mois-ci </span>
						          </div>
					          	</a>
					          <!-- /.info-box-content -->
					        </div>
					        <!-- /.info-box -->
					      </div>
					      <!-- /.col -->
					      <div class="col-md-3 col-sm-6 col-xs-12">
					        <div class="info-box">
					          	<a href="/merchantdashboard/reports">
						          <span class="info-box-icon bg-yellow"><i class="fa fa-cart-plus"></i></span>

						          <div class="info-box-content">
						            <span class="info-box-text">1 commande</span>
						            <span class="info-box-number">reçus ce mois-ci</span>
						          </div>
					          	</a>
					          <!-- /.info-box-content -->
					        </div>
					        <!-- /.info-box -->
					      </div>
					      <!-- /.col -->
					    </div>

					    <div class="clearfix"></div>

					    <div class="row">
					      	<div class="col-md-12">
					          	<div class="panel panel-default">
					            	<div class="panel-heading"> <i class="fa fa-line-chart"></i> &nbsp; <span>Analyses du Magasin</span>
					            	</div>
						            <div class="panel-body">
						              <div class="chart">
						                <canvas id="homereport" width="400" height="200"></canvas>
						              </div>
						            </div>
					          	</div>
					      	</div>
					    </div>

					    <div class="clearfix"></div>

					    <div class="row">
					      	<div class="">
						        <div class="col-md-6">
						            <div class="panel panel-default">
						              <div class="panel-heading"><i class="fa fa-line-chart"></i> &nbsp; <span>Analyses du Magasin</span></div>
						              <div class="panel-body">
						                <div class="chart">
						                  <canvas id="storeanalytics" width="400" height="200"></canvas>
						                </div>
						              </div>
						            </div>
						        </div>
						        <div class="col-md-6">
						            <div class="panel panel-default">
						              <div class="panel-heading"><i class="fa fa-pie-chart"></i> &nbsp; <span>Ventes par produit</span></div>
						              <div class="panel-body">
						                <div class="chart">
						                  <canvas id="chart-area" width="400" height="200"></canvas>
						                </div>
						              </div>
						            </div>
						        </div>
					      	</div>
					    </div>

					    <div class="clearfix"></div>

					    <div class="row">
					      	<div class="">
					          	<div class="col-md-6">
					              <div class="panel panel-default">
					                <div class="panel-heading"><i class="fa fa-bell-o"></i> &nbsp; <span>Notifications</span></div>
					                <div class="panel-body">
					                  <ul class="products-list product-list-in-box">
					                    <li class="item">
					                      <div class="product-img">
					                        <span><i class="fa fa-shopping-cart"></i></span>
					                      </div>
					                      <div class="product-info">
					                        <span class="product-description">
					                          Vous avez reçu une Commande <a href="#"> #2944</a> pour Chaussures Chervis DARKNAVY
					                        </span>
					                      </div>
					                    </li>
					                    <li class="item">
					                      <div class="product-img">
					                        <span><i class="fa fa-shopping-cart"></i></span>
					                      </div>
					                      <div class="product-info">
					                        <span class="product-description">
					                          Vous avez reçu une Commande <a href="#"> #2944</a> pour Chaussures Chervis DARKNAVY
					                        </span>
					                      </div>
					                    </li>
					                    <li class="item">
					                      <div class="product-img">
					                        <span><i class="fa fa-shopping-cart"></i></span>
					                      </div>
					                      <div class="product-info">
					                        <span class="product-description">
					                          Vous avez reçu une Commande <a href="#"> #2944</a> pour Chaussures Chervis DARKNAVY
					                        </span>
					                      </div>
					                    </li>
					                    <li class="item">
					                      <div class="product-img">
					                        <span><i class="fa fa-shopping-cart"></i></span>
					                      </div>
					                      <div class="product-info">
					                        <span class="product-description">
					                          Vous avez reçu une Commande <a href="#"> #2944</a> pour Chaussures Chervis DARKNAVY
					                        </span>
					                      </div>
					                    </li>
					                    <li class="item">
					                      <div class="product-img">
					                        <span><i class="fa fa-shopping-cart"></i></span>
					                      </div>
					                      <div class="product-info">
					                        <span class="product-description">
					                          Vous avez reçu une Commande <a href="#"> #2944</a> pour Chaussures Chervis DARKNAVY
					                        </span>
					                      </div>
					                    </li>
					                  </ul>
					                  <div>
					                    <a href="/merchantdashboard/notifications" type="button" class="pull-right btn btn-explore">Afficher tout >></a>
					                  </div>
					                </div>
					              </div>
					          	</div>
					          	<div class="col-md-6">
					              <div class="panel panel-default">
					                <div class="panel-heading"><i class="fa fa-question-circle-o"></i> &nbsp; <span>Données personelles</span></div>
					                <div class="panel-body">
					                  <p>Il n’y a pas encore de demandes !!</p>
					                </div>
					              </div>
					          	</div>
					      	</div>
					    </div>

					    <div class="clearfix"></div>

					    <div class="row">
					      <div class="">
					          <div class="col-md-6">
					              <div class="panel panel-default">
					                <div class="panel-heading"><i class="fa fa-linode"></i> &nbsp; <span>Statistiques du Magasin</span></div> 
					                <div class="panel-body">
					                  <ul class="products-list product-list-in-box store">
					                    <li class="item">
					                      <div class="product-img">
					                        <span><i class="fa fa-life-ring"></i></span>
					                      </div>
					                      <div class="product-info">
					                        <span class="product-description">
					                          <a href="/merchantdashboard/orders"> <b>0 commandes </b> - en traitement </a>
					                        </span>
					                      </div>
					                    </li>
					                    <li class="item">
					                      <div class="product-img">
					                        <span><i class="fa fa-truck"></i></span>
					                      </div>
					                      <div class="product-info">
					                        <span class="product-description">
					                          <a href="/merchantdashboard/orders"><b>0 produits </b> - en attente de ravitaillement </a>
					                      	</span>
					                      </div>
					                    </li>
					                    <li class="item">
					                      <div class="product-img">
					                        <span><i class="fa fa-sort-amount-desc"></i></span>
					                      </div>
					                      <div class="product-info">
					                        <span class="product-description">
					                          <a href="/merchantdashboard/reportsinstock"><b>0 produits </b> - faible en stock </a>
					                      	</span>
					                      </div>
					                    </li>
					                    <li class="item">
					                      <div class="product-img">
					                        <span><i class="fa fa-times-circle-o"></i></span>
					                      </div>
					                      <div class="product-info">
					                        <span class="product-description">
					                          <a href="/merchantdashboard/reportoutofstock"><b>0 produits</b> - en rupture de stock </a>
					                      	</span>
					                      </div>
					                    </li>
					                  </ul>
					                </div>
					              </div>
					          </div>
					          <div class="col-md-6">
					              <div class="panel panel-default">
					                <div class="panel-heading"><i class="fa fa-bullhorn"></i> &nbsp; <span>Derniers sujets</span></div>
					                <div class="panel-body">
					                  <p>Il n'y a pas encore de sujet!!</p>
					                </div>
					              </div>
					          </div>
					      </div>
					    </div>
					  </section>
					</div>					
	            </div>  
	        </div>
	    </div>
	</div>

	<span class="et_pb_conctact et-pb-icon et-visible" style="display: inline;">
	    <a href="#" data-toggle="modal" data-target="#addproductpop"> <i class="fa fa-cube"></i> </a>
	</span>

	

  	<div class="modal fade" id="addproductpop" role="dialog">
  		<div class="modal-dialog modal-lg">
  			<div class="modal-content">
  				<div class="modal-header">
  					<button type="button" class="close" data-dismiss="modal">&times;</button>
  					<h4 class="modal-title"><i class="fa fa-cube"></i> Ajouter un Produit</h4>
  				</div>
  				<form class="modalform">
  					<div class="modal-body">
  						<div class="row">
  							<div class="col-md-6">
  								<div class="form-group">
  									<select class="form-control">
  										<option>test</option>
  										<option>test</option>
  										<option>test</option>
  									</select>
  								</div>
  							</div>
  							<div class="col-md-6">
  								<div class="form-group">
  									<input type="checkbox" class="checkbox-inline"> <span class="lbl"> Catalogue </span>
  								</div>
  							</div>
  							<div class="clearfix"></div>
  							<div class="col-md-12">
  								<div class="form-group">
  									<input type="text" class="form-control" placeholder="Titre du Produit">
  								</div>
  							</div>
  							<div class="clearfix"></div>
  							<div class="col-md-4">
  								<div class="form-group">
  									<label for="Prix($)">Prix($)</label>
								</div>
  							</div>
  							<div class="col-md-8">
  								<div class="form-group">
  									<input type="numbar" class="form-control">
  								</div>
  							</div>
  							<div class="clearfix"></div>
  							<div class="col-md-4">
  								<div class="form-group">
  									<label for="Prix($)">Prix de Vente($)</label>
  								</div>
  							</div>
  							<div class="col-md-8">
  								<div class="form-group">
  									<input type="numbar" class="form-control">
  								</div>
  							</div>
  							<div class="clearfix"></div>
  							<div class="col-md-12">
  								<div class="form-group">
  									<p class="show-program">Programme</p>
  								</div>
  							</div>
  							<div class="clearfix"></div>
  							<div class="hideprog">
  								<div class="col-md-4">
  									<div class="form-group">
  										<label for="De">De</label>
  									</div>
  								</div>
  								<div class="col-md-8">
  									<div class="form-group">
  										<input type="date" class="form-control">
  									</div>
  								</div>
  								<div class="clearfix"></div>
  								<div class="col-md-4">
  									<div class="form-group">
  										<label for="Jusqu'à">Jusqu'à</label>
  									</div>
  								</div>
  								<div class="col-md-8">
  									<div class="form-group">
  										<input type="date" class="form-control">
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  					<div class="modal-footer">
  						<div class="form-group">
  							<input type="button" class="btn btn-default subinp" data-dismiss="modal" value="Suivant >>">
  						</div>
  						<div class="form-group">
  							<input type="button" class="btn btn-dfaft" value="Brouillon">
  							<input type="button" class="btn btn-sub-data" value="Soumettre pour Approbation">
  						</div>
  					</div>
  				</form>
  			</div>
  		</div>
  	</div>
@endsection
      @section('js')

  	<!-- footer js --> 
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	
  	<!-- merchant dashboard -->
  	<script type="text/javascript" src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  	<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>  
  	<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
  	<script src="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js'></script>
  	<script type="text/javascript" src="{{asset('assets/lib/jquery-ui/jquery-ui.min.js')}}"></script>
  	<script src="{{asset('js/app.min.js')}}"></script>

  	<script type="text/javascript">
  		$(document).ready(function() {
	      	// tooltip
	      	$('[data-toggle="popover"]').popover(); 

	      	$('.show-program').click(function(){
	      		$('.hideprog').toggle();
	      	});
	    });
  	</script>

  	<script type="text/javascript">
  		// menu toggle
  		$(document).ready(function (){
	      	$(".box-vertical-megamenus h4").mouseenter(function(){
	        	$('.vertical-menu-content.is-home').slideToggle();
	      	});
	    });
  	</script>

  	<script type="text/javascript">
  		$(document).ready(function(){
	      $(function () {
	        var ctx = document.getElementById("homereport");
	        var myChart = new Chart(ctx, {
	          type: 'line',
	          data: {
	              labels: ["1/1/2017", "5/2/2017", "8/3/2017", "2/1/2017", "25/1/2017", "15/10/2018", "15/10/2018"],
	              datasets: [{
	                  label: '# of Votes',
	                  data: [12, 19, 3, 5, 2, 3, 5],
	                  backgroundColor: [
	                      'rgba(255, 159, 64, 0.2)'
	                  ],
	                  borderColor: [
	                      'rgba(255, 159, 64, 1)'
	                  ],
	                  borderWidth: 1
	              }]
	          },
	          options: {
	              scales: {
	                  yAxes: [{
	                      ticks: {
	                          beginAtZero:true
	                      }
	                  }]
	              }
	          }
	        });  
	      });

	      $(function () {
	        var ctx = document.getElementById("storeanalytics");
	        var myChart = new Chart(ctx, {
	          	type: 'line',
	          	data: {
	              	labels: ["1/1/2017", "5/2/2017", "8/3/2017", "2/1/2017", "25/1/2017", "15/10/2018", "15/10/2018"],
	              	datasets: [{
	                  	label: '# of Votes',
	                  	data: [12, 19, 3, 5, 2, 3, 5],
	                  	backgroundColor: [
	                      'rgba(255, 159, 64, 0.2)'
	                  	],
	                  	borderColor: [
	                      'rgba(255, 159, 64, 1)'
	                  	],
	                  	borderWidth: 1
	              	}]
	          	},
	          	options: {
	              	scales: {
	                  yAxes: [{
	                      	ticks: {
	                          beginAtZero:true
	                      	}
	                  	}]
	              	}
	          	}
	        	});  
	      	});

	      $(function () {
	      	var randomScalingFactor = function() {
			    return Math.round(Math.random() * 100);
			};

			var config = {
				type: 'pie',
				data: {
					datasets: [{
						data: [
							randomScalingFactor(),
							randomScalingFactor(),
							randomScalingFactor(),
							randomScalingFactor(),
							randomScalingFactor(),
						],
						backgroundColor: [
							window.chartColors.red
						],
						label: 'Dataset 1'
					}],
					labels: [
						'Red',
						'Orange',
						'Yellow',
						'Green',
						'Blue'
					]
				},
				options: {
					responsive: true
				}
			};

			window.onload = function() {
				var ctx = document.getElementById('chart-area');
	            window.myPie = new Chart(ctx, config);  
			};

	      });
	    });
  	</script>
@endsection