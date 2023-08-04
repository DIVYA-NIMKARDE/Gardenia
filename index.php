<?php
    require('connection.php');
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
    <title>GARDENIA</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css”>
 <script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js”></script>
 <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js”></script>


    <?php
       if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
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
                                    $_SESSION[username]
                                    <a href='logout.php'><i class='fa fa-user' aria-hidden='true'></i> <span>Logout</span></a>
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
                                    <a href='Login.php'><i class='fa fa-user' aria-hidden='true'></i> <span>Login</span></a>
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
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

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
                                    <li><a href="blogindex.php">Blog</a></li>
                                    <li><a href="shopindex.php">Shop</a></li>
                                    <li><a href="connect_with_us.php">Tie-Up</a></li>
                                    <li><a href="contact.php">Contact</a></li>
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area" style="margin-top: 40px;">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/1.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>HE WHO PLANTS A GARDEN, PLANTS HAPPINESS !</h2>
                                
                                <div class="welcome-btn-group">
                                    <!--<a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                                    <a href="#" class="btn alazea-btn active">CONTACT US</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/2.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>Plants exist in the weather and light rays that surround them</h2>
                                
                                <div class="welcome-btn-group">
                                    <!--<a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                                    <a href="#" class="btn alazea-btn active">CONTACT US</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    

   

   
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>QUICK LINK</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> Shivajinagar, University Rd, GaneshKhind, Pune, Maharashtra 411016</p>
                                <p><span>Phone:</span> +91 9999999999</p>
                                <p><span>Email:</span> websitegardenia@gmail.com</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

</p>
                        </div>
                    </div>
                   
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


















<?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
        echo "<h1 style='text-align:center; margin-top: 200px;'> WELCOME TO THIS WEBSITE - $_SESSION[username]</h1>";
    }
?>
</body>

</html>