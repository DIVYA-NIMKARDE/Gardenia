<?php
    include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border-rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>

            <div class="col-lg-8">

                <table class="table">
                        <thead class="text-center">
                            <tr>
                            <th scope="col">Serial Number</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            
                            <?php  

                                $total=0;
                                if(isset($_SESSION['cart']))
                                {
                                        foreach($_SESSION['cart'] as $key => $value)
                                        {
                                            $sr=$key+1;
                                            $total = $total+$value['Price'];
                                            echo "
                                                <tr>
                                                    <td>$sr</td>
                                                    <td>$value[Item_name]</td>
                                                    <td>Rs. $value[Price] <input type='hidden' class='iprice' value='$value[Price]'></td>
                                                    
                                                    <td>
                                                        <form action='manage_cart.php' method='POST'>
                                                            <button name='Remove_Item' class='btn btn-outline-danger btn-sm'>REMOVE</button>
                                                            <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                                        </form>
                                                    </td>
                                                </tr>    
                                                ";
                                        }
                                }
                            ?>

                            
                            
                        </tbody>
                    </table>
            </div>


            <div class="col-lg-4">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4><h5 class="text-right"><?php echo "Rs. ". $total ?></h5>
                    <br>
                    <?php
                        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                        {

                        
                    ?>
                    <form action="purchase.php" method="POST">
                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" name="fullname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Phone Number</label>
                            <input type="number" name="phone_no" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-check"> 
                                <!--<input class="form-check-input" type="radio" name="pay_mode" value="gpay" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Google Pay
                                </label>-->
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Cash on Delivery
                                </label>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" name="purchase">MAKE PURCHASE</button>  
                    </form>  
                    <?php
                        }
                    ?>           
                </div>
            </div>

        </div>
    </div>


   


</body>
</html>