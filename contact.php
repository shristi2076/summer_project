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
      <h3 class="section-heading" style="text-align: center; padding-left: 15px;">CONTACT US</h3>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
          <img src="./image/contact.svg" alt="contact-us-image" style="width: 85%;">
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <form>
            <div class="inputholder" style="height:80px">         
              <label for="fname">Full Name: </label>    
              <input type="text" name="fname" class="form-control" required><br><br>    
            </div>
            <div class="inputholder" style="height:80px">
              <label for="email" >Email Address: </label>    
              <input type="email" name="email"  class="form-control" required><br><br>  
            </div>
            <div class="inputholder" style="height:80px">
              <label for="phone" >Phone Number: </label>    
              <input type="phone" name="phone"  class="form-control" required><br><br>  
            </div>
            <div class="inputholder" style="margin-bottom: 40px;">
              <label for="phone" >Comment: </label>    
              <textarea name="comment" class="form-control" rows="4" cols="50" placeholder="Any Question or Queries">     
              </textarea>
            </div>
            <div class="inputholder" style="height: 80px;">
              <button class="btn-order" style="width: 100%;">SEND MESSAGE</button><br><br>     
            </div>
          </form>
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