<html lang='en'>
    <head>
        <title>Log In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script>
      //$('.dropdown-toggle').dropdown();
      //$('.dropdown').dropdown();
      //$(document).ready();
      //need this to function properly for dropdown to work! See if can get dropdown to work without needing the toggle part. 
      function createBar() {
        $('.dropdown-toggle').dropdown();
        //alert("This works");
  var nav = document.getElementById("dynamic");
  //nav.classList("site-navigation");
  //nav.classList("text-right");
  //nav.classList("text-md-center");
  nav.setAttribute("class", "site-navigation text-right text-md-center");
  //^^^^THIS IS RIGHT, RIGHT?^^^^
  //nav.setAttribute("class", "site-navigation");

  /*nav.className = "text-right";
  nav.className = "text-md-center";
  nav.className = "site-navigation";*/
  var div2 = document.createElement("div");
  div2.setAttribute("class", "container");

    //alert("This works too");

  var ul1 = document.createElement("ul");
  ul1.setAttribute("class", "site-menu js-clone-nav d-none d-md-block");
  var li1 = document.createElement("li");
  var a1 = document.createElement("a");
  a1.setAttribute("href", "index.html");
  var home = document.createTextNode("Home");

    //alert("This works too");

  var li2 = document.createElement("li");
  li2.setAttribute("class", "has-children active");
  var a2 = document.createElement("a");
  //a2.setAttribute("href", "#");
  var a2_label = document.createTextNode("Shop Animals");
  //a2.setAttribute("class", "dropdown-toggle");
  a2.setAttribute("data-toggle", "dropdown");
  //a2.setAttribute("data-target", "#");
    //alert("This works too");

  var ul2 = document.createElement("ul");
  ul2.setAttribute("class", "dropdown-menu");
  var li3 = document.createElement("li");
  li3.setAttribute("class", "has-children");
  var aMustelids = document.createElement("a");
  //a_Mustelids.setAttribute("href", "#");
  var mustelidsText = document.createTextNode("Mustelids");
  aMustelids.setAttribute("data-toggle", "dropdown");

  var li4 = document.createElement("li");
  li4.setAttribute("class", "has-children");

  var aLagomorphs = document.createElement("a");
  var lagomorphsText = document.createTextNode("Lagomorphs");

  var aFelines = document.createElement("a");
  var felinesText = document.createTextNode("Felines");
  //aMustelids.setAttribute("data-target", "#");

    //alert("This works too");

  var ul3 = document.createElement("ul");
  ul3.setAttribute("class", "dropdown");
  ul3.style="position:fixed";

    //alert("This works too");

  var m_li1 = document.createElement("li");
  //m_li1.setAttribute("class", "dropdown-submenu");
  var m_a1 = document.createElement("a");
  m_a1.setAttribute("href", "otter-single.html");
  //m_a1.setAttribute("data-toggle", "dropdown");
  var m_a1_otter = document.createTextNode("Otter");

    //alert("This works too");

  var m_li2 = document.createElement("li");
  //m_li2.setAttribute("class", "dropdown-submenu");
  var m_a2 = document.createElement("a");
  m_a2.setAttribute("href", "badger-single.html");
  //m_a2.setAttribute("data-toggle", "dropdown");
  var m_a2_badger = document.createTextNode("Badger");

    //alert("This works too");

  var m_li3 = document.createElement("li");
  var m_a3 = document.createElement("a");
  m_a3.setAttribute("href", "ferret-single.html");
  //m_a3.setAttribute("data-toggle", "dropdown");
  var m_a3_ferret = document.createTextNode("Ferret");

    //alert("This works too");

  var m_li4 = document.createElement("li");
  var m_a4 = document.createElement("a");
  m_a4.setAttribute("href", "martens-single.html");
  //m_a4.setAttribute("data-toggle", "dropdown");
  var m_a4_marten = document.createTextNode("Marten");

    //alert("This works too");

  var ul4 = document.createElement("ul");
  ul4.setAttribute("class", "dropdown");
  ul4.style="position:fixed";

  var l_li1 = document.createElement("li");
  var l_a1 = document.createElement("a");
  l_a1.setAttribute("href", "rabbit-single.html");
  var l_a1_rabbit = document.createTextNode("Rabbit");

  var l_li2 = document.createElement("li");
  var l_a2 = document.createElement("a");
  l_a2.setAttribute("href", "hare-single.html");
  var l_a2_hare = document.createTextNode("Hare");

  var l_li3 = document.createElement("li");
  var l_a3 = document.createElement("a");
  l_a3.setAttribute("href", "pika-single.html");
  var l_a3_pika = document.createTextNode("Pika");

  var l_li4 = document.createElement("li");
  var l_a4 = document.createElement("a");
  l_a4.setAttribute("href", "jackalope-single.html");
  var l_a4_jackalope = document.createTextNode("Jackalope");

  var li5 = document.createElement("li");
  li5.setAttribute("class", "has-children");

  var ul5 = document.createElement("ul");
  ul5.setAttribute("class", "dropdown");
  ul5.style="position:fixed";

  var f_li1 = document.createElement("li");
  var f_a1 = document.createElement("a");
  f_a1.setAttribute("href", "snow_leopard-single.html");
  var f_a1_snow_leopard = document.createTextNode("Snow Leopard");

  var f_li2 = document.createElement("li");
  var f_a2 = document.createElement("a");
  f_a2.setAttribute("href", "cheetah-single.html");
  var f_a2_cheetah = document.createTextNode("Cheetah");

  var f_li3 = document.createElement("li");
  var f_a3 = document.createElement("a");
  f_a3.setAttribute("href", "panther-single.html");
  var f_a3_panther = document.createTextNode("Panther");

  var f_li4 = document.createElement("li");
  var f_a4 = document.createElement("a");
  f_a4.setAttribute("href", "puma-single.html");
  var f_a4_puma = document.createTextNode("Puma");

  var liB = document.createElement("li");
  var aB = document.createElement("a");
  aB.setAttribute("href", "about.html");
  var aB_Text = document.createTextNode("About");

    //alert("This works too");

  var liC = document.createElement("li");
  var aC = document.createElement("a");
  aC.setAttribute("href", "contact.html");
  var aC_Text = document.createTextNode("Contact");

    //alert("This works too");

  //going to need index
  //going to need every bootstrap file.
  //going to need every product page.
  //htmls will eventually be .php files
  //initial div and header?
  /*div1.appendChild(header);
  header.appendChild(nav);*/

  nav.appendChild(div2);
  div2.appendChild(ul1);

  ul1.appendChild(li1);
  li1.appendChild(a1);
  a1.appendChild(home);
  
  ul1.appendChild(li2);
  li2.appendChild(a2);
  a2.appendChild(a2_label);

  li2.appendChild(ul2);

  ul2.appendChild(li3);
  li3.appendChild(aMustelids);
  aMustelids.appendChild(mustelidsText);

  li3.appendChild(ul3);
  //This doesn't seem right. 
  ul3.appendChild(m_li1);
  m_li1.appendChild(m_a1);
  m_a1.appendChild(m_a1_otter);

  ul3.appendChild(m_li2);
  m_li2.appendChild(m_a2);
  m_a2.appendChild(m_a2_badger);

  ul3.appendChild(m_li3);
  m_li3.appendChild(m_a3);
  m_a3.appendChild(m_a3_ferret);

  ul3.appendChild(m_li4);
  m_li4.appendChild(m_a4);
  m_a4.appendChild(m_a4_marten);

  ul2.appendChild(li4);
  li4.appendChild(aLagomorphs);
  aLagomorphs.appendChild(lagomorphsText);

  li4.appendChild(ul4);
  ul4.appendChild(l_li1);
  l_li1.appendChild(l_a1);
  l_a1.appendChild(l_a1_rabbit);

  ul4.appendChild(l_li2);
  l_li2.appendChild(l_a2);
  l_a2.appendChild(l_a2_hare);

  ul4.appendChild(l_li3);
  l_li3.appendChild(l_a3);
  l_a3.appendChild(l_a3_pika);

  ul4.appendChild(l_li4);
  l_li4.appendChild(l_a4);
  l_a4.appendChild(l_a4_jackalope);

  ul2.appendChild(li5);
  li5.appendChild(aFelines);
  aFelines.appendChild(felinesText);

  li5.appendChild(ul5);
  ul5.appendChild(f_li1);
  f_li1.appendChild(f_a1);
  f_a1.appendChild(f_a1_snow_leopard);

  ul5.appendChild(f_li2);
  f_li2.appendChild(f_a2);
  f_a2.appendChild(f_a2_cheetah);

  ul5.appendChild(f_li3);
  f_li3.appendChild(f_a3);
  f_a3.appendChild(f_a3_panther);

  ul5.appendChild(f_li4);
  f_li4.appendChild(f_a4);
  f_a4.appendChild(f_a4_puma);

  ul1.appendChild(liB);
  liB.appendChild(aB);
  aB.appendChild(aB_Text);

  ul1.appendChild(liC);
  liC.appendChild(aC);
  aC.appendChild(aC_Text);
  //document.body.appendChild(nav);
  //alert(document.body.innerHTML);
  /*var script1 = document.createElement("script");
  script1.setAttribute("src", "js/jquery-3.3.1.min.js");
  var script2 = document.createElement("script");
  script2.setAttribute("src", "js/jquery-ui.js");
  var script3 = document.createElement("script");
  script3.setAttribute("src", "js/popper.min.js");
  var script4 = document.createElement("script");
  script4.setAttribute("src", "js/bootstrap.min.js");
  var script5 = document.createElement("script");
  script5.setAttribute("src", "js/owl.carousel.min.js");
  var script6 = document.createElement("script");
  script6.setAttribute("src", "js/jquery.magnific-popup.min.js");
  var script7 = document.createElement("script");
  script7.setAttribute("src", "js/aos.js");
  nav.appendChild(script1);
  nav.appendChild(script2);
  nav.appendChild(script3);
  nav.appendChild(script4);
  nav.appendChild(script5);
  nav.appendChild(script6);
  nav.appendChild(script7);*/
  //$(document).ready();
}

    </script>
    
    </head>
    <body  onload="createBar();">
      <div class="site-wrap">
    <header class="site-navbar">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                <a href='#'>Log In</a>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="#" class="js-logo-clone">Matthew's Menagerie</a>
                <!--Get rid of href!-->
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li></li>
                  <li></li>
                  <li>
                    <a href="#" class="site-cart">
                      <!--get rid of gref!-->
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
       <?php
   if(isset( $_SESSION['ON'])) echo "<nav id='dynamic'>";
   else echo "<nav>";
   ?>
      
</nav>
        <div class="site-blocks-cover" style="background-image: url(view/images/animal_kingdom.jpg);" data-aos="fade">
      <div class="container">
       <form action="index.php" method="get" style="text-align:center;padding-top:300px;">
        <input type="hidden" name="choice" value="logon" />
        <!--Padding and margin effect everything, not just the form.-->
        <!--This action and method will have to change!-->
        <div style="padding-left:200px;padding-right:200px;border:5px;border-color:solid black;">
          <div style="background-color:skyblue;opacity:50%;">
                <label for="username">Name:</label>
                <input type="text" name="username">
                <br>
                <label for="password">Password:</label>
                <input type="password" name="password">
                <br>
                <input type="submit" value="Login" class='btn btn-sm btn-primary'>
                <br /><a href="index.php?choice=registration">Register</a>
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