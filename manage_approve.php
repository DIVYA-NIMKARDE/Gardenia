<?php
        require('tieup_connection.php');
        session_start();

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;


        function sendApproveMail($email, $v_code)
    {
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        require 'PHPMailer/Exception.php';

        $email = $_POST['owneremail'];
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
            $mail->Subject = 'Tie up approval from Gardenia';
            $mail->Body    = "We have reviwed your request for tie up. Your application has been approved.</b>
                                Click the link below ro confirm your tie up. </b>
                                <a href='http://localhost/Final_Project/approvetieup.php?email=$email&v_code=$v_code'> Confirm </a>";
            
        
            $mail->send();
            return true;
        } 
        catch (Exception $e) 
        {
            return false;
        }
    }

        if(isset($_POST['approve']))
            {
                $query = "SELECT * FROM `users_nurseries`";
                $user_result = mysqli_query($tcon, $query);
                $v_code = $_SESSION["v_code"];
                while($user_fetch = mysqli_fetch_assoc($user_result))
                {
                    $email=$user_fetch['owneremail'];
                        if(sendApproveMail($email,$v_code))
                        {
                            $query = "UPDATE `users_nurseries` SET `is_approved`='1' WHERE `owneremail`='$email'";
                            $result = mysqli_query($tcon,$query);
                            if($result)
                            {
                                echo "<script>alert('Approved Tie up!'); 
                                window.location.href='connect_with_us.php';
                                </script>";
                            }
                          
                        }
                        else
                        {
                            echo "<script>alert('Cannot send mail!'); 
                                #window.location.href='connect_with_us.php';
                                </script>";
                        }
                }
            }
            elseif(isset($_POST['reject']))
            {

            }

?>