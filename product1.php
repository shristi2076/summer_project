<?php
//DB Connection Test
include("connection.php");

//Getting Rate for Perishable Product
$rate_for_perishable_product = "SELECT * FROM rate_table WHERE product_id=1 "; 
$check_res1 = mysqli_query($connection, $rate_for_perishable_product);
if (mysqli_num_rows($check_res1) > 0):
  while($row = mysqli_fetch_array($check_res1)):
    $perishable_product_rate_america=$row["America"];
    $perishable_product_rate_australia=$row["Australia"];
    $perishable_product_rate_japan=$row["Japan"];
    $perishable_product_rate_korea=$row["Korea"];             
  endwhile;  
endif;

//Getting Rate for Hand Care Product
$rate_for_hand_care_product = "SELECT * FROM rate_table WHERE product_id=2 "; 
$check_res2 = mysqli_query($connection, $rate_for_hand_care_product);
if (mysqli_num_rows($check_res2) > 0):
  while($row = mysqli_fetch_array($check_res2)):
    $hand_care_product_rate_america=$row["America"];
    $hand_care_product_rate_australia=$row["Australia"];
    $hand_care_product_rate_japan=$row["Japan"];
    $hand_care_product_rate_korea=$row["Korea"];             
  endwhile;  
endif;
 
//Getting Rate for Handicraft
$rate_for_handicraft_product = "SELECT * FROM rate_table WHERE product_id=3 "; 
$check_res3 = mysqli_query($connection, $rate_for_handicraft_product);
if (mysqli_num_rows($check_res3) > 0):
  while($row = mysqli_fetch_array($check_res3)):
    $handicraft_product_rate_america=$row["America"];
    $handicraft_product_rate_australia=$row["Australia"];
    $handicraft_product_rate_japan=$row["Japan"];
    $handicraft_product_rate_korea=$row["Korea"];             
  endwhile;  
endif;

//Getting Rate for Readymade Garments
$rate_for_readymade_garments = "SELECT * FROM rate_table WHERE product_id=4 "; 
$check_res4 = mysqli_query($connection, $rate_for_readymade_garments);
if (mysqli_num_rows($check_res4) > 0):
  while($row = mysqli_fetch_array($check_res4)):
    $readymade_garments_rate_america=$row["America"];
    $readymade_garments_rate_australia=$row["Australia"];
    $readymade_garments_rate_japan=$row["Japan"];
    $readymade_garments_rate_korea=$row["Korea"];             
  endwhile;  
endif;
?> 

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
  <title>Product Rates</title>
</head>
<body>
<!-- Product Type Dropdown-->
    <section class="product-dropdown-section">
      <div class="container">
        <div class="row">
          <div class="product-dropdown col-xs-12 col-md-6">
            <label for="product_type" style="font-weight: 600;">Products</label>
              <select  id="product_select" name="product_type" class="form-control">
                <option value="">--Product Type--</option><?php
                  $query="SELECT * FROM product";
                  $query_run= mysqli_query($connection,$query);
                  if(mysqli_num_rows($query_run) > 0){
                    foreach ($query_run as $rowhob): ?>
                      <option value="<?php echo $rowhob['product_id'];?>" > <?php echo $rowhob['product_name'];?></option> <?php
                    endforeach;
                  }else{
                    echo "Sorry! No Records Found";
                  } ?>
              </select>
          </div>
        </div>
      </div>
  </section>
<!-- Table View -->
<section class="table-view">
  <div class="container">
    <p style="color:red; font-size:16px; font-style:italic; font-weight: 600; text-transform: capitalize;">
      /* Select the Product type */
    </p>
    <div class="table">  
      <table>
        <tr>
          <th>Country</th>
          <th>Rate</th>
          <th>Weight(in kgs)</th>
          <th></th>
          <th>Total</th>
          <th></th>
        </tr>   
        <form method="post" action="order.php">
         <tr>          
           <td> America :</td>
            <td>
              <input id="rate_for_america" name="rate_for_america" type="number" placeholder="rate" name="" class="form-control rate" disabled >
            </td>
            <td>
              <input id="weight_for_america" name="weight_for_america" type="number"  class="form-control weight" placeholder="0" name="america" disabled>
            </td> 
            <td> <button class="btn-danger"> Total</button></td>
            <td>
              <input id="total_for_america" name="total_for_america" type="number"  class="form-control total"  placeholder="0" disabled><br>
            </td> 
            <td>
              <!-- Field to Pass  Country Name and Product Type Selected-->
              <input name="country_name" type="hidden" value="America">
              <input class="product_type" name="product_type" type="hidden">  
            </td>
            <td><button class="btn-order" type="submit"> Order</button></td>            
          </tr>
        </form>
        <form method="post" action="order.php">
          <tr>
            <td>Australia :</td>
            <td>
              <input id="rate_for_australia"  name="rate_for_australia" type="number" placeholder="rate" class="form-control rate" disabled > 
            </td>
            <td>
              <input  id="weight_for_australia" name="weight_for_australia" type="number"  class="form-control weight" placeholder="0" name="australia" disabled>
            </td>
            <td><button class="btn-danger"> Total</button></td>
            <td> 
              <input id="total_for_australia" name="total_for_australia" type="number"  class="form-control total" placeholder="0"disabled><br>
            </td>
            <td>
              <!-- Field to Pass  Country Name and Product Type Selected-->
              <input name="country_name" type="hidden" value="Australia">
              <input class="product_type" name="product_type" type="hidden"> 
            </td>
            <td><button class="btn-order" type="submit">Order</button></td>
          </tr>
        </form>
        <form method="post" action="order.php">
          <tr>
            <td>Japan :</td>
            <td><input id="rate_for_japan" name="rate_for_japan" type="number" placeholder="rate" class="form-control rate" disabled></td>
            <td>
              <input id="weight_for_japan" name="weight_for_japan" type="number"  class="form-control weight" placeholder="0" name="japan" disabled>
            </td>
            <td><button class="btn-danger"> Total</button></td>
            <td>
              <input id="total_for_japan"  name="total_for_japan" type="number"  id="1" class="form-control total" placeholder="0" disabled><br>
            </td>
            <td>
              <!-- Field to Pass  Country Name and Product Type Selected-->
              <input class="product_type" name="product_type" type="hidden">
              <input name="country_name" type="hidden" value="Japan"> 
            </td>
            <td><button class="btn-order" type="submit">Order</button></td>
          </tr>
        </form>
        <form method="post" action="order.php">       
          <tr>
            <td>Korea :</td>
            <td><input id="rate_for_korea" name="rate_for_korea" type="number" placeholder="rate" class="form-control rate" disabled></td>
            <td>
              <input id="weight_for_korea" name="weight_for_korea" type="number"  class="form-control weight" placeholder="0" name="korea" disabled>
            </td>
            <td><button class="btn-danger"> Total</button></td>
            <td>
              <input id="total_for_korea" name="total_for_korea" type="number"  id="1" class="form-control total" placeholder="0" disabled><br>
            </td>
            <td>              
              <!-- Field to Pass  Country Name and Product Type Selected-->
              <input name="country_name" type="hidden" value="Korea"> 
              <input class="product_type" name="product_type" type="hidden"> 
            </td>
            <td><button class="btn-order" type="submit">Order</button></td>
          </tr>        
        </form>
      </table>   
    </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    //Change Rate of Products with refrence to change in select function
    $( "#product_select" ).change(function() {
      var value = $(this).children("option:selected").val();
      $( ".product_type").val(value);
      //Disable all the weight fields when select option is null
      if(value==''){
        //Diasble Input Fields
        $( "#weight_for_america" ).prop( "disabled", true );
        $( "#weight_for_australia" ).prop( "disabled", true );
        $( "#weight_for_japan" ).prop( "disabled", true );
        $( "#weight_for_korea" ).prop( "disabled", true );

        $( "#rate_for_america" ).prop( "disabled", true );
        $( "#rate_for_australia" ).prop( "disabled", true );
        $( "#rate_for_japan" ).prop( "disabled", true );
        $( "#rate_for_korea" ).prop( "disabled", true );

        $( "#total_for_america" ).prop( "disabled", true );
        $( "#total_for_australia" ).prop( "disabled", true );
        $( "#total_for_japan" ).prop( "disabled", true );
        $( "#total_for_korea" ).prop( "disabled", true );
      }else{
        //Enable Input Fields
        $( "#weight_for_america" ).prop( "disabled", false );
        $( "#weight_for_australia" ).prop( "disabled", false );
        $( "#weight_for_japan" ).prop( "disabled", false );
        $( "#weight_for_korea" ).prop( "disabled", false );

        $( "#rate_for_america" ).prop( "disabled", false );
        $( "#rate_for_australia" ).prop( "disabled", false );
        $( "#rate_for_japan" ).prop( "disabled", false );
        $( "#rate_for_korea" ).prop( "disabled", false );

        $( "#total_for_america" ).prop( "disabled", false );
        $( "#total_for_australia" ).prop( "disabled", false );
        $( "#total_for_japan" ).prop( "disabled", false );
        $( "#total_for_korea" ).prop( "disabled", false );
      }
      //Fill the rate as per the select options selection is made
      if(value == '1'){
        $("#rate_for_america").val(<?php echo $perishable_product_rate_america; ?>);
        $("#rate_for_australia").val(<?php echo $perishable_product_rate_australia; ?>);
        $("#rate_for_japan").val(<?php echo $perishable_product_rate_japan; ?>);
        $("#rate_for_korea").val(<?php echo $perishable_product_rate_korea; ?>);
      }else if(value == '2'){
        $("#rate_for_america").val(<?php echo $hand_care_product_rate_america; ?>);
        $("#rate_for_australia").val(<?php echo $hand_care_product_rate_australia; ?>);
        $("#rate_for_japan").val(<?php echo $hand_care_product_rate_japan; ?>);
        $("#rate_for_korea").val(<?php echo $hand_care_product_rate_korea; ?>);
      }else if(value == '3'){
        $("#rate_for_america").val(<?php echo $handicraft_product_rate_america; ?>);
        $("#rate_for_australia").val(<?php echo $handicraft_product_rate_australia; ?>);
        $("#rate_for_japan").val(<?php echo $handicraft_product_rate_japan; ?>);
        $("#rate_for_korea").val(<?php echo $handicraft_product_rate_korea; ?>);
      }else if(value == '4'){
        $("#rate_for_america").val(<?php echo $readymade_garments_rate_america; ?>);
        $("#rate_for_australia").val(<?php echo $readymade_garments_rate_australia; ?>);
        $("#rate_for_japan").val(<?php echo $readymade_garments_rate_japan; ?>);
        $("#rate_for_korea").val(<?php echo $readymade_garments_rate_korea; ?>);
      }else{
        $("#rate_for_america").val(0);
        $("#rate_for_australia").val(0);
        $("#rate_for_japan").val(0);
        $("#rate_for_korea").val(0);
      }
    });
    //Dynamic Total Calculation
      $("#weight_for_america").keyup(function(){
        var AM_rate = $("#rate_for_america").val();
        var AM_weight = $("#weight_for_america").val();
        var AM_total = AM_weight * AM_rate; 
        $("#total_for_america").val(AM_total);
      });
      $("#weight_for_australia").keyup(function(){
        var AUS_rate = $("#rate_for_australia").val();
        var AUS_weight = $("#weight_for_australia").val();
        var AUS_total = AUS_weight * AUS_rate; 
        $("#total_for_australia").val(AUS_total);
      });
      $("#weight_for_japan").keyup(function(){
        var JA_rate = $("#rate_for_japan").val();
        var JA_weight = $("#weight_for_japan").val();
        var JA_total = JA_weight * JA_rate; 
        $("#total_for_japan").val(JA_total);
      });
      $("#weight_for_korea").keyup(function(){
        var KO_rate = $("#rate_for_korea").val();
        var KO_weight = $("#weight_for_korea").val();
        var KO_total = KO_weight * KO_rate; 
        $("#total_for_korea").val(KO_total);
      });
  });
</script>
</body>
</html>