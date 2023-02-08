<?php
$connection = mysqli_connect("localhost", "root", "", "glw");
session_start();
$msg = "";

if (isset($_POST['submit'])) {
  
  $fullname = mysqli_real_escape_string($connection, strtolower($_POST['fname']));

  $username = mysqli_real_escape_string($connection, strtolower($_POST['user']));

  $email = mysqli_real_escape_string($connection, strtolower($_POST['email']));

  $password = mysqli_real_escape_string($connection, $_POST['pass']);

  $confirm_pass = mysqli_real_escape_string($connection, $_POST['c_pass']);

  $signup_query = "INSERT INTO customer_signup(full_name, username, email, pass, c_pass) VALUES
   ('$fullname', '$username', '$email', '$password', '$confirm_pass')";

  $check_query = "SELECT * From customer_signup where username= '$username' or pass='$password'";

  $check_res = mysqli_query($connection, $check_query);
   if (mysqli_num_rows($check_res) > 0) {
    $msg= '<div class="alert alert-warning" style=" margin-top:30px";>
              <strong> Failed!</strong>Username or Email already exists.
          </div> ';
    echo "<script type='text/javascript'>alert('$msg');</script>";                
  } else {
    $signup_res = mysqli_query($connection, $signup_query);
    $msg = "<div class='alert alert-success' style='margin-top:30px';>
              <strong>Success!</strong> Signup Successful.
            </div>";
    echo "<script type='text/javascript'>alert('$msg');</script>"; 
  }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="./signup.css"> -->
</head>
<body>
  <section class="login-form">
    <div class="container">  
      <div class="row  form-holder">
        <div class="col-lg-6 col-xs-12 col-md-6">  
          <h2>SignUp Page</h2><br>   
          <form id="signup1" method="POST" action="signup.php">
            <div class="inputholder" style="height:80px">         
              <label for="fname">Full Name </label>    
              <input type="text" name="fname" class="form-control" required><br><br>    
            </div>

            <div class="inputholder" style="height:80px">         
              <label for="user">Username </label>    
              <input type="text" name="user" class="form-control" required><br><br>    
            </div>  

            <div class="inputholder" style="height:80px">         
              <label for="email">Email</label>    
              <input type="email" name="email" class="form-control" required><br><br>    
            </div>  

            <div class="inputholder" style="height:80px">         
              <label for="email">Password</label>    
              <input type="password" name="pass" class="form-control" required><br><br>    
            </div> 

            <div class="inputholder" style="height:80px">         
              <label for="c_pass">Confirm Password</label>    
              <input type="password" name="c_pass" class="form-control" required><br><br>    
            </div>

            <div class="inputholder" style="height:80px">         
              <button class="btn-danger" name="submit" style="width: 100%;">Sign Up</button>
            </div>     
          </form>
          <a href="login_customer.php"><button class="btn-order">Log In</button></a>  
        </div>
      </div>
    </div>
  </section>    
</body>
</html>