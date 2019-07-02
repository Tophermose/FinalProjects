<?php session_start() ?>
<html lang="en">
  <head>
    <title>Matthew's Menagerie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <div class="site-wrap">
    <header class="site-navbar">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                <a href='index.php?choice=logoff'>Log Out</a>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php?choice=home" class="js-logo-clone">Matthew's Menagerie</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li></li>
                  <li></li>
                  <li>
                    <a href="index.php?choice=cart" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li><a href="index.php?choice=home">Home</a></li>
            <li class="has-children active">
              <a>Shop Animals</a>
              <ul class="dropdown">
                <li class="has-children">
                  <a href="#">Mustelids</a>
                  <ul class="dropdown">
                    <li><a href="index.php?choice=otter">Otter</a></li>
                    <li><a href="index.php?choice=badger">Badger</a></li>
                    <li><a href="index.php?choice=ferret">Ferret</a></li>
                    <li><a href="index.php?choice=marten">Marten</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#">Lagomorphs</a>
                  <ul class="dropdown">
                    <li><a href="index.php?choice=rabbit">Rabbit</a></li>
                    <li><a href="index.php?choice=hare">Hare</a></li>
                    <li><a href="index.php?choice=pika">Pika</a></li>
                    <li><a href="index.php?choice=jackalope">Jackalope</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#">Felines</a>
                  <ul class="dropdown">
                    <li><a href="index.php?choice=snow_leopard">Snow Leopard</a></li>
                    <li><a href="index.php?choice=cheetah">Cheetah</a></li>
                    <li><a href="index.php?choice=panther">Panther</a></li>
                    <li><a href="index.php?choice=puma">Puma</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="index.php?choice=about">About</a>
            </li>
            <li><a href="index.php?choice=contact">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
  </div>

    </header>
  </div>
<div class="site-blocks-cover" style="background-image: url(view/images/animal_kingdom.jpg);" data-aos="fade">
      <div class="container">
       <form action="index.php" method="get" style="text-align:center;padding-top:300px;">
        <input type="hidden" name="choice" value="logon" />
        <!--Padding and margin effect everything, not just the form.-->
        <!--This action and method will have to change!-->
        <div style="padding-left:200px;padding-right:200px;border:5px;border-color:solid black;">
          <div style="background-color:skyblue;opacity:50%;">
                <input type="hidden" name="choice" value="logoff2" />
                <input type="submit" value="Logoff" class='btn btn-sm btn-primary'>
          </div>
        </div>
       </form>      
      </div>
    </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>