<?php
	//DB Connection Test
  include("connection.php"); 	

	//Variable Declaration and Defination
	$name = $_POST['fname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$product = $_POST['product'];
 	$country = $_POST['country'];
 	$weight = $_POST['weight'];
 	$total = $_POST['total'];

 	//Generating Dynamic customers_order
 	$sql = "SELECT * FROM customers_order";
	$result = mysqli_query($connection, $sql);
	// print_r($result);
	$count = $result->num_rows + 1;
	$order_id = 'ORD_00000'.$count;

 	//Inserting Record to Table customers_order
 	$sql_insert = "INSERT INTO `customers_order`( `Order_ID`, `Customer_Name`, `Customer_Email`,`Phone`, `Product`, `Country`, `Weight`, `Total`) VALUES ('".$order_id."','".$name."','".$email."','".$phone."','".$product."','".$country."','".$weight."', '".
 		$total."')";
	if (mysqli_query($connection, $sql_insert)) {
  	echo '<html>
  					<head>
  						<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
  						<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  						<link rel="stylesheet" href=".\style.css">
  					</head>
  					<body>
  						<section style="height:100vh; width:100vw; display:flex; justify-content:center; color:#fff; background:#16097a; align-items: center;">
  							<div class="container">
  								<h1 style="font-size:42px; text-align: center; line-height: 1.6;"><b>Your order has been placed with order id: '. $order_id .'. We will get in touch with you shortly.</b></h1>
  							</div>
  						</section>
  					</body>
  				</html>';	
	} else {
  	echo '<html>
  					<head>
  						<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
  						<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  						<link rel="stylesheet" href=".\style.css">
  					</head>
  					<body>
  						<section style="height:100vh; width:100vw; display:flex; justify-content:center; color:#fff; background:#16097a; align-items: center;">
  							<div class="container">
  								<h1  style="font-size:42px; text-align: center; line-height: 1.6;">Sorry! our system is currently down. Please try again later.</h1>
  							</div>
  						</section>
  					</body>
  				</html>';	
	}

mysqli_close($connection); ?>