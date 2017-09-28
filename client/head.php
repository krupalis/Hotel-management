<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Hotel management</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script src="js/maxheight.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<link href="ie_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, #header .row-2, #header .nav li a, #content, .gallery li');</script>
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="js/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="js/jsDatePick.jquery.min.1.3.js"></script>
<script type="text/javascript" src="js/jquery.1.4.2.js"></script>

<link href="js/js-image-slider.css" rel="stylesheet" type="text/css" />
   <!-- <script src="themes/6/mcVideoPlugin.js" type="text/javascript"></script>-->
    <script src="js/js-image-slider.js" type="text/javascript"></script>
    <link href="css/generic.css" rel="stylesheet" type="text/css" />


</head>

<body id="page1" onload="new ElementMaxHeight();">
<div id="main">
  <!-- header -->
  <div id="header">
    <div class="row-1">
      <div class="wrapper">
        <div class="logo">
          <h1><a href="index.php">Hotel Management</a></h1>
           <strong>AC & NON AC Rooms</strong> </div>
        <div class="phones"> <br />
          </div>
      </div>
    </div>
    <div class="row-2">
      <div class="indent">
        <!-- header-box begin -->
        <div class="header-box">
          <div class="inner">
            <ul class="nav">
              <li><a href="index.php" class="current">Home</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="services.php">Services</a></li>     
				   <?php
			  if($_SESSION['user_id']=="")
			  {
			  ?>	
			  <li><a href='login.php'>Login</a></li>					          <?php
			  }
			  else
			  {
				  echo "<li><a href='logout.php'>Logout</a></li>";
			  }
			  ?>
			                
           
              <li><a href="feedback.php">Feedback</a></li>
              <li><a href="contact.php">Contact Us</a></li>
			  
            </ul>
          </div>
        </div>
        <!-- header-box end -->
      </div>
    </div>
  </div>