<?php
    require('admin_connection.php');
    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>

    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin_panel.php">CUSTOMER DETAILS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
            
    </div>
    </div>
  </div>
</nav>

<div class="container mt-5">
           <div class="row">
               <div class="col-lg-12">
               <table class="table table-dark table-striped text-center">
                 <thead>
                    <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Payment Mode</th>
                    <th scope="col">Orders</th>
                    </tr>
                </thead>
                    <tbody>

                        <?php 
                            $query = "SELECT * FROM `order_manager`";
                            $user_result = mysqli_query($con, $query);
                            while($user_fetch = mysqli_fetch_assoc($user_result))
                            {
                                echo "
                                <tr>
                                    <td>$user_fetch[Order_Id]</td>
                                    <td>$user_fetch[Full_Name]</td>
                                    <td>$user_fetch[Phone_No]</td>
                                    <td>$user_fetch[Address]</td>
                                    <td>$user_fetch[Pay_Mode]</td>
                                    <td>
                                        <table class='table table-dark table-striped text-center'>
                                            <thead>
                                                <tr>
                                                <th scope='col'>Item Name</th>
                                                <th scope='col'>Item Price</th>
                                                </tr>
                                            </thead> 
                                            <tbody>
                                            ";
                                            $order_query = "SELECT * FROM `user_orders` WHERE `Order_Id` = '$user_fetch[Order_Id]'";
                                            $order_result = mysqli_query($con, $order_query);
                                            while($order_fetch = mysqli_fetch_assoc($order_result))
                                            {
                                                echo "
                                                    <tr>
                                                        <td>$order_fetch[Item_Name]</td>
                                                        <td>$order_fetch[Price]</td>
                                                    </tr>
                                                ";
                                            }
                                echo"
                                        </tbody>
                                        </table>            
                                    </td>
                                </tr>
                                ";
                            }
                        ?>

                        
                    </tbody>

                </table>
               </div>
           </div>
       </div>
</body>
</html>