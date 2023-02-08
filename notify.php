
<?php
include("connection.php");
// include("product1.php");

$exp_fetched = mysqli_query($connection, "SELECT * FROM customer_signup");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
   
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="page-header">
                    <h1 style="text-align: center;">Confirm Order</h1>

                </div>
                <div class="container-fluid">
                    <div class="row justify-content-center">

                        <div class="col-md-6">
                           
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Product Name</th>
                                        <th>Rate</th>
                                        <th>Weight</th>

                                        <th>Order Now</th>
                                    </tr>
                                </thead>

                                <?php $count = 1;
                                while ($row = mysqli_fetch_array($exp_fetched)) { ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row['full_name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['product_name']; ?></td>
                                        <td><?php echo $row['rate']; ?></td>
                                        <td><?php echo $row['weight']; ?></td>
                                        

                                        <td class="text-center">
                                            <a href="record.php?edit=<?php echo $row['expense_id']; ?>" class="btn btn-primary btn-sm" style="border-radius:0%;">Edit</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="record.php?delete=<?php echo $row['expense_id']; ?>" class="btn btn-danger btn-sm" style="border-radius:0%;">Delete</a>
                                        </td>
                                    </tr>
                                <?php $count++;
                                } ?>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <script>
        var us= localStorage.getItem('objectToPass');
        var us1= us;
    </script>
</body>

</html>