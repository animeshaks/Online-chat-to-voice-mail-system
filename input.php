<?php
session_start();
  if(!isset($_SESSION['uname']))
  {
  		echo"<script>
    			window.location='login.php';
    			</script>
    		";
  } 
?>

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
    		  <h1><a href="admin.php">COLLEGE</a></h1>
		      <nav>
      			<ul class="sf-menu dropdown">
                <?php
                  include_once('menu.php');
                ?>
            </ul>
			      <div class="clear"></div>
    		  </nav>
       </div>
	     <div class="clear"></div>  
    </header>
    <div id="body" class="width">
	  <section id="content" class="one-column">

	  <div id="id" align="center">Compose Mail</div>
	     <form action="send.php" method="post" enctype="multipart/form-data">
          <table id="id5"  width="700">
            <tr>
                <td> MAIL TO</td>
                <td> <input type="text" name="a1"><br></td></tr>
            <tr>
                <td> SUBJECT</td>
                <td><input type="text" name="a2"><br></td></tr>
            <tr> 
                <td> DESCRIPTION </td>
                <td><input type="text" name="a3"><br></td></tr>
            <tr>
              <td> MAIL  </td>
              <td> <input type="text" name="a4"><br></td>
            <tr>
                <td colspan="2"><input type="submit" value="send"></td></tr>
          </table>
       </form>
<?php
include_once("footer.php");
?>   
