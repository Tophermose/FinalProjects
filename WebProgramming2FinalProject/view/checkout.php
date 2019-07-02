<?php
require("catalog2.php");
//require("catalog3.php");
?>
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
    <script src="cookiemngr2.js" type="text/javascript"></script> 
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                <?php
                if(isset($_SESSION["ON"])) { 
                  echo "<a href='index.php?choice=logoff'>Log Out</a>";
                } else {
                  echo "<a href='index.php?choice=logon'>Log In</a>";
                }
                ?>
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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php?choice=home">Home</a> <span class="mx-2 mb-0">/</span> <a href="index.php?choice=cart">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">CheckOut</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
           

            </div>
          </div>            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Tax</th>
                      <th>Sub Total</th>
                      <th>Total</th>
                    </thead>
                    <?php
                    //put variables I want to use in vars under an echo "<script></script> tag in php and pass those arguments to a function?"
                    $total=0;
                    for($i=0;$i<sizeof($items);$i++)
                    {
                    	if (array_key_exists($items[$i], $_COOKIE))
                    		$quantity=(float)$_COOKIE[$items[$i]];
                    

                    	else $quantity=null;
                    /*if (array_key_exists($codess[$i], $_COOKIE))
                    $name = $_COOKIE[$codes[$i]];*/
                    	if($quantity !=null)
                    	{
                    		$itemqtyname=$items[$i]."qty";
                    		$total=$total+$prices[$i]*$quantity;
                    		$grandTotal=$total + ($total*.10);
      						echo "<tr><td>".$items[$i]."</td>";
      						echo "<td>".($prices[$i]*.10)."</td>";
      						echo "<td>".$prices[$i]."</td>";
      						echo "<td>".($prices[$i]+($prices[$i]*.10))."</td></tr>";
   						}  
					}
?>
                    
                  </table>
                     <div class="row mb-5">
              <div class="col-md-12">
                <div class="p-3 p-lg-5 border">

                  <?php 
                      echo "<table><tr><td class='text-black font-weight-bold'>Sub Total</td>";
                      echo "<td id='subCost' class='text-black'>".$total."</td></tr>";
                      echo "<tr><td id='tax' class='text-black font-weight-bold'>Tax</td>";
                      echo "<td class='text-black'>".($total*.10)."</td></tr>";
                      echo "<td><div class='text-black' id='scost'></div></td></tr>";
                      echo "<tr><td class='text-black font-weight-bold'>Order Total</td>";
                      echo "<td id='finCost' class='text-black'>".$grandTotal."</td></tr></table>";

                    ?>
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='index.php?choice=thankyou'">Place Order</button>
                  </div>

                </div>
              </div>
            </div>
                  

                  <!--<div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='index.php?choice=checkout'">Checkout</button>
                  </div>-->

                </div>
              </div>
            </div>

          </div>
        </div>
    


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script> var total = <?php echo $total ?>; 
          var name = <?php echo $name ?>;</script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    <input type='hidden' name='choice' value='checkout'>
  </body>
</html>