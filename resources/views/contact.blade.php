<!DOCTYPE html>
<html lang="en">

<head>
  <!--================ Basic page needs ================-->
  <title>Contactez nous</title>
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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="vendors/arcticmodal/jquery.arcticmodal-0.3.css">
  <link rel="stylesheet" href="vendors/revolution/css/settings.css">
  <link rel="stylesheet" href="vendors/revolution/css/layers.min.css">
  <link rel="stylesheet" href="vendors/revolution/css/navigation.min.css">
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <!--================ Vendor JS ================-->


  <link rel="icon" type="image/png" href="{{asset('img/test.jpg')}}" />
</head>
  <body>
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
      <!--================ Header ================-->
      <header id="mad-header" class="mad-header header-white mad-header--transparent">
        <div class="mad-header-section--sticky-xl">
          <div class="container">
            <div class="mad-header-items">
              <div class="mad-header-item">
                <a href="{{route('home')}}" class="mad-logo"><img src="images/logo3.png" alt=""></a>
              </div>
            <!--================ Navigation ================-->
            <nav class="mad-navigation-container">
                <ul class="mad-navigation mad-navigation--vertical-sm">
                  <li class="menu-item menu-item-has-children current-menu-item"><a href="{{route('home')}}">Acceuil</a>
                    <!--================ Sub Menu ================-->
                   
                    <!--================ End of Sub Menu ================-->
                  </li>
                  <li class="menu-item menu-item-has-children">  <a href="#">MENUS</a>
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
                    
                  </li>
                  <li class="menu-item menu-item-has-children"><a href="{{route('boisson')}}">Boissons</a>
                  
                  </li>
                </ul>
                <div class="mad-actions">
                  
                  <div class="mad-item">
                    <a href="#" class="mad-item-link" data-arctic-modal="#search-modal"><i
                        class="material-icons">search</i></a>
                  </div>
                </div>
              </nav>
              <!--================ End of Navigation ================-->
          </div>
        </div>
        </div>
      </header>
      <!--================ End of Header ================-->
      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg with-header" data-bg-image-src="img/test2.jpg">
        <div class="container">
          <nav class="mad-breadcrumb-path"><span><a href="{{route('home')}}">Home</a></span> - <span>Contactez-nous</span>
          </nav>
          <h1 class="mad-page-title">Contactez-nous</h1>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content mad-content--no-pt">
        <div class="container">
          <div class="mad-section">
            <div class="row vr-size-4">
              <div class="col-lg-6">
                <h2>N’hésitez pas à nous contacter</h2>
                <p>Si vous avez d’autres demandes de renseignements, veuillez utiliser les coordonnées ou le formulaire ci-dessous.</p>
                <div class="row">
                  <div class="col-sm-6">
                    <ul class="mad-our-info size-2 content-element-2">
                      <li class="content-element-2"><i class="material-icons">location_on</i>
                        <span>56 12th Ave, <br>
                          New York, NY 10011 <br>
                          <a href="#" class="mad-dir mad-link">Get Direction</a>
                        </span>
                      </li>
                      <li><i class="material-icons">phone</i><span>+1 800 603 6035</span></li>
                      <li><i class="material-icons">mail_outline</i><a href="#" class="mad-link color-2">mail@companyname.com</a></li>
                    </ul>
                    <div class="mad-social-icons style-2 size-2">
                      <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-tripadvisor"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mad-timetable mad-vr-list with-icons">
                      <ul>
                        <li>
                          <i class="material-icons">access_time</i><span></span>
                          <div class="mad-tt-title">Brunch</div>
                          Saturday: 10am – 2pm
                        </li>
                        <li>
                          <div class="mad-tt-title">Dinner</div>
                          Monday – Thursday: 5pm – 10pm <br>
                          Friday – Saturday: 4pm – 11pm
                        </li>
                        <li>
                          <div class="mad-tt-title">Happy Hour</div>
                          Monday – Thursday: 5pm – 6pm <br>
                          Friday – Saturday: 2pm – 4pm
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                @if(Session::has('message'))
                <p class="alert alert-danger" >{{ Session::get('message') }} !</p>
                @endif
                <form class="mad-contact-form" action='{{route('add-contact')}}'>
                  <div class="mad-col">
                    <input type="text" id="cf_name" name="nom" required placeholder="Votre Nom">
                  </div>
                  <div class="mad-col">
                    <input type="email" id="cf_email" name="email" required placeholder="Votre Email">
                  </div>
                  <div class="mad-col">
                    <input type="tel" id="cf_phone" name="telephone" required placeholder="Votre Telephone ">
                  </div>
                  <div class="mad-col">
                    <textarea rows="7" id="message" name="message" required placeholder="Message"></textarea>
                  </div>
                  <div class="mad-col align-right">
                    <button type="submit" class="btn btn-big"><span>Envoyer</span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--================ Google Map ================-->
        
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


    <script src="vendors/modernizr.js"></script>
    <script src="vendors/jquery-3.3.1.min.js"></script>
    <script src="vendors/jquery.easing.1.3.min.js"></script>
    <script src="vendors/monkeysan.jquery.nav.1.0.min.js"></script>
    <script src="vendors/monkeysan.tabs.min.js"></script>
    <script src="vendors/handlebars-v4.0.5.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jquery.parallax-1.1.3.min.js"></script>
    <script src="vendors/monkeysan.validator.min.js"></script>
    <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
    <script src="vendors/retina.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script
      src="https://maps.google.com/maps/api/js?key=AIzaSyBAiQZmdiJv7g15ObEiISBGitvmdxWusc0&amp;amp;libraries=geometry&amp;amp;v=3.20"></script>
    <script src="js/modules/mad.newsletter-form.min.js"></script>
    <script src="js/modules/mad.sticky-header-section.min.js"></script>
    <script src="js/mad.app.js"></script>
  
    <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  </body>
  
  </html>
    