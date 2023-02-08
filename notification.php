<?php 
  //DB Connection Test
  include("connection.php"); 
  
  //Select all the data from customers_order table to display
  $sql = "SELECT * FROM customers_order LIMIT 40";
  $result = mysqli_query($connection, $sql); ?>
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
  <section class="table-view" style="margin-top:40px;">
    <div class="container-fluid">
      <h2 style="color:red; text-align: center; font-size:26px; font-style:italic; font-weight: 600; text-transform: capitalize; margin-bottom: 30px;">
        /*Order Information Table*/
      </h2><?php
      if (mysqli_num_rows($result) > 0): ?>
        <div class="table">  
          <table style="margin: auto; width: 100%;">
            <tr>
              <th>Order ID</th>
              <th>Customer Name</th>
              <th>Customer Email</th>
              <th>Phone</th>
              <th>Country</th> 
              <th>Product</th>
              <th>Weight</th>
              <th>Total</th>
              <th>Delivery Status</th>
            </tr><?php
            while($rows = mysqli_fetch_assoc($result)):
              //print_r($rows);?>
              <tr>
                <td style="font-size:15px; padding-top:18px;"><?php echo $rows['Order_ID']; ?></td>
                <td style="font-size:15px; padding-top:18px;"><?php echo $rows['Customer_Name']; ?></td>
                <td style="font-size:15px; padding-top:18px;">
                  <a href="mailto:<?php echo $rows['Customer_Email']; ?>"><?php echo $rows['Customer_Email']; ?></a>
                </td>
                <td style="font-size:15px; padding-top:18px;">
                  <a href="tel:<?php echo $rows['Phone']; ?>"><?php echo $rows['Phone']; ?></a>
                </td>
                <td style="font-size:15px; padding-top:18px;"><?php echo $rows['Country']; ?></td>
                <td style="font-size:15px; padding-top:18px;"><?php echo $rows['Product']; ?></td>
                <td style="font-size:15px; padding-top:18px;"><?php echo $rows['Weight']; ?></td>
                <td style="font-size:15px; padding-top:18px;"><?php echo $rows['Total']; ?></td>
                <td style="font-size:15px;"><button class="btn-danger" style="height: 40px; width: 90px; font-size:14px;">Pending</button></td>
              </tr><?php
            endwhile; ?> 
          </table>
        </div><?php
      endif; ?>
    </div>
  </section>   
</body>
</html>