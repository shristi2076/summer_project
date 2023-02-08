<?php
$connection = mysqli_connect("localhost", "root", "", "glw");
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Logistic Website</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href=".\style.css">
</head>
<body>
  <header>
    <div class="container logo-wrapper">
      <div class="logo-div">
        <img src="./image/logo.jpg" alt="Logo">
      </div>
      <div class="nav-div">
        <nav class="navbar">
          <ul class="nav-list">
            <li><a href="index.php"> Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="service.php">Services</a> </li>
            <li><a href="contact.php" >Contact Us</a></li>
          </ul>
        </nav>
        <div class="rightnav">
          <button class="btn-header" ><a href="login_admin.php" >LogIn</a></button>
          <button class="btn-header"><a href="signup.php" >SignUp</a></button>    
        </div>
      </div>
    </div>
  </header>
  <section class="about-us" style="overflow: hidden; margin-bottom: 40px;">
    <div class="container">
      <h3 class="section-heading" style="text-align: left; padding-left: 15px;">GLOBAL LOGISTICS PVT. LTD.</h3>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
          <p style="font-size: 16px; font-family:'Oxygen', sans-serif; text-align: justify;"> <strong>Global Logistics Private Limited (GL) </strong> was established on June 2008 having registered office in Thamel-16, Kathmandu, Nepal under management of Mr. Rajan Kr. Joshi and his team.&nbsp;<strong>GL</strong> offer Air, Land-Sea &amp; Air-Sea (Export / Import) movements including documentation, packing, unpacking, warehousing, custom brokerage, transshipments and consolidation with professional excellence from pick-up to delivery of every shipment to the ultimate destination.<strong>GL</strong>&nbsp;is specialized in handling project materials, telecommunication equipments, personal effects &amp; house hold goods, handicraft, readymade garments, commercial goods, Solar Panels &amp; equipments, dangerous &amp; perishable goods, Charter and ground handling services etc.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <img src="./image/about.svg" alt="about-us-image" style="width: 85%;">
        </div>
      </div> 
    </div>
  </section>
  <footer id="footer" class="widget">
    <div class="container">
      <div class="row"><?php
        $year = date('Y'); ?>
        <div class="col-lg-12 col-xs-12 footer-content">
          <p>© <?php echo $year; ?> Logistic - All Rights Reserved</p>
        </div>
      </div>
      <div class="col-lg-12 col-xs-12 footer-content">
        <a href="mailto:#" target="_blank" class="symbol-email"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
        <a href="http://www.facebook.com/#" ><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
        <a href="http://instagram.com/#" target="_blank" class="symbol-instagram fa-2x"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="http://www.twitter.com/#" target="_blank" class="symbol-twitter fa-2x"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
      </div>                  
    </div>
  </footer>  
</body>
</html>