<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "glw");

// $msg = "";


// if (isset($_POST['submit'])) {
    $login_query = "SELECT * FROM rate_table WHERE product_id= 1";
    $check_res = mysqli_query($connection, $login_query);
     if (mysqli_num_rows($check_res) > 0) {
        while($row = mysqli_fetch_array($check_res)) {
                    $ame=$row["America"];
                    $aus=$row["Australia"];
                    $jap=$row["Japan"];
                    $kor=$row["Korea"];
                   
        }
    }
    if(isset($_POST['update'])){
            $ame=$_POST["America"];
            $aus=$_POST["Australia"];
            $jap=$_POST["Japan"];
            $kor=$_POST["Korea"];
            $product=$_POST["Select"];
            $sql="Update rate_table set America='$ame', Australia='$aus', Japan='$jap', Korea='$kor' where product_id='$product' ";
            $result=mysqli_query($connection,$sql);
    }
// }


     $res = false;
    $update_query = "Select * from rate_table";
    //"Insert into bike(name, color, engine, lot_no, type, mileage, brand, kmrun, zone, description, photo) VALUES ('$name','$color','$engine','$lot_no','$type','$mileage','$brand','$kmrun','$zone','$description', '$photo')";

    $res = mysqli_query($connection, $update_query);

    if ($res == true) {
        $msg = "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
    			          </script>";
    } else {
        die('unsuccessful' . mysqli_error($connection));
    }
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./adminpage.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
    <ul class="nav-list">
            <li> <a href="#product"></a> Product</li>
            <li> <a href="notification.php">Notifications</a> </li>
        </ul>
    </nav>
   

    <div class="main">
    <h1>Products</h1>
    <div class="product">
        <div class="productname">
            <form class="formproduct" action="">
                
            </form>
        </div>
    
    <div class="table">
       
    
    <form method="post">
       <!-- <li>
           <label class="title"> America</label>
           <input type="number" class="rate" name="" id="">
       </li> --><div class="country">
       <h2>
                    <label class="option" class="products">Product Name</label><select name="Select"class="products"> 
                        <option value="1">Perishable Product</option>
                        <option value="2">Handle Care Product</option>
                        <option value="3">Handicrafts</option>
                        <option value="4">Readymade Garments</option>
                        </select>
                   </h2> 
                </div>
                <ul>
        <th>Country</th>
        <th>Rate</th>
    </ul>
        America :<input type="number" name="America" placeholder="rate" class="rate" value="<?php echo $ame; ?>"><br>
        Australia :<input type="number" name="Australia" placeholder="rate" class="rate" value="<?php echo $aus; ?>"><br>
        Japan :<input type="number" name="Japan" placeholder="rate" class="rate" value="<?php echo $jap; ?>"><br>
        Korea :<input type="number" name="Korea" placeholder="rate" class="rate" value="<?php echo $kor; ?>"><br>
        <button type="submit" rate="Update" name="update">Update</button>
    </form>
    </div>

    <!-- <div class="handlecare">
        <h2>Handle Care Product</h2>
    <ul>
        <th>Country</th> 
        <th>    Rate</th>
    </ul>
    <form action="post">
        America :<input type="number" placeholder="rate"><br>
        Australia :<input type="number" placeholder="rate"><br>
        Japan :<input type="number" placeholder="rate"><br>
        Korea :<input type="number" placeholder="rate"><br>
        <input type="submit" name="Update" value="update">
    </form>
    </div> -->
    
</div>
    
    
    
</body>
</html>