<?php
    require('admin_connection.php');
    session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Admin Panel</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
    
    <?php
       if(isset($_SESSION['adminlogged_in']) && $_SESSION['adminlogged_in']==true)
       {
            
            echo"<header class='header-area'>
            <div class='top-header-area' style='background-color:black;'>
        <!-- ***** Top Header Area ***** -->
            <div class='container'>
                <div class='row'>
                    <div class='col-12'>
                        <div class='top-header-content d-flex align-items-center justify-content-end'>
                            
                            <!-- Top Header Content -->
                            <div class='top-header-meta d-flex'>
                                <!-- Login -->
                                <div class='login'>
                                    
                                    <a href='adminlogout.php'><i class='fa fa-user' aria-hidden='true'></i> <span>Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>";
       }  
       else
       {
            echo
            " <header class='header-area'>
                <div class='top-header-area' style='background-color:black;'>
                <!-- ***** Top Header Area ***** -->
            <div class='container'>
                <div class='row'>
                    <div class='col-12'>
                        <div class='top-header-content d-flex align-items-center justify-content-end'>
                            
                            <!-- Top Header Content -->
                            <div class='top-header-meta d-flex'>
                                <!-- Login -->
                                <div class='login'>
                                    <a href='\Final_Project\Login.php'><i class='fa fa-user' aria-hidden='true'></i> <span>Login</span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>";
       }
    ?>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top:40px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ADMIN PANEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
            
    </div>
    </div>
  </div>
</nav>

<div class="container">
    <!--<div class="col-lg-6">-->
        <div class="row">
            <div class="col-lg-6">
            <div class="card bg-dark mt-5 align-content-center" style="width: 18rem; margin-left:300px;">
                <img src="img/bg-img/36.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center text-white">Tie Up Requests</h5>
                    <center><a href="tie_requests_info.php" class="btn btn-info">View</a></center>
                </div>
            </div>
            </div>


            <div class="col-lg-6">
            <div class="card bg-dark mt-5 align-content-center" style="width: 18rem;">
                <img src="img/bg-img/49.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center text-white">Customer Details</h5>
                    <center><a href="customer_details.php" class="btn btn-info">View</a></center>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>



       <!--<div class="container mt-5">
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
       </div>-->


</body>
</html>