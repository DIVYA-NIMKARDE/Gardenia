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
    <title>Alazea - Gardening &amp; Landscaping HTML Template</title>

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



</body>
</html>