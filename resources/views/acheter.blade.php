<!DOCTYPE html>
<html lang="en">
  <head>
    <!--================ Basic page needs ================-->
    <title>{{$title}}</title>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--================ Mobile specific metas ================-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--================ Favicon ================-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!--================ Google web fonts ================-->
    <link
      href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700,800,900%7CLato:300i,400,400i,700,700i,900&display=swap"
      rel="stylesheet">
    <!--================ Vendor CSS ================-->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link
      href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp"
      rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/arcticmodal/jquery.arcticmodal-0.3.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <!--================ Theme CSS ================-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <link rel="icon" type="image/png" href="{{asset('img/test.jpg')}}" />
    <!--================ Vendor JS ================-->
  </head>
  <body class="mad-body--scheme-brown">
    <div class="mad-preloader"></div>
    <div id="mad-page-wrapper" class="mad-page-wrapper">
      
      <!--================ Search Modal ================-->
      <div class="mad-d-none">
        <div id="search-modal" class="mad-modal mad-modal--search">
          <button type="button" class="arcticmodal-close"><i class="material-icons">close</i></button>
          <h4 class="mad-title">Search</h4>
          <!--================ Search Form ================-->
          <form role="search" method="get" class="mad-searchform">
            <input type="text" name="s" placeholder="Type your keyword here">
            <button type="submit"><i class="material-icons">search</i></button>
          </form>
          <!--================ End of Search Form ================-->
        </div>
      </div>
      <!--================ End of Search Modal ================-->
      <header id="mad-header" class="mad-header header-white mad-header--transparent">
        <div class="mad-header-section--sticky-xl">
          <div class="container">
            <div class="mad-header-items">
              <div class="mad-header-item">
                <a href="{{route('home')}}" class="mad-logo"><img src="{{asset('images/logo3.png')}}" alt=""></a>
              </div>
              <!--================ Navigation ================-->
              <nav class="mad-navigation-container">
                <ul class="mad-navigation mad-navigation--vertical-sm">
                  <li class="menu-item menu-item-has-children current-menu-item"><a href="{{route('home')}}">Home</a>
                    <!--================ Sub Menu ================-->
                   
                    <!--================ End of Sub Menu ================-->
                  </li>
                  <li class="menu-item menu-item-has-children"><a href="#">MENUS</a>
                    <!--================ Sub Menu ================-->
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="{{route('menus-a-plusieurs')}}">A PLUSIEURS</a>
                      </li>
                      <li class="menu-item"><a href="{{route('mixte')}}">MIXTE</a>
                      </li>
                      <li class="menu-item"><a href="{{route('maki')}}">MAKI</a>
                      </li>
                      <li class="menu-item"><a href="{{route('sashimi')}}">SASHIMI</a>
                      </li>
                      <li class="menu-item"><a href="{{route('chirashi')}}">CHIRASHI</a>
                      </li>
                      <li class="menu-item"><a href="{{route('temaki')}}">TEMAKI</a>
                      </li>
                      <li class="menu-item"><a href="{{route('temaki')}}">SUSHI</a>
                      </li>
                      <li class="menu-item"><a href="{{route('menus-sushi')}}">BROCHETTES</a>
                      </li>
                      
                    </ul>
                    <!--================ End of Sub Menu ================-->
                  </li>
                  <li class="menu-item menu-item-has-children"><a href="#">PLATS CHAUDS</a>
                    <!--================ Sub Menu ================-->
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="{{route('bento')}}">BENTO</a>
                      </li>
                      <li class="menu-item"><a href="{{route('udon')}}">UDON</a>
                      </li>
                      <li class="menu-item"><a href="{{route('gyoza')}}">GYOZA</a>
                      </li>
                      <li class="menu-item"><a href="{{route('tempura')}}">TEMPURA</a>
                      </li>
                      
                      
                    </ul>
                    <!--================ End of Sub Menu ================-->
                  </li>
                  
                  <li class="menu-item menu-item-has-children "><a href="#">À la carte</a>
                    <!--================ Sub Menu ================-->
                    <ul class="sub-menu">
                      <li class="menu-item menu-item-has-children"><a href="#" class="sub-title">Les classiques</a>
                        <!--================ Sub Menu ================-->
                        <ul class="sub-menu">
                          <li class="menu-item"><a href="{{route('carte-classique-sushi')}}">SUSHI</a></li>
                          <li class="menu-item"><a href="{{route('carte-classique-maki')}}">Maki</a></li>
                          <li class="menu-item"><a href="{{route('carte-classique-brochettes')}}">Brochettes</a></li>
                          <li class="menu-item"><a href="{{route('carte-classique-temaki')}}">Temaki</a></li>
                        
                        </ul>
                        <!--================ End of Sub Menu ================-->
                      </li>
                      
                      <li class="menu-item menu-item-has-children"><a href="#" class="sub-title">Les créatifs</a>
                        <!--================ Sub Menu ================-->
                        <ul class="sub-menu">
                        <li class="menu-item"><a href="{{route('carte-rockets')}}">Rocket's
                              </a></li>
                          <li class="menu-item"><a href="{{route('carte-trendys')}}">Trendy's
                             </a></li>
                          <li class="menu-item"><a href="{{route('carte-caliwasabis')}}">CALIWASABI'S</a></li>
                          <li class="menu-item"><a href="{{route('carte-craps')}}">CRAP'S</a></li>
                        </ul>
                        <!--================ End of Sub Menu ================-->
                      </li>
                      
                    </ul>
                    <!--================ End of Sub Menu ================-->
                  </li>
                  <li class="menu-item menu-item-has-children"><a href="#">Entrées</a>
                    <!--================ Sub Menu ================-->
                    <ul class="sub-menu">
                    <li class="menu-item"><a href="{{route('accompagnement')}}">ACCOMPAGNEMENT</a>
                      </li>
                      <li class="menu-item"><a href="{{route('salades')}}">Salades</a>
                      </li>
                      <li class="menu-item"><a href="{{route('tartares')}}">Tartares</a>
                      </li>
                      
                    </ul>
                    <!--================ End of Sub Menu ================-->
                  </li>
                  
                  <li class="menu-item menu-item-has-children"><a href="{{route('dessert')}}">Desserts</a>
                    <!--================ Sub Menu ================-->
                    
                    <!--================ End of Sub Menu ================-->
                  </li>
                  <li class="menu-item menu-item-has-children"><a href="{{route('boisson')}}">Boissons</a>
                    <!--================ Sub Menu ================-->
                    
                    <!--================ End of Sub Menu ================-->
                  </li>
                </ul>
                
              </nav>
              <!--================ End of Navigation ================-->
            </div>
          </div>
        </div>
      </header>
      <!--================ End of Header ================-->
      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg with-header" data-bg-image-src="{{asset('images/sidebar.jpg')}}">
        <div class="container">
          <nav class="mad-breadcrumb-path"><span><a href="#"></a>
          </nav>
        <h1 class="mad-page-title">{{$title}}</h1>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content">
        <div class="container">
          <div class="row">
            <div id="main" class="col-12">
              <!--================ Tabs ================-->
              <div class="mad-tabs products">
                <!--================ Tabs Navigation ================-->
                <div role="tablist" aria-label="Tour Sections v1" class="mad-tabs-nav justify-content-center">
                  <span class="mad-active"><a id="tab-1-link" href="#tab-1" role="tab" aria-selected="false" aria-controls="tab-1"
                      class="mad-tab-link">{{$title}}</a>
                  </span>
           
                </div>
                <!--================ End of Tabs Navigation ================-->
                
                <!-- End of Product sorting -->
                <!--================ Tabs Container ================-->
                <div class="mad-tabs-container">
                  <!--================ Tab ================-->
                  <div id="tab-1" tabindex="0" role="tabpanel" aria-labelledby="tab-1-link" class="mad-tab">
                    <div class="mad-products item-col-4">
                      @foreach($data as $product) 
                      <div class="mad-col">
                        <!-- Product -->
                        <div class="mad-product">
                          <figure class="mad-product-image">
                          <a href="#"><img src="{{asset($product->path)}}" alt=""></a>
                          </figure>
                          <!-- product-desc -->
                          <div class="mad-product-description">
                            <h6 class="mad-product-title"><a href="#" class="mad-link">{{$product->titre}}</a></h6>
                            <span class="mad-product-info">300 g | 375 kcal</span>
                          <p>{{$product->description}}</p>
                          </div>
                          <!--/ product-desc -->
                          <div class="mad-product-calc">
                          <span class="mad-product-price">{{$product->prix}}$</span>
                            <div class="mad-calc">
                            
                                <a href="{{route('acheter',['id'=>$product->id])}}" class="btn"><i class="material-icons">shopping_cart</i></a>
                            
                              
                            </div>
                          </div>
                        </div>
                        <!-- End of Product -->
                      </div>
                      @endforeach
                    </div>
                  </div>
                 
                  <!--================ End of Tab ================-->
                </div>
                <!--================ End of Tabs Container ================-->
              </div>
              <!--================ End of Tabs ================-->
             
            </div>
          </div>
        </div>
      </div>
      <!--================ Footer ================-->
      <footer id="mad-footer" class="mad-footer">
        <!--================ Footer row ================-->
        <div class="mad-footer-main">
          <div class="container">
            <div class="row vr-size-1">
              <div class="col-lg-3 col-md-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <div class="content-element-2">
                    <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
                  </div>
                  <p>Révolution dans l’univers du sushi :dorénavant, vous pouvez vous faire livrer toute la nuit !</p>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-lg-3 col-md-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h5 class="mad-widget-title">Aimez-nous sur Facebook</h5>
                  <div data-tabs="" data-href="https://www.facebook.com/envato" data-small-header="true"
                    data-adapt-container-width="true" data-width="500" data-hide-cover="false" data-show-facepile="true"
                    class="fb-page">
                    <blockquote cite="https://www.facebook.com/envato" class="fb-xfbml-parse-ignore"><a
                        href="https://www.facebook.com/envato">Envato</a></blockquote>
                  </div>
                  <script>(function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-lg-3 col-md-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h5 class="mad-widget-title">Dernières nouvelles</h5>
                  <div class="mad-entities mad-entities-small">
                    <div class="mad-col">
                      <!--================ Entity ================-->
                      <article class="mad-entity">
                        <div class="mad-entity-body">
                          <time datetime="2020-08-12">September 12, 2020</time>
                          <h6 class="mad-entity-title"><a href="#" class="mad-link">Sed in lacus ut enim adipiscing</a></h6>
                        </div>
                      </article>
                      <!--================ End of Entity ================-->
                    </div>
                    <div class="mad-col">
                      <!--================ Entity ================-->
                      <article class="mad-entity">
                        <div class="mad-entity-body">
                          <time datetime="2020-08-08">September 8, 2020</time>
                          <h6 class="mad-entity-title"><a href="#" class="mad-link">In pede mi aliquet sit amet euismod</a>
                          </h6>
                        </div>
                      </article>
                      <!--================ End of Entity ================-->
                    </div>
                    <div class="mad-col">
                      <!--================ Entity ================-->
                      <article class="mad-entity">
                        <div class="mad-entity-body">
                          <time datetime="2020-08-01">September 1, 2020</time>
                          <h6 class="mad-entity-title"><a href="#" class="mad-link">Vestibulum ante ipsum primis in</a></h6>
                        </div>
                      </article>
                      <!--================ End of Entity ================-->
                    </div>
                  </div>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-lg-3 col-md-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h5 class="mad-widget-title">Obtenez des nouvelles et des offres</h5>
                  <div class="content-element-4">
                    <form class="mad-newsletter-form">
                      <input type="email" name="email" placeholder="Enter Your Email Address">
                      <button type="submit" class="btn btn-big w-100">Subscribe</button>
                    </form>
                  </div>
                  <div class="mad-social-icons">
                    <ul>
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-tripadvisor"></i></a></li>
                      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                      <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                  </div>
                </section>
                <!--================ End of Widget ================-->
              </div>
            </div>
          </div>
        </div>
        <!--================ End of Footer row ================-->
        <div class="mad-hr-list">
          <ul class="justify-content-center">
          <li><a href="{{route('home')}}" class="mad-link">Home</a></li>
            <li><a href="{{route('contact')}}" class="mad-link">Contact</a></li>
            
          </ul>
        </div>
        <p class="copyrights">Copyright © 2020 <a href="#" class="mad-link link-white">midnightsushi24</a>.
          All Rights Reserved.</p>
      </footer>
      <!--================ End of Footer ================-->
    </div>
    <script src="{{asset('vendors/modernizr.js')}}"></script>
    <script src="{{asset('vendors/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('vendors/jquery.easing.1.3.min.js')}}"></script>
    <script src="{{asset('vendors/monkeysan.jquery.nav.1.0.min.js')}}"></script>
    <script src="{{asset('vendors/monkeysan.tabs.min.js')}}"></script>
    <script src="{{asset('vendors/mad.customselect.js')}}"></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendors/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('vendors/monkeysan.validator.min.js')}}"></script>
    <script src="{{asset('vendors/arcticmodal/jquery.arcticmodal-0.3.min.js')}}"></script>
    <script src="{{asset('vendors/tweetie/tweetie.min.js')}}"></script>
    <script src="{{asset('vendors/handlebars-v4.0.5.min.js')}}"></script>
    <script src="{{asset('vendors/retina.min.js')}}"></script>
    <script src="{{asset('js/modules/mad.alert-box.min.js')}}"></script>
    <script src="{{asset('js/modules/mad.newsletter-form.min.js')}}"></script>
    <script src="{{asset('js/modules/mad.sticky-header-section.min.js')}}"></script>
    <script src="{{asset('js/mad.app.js')}}"></script>
  </body>
</html>
