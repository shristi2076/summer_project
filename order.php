<?php
  //DB Connection Test
  include("connection.php"); 
  // echo '<pre>';
  // print_r($_POST); 
  // echo '</pre>';
  //Defining variable value on the basis of country name passed 
  $country = $_POST['country_name'];
  if($country == 'America'){
    $order_weight = $_POST['weight_for_america'];
    $order_total = $_POST['total_for_america'];
  }else if($country == 'Australia'){
    $order_weight = $_POST['weight_for_australia'];
    $order_total = $_POST['total_for_australia'];
  }else if($country == 'Japan'){
    $order_weight = $_POST['weight_for_japan'];
    $order_total = $_POST['total_for_japan'];
  }else{
    $order_weight = $_POST['weight_for_korea'];
    $order_total = $_POST['total_for_korea'];
  }
  //Getting Product Type Value on the basis of Form Data Value Passed
  if($_POST['product_type'] == 1){
    $product = 'Perishable Product';
  }else if($_POST['product_type'] == 2){
    $product = 'Handle Care Product';
  }else if($_POST['product_type'] == 3){
    $product = 'Handicrafts';
  } else{
    $product = 'Readymade Garments';
  } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href=".\style.css">
  <link rel="stylesheet" href="order.css">
  <title>Customer Order Page</title>
</head>
<body>
  <section class="order-section">     
    <div class="container">
      <div class="row form-row">  
        <h2>Order Page</h2>
        <p style="color:#17aa19; font-size:16px; font-style:italic; font-weight: 600; text-transform: capitalize;">
          /* Fill in the details below if you would like to place an order */
        </p>   
        <form id="customer_order_form" method="post" action="order-insert.php">
          <div class="inputholder">         
            <label for="fname">Full Name: </label>    
            <input type="text" name="fname" class="form-control" required><br><br>    
          </div>
          <div class="inputholder">
            <label for="email" >Email Address: </label>    
            <input type="email" name="email"  class="form-control" required><br><br>  
          </div>
          <div class="inputholder">
            <label for="phone" >Phone Number: </label>    
            <input type="phone" name="phone"  class="form-control" required><br><br>  
          </div>
          <div class="inputholder">
            <label for="product">Product: </label>    
            <input type="text" name="product" class="form-control" value="<?php echo $product; ?>"><br><br>
          </div>
          <div class="inputholder">
            <label for="country">Country: </label>    
            <input type="text" name="country" class="form-control" value="<?php echo $country; ?>"><br><br>
          </div>
          <div class="inputholder"> 
            <label for="weight">Weight: </label>         
            <input type="number" name="weight" class="form-control" value="<?php echo $order_weight; ?>"><br><br>  
          </div>
          <div class="inputholder">
            <label for="total">Total: </label>    
            <input type="number" name="total" class="form-control" value="<?php echo $order_total; ?>"> <br><br>
          </div>
          <div class="inputholder">    
            <input type="hidden" name="order_no" class="form-control"><br><br>
          </div>
          <div class="inputholder">
            <button class="btn-order">Order Now</button><br><br>     
          </div>     
        </form>
      </div>
    </div>
  </section>
</body>
</html>