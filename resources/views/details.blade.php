<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Novin Preview</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/log.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index" class="active">Home</a></li>
                        <li><a href="browse">Trending</a></li>
                        <li><a href="details">History</a></li>
                        <li><a href="streams">Katalog</a></li>
                  </ul>
                  <img src="assets\images\Novin Logo.png" alt="profil" class="user-pic" onclick="toggleMenu()" />
                      <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                          <div class="user-info">
                            <img src="assets\images\Novin Logo.png" alt="profil" class="user-pic" />
                            <h3>NOVIN</h3>
                          </div>
                          <hr />
                          <a href="#" class="sub-menu-link">
                            <i data-feather="user" class="icon"></i>
                            <p>Edit Profille</p>
                            <span> </span>
                          </a>
                          @if(!Auth::check())
                          <li>
                            <a href="/login" class="sub-menu-link">
                              <i data-feather="user" class="icon"></i>
                              <p>Login</p>
                              <span> </span>
                              </a>
                          </li>
                          @else
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <b class="text-primary" >{{ Auth::user()->email}} </b>
                              </a>
                              <ul class="dropdown-menu">
                                  <li class="p-2 bg-info text-bold">Level: {{ Auth::user()->role}}</li>
                                  <li>
                                      <hr class="dropdown-divider">
                                  </li>
                                  <li class="p-2">
                                      <a href="{{route('actionlogout')}}">
                                          <button class="btn btn-outline-success" type="submit">Log Out</button>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          @endif
                            <span> </span>
                          </a>
                          <a href="profile" class="sub-menu-link">
                            <i data-feather="settings" class="icon"></i>
                            <p>Settings & Privacy</p>
                            <span> </span>
                          </a>
                        </div>
                      </div>
                    </nav>
                   </div>
                   <script>                 
                      feather.replace();
                    </script>

                    <script>                      
                    let subMenu = document.getElementById("subMenu");
                    
                    function toggleMenu() {
                    
                    subMenu.classList.toggle("open-menu");                
                    }
                  
                    </script>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="assets/images/feature-left.jpg" alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-8">
                    <div class="thumb">
                      <img src="assets/images/feature-right.jpg" alt="" style="border-radius: 23px;">
                      <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-lg-12">
                <h2>Fortnite Details</h2>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="left-info">
                        <div class="left">
                          <h4>Fortnite</h4>
                          <span>Sandbox</span>
                        </div>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="right-info">
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>
                          <li><i class="fa fa-download"></i> 2.3M</li>
                          <li><i class="fa fa-server"></i> 36GB</li>
                          <li><i class="fa fa-gamepad"></i> Action</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <img src="assets/images/details-01.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="assets/images/details-02.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="assets/images/details-03.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-12">
                      <p>Cyborg Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout. You can make a <a href="https://paypal.me/templatemo" target="_blank">small contribution via PayPal</a> to info [at] templatemo.com and thank you for supporting. If you want to get the PSD source files, please contact us. Lorem ipsum dolor sit consectetur es dispic dipiscingei elit, sed doers eiusmod lisum hored tempor.</p>
                    </div>
                    <div class="col-lg-12">
                      <div class="main-border-button">
                        <a href="#">Download Fortnite Now!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->

          <!-- ***** Other Start ***** -->
          <div class="other-games">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Other Related</em> Games</h4>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-01.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-02.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-03.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-02.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-03.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-01.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Other End ***** -->

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>