<?php
    include("header.php");
    require("tieup_connection.php");
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="style.css">
        <!-- Title -->
        <title>Shop index</title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    
        <div class="breadcrumb-area">
            <!-- Top Breadcrumb Area -->
            <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
                <h2>SHOP</h2>
            </div>
        </div>    

    <!-- FLOWERS -->
    <div class="container mt-5" id="flowers">
    <div class="col-lg-12 text-center border-rounded bg-light my-5">
                <h1>FLOWERS</h1>
            </div>
        <div class="row">
        
            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/flowers/2.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Rain Lily</h5>
                        <p class="card-text">White - Bulbs (set of 10)<br> Price: Rs.169</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Rain Lily">
                        <input type="hidden" name="Price" value="169">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/flowers/11.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dahlia </h5>
                        <p class="card-text">Mix Color - Bulbs (set of 10)<br> Price: Rs.289</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Dahlia">
                        <input type="hidden" name="Price" value="289">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/flowers/13.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Daffodil</h5>
                        <p class="card-text">White, Orange - Bulbs (set of 5)<br> Price: Rs.299</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Daffodil">
                        <input type="hidden" name="Price" value="299">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/flowers/7.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tulip Stem Tent </h5>
                        <p class="card-text">Red - Bulbs (set of 5)<br> Price: Rs.329</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Tulip Stem Tent">
                        <input type="hidden" name="Price" value="329">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/champa1.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Champa </h5>
                        <p class="card-text">Mix Color - Bulbs (set of 10)<br> Price: Rs.289    </p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Dahlia">
                        <input type="hidden" name="Price" value="289">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/shevanti1.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Shevanti </h5>
                        <p class="card-text">Yellow Color<br> Price: Rs.400</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Shevanti">
                        <input type="hidden" name="Price" value="400">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/jas1.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jasmine </h5>
                        <p class="card-text">White jasmine flowers<br> Price: Rs.300</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Jasmine">
                        <input type="hidden" name="Price" value="300">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/rose2.jpg" class="card-img-top" style="height: 170px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pink Rose </h5>
                        <p class="card-text">Set of 1 full grown flower<br> Price: Rs.230</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Pink Rose">
                        <input type="hidden" name="Price" value="230">
                    </div>
            </div>
            </form>  
            </div>

        </div>

    </div>

    <!-- INDOOR PLANTS -->
    <div class="container mt-5" id="indoor_plants">
    <div class="col-lg-12 text-center border-rounded bg-light my-5">
                <h1>INDOOR PLANTS</h1>
            </div>
        <div class="row">
        
            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/indoor plants/1.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">5 Best Indoor Plants Pack</h5>
                        <p class="card-text"><br> Price: Rs.1149</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="5 Best Indoor Plants Pack">
                        <input type="hidden" name="Price" value="1149">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/indoor plants/8.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Buxus Bonsai - Plant </h5>
                        <p class="card-text"><br> Price: Rs.2099</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Buxus Bonsai - Plant">
                        <input type="hidden" name="Price" value="2099">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/indoor plants/5.webp" class="card-img-top" style="height:270px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Grape Ivy - Plant</h5>
                        <p class="card-text">Price: Rs.249</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Grape Ivy - Plant">
                        <input type="hidden" name="Price" value="249">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/indoor plants/7.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">4 Money plants in hanging baskets </h5>
                        <p class="card-text">Red - Bulbs (set of 5)<br> Price: Rs.1849</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="4 Money plants in hanging baskets">
                        <input type="hidden" name="Price" value="1849">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/bougain2.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bougainvilla Plant</h5>
                        <p class="card-text"><br> Price: Rs.2149</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Bougainvilla Plant">
                        <input type="hidden" name="Price" value="2149">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/kalan1.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kalan Plant</h5>
                        <p class="card-text"><br> Price: Rs.249</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Kalan Plant">
                        <input type="hidden" name="Price" value="249">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/senecio1.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Senecio</h5>
                        <p class="card-text"><br> Price: Rs.1149</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Senecio">
                        <input type="hidden" name="Price" value="1149">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/jadeb1.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jade</h5>
                        <p class="card-text"><br> Price: Rs.149</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Jade">
                        <input type="hidden" name="Price" value="149">
                    </div>
            </div>
            </form>  
            </div>

        </div>

    </div>

    <!-- MEDICINAL PLANTS -->
    <div class="container mt-5" id="medicinal_plants">
        <div class="row">
        <div class="col-lg-12 text-center border-rounded bg-light my-5">
                <h1>MEDICINAL PLANTS</h1>
            </div>
            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/MEDICINAL PLANTS/1.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Aloe vera - Succulent Plant</h5>
                        <p class="card-text"><br> Price: Rs.199</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Aloe vera - Succulent Plant">
                        <input type="hidden" name="Price" value="199">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/MEDICINAL PLANTS/3..webp" class="card-img-top" style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tulsi Plant, Holy Basil </h5>
                        <p class="card-text"><br> Price: Rs.299</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Tulsi Plant, Holy Basil">
                        <input type="hidden" name="Price" value="299">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/MEDICINAL PLANTS/4..webp" class="card-img-top" style="height: 300px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lemon Grass</h5>
                        <p class="card-text">Price: Rs.299</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Lemon Grass">
                        <input type="hidden" name="Price" value="299">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/MEDICINAL PLANTS/7.webp" class="card-img-top" style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Neem Tree </h5>
                        <p class="card-text"><br> Price: Rs.299</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Neem Tree">
                        <input type="hidden" name="Price" value="299">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/fenugreek.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fenugreek Plant</h5>
                        <p class="card-text"><br> Price: Rs.299</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Fenugreek Plant">
                        <input type="hidden" name="Price" value="299">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/parsley.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Parsley </h5>
                        <p class="card-text"><br> Price: Rs.300</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Parsley">
                        <input type="hidden" name="Price" value="300">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/mint.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Peppermint plant </h5>
                        <p class="card-text"><br> Price: Rs.199</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Peppermint plant">
                        <input type="hidden" name="Price" value="199">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="bg-img/lavender.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lavender </h5>
                        <p class="card-text"><br> Price: Rs.299</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Lavender">
                        <input type="hidden" name="Price" value="299">
                    </div>
            </div>
            </form>  
            </div>



        </div>

    </div>

    <!-- OFFICE PLANTS -->
    <div class="container mt-5" id="office_plants">
        <div class="row">
        <div class="col-lg-12 text-center border-rounded bg-light my-5">
                <h1>OFFICE PLANTS</h1>
            </div>
            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/office plants/1.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Best 2 Peace lily Plants</h5>
                        <p class="card-text"><br> Price: Rs.649</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Best 2 Peace lily Plants">
                        <input type="hidden" name="Price" value="649">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/office plants/2.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Good Luck Money Plant with a Jute wrap </h5>
                        <p class="card-text"><br> Price: Rs.299</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Good Luck Money Plant with a Jute wrap">
                        <input type="hidden" name="Price" value="299">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/office plants/4.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pink Dalmatian - Plant</h5>
                        <p class="card-text">Price: Rs.449</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Pink Dalmatian - Plant">
                        <input type="hidden" name="Price" value="449">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/plants/office plants/8.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Green Rose - Succulent Plant</h5>
                        <p class="card-text"><br> Price: Rs.349</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Green Rose - Succulent Plant">
                        <input type="hidden" name="Price" value="349">
                    </div>
            </div>
            </form>  
            </div>


        </div>

    </div>

    <!-- ORGANIC FERTILIZERS -->
    <div class="container mt-5" id="organic_fertilizers">
        <div class="row">
        <div class="col-lg-12 text-center border-rounded bg-light my-5">
                <h1>ORGANIC FERTILIZERS</h1>
            </div>
            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/organic_fertilizers/1.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Plant O Boost</h5>
                        <p class="card-text">Special Flower Booster, 10 g(set of 10)<br> Price: Rs.150</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Plant O Boost">
                        <input type="hidden" name="Price" value="150">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/organic_fertilizers/2.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jeevamrut </h5>
                        <p class="card-text">Plant Growth Tonic 500 ml<br> Price: Rs.190</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Jeevamrut">
                        <input type="hidden" name="Price" value="190">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/organic_fertilizers/3.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Neem Raksha </h5>
                        <p class="card-text">Pure Neem Oil for Pest Control 100 ml<br> Price: Rs.190</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Neem Raksha">
                        <input type="hidden" name="Price" value="149">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/organic_fertilizers/4.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Desert Pride</h5>
                        <p class="card-text">Cactus and Succulent Plant Food<br> Price: Rs.100</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Desert Pride">
                        <input type="hidden" name="Price" value="100">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card mt-2">
                <img src="ecommerce_data/FERTILIZERS/organic_fertilizers/8.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">G5 </h5>
                        <p class="card-text">Patented Bio-organic Granules, 500 g(Set of 2)<br> Price: Rs.220</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="G5">
                        <input type="hidden" name="Price" value="220">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card mt-2">
                <img src="ecommerce_data/FERTILIZERS/organic_fertilizers/5.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sanjeevani</h5>
                        <p class="card-text">Rose Blooming Tonic - 50 ml (Set of 2)<br> Price: Rs.218</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Sanjeevani Rose Blooming Tonic">
                        <input type="hidden" name="Price" value="218">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card mt-2">
                <img src="ecommerce_data/FERTILIZERS/organic_fertilizers/14.webp" class="card-img-top"><br><br>
                    <div class="card-body text-center">
                        <h5 class="card-title">Vermicompost <br><br> </h5>
                        <p class="card-text">1 kg (Set of 2)<br> Price: Rs.160</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Vermicompost">
                        <input type="hidden" name="Price" value="160">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card mt-2">
                <img src="ecommerce_data/FERTILIZERS/organic_fertilizers/13.webp" class="card-img-top"><br><br>
                    <div class="card-body text-center">
                        <h5 class="card-title">Soil Special <br> </h5>
                        <p class="card-text">All Purpose Organic Manure, 1 kg (Set of 2)<br> Price: Rs.260</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Soil Special ">
                        <input type="hidden" name="Price" value="260">
                    </div>
            </div>
            </form>  
            </div>


        </div>

    </div>

    <!-- POTTING SOIL -->
    <div class="container mt-5" id="potting_fertilizers">
        <div class="row">
        <div class="col-lg-12 text-center border-rounded bg-light my-5">
                <h1>POTTING SOIL</h1>
            </div>
            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/potting fertilizers/1.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nutrient-rich general purpose potting soil mix</h5>
                        <p class="card-text">5 kg<br> Price: Rs.329</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Nutrient-rich general purpose potting soil mix">
                        <input type="hidden" name="Price" value="329">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/potting fertilizers/4.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Potting Soil Mix for Flowering Plants - 5 kg </h5>
                        <p class="card-text"><br> Price: Rs.499</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Potting Soil Mix for Flowering Plants - 5 kg">
                        <input type="hidden" name="Price" value="499">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/potting fertilizers/3.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Potting Soil Mix for Seeds Gardening - 5 kg </h5>
                        <p class="card-text"><br> Price: Rs.399</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Potting Soil Mix for Seeds Gardening - 5 kg">
                        <input type="hidden" name="Price" value="399">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/potting fertilizers/6.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Potting Soil Mix for Cactus and Succulent plants - 3 kg</h5>
                        <p class="card-text"><br> Price: Rs.399</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Potting Soil Mix for Cactus and Succulent plants">
                        <input type="hidden" name="Price" value="399">
                    </div>
            </div>
            </form>  
            </div>


        </div>

    </div>

    <!-- SOIL ADDITIVES -->
    <div class="container mt-5" id="soil_additives">
        <div class="row">
        <div class="col-lg-12 text-center border-rounded bg-light my-5">
                <h1>SOIL ADDITIVES</h1>
            </div>
            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/soil additives/1.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Perlite - 500 g</h5>
                        <p class="card-text"><br> Price: Rs.150</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Perlite - 500 g">
                        <input type="hidden" name="Price" value="150">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/soil additives/2.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Expanded Clay Aggregate (Clay Balls) - 1 kg </h5>
                        <p class="card-text">Plant Growth Tonic 500 ml<br> Price: Rs.190</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Expanded Clay Aggregate (Clay Balls) - 1 kg">
                        <input type="hidden" name="Price" value="190">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/soil additives/3.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Exfoliated Vermiculite - 250 g </h5>
                        <p class="card-text"><br> Price: Rs.199</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Neem Raksha">
                        <input type="hidden" name="Price" value="199">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/soil additives/4.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pumice Stones - 1 kg</h5>
                        <p class="card-text">Cactus and Succulent Plant Food<br> Price: Rs.300</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Pumice Stones - 1 kg">
                        <input type="hidden" name="Price" value="300">
                    </div>
            </div>
            </form>  
            </div>


        </div>

    </div>

    <!-- COCOPEAT SOIL -->
    <div class="container mt-5" id="cocopeat_soil">
        <div class="row">
        <div class="col-lg-12 text-center border-rounded bg-light my-5">
                <h1>COCOPEAT SOIL</h1>
            </div>
            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/cocopeat/1.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Coco Peat Block - 5 kg</h5>
                        <p class="card-text"><br> Price: Rs.329</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Coco Peat Block - 5 kg">
                        <input type="hidden" name="Price" value="329">
                    </div>
            </div>
            </form>  
            </div>

            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/cocopeat/2.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Coco peat block - 900 g </h5>
                        <p class="card-text">Plant Growth Tonic 500 ml<br> Price: Rs.190</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Coco peat block - 900 g">
                        <input type="hidden" name="Price" value="190">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/cocopeat/3.webp" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Coco Husk Block - 4.5 kg</h5>
                        <p class="card-text"><br> Price: Rs.300</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Neem Raksha">
                        <input type="hidden" name="Price" value="300">
                    </div>
            </div>
            </form>  
            </div>


            <div class="col-lg-3">
             <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="ecommerce_data/FERTILIZERS/cocopeat/4.webp" class="card-img-top" style="height:240px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Coir Coin (Netted, 30 mm) (Set of 50)</h5>
                        <p class="card-text"><br> Price: Rs.100</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Desert Pride">
                        <input type="hidden" name="Price" value="100">
                    </div>
            </div>
            </form>  
            </div>


        </div>

    </div>


    <div class="breadcrumb-area">
            <!-- Top Breadcrumb Area -->
            <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
                <h2>FEATURED NURSERIES</h2>
            </div>
        </div>    

    <?php
        $query = " select * from users_nurseries ";
        $result = mysqli_query($tcon, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
        
        <div class="container mt-5" id="cocopeat_soil">
        <div class="row">
        <div class="col-lg-12 text-center border-rounded bg-light my-5">
                <h1><?php echo $data['nurseryname'] ?></h1>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="./image/<?php echo $data['p1img']; ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $data['p1name']; ?></h5>
                        <p class="card-text"><br> <?php echo $data['p1price']; ?></p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Bougainvilla">
                        <input type="hidden" name="Price" value="100">
                    </div>
            </div>
            </form>   
            </div>

            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="./image/<?php echo $data['p2img']; ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $data['p2name']; ?></h5>
                        <p class="card-text"><br> <?php echo $data['p2price']; ?></p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Daffodils">
                        <input type="hidden" name="Price" value="200">
                    </div>
            </div>
            </form>   
            </div>


            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="./image/<?php echo $data['p3img']; ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $data['p3name']; ?></h5>
                        <p class="card-text"><br> <?php echo $data['p3price']; ?></p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Dahlia">
                        <input type="hidden" name="Price" value="300">
                    </div>
            </div>
            </form>   
            </div>


            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="./image/<?php echo $data['p4img']; ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $data['p4name']; ?></h5>
                        <p class="card-text"><br> <?php echo $data['p4price']; ?></p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Jasmine">
                        <input type="hidden" name="Price" value="400">
                    </div>
            </div>
            </form>     
            </div>

            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST"> 
            <div class="card">
                <img src="./image/<?php echo $data['p5img']; ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $data['p5name']; ?></h5>
                        <p class="card-text"><br> <?php echo $data['p5price']; ?></p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Lily">
                        <input type="hidden" name="Price" value="500">
                    </div>
            </div>
            </form>   
            </div>
        </div>

    </div>


       
 
    <?php
        }
    ?>
    

    

</body>
</html>