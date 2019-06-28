@extends('layout.index')


@section('content')
<!-- Home slideder-->
	<div id="home-slider">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-3 slider-left"></div>
	            <div class="col-sm-9 header-top-right">
	                <div class="homeslider">
	                    <div class="content-slide">
	                        <ul id="contenhomeslider">
	                          <li><img src="assets/slide.jpg" title="" /></li>
	                         <!--  <li><img src="assets/slide.jpg" title="" /></li>
	                          <li><img src="assets/slide.jpg" title="" /></li> -->
	                        </ul>
	                    </div>
	                </div>
	                <div class="header-banner banner-opacity">
	                    <a href="#"><img src="assets/ads1.jpg" /></a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- End Home slider-->

	<!-- Product slider -->
	<div class="product-slider">
	  <div class="container">
	      <div class="title-box">
	        <h2 class="text-center">PRODUITS VEDETTES</h2>
	        <p class="text-center">MEILLEURES VENTES</p>
	      </div>
	      <div class="carousel slide media-carousel first-slider" id="media">
	          <div class="carousel-inner">
	            <div class="item  active">
	              <div class="row">
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="/productdetail">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="/productdetail"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <a href="#" class="addbag" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Ajouter à votre Wishlist"> <i class="fa fa-heart-o midbt"></i> </a>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
	                              <a href="#" class="searchiocn" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Aperçu rapide"> <i class="fa fa-search midbt"></i> </a>
	                            </div>
	                          </div>
	                      </div>  
	                  </div>          
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                  Bâtonnets pour brochettes, barbecues, grillades
	                                  ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <i class="fa fa-heart midbt"></i>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
	                              <i class="fa fa-search midbt"></i>
	                            </div>
	                          </div>
	                      </div> 
	                  </div>
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                  Bâtonnets pour brochettes, barbecues, grillades
	                                  ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <i class="fa fa-heart midbt"></i>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
	                              <i class="fa fa-search midbt"></i>
	                            </div>
	                          </div>
	                      </div> 
	                  </div>
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                  Bâtonnets pour brochettes, barbecues, grillades
	                                  ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <i class="fa fa-heart midbt"></i>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier </button>
	                              <i class="fa fa-search midbt"></i>
	                            </div>
	                          </div>
	                      </div> 
	                  </div>        
	              </div>
	            </div>
	            <div class="item">
	              <div class="row">
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div> 
	                </div>          
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div> 
	                </div>
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div> 
	                </div> 
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div>   
	                </div>       
	              </div>
	            </div>
	            <div class="item">
	              <div class="row">
	                <div class="col-md-3">
	                  
	                </div>          
	                <div class="col-md-3">
	                  
	                </div>
	                <div class="col-md-3">
	                  
	                </div>
	                <div class="col-md-3">
	                  
	                  </div>      
	              </div>
	            </div>
	          </div>
	          <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
	          <a data-slide="next" href="#media" class="right carousel-control">›</a>
	      </div>
	      
	      <div class="carousel slide media-carousel second-slider" id="second">
	          <div class="carousel-inner">
	            <div class="item  active">
	              <div class="row">
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                  Bâtonnets pour brochettes, barbecues, grillades
	                                  ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <i class="fa fa-heart midbt"></i>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
	                              <i class="fa fa-search midbt"></i>
	                            </div>
	                          </div>
	                      </div>  
	                  </div>          
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                  Bâtonnets pour brochettes, barbecues, grillades
	                                  ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <i class="fa fa-heart midbt"></i>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
	                              <i class="fa fa-search midbt"></i>
	                            </div>
	                          </div>
	                      </div> 
	                  </div>
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                  Bâtonnets pour brochettes, barbecues, grillades
	                                  ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <i class="fa fa-heart midbt"></i>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
	                              <i class="fa fa-search midbt"></i>
	                            </div>
	                          </div>
	                      </div> 
	                  </div>
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                  Bâtonnets pour brochettes, barbecues, grillades
	                                  ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <i class="fa fa-heart midbt"></i>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier </button>
	                              <i class="fa fa-search midbt"></i>
	                            </div>
	                          </div>
	                      </div> 
	                  </div>        
	              </div>
	            </div>
	            <div class="item">
	              <div class="row">
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div> 
	                </div>          
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div> 
	                </div>
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div> 
	                </div> 
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div>   
	                </div>       
	              </div>
	            </div>
	            <div class="item">
	              <div class="row">
	                <div class="col-md-3">
	                  
	                </div>          
	                <div class="col-md-3">
	                  
	                </div>
	                <div class="col-md-3">
	                  
	                </div>
	                <div class="col-md-3">
	                  
	                  </div>      
	              </div>
	            </div>
	          </div>
	          <a data-slide="prev" href="#second" class="left carousel-control">‹</a>
	          <a data-slide="next" href="#second" class="right carousel-control">›</a>
	      </div>

	      <div class="carousel slide media-carousel third-slider" id="third">
	          <div class="carousel-inner">
	            <div class="item  active">
	              <div class="row">
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                  Bâtonnets pour brochettes, barbecues, grillades
	                                  ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <i class="fa fa-heart midbt"></i>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
	                              <i class="fa fa-search midbt"></i>
	                            </div>
	                          </div>
	                      </div>  
	                  </div>          
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                  Bâtonnets pour brochettes, barbecues, grillades
	                                  ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <i class="fa fa-heart midbt"></i>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
	                              <i class="fa fa-search midbt"></i>
	                            </div>
	                          </div>
	                      </div> 
	                  </div>
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                  Bâtonnets pour brochettes, barbecues, grillades
	                                  ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <i class="fa fa-heart midbt"></i>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
	                              <i class="fa fa-search midbt"></i>
	                            </div>
	                          </div>
	                      </div> 
	                  </div>
	                  <div class="col-md-3">
	                      <div class="product product-single">
	                          <div class="product-thumb">
	                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                            <img src="assets/product1.jpg" alt="">
	                          </div>
	                          <div class="product-body">
	                            <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                            <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                            <h3 class="product-price">$32.50</h3>
	                            <div class="product-btns">
	                              <p class="prodesc">
	                                  Bâtonnets pour brochettes, barbecues, grillades
	                                  ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                              </p>
	                              <p class="product-delivery">
	                                  Delivery: 1 to 2 days
	                              </p>
	                              <i class="fa fa-heart midbt"></i>
	                              <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier </button>
	                              <i class="fa fa-search midbt"></i>
	                            </div>
	                          </div>
	                      </div> 
	                  </div>        
	              </div>
	            </div>
	            <div class="item">
	              <div class="row">
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div> 
	                </div>          
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div> 
	                </div>
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div> 
	                </div> 
	                <div class="col-md-3">
	                    <div class="product product-single">
	                        <div class="product-thumb">
	                          <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
	                          <img src="assets/product1.jpg" alt="">
	                        </div>
	                        <div class="product-body">
	                          <p class="product-name"><a href="#">Bâtons à brochettes en bois Barbecue 30 cm</a></p>
	                          <p class="text-center sublink"><a href="#"> Vendu par HDs Cuisine</a></p>
	                          <h3 class="product-price">$32.50</h3>
	                          <div class="product-btns">
	                            <p class="prodesc">
	                                Bâtonnets pour brochettes, barbecues, grillades
	                                ! Grâce à ses bâtonnets spécial brochettes, vous pourrez dégustez tous vos mets !
	                            </p>
	                            <p class="product-delivery">
	                                Delivery: 1 to 2 days
	                            </p>
	                            <i class="fa fa-heart midbt"></i>
	                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
	                            <i class="fa fa-search midbt"></i>
	                          </div>
	                        </div>
	                    </div>   
	                </div>       
	              </div>
	            </div>
	            <div class="item">
	              <div class="row">
	                <div class="col-md-3">
	                  
	                </div>          
	                <div class="col-md-3">
	                  
	                </div>
	                <div class="col-md-3">
	                  
	                </div>
	                <div class="col-md-3">
	                  
	                  </div>      
	              </div>
	            </div>
	          </div>
	          <a data-slide="prev" href="#third" class="left carousel-control">‹</a>
	          <a data-slide="next" href="#third" class="right carousel-control">›</a>
	      </div>
	  </div>
	</div>

	<div class="home-categories">
	    <div class="container">
	        <div class="category-box">
	            <h2 class="text-center">Meilleures catégories</h2>
	        </div>

	        <div class="image-box">
	          <div class="col-md-6">
	              <a class="list-quotes" href="/">
	                <img class='img-responsive' alt="img" src="https://img.sheroes.in/img/uploads/article/high_res/Woman-Traveling-Alone-1-1000x500.jpg">
	                <div class="quotes">
	                    <h1>Téléphone et Tablette</h1>
	                    <p>
	                        1 Product
	                    </p>
	                </div>
	              </a>
	          </div>
	          <div class="col-md-6">
	            <div class="col-md-6 main-wrap">
	                <a class="list-quotes" href="/">
	                  <img class='img-responsive right-box' alt="img" src="https://img.sheroes.in/img/uploads/article/high_res/Woman-Traveling-Alone-1-1000x500.jpg">
	                  <div class="quotes">
	                      <h1>Téléphone et Tablette</h1>
	                      <p>
	                          1 Product
	                      </p>
	                  </div>
	                </a>
	            </div>
	            <div class="col-md-6 main-wrap">
	                <a class="list-quotes" href="/">
	                  <img class='img-responsive right-box' alt="img" src="https://img.sheroes.in/img/uploads/article/high_res/Woman-Traveling-Alone-1-1000x500.jpg">
	                  <div class="quotes">
	                      <h1>Téléphone et Tablette</h1>
	                      <p>
	                          1 Product
	                      </p>
	                  </div>
	                </a>
	            </div>
	            
	            <div class="clearfix"></div>

	            <div class="col-md-6 main-wrap">
	                <a class="list-quotes" href="/">
	                  <img class='img-responsive right-box' alt="img" src="https://img.sheroes.in/img/uploads/article/high_res/Woman-Traveling-Alone-1-1000x500.jpg">
	                  <div class="quotes">
	                      <h1>Téléphone et Tablette</h1>
	                      <p>
	                          1 Product
	                      </p>
	                  </div>
	                </a>
	            </div>
	            <div class="col-md-6 main-wrap">
	                <a class="list-quotes" href="/">
	                  <img class='img-responsive right-box' alt="img" src="https://img.sheroes.in/img/uploads/article/high_res/Woman-Traveling-Alone-1-1000x500.jpg">
	                  <div class="quotes">
	                      <h1>Téléphone et Tablette</h1>
	                      <p>
	                          1 Product
	                      </p>
	                  </div>
	                </a>
	            </div>
	          </div>          
	        </div>
	    </div>
	</div>
	<!-- End slider -->

	<div class="newsletter-section">
	  <div class="newsletter-notre">
	    <p> REJOIGNEZ NOTRE NEWSLETTER MAINTENANT </p>
	    <span>
	      <input type="text" name="" class="form-control newstext" placeholder="Your email address">
	      <button type="button" class="btn btn-default signup"> SIGN UP </button>
	    </span>
	  </div>
	  <div class="sera-utility">
	      <p class="notre-sera">Sera utilisé conformément à notre <span> Politique de Confidentialité </span></p> 
	  </div>
	</div>


@endsection