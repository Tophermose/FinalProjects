<?php
require("catalog2.php");
?>
<!DOCTYPE html>
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
    <script src="cookiemngr.js" type="text/javascript"></script>
    <script type="text/javascript">
	function update(id)
	{
    var itemid=id+"qty";
    var newqty=document.getElementById(itemid).value;
    //alert(newqty);
	if(newqty <=0) setCookie(id,newqty,-1);
	else setCookie(id,newqty,30);

	location.reload();
	}
</script>

  </head>
  <body onload='summation(total);'>
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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php?choice=home">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Code</th>
                    <th class="product-name">Product</th>
                    <th>Quantity</th>
                    <th class="product-price">Price</th>
                  </tr>
                </thead>
                   <?php
                   	//put variables I want to use in vars under an echo "<script></script> tag in php and pass those arguments to a function?"
                    $total=0;
                    for($i=0;$i<sizeof($items);$i++)
                    {
                    if (array_key_exists($items[$i], $_COOKIE))
                    $quantity=(float)$_COOKIE[$items[$i]];

                    else $quantity=null;
                    if (array_key_exists($codes[$i], $_COOKIE))
                    $num = $_COOKIE[$codes[$i]];

                    if($quantity !=null)
                    {
                    $itemqtyname=$items[$i]."qty";
                    $total=$total+$prices[$i]*$quantity;
                    /*echo "<script> createRow('<?php $picture[$i] ?>, <?php $item[$i] ?>, <?php $prices[$i] ?>); </script>";*/
                    //echo "<script> createRow('$picture[$i]','$item[$i]','$prices[$i]'); </script>";
                    //script must be here. 
                    	echo "<tr><td>".$codes[$i]."</td>";
					    echo "<td class='product-name, h5, text-black'>".$items[$i]."</td>";
					          //echo "<h2 class='h5, text-black'>"
					     echo "<td>"."<input type='text' id='".$itemqtyname."' value='".$quantity."' />";
					     echo "<input type='button' class='btn btn-sm btn-primary' value='update' id='".$items[$i]."' onclick='update(this.id)' /></td>";
					     echo "<td>".$prices[$i]."</td></tr>";
                    
                    }
                }
                    //Incomplete?

                    ?>
                    <script> var total = <?php echo $total ?>
                    
                  </script>
                </table>
                <a class="btn btn-sm btn-primary" href="index.php?choice=checkout">Checkout</a>
            </div>
          </form>
        </div>

    <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                  <a class="btn btn-outline-primary btn-sm btn-block" href="index.php?choice=home">Continue Shopping</a>
              </div>
              <div class="col-md-6">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
              </div>
              <div class="col-md-4">
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Total</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black" id="subCost"></strong>
                  </div>
                </div>

                <div class="row">
                 <!-- <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                  </div>-->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
    <script>
                var arr = [];
                var y, z;
                var sum = 0.00;
                var count = 0;
                function summation(total) {
                  
                    arr.unshift(total);
                    for (z = 0; z < arr.length; z++) {
                        for (y = 0; y < arr.length; y++) {
                            if(arr[z] === arr[y]) {
                              sum += total;
                              count++;
                          
                              if(count > 1) {
                              sum += 0;
                            }
                        }
                    }
                    
                    document.getElementById("subCost").innerHTML = '$' + sum;                   }
              };
  </script>
  

  <script src="js/main.js"></script>
    
  </body>
</html>