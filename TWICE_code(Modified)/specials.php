<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twice the Deal Pizza</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link href="img/ICO_logo.ico" rel="shortcut icon" type="image/x-icon">
  </head>
  <body>

    <header data-sticky-container> <!-- Navigation/Header -->
      <div class="top-bar hide-for-small-only navbar" data-sticky data-options="marginTop:0;" style="width:100%">
        <div class="top-bar-left">
          <ul class="menu">
            <a href="index.html"><img id="logo_set" alt="logo" src="img/logo.png"></a>
          </ul>
        </div>
        <div class="top-bar-right">
          <ul class="menu">
            <li id="nav_a"><a href="menu.html"> MENU </a></li>
            <li id="nav_a"><a href="about.html"> ABOUT US </a></li>
            <li id="nav_a"><a href="contact.html"> CONTACT US </a></li>
            <a href="order.html" class="button" id="btn_order">ORDER ONLINE</a>
          </ul>
        </div>
      </div>
    </header>

    <div class="main row">
      <div class="medium-12 columns">
        <h1 id="main_h">Menu Specials</h1>
        <div class="row">
          <?php
          require_once('connect.php');
          global $mysqli;
          $result = $mysqli->query("SELECT PizzaName, PizzaToppingOne, PizzaPrice FROM PIZZA");
          $output = "";
          
          // if ($result->num_rows > 0) {
          //   echo "More than 0 results";
          // }else{
          //   echo "No results";
          // }

          while($row = $result->fetch_assoc()){
            $output .= `<div class="medium-6 callout">
                          <p>`. $row['PizzaName'] .`</p>
                          <p>`. $row['PizzaToppingOne'] .`</p> 
                          <p style="text-align: right;"> `. $row['PizzaPrice'] .` </p>
                        </div>`;
          }
          echo $output;
          ?>
        </div>
      </div>
    </div>

    <footer> <!-- Footer -->
      <div class="row collapse">
        <div class="medium-6 columns">
          <h1 id="footer_h">Opening Hours <span title="Store hours may vary, please check the respective store for details"><i class="far fa-question-circle"></i></span></h1>
          <p id="footer_p">
            Monday - Thursday: 10:30AM - 01:00AM<br>
            Friday - Saturday: 10:30AM - 03:00AM<br>
            Sunday: 11:00AM - 01:00AM
          </p>
        </div>
        <div class="medium-6 columns">
          <h1 id="footer_h">Our Address <i class="fas fa-map-marker-alt"></i></h1>
          <p id="footer_p">
            HQ - Halton Hills<br>
            25 Brownridge Rd<br>
            Ontario, Canada
          </p>
          <p id="footer_p">
            For franchise: 1-416-235-0000<br>
            Email: info@twicethedealpizza.com
          </p>
        </div>
        <div class="medium-12 columns">
          <h1 id="footer_h">Our Social <i class="fas fa-share-square"></i></h1>
          <a href="index.html" id="footer_i"><i class="fab fa-facebook-square"></i></a>
          <a href="index.html" id="footer_i"><i class="fab fa-twitter-square"></i></a>
          <a href="index.html" id="footer_i"><i class="fab fa-vimeo-square"></i></a>
          <a href="index.html" id="footer_i"><i class="fab fa-pinterest-square"></i></a>
          <p id="copyright">© Twice the Deal Pizza <script>document.write(new Date().getFullYear());</script>. All Rights Reserved.</p>
        </div>  
      </div>
    </footer>

    <!-- Scripts -->
    <script>
	    $( function(tooltip) {
	      $( document ).tooltip();
	    } );
    </script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
