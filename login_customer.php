<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "glw");
$msg = "";
if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($connection, $_POST['user']);
  $password = mysqli_real_escape_string($connection, $_POST['pass']);
  $login_query = "SELECT * FROM customer_signup WHERE username='$username' and pass='$password'";
  $login_res = mysqli_query($connection, $login_query);
  if (mysqli_num_rows($login_res) > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['username'] = $password;
    header('Location:product1.php');
  } else {
    $msg = '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <strong>Unsuccessful!</strong> Login Unsuccessful.
            </div>';
  }
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginSignup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="login_customer.css"> -->
</head>
<body>
  <section class="login-form">
    <div class="container">  
      <div class="row  form-holder">
        <div class="col-lg-6 col-xs-12 col-md-6">
          <?php echo $msg;?>
          <h2>Login Page</h2><br>   
          <form id="login1" method="POST" action=""> 
            <div class="inputholder" style="height:80px">         
              <label for="user">Username </label>    
              <input type="text" name="user" class="form-control" required><br><br>    
            </div>

            <div class="inputholder" style="height:80px">
              <label for="pass" >Password </label>    
              <input type="password" name="pass"  class="form-control" required><br><br>  
            </div>

            <input type="checkbox" id="check" name="remember">  
            <label for="remember"> Remember me</label><br><br>

             <a href="login_customer.php"><button class="btn-order" name="submit" style="width:100%;">
             Login</button></a> 
            <br><br>     
          </form>
          <a href="signup.php"><button class="btn-danger" style="margin-right: 15px;">Sign Up</button></a>
        </div>
      </div>
    </div>
  </section>
</body>
</html>