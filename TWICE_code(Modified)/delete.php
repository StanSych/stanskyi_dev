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
    <p>Are you sure?</p>
    <?php 
        $id = $_GET['id'];
    ?>
    <form action="delete_data.php" method="POST">
        <a href="specials.php">No</a>
        <input type="hidden" name="id" value='<?php echo $id ?>'>
        <input type="submit" value="Yes">
    </form>
</body>
</html>