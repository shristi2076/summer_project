<?php

$connection = mysqli_connect("localhost", "root", "", "glw");
session_start();

if (isset($_POST['submit'])){
    // $perishable = $_POST['perishable'];
    // $handle = $_POST['handle'];
    // $handicraft = $_POST['handicraft'];
    // $readymade= $_POST['readymade'];
       $val1=$_POST['america'];
//    if($choose=="perishable")
//    {
//         $login_query = "SELECT * FROM rate_table WHERE product_id in(SELECT product_id from rate_table where product_id=1)"; 
//    }
    // elseif($choose=="handle")
    // {
    //     $login_query = "SELECT * FROM rate_table WHERE product_id in(SELECT product_id from rate_table where product_id=2)"; 
    // }
    // elseif($choose=="handicraft")
    // {
    //     $login_query = "SELECT * FROM rate_table WHERE product_id in(SELECT product_id from rate_table where product_id=3)"; 
    // }
    // if($choose=="readymade")
    // {
    //     $login_query = "SELECT * FROM rate_table WHERE product_id in(SELECT product_id from rate_table where product_id=4)";
    // }
   
    $login_query = "SELECT * FROM rate_table WHERE product_id= 1";
    $check_res = mysqli_query($connection, $login_query);
     if (mysqli_num_rows($check_res) > 0){
        while($row = mysqli_fetch_array($check_res)){
                    $ame=$row["America"];
                    $aus=$row["Australia"];
                    $jap=$row["Japan"];
                    $kor=$row["Korea"];
                
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Products</h1>
    <div class="product">
        <div class="productname">
            <form class="formproduct" action="">
                <div class="country">
                   <h2>
                    <label class="option" class="products" type="select">Product Name</label><select id="Select"class="products"> 
                        <option value="perishable">Perishable Product</option>
                        <option value="handle">Handle Care Product</option>
                        <option value="handicraft">Handicrafts</option>
                        <option value="readymade">Readymade Garments</option>
                        </select>
                        <input type="submit"  value="View">
                   </h2> 
                </div>
            </form>
        </div>
    </div>
    <div class="table">  
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Country</th>
      <th scope="col">Rate</th>
      <th scope="col">Weight(inRs)</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
</body>
</html>