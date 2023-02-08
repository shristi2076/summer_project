<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "glw");
$msg = "";
if(isset($_POST['update'])){
  $ame=$_POST["America"];
  $aus=$_POST["Australia"];
  $jap=$_POST["Japan"];
  $kor=$_POST["Korea"];
  $product=$_POST["Select"];
  $sql="Update rate_table set America='$ame', Australia='$aus', Japan='$jap', Korea='$kor' where product_id='$product' ";
  $result=mysqli_query($connection,$sql);
  //echo $result;
  if ($result == 1) {
      $msg = "<script language='javascript'>
               swal(
                    'Success!',
                    'Update Completed!',
                    'success'
                    );
            </script>";
  } else {
    die('unsuccessful' . mysqli_error($connection));
  }
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
  <script src="sweetalert2/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./style.css">
  <!-- <link rel="stylesheet" href="adminpage.css"> -->
  <title>Update Prices</title>
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
            <!-- <li><a href="notification.php">Order Notification</a></li> -->
          </ul>
        </nav>
        <div class="rightnav" style="width: 60%;">
          <button class="btn-danger" style="color:#fff; width:160px;margin-right: 15px;"><a style="color:#fff;" href="notification.php">Order Notification</a></button>
          <button class="btn-header"><a href="index.php">Log Out</a></button>
        </div>
      </div>
    </div>
  </header>
  <section class="update-section">
    <div class="container">
      <h3>Products</h3>
      <div class="row update-form-holder">        
        <form method="post">
          <div class="inputholder">
            <label class="option" class="products">Product Name</label>
            <select name="Select" class="products form-control" style="width: 350px;"> 
              <option value="1"> <a href="#perishable">Perishable Product</a> </option>
              <option value="2"> <a href="#handlecare">Handle Care Product</a> </option>
              <option value="3"> <a href="#handicraft">Handicrafts</a> </option>
              <option value="4"> <a href="#readymade">Readymade Garments</a> </option>
            </select> 
          </div>
          <div class="inputholder" style="height:80px">         
            <label for="America">America</label>    
            <input type="number" step="any" name="America" placeholder="rate" class="form-control" value="<?php echo $ame; ?>"><br>  
          </div>
          <div class="inputholder" style="height:80px">         
            <label for="Australia">Australia</label>    
            <input type="number" step="any" name="Australia" placeholder="rate" class="form-control" value="<?php echo $aus; ?>"><br>  
          </div>
          <div class="inputholder" style="height:80px">         
            <label for="Japan">Japan</label>    
            <input type="number" step="any" name="Japan" placeholder="rate" class="form-control" value="<?php echo $jap; ?>"><br>  
          </div>
          <div class="inputholder" style="height:80px">         
            <label for="Korea">Korea</label>    
            <input type="number" step="any" name="Korea" placeholder="rate" class="form-control" value="<?php echo $kor; ?>"><br>  
          </div>
          <button type="submit" class="btn-order" name="update" style="margin-top: 20px; width: 350px;">Update<?php echo $msg;?></button>
        </form>
      </div>
    </div>
  </section>    
</body>
</html>