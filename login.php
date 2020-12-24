<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!--/////////////////////////CSS AND BOOTSTRAP FILES///////////////////////////////-->

        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!--////////////////////////////////JQUERY FILES///////////////////////////////////-->

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
    	       <h1><a href="login.php">CHAT SYSTEM</a></h1>
                    <nav>
    			     <ul class="sf-menu dropdown">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="registration.php">Register</a></li>
			         </ul>
			         <div class="clear"></div>
    		        </nav>
       	    </div>
            <div class="clear"></div>
        </header>
        <div id="body" class="width">
	       <section id="content" class="one-column">

        <form action="loginchk.php" method="post" enctype="multipart/form-data">
            <input type="text" name="x" placeholder="Email ID" class="input"/><br><br>
            <input type="password" name="y" placeholder="Password"  class="input"/><br><br>
            <button type="button" class="btn btn-info" >
            <input type="submit"  value="login" id="button"></button>
        </form>
<?php
include_once("footer.php");
?>
