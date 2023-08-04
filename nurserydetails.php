<?php

error_reporting(0);

?>

<?php

require("tieup_connection.php");

$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile1'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "image/".$filename;

      // connect with the database

    //$db = mysqli_connect("localhost", "root", "", "tie_up_users");

        // query to insert the submitted data

        $sql = "UPDATE `users_nurseries` SET `p1img` = '$filename' WHERE `owneremail` = 'sakshimahajan2019@gmail.com'";

     // function to execute above query

        mysqli_query($tcon, $sql);       

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            echo "<script>alert('upload successful');</script>";

        }else{

            echo "<script>alert('upload not successful');</script>";


    }

}

if (isset($_POST['uploadfile2'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "image/".$filename;

      // connect with the database

    //$db = mysqli_connect("localhost", "root", "", "tie_up_users");

        // query to insert the submitted data

        $sql = "UPDATE `users_nurseries` SET `p2img` = '$filename' WHERE `owneremail` = 'sakshimahajan2019@gmail.com'";

     // function to execute above query

        mysqli_query($tcon, $sql);       

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            echo "<script>alert('upload successful');</script>";

        }else{

            echo "<script>alert('upload not successful');</script>";


    }

}

if (isset($_POST['uploadfile3'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "image/".$filename;

      // connect with the database

    //$db = mysqli_connect("localhost", "root", "", "tie_up_users");

        // query to insert the submitted data

        $sql = "UPDATE `users_nurseries` SET `p3img` = '$filename' WHERE `owneremail` = 'sakshimahajan2019@gmail.com'";

     // function to execute above query

        mysqli_query($tcon, $sql);       

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            echo "<script>alert('upload successful');</script>";

        }else{

            echo "<script>alert('upload not successful');</script>";


    }

}

if (isset($_POST['uploadfile4'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "image/".$filename;

      // connect with the database

    //$db = mysqli_connect("localhost", "root", "", "tie_up_users");

        // query to insert the submitted data

        $sql = "UPDATE `users_nurseries` SET `p4img` = '$filename' WHERE `owneremail` = 'sakshimahajan2019@gmail.com'";

     // function to execute above query

        mysqli_query($tcon, $sql);       

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            echo "<script>alert('upload successful');</script>";

        }else{

            echo "<script>alert('upload not successful');</script>";


    }

}

if (isset($_POST['uploadfile5'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "image/".$filename;

      // connect with the database

    //$db = mysqli_connect("localhost", "root", "", "tie_up_users");

        // query to insert the submitted data

        $sql = "UPDATE `users_nurseries` SET `p5img` = '$filename' WHERE `owneremail` = 'sakshimahajan2019@gmail.com'";

     // function to execute above query

        mysqli_query($tcon, $sql);       

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            echo "<script>alert('upload successful');</script>";

        }else{

            echo "<script>alert('upload not successful');</script>";


    }

}

?>






<?php

//error_reporting(0);

?>

<?php

//$msg = "";

// check if the user has clicked the button "UPLOAD" 

/*if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];
    $tempname = $_FILES["choosefile"]["tmp_name"];  
    $folder = "image/".$filename;

    // connect with the database
    $db = mysqli_connect("localhost", "root", "", "image");
    // query to insert the submitted data
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";

     // function to execute above query
        mysqli_query($db, $sql);       

        // Add the image to the "image" folder"
        if (move_uploaded_file($tempname, $folder)) 
        {
            echo "<script>alert('Image uploaded successfully');</script>";
            //$msg = "Image uploaded successfully";
        }else{
            echo "<script>alert('Image upload failed');</script>";
            //$msg = "Failed to upload image";

    }

}*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill nursery details</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css”>
    <script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js”></script>
    <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js”></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="style.css">
    
</head>
<body>

    <!-- Preloader -->
   

    <!-- ##### Header Area Start ##### -->
    <header class="header-area" style="margin-top: 50px;">

        

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <div style="color:white; font-size: 70px;">  GARDENIA</div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="aboutus.html">About</a></li>
                                    <!--<li><a href="blog.html">Blog</a></li>-->
                                    <li><a href="shopindex.php">Shop</a></li>
                                   
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <!--<div id="searchIcon">
                                    <i class="fa fa-search"></i>
                                </div>-->

                                <p>
                                    <a href="search.html"><button type="button" class="btn btn-default ">
                                        <span class="glyphicon 
                                        glyphicon-search"></span> Search
                                    </button></a>
                                </p>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>NURSERY DETAILS</h2>
        </div>

       
    <!-- ##### Breadcrumb Area End ##### -->

    <p style="font-size: 0px;">Thank you for choosing to connect with us! Please fill in the below details about your products to complete your tie-up. Your products will be displayed on the website's shop platform soon!  </p>

<div class="container" style="width:200px;">


<form class="form-group mt-5" action="uploadproducts.php" method="POST">
    <div>
        <label for="email">Your Email</label>
        <input type="email" class="form-control" placeholder="Your Email" name="email">
    </div>
    <div class="form-group">
        <label for="p1name">Product 1</label>
        <input type="text" class="form-control" name="p1name" id="p1name" placeholder="Product Name">
    </div>
        <div>
            <input type="text" class="form-control" name="p1price" id="p1price" placeholder="Product Price">
        </div>

        <div class="form-group">
        <label for="p1name">Product 2</label>
        <input type="text" class="form-control" name="p2name" id="p2name" placeholder="Product Name">
    </div>
        <div>
            <input type="text" class="form-control" name="p2price" id="p2price" placeholder="Product Price">
        </div>

        <div class="form-group">
        <label for="p1name">Product 3</label>
        <input type="text" class="form-control" name="p3name" id="p3name" placeholder="Product Name">
    </div>
        <div>
            <input type="text" class="form-control" name="p3price" id="p3price" placeholder="Product Price">
        </div>

        <div class="form-group">
        <label for="p1name">Product 4</label>
        <input type="text" class="form-control" name="p4name" id="p4name" placeholder="Product Name">
    </div>
        <div>
            <input type="text" class="form-control" name="p4price" id="p4price" placeholder="Product Price">
        </div>

        <div class="form-group">
        <label for="p1name">Product 5</label>
        <input type="text" class="form-control" name="p5name" id="p5name" placeholder="Product Name">
    </div>
        <div>
            <input type="text" class="form-control" name="p1price" id="p1price" placeholder="Product Price">
        </div>

        <div class="text-center mt-2">
        <button type="submit" name="submitproducts" class="btn btn-primary">Submit</button>
        </div>
</form>
    
        
        <!--<table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Sr. No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <th scope="row"><form action="uploadproducts.php" method="POST"><input type="text" placeholder="Product 1 name"></th>
                                <td><input type="text" placeholder="Product 1 Price"></td> </form>
                                </tr>
                        <tr>
                            <td>2</td>
                            <th scope="row"><form action="uploadproducts.php" method="POST"><input type="text" placeholder="Product 2 name"></th>
                            <td><input type="text" placeholder="Product 2 Price"></td> </form>
                            
                        </tr>
                        <tr>
                            <td>3</td>
                            <th scope="row"><form action="uploadproducts.php" method="POST"><input type="text" placeholder="Product 3 name"></th>
                            <td><input type="text" placeholder="Product 3 Price"></td> </form>
                           
                        </tr>
                        <tr>
                            <td>4</td>
                            <th scope="row"><form action="uploadproducts.php" method="POST"><input type="text" placeholder="Product 4 name"></th>
                            <td><input type="text" placeholder="Product 4 Price"></td> </form>
                            
                        </tr>
                        <tr>
                            <td>5</td>
                            <th scope="row"><form action="uploadproducts.php" method="POST"><input type="text" placeholder="Product 5 name"></th>
                            <td><input type="text" placeholder="Product 5 Price"></td> </form>
                            
                        </tr>
                        </form>
                    </tbody>
                    </table>
                        <div class="border border-light p-3 mb-4">
                            <div class="text-center">
                                <form action="uploadproducts.php" method="POST">
                                    <button type="button" name="submitproducts" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>  -->         

                    
                        <table class="table">
                        <thead>
                            <th scope="col">Sr. No.</th>
                            <th scope="col">Image</th>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Product 1.</td> 
                                <td><form method="POST" action="" enctype="multipart/form-data">
                                    <input type="file" name="choosefile" value="" /><button type="submit" name="uploadfile1" class="btn btn-primary">UPLOAD</button></td></form>
                               
                            </tr>
                            <tr>
                                <td>Product 2.</td> 
                                <td><form method="POST" action="" enctype="multipart/form-data">
                                    <input type="file" name="choosefile" value="" /><button type="submit" name="uploadfile2" class="btn btn-primary">UPLOAD</button></td></form>
   
                            </tr>
                            <tr>
                                <td>Product 3.</td> 
                                <td><form method="POST" action="" enctype="multipart/form-data">
                                    <input type="file" name="choosefile" value="" /><button type="submit" name="uploadfile3" class="btn btn-primary">UPLOAD</button></td></form>
   
                            </tr>
                            <tr>
                                <td>Product 4.</td>  
                                <td><form method="POST" action="" enctype="multipart/form-data">
                                    <input type="file" name="choosefile" value="" /><button type="submit" name="uploadfile4" class="btn btn-primary">UPLOAD</button></td></form>
  
                            </tr>
                            <tr>
                                <td>Product 5.</td> 
                                <td><form method="POST" action="" enctype="multipart/form-data">
                                    <input type="file" name="choosefile" value="" /><button type="submit" name="uploadfile5" class="btn btn-primary">UPLOAD</button></td></form>
   
                            </tr>
                        </tbody>
                    </table>
                    
    </div>
</div>




</body>
</html>