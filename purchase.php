<?php

require('admin_connection.php');
session_start();



    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    /*function sendMail($email, $v_code)
    {
        if(!class_exists('PHPMailer\PHPMailer\PHPMailer'))
        {
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
            require 'PHPMailer/Exception.php';

        }

        $query = "SELECT * FROM `order_manager`";
        $user_result = mysqli_query($con, $query);
        $user_fetch = mysqli_fetch_assoc($user_result);
        $oid = $user_fetch['Order_Id'];
        $fname = $user_fetch['Full_Name'];
        $phno = $user_fetch['Phone_No'];
        $addr = $user_fetch['Address'];
        $paymode = $user_fetch['Pay_Mode'];
        $email = $user_fetch['email'];

        $mail = new PHPMailer(true);
        try 
        {
            //Server settings
                                 
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'websitegardenia@gmail.com';                     //SMTP username
            $mail->Password   = 'gardenia@123';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('websitegardenia@gmail.com', 'GARDENIA');
            $mail->addAddress($email);
            
        
            
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Your Purchase details from Gardenia';
            $mail->Body    = "<table>
                                <th>
                                    <tr>Order Id</tr>
                                    <tr>Full name</tr>
                                    <tr>Address</tr>
                                    <tr>Email</tr>
                                    <tr>Payment Mode</tr>
                                <th>
                                <td>
                                    <tr>";
                                    Body.="Order Id</tr>

                                </td>
                                </table>";
            
        
            $mail->send();
            return true;
        } 
        catch (Exception $e) 
        {
            return false;
        }
    }*/



if(mysqli_connect_error())
{
    echo"<script>
            alert('Cannot connect to database!');
            window.location.href='mycart.php';
        </script>";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        $phn = $_POST['phone_no'];
        $phonevalidate = preg_match('/^[0-9]{10}+$/', $phn);
        if(!$phonevalidate)
        {
            echo"<script>
                alert('Invalid Phone Number Format!');
                window.location.href='mycart.php'
                </script>";
        }
        else
        {

        
            $query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
                    
            if(mysqli_query($con,$query1))
            {
                $Order_Id=mysqli_insert_id($con);
                $query2 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`) VALUES (?,?,?)";
                $stmt = mysqli_prepare($con,$query2);
                if($stmt)
                {
                    mysqli_stmt_bind_param($stmt, "isi", $Order_Id, $Item_Name, $Price);
                    foreach($_SESSION['cart'] as $key => $values)
                    {
                        $Item_Name=$values['Item_name'];
                        $Price=$values['Price'];
                        mysqli_stmt_execute($stmt);   
                    }
                        
                        unset($_SESSION['cart']);
                        echo"<script>
                            alert('Order Placed!');
                            window.location.href='shopindex.php';
                            </script>";
                        

                }
                else
                {
                    echo"<script>
                    alert('Cannot run SQL Prepared query!');
                    window.location.href='mycart.php';
                    </script>";
                }
            }
        
            else
            {
                echo"<script>
                alert('Cannot run query!');
                window.location.href='mycart.php';
                </script>";
            }
        }
    }
}

?>