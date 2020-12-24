<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <!--////////////////////////////////LINKING OF CSS & BS FILES/////////////////////////////////////////-->
  <link rel="stylesheet" href="css/reset.css" type="text/css" />
  <link rel="stylesheet" href="css/styles.css" type="text/css" />
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!--////////////////////////////////LINKING OF SCRIPT FILES/////////////////////////////////////////-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/slider.js"></script>
  <script type="text/javascript" src="js/superfish.js"></script>

  <script type="text/javascript" src="js/custom.js"></script>

  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />


</head>
<body>
    <div id="container">

        <header>
          <div class="width">
              <h1><a href="index.php">CHAT SYSTEM</a></h1>
              <nav>
                  <ul class="sf-menu dropdown">
                      <li><a href="home.php">HOME</a></li>
                      <li><a href="login.php">LOGIN</a></li>
                      <li><a href="registration.php">REGISTER</a></li>
                  </ul>
                  <div class="clear"></div>
              </nav>
          </div>

          <div class="clear"></div>
      </header>

      <div id="body" class="width">
        <!-- //////////////////////////////////////////////////////////-->
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="chat1.jpg" alt="click on LOGIN" width="100%" height="200">
          </div>
          <div class="carousel-item">
              <img src="chat2.png" alt="LIVE CHAT" width="100%" height="200">
          </div>
          <div class="carousel-item">
              <img src="chat3.jpg" alt="lets chat" width="100%" height="200">
          </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<!-- ///////////////////////////////////////////////////// -->
<center>
 <div class="w-50 bg-danger" class="rounded-lg">


    <h4 class="display-5">Click on LOGIN to acceess the system</h4>

    <button type="button" class="btn btn-primary btn-lg" class="btn btn-primary"><a href="login.php" class="text-warning">LOGIN</a></button>


</div>
</center>
</div>



<?php
include_once("footer.php");
?>

</body>
</html>
