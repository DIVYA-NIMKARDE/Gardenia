<?php
    require('tieup_connection.php');
    require('nurserylogic.php');
    
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    
   
    /*function sendMail($email)
    {
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        require 'PHPMailer/Exception.php';

        $mail = new PHPMailer(true);
                    try 
                    {
                
                        
                        $oname = $_POST['owner_name'];
                        $owneremail= $_POST['owneremail'];
                        $phnumber= $_POST['phnumber'];
                        $nurseryname= $_POST['nurseryname'];
                        $city= $_POST['city'];
                        $state= $_POST['state'];
                        $address= $_POST['address'];
                        #$txt ="Name = ". $oname . "\r\n  Email = " . $owneremail . "\r\n Number =" . $phnumber;

                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'websitegardenia@gmail.com';                     //SMTP username
                        $mail->Password   = 'gardenia@123';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                        //Recipients
                        $mail->setFrom($owneremail, 'USER');
                        $mail->addAddress('websitegardenia@gmail.com');
                        
                    
                        
                    
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Tie Up request';
                        $mail->Body    = " <table class='table'>
                                                    <thead>
                                                    <tr>
                                                        <th scope='col'>Name</th>
                                                        <th scope='col'>Email</th>
                                                        <th scope='col'>Phone Number</th>
                                                        <th scope='col'>Nursery Name</th>
                                                        <th scope='col'>City</th>
                                                        <th scope='col'>State</th>
                                                        <th scope='col'>Address</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                    
                                                        <td>$oname</td>
                                                        <td>$owneremail</td>
                                                        <td>$phnumber</td>
                                                        <td>$nurseryname</td>
                                                        <td>$city</td>
                                                        <td>$state</td>
                                                        <td>$address</td>
                                                    </tr>
                                                    
                                                    </tbody>
                                                </table>
                                                                            
                                                                    ";
                        
                    
                        $mail->send();

                            return true;
                    
                        } 
                        catch (Exception $e) 
                        {
                            return false;
                        }
        
    }*/
   

    function sendMail($email,$v_code,$tcon)
    {
        if(!class_exists('PHPMailer\PHPMailer\PHPMailer'))
        {
            require ("PHPMailer/PHPMailer.php");
            require ("PHPMailer/SMTP.php");
            require ("PHPMailer/Exception.php");

        }

        $mail = new PHPMailer(true);
                    try 
                    {
                
                        //$query = "SELECT * FROM `users_nurseries`";
                        //$user_result = mysqli_query($tcon, $query);
                        
                        //while($user_fetch = mysqli_fetch_assoc($user_result))
                        //{
                          //  $email=$user_fetch['owneremail'];
                         

                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'websitegardenia@gmail.com';                     //SMTP username
                        $mail->Password   = 'qwfnjhmmutkogbbh';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                        //Recipients
                        $mail->setFrom('websitegardenia@gmail.com', 'GARDENIA');
                        $mail->addAddress($email);
                        
                    
                        
                    
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Tie Up request approval';
                        $mail->Body    = "<h3>We have reviwed your request for tie up. Your application has been approved.</b>
                                        Click the link below to confirm your tie-up. </b>
                                        <a href='http://localhost/Final_Project/approvetieup.php?email=$email'> Confirm </a></h3>";
                        
                    
                        $mail->send();

                            return true;
                    
                        }
                        
                    #}
                    catch(Exception $e) 
                        {
                            return false;
                        }
                    
    }

    function sendRejectMail()
    {
        if(!class_exists('PHPMailer\PHPMailer\PHPMailer'))
        {
            require ("PHPMailer/PHPMailer.php");
            require ("PHPMailer/SMTP.php");
            require ("PHPMailer/Exception.php");

        }

        $mail = new PHPMailer(true);
                    try 
                    {
                
                        //$query = "SELECT * FROM `users_nurseries`";
                        //$user_result = mysqli_query($tcon, $query);
                        
                        //while($user_fetch = mysqli_fetch_assoc($user_result))
                        //{
                          //  $email=$user_fetch['owneremail'];
                         

                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'websitegardenia@gmail.com';                     //SMTP username
                        $mail->Password   = 'qwfnjhmmutkogbbh';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    
                        //Recipients
                        $mail->setFrom('websitegardenia@gmail.com', 'GARDENIA');
                        $mail->addAddress('divyanimkarde@gmail.com');
                        
                    
                        
                    
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Tie Up request Rejected';
                        $mail->Body    = "<h3>We have reviewed your request for tie up. We feel sorry to inform you that your application cannot be processed due to unacceptable reasons.</b>";
                        
                    
                        $mail->send();

                            return true;
                    
                        }
                        
                    #}
                    catch(Exception $e) 
                        {
                            return false;
                        }
                    
    }


    /*function sendRejectMail($email)
    {
        if(!class_exists('PHPMailer\PHPMailer\PHPMailer'))
        {
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
            require 'PHPMailer/Exception.php';

        }
        
        $mail = new PHPMailer(true);
                    try 
                    {
                
                        /*$query = "SELECT * FROM `users_nurseries`";
                       // $user_result = mysqli_query($tcon, $query);
                        
                        //while($user_fetch = mysqli_fetch_assoc($user_result))
                        //{
                          //  $email=$user_fetch['owneremail'];
                         

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
                        $mail->Subject = 'Tie Up request rejected';
                        $mail->Body    = "<h3>We have reviwed your request for tie up. </br>
                                            Sorry your application cannot be approved.";
                                        
                    
                        $mail->send();

                            return true;
                    
                        }
                        
                    #}
                    catch(Exception $e) 
                        {
                            return false;
                        }
                    
    }*/

    /*function sendApproveMail($email, $v_code,$tcon)
    {
        if(!class_exists('PHPMailer\PHPMailer\Exception'))
        {
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
            require 'PHPMailer/Exception.php';
        }
        
        
            
        
                $mail = new PHPMailer(true);
                try 
                {
                    //Server settings
                    $email=$_POST['owneremail'];               
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
                                        Click the link below to confirm your tie up. </b>
                                        <a href='http://localhost/Final_Project/approvetieup.php?email=$email&v_code=$v_code'> Confirm </a>";
                    
                
                    $mail->send();
                    return true;
                } 
                catch (Exception $e) 
                {
                    return false;
                }
    }*/
   
    if(isset($_POST['requesttieup']))
    {
        
        $query = "INSERT INTO `users_nurseries`(`owner_name`, `phonenumber`, `owneremail`, `nurseryname`, `city`, `state`, `address`, `v_code`, `is_approved`) VALUES ('$_POST[owner_name]','$_POST[phnumber]','$_POST[owneremail]','$_POST[nurseryname]','$_POST[city]','$_POST[state]','$_POST[address]','$v_code','0')";
        $qresult = mysqli_query($tcon, $query);
        if($qresult)
        {
            echo "<script>alert('Thank you for requesting to connect with us! We will get in touch with you soon'); 
                                window.location.href='connect_with_us.php';
                            </script>";
        }
        else
        {
            echo "<script>alert('Cannot process your request. Please try again later'); 
                window.location.href='connect_with_us.php';
                </script>";
        }
    }

    if(isset($_POST['approve']))
    {
        //$id = $_REQUEST['userid'];
        $query = "SELECT * FROM `users_nurseries` WHERE `owneremail`= 'sakshimahajan2019@gmail.com'";
        $user_result = mysqli_query($tcon, $query);
        $v_code = bin2hex(random_bytes(16));
        #$v_code = $_SESSION["v_code"];
        while($user_fetch = mysqli_fetch_assoc($user_result))
        {
            $email=$user_fetch['owneremail'];
                if(sendMail($email,$v_code,$tcon))
                {
                    echo "<script>alert('Approved Tie up!'); 
                        window.location.href='admin_panel.php';
                        </script>";
                }
                else
                {
                    echo "<script>alert('Cannot send mail!'); 
                        window.location.href='tie_requests_info.php';
                        </script>";
                }
        }
    }
    elseif(isset($_POST['reject']))
    {
        $query = "SELECT * FROM `users_nurseries` WHERE `owneremail`= 'divyanimkarde@gmail.com'";
        $user_result = mysqli_query($tcon, $query);
        #$v_code = $_SESSION["v_code"];
        while($user_fetch = mysqli_fetch_assoc($user_result))
        {
            $email=$user_fetch['owneremail'];
                if(sendRejectMail())
                {
                    if($user_fetch['is_approved'] == 0 )
                    {
                    $update="UPDATE `users_nurseries` SET `is_approved`='2' WHERE `owneremail`='divyanimkarde@gmail.com'";
                    if(mysqli_query($tcon,$update))
                    {
                        echo "<script>alert('Tie up rejected!'); 
                            window.location.href='admin_panel.php';
                        </script>";
                    }
                    else
                    {
                        echo "<script>alert('Cannot run query'); 
                            window.location.href='admin_panel.php';
                        </script>";
                    }
                    
                    }
                    
                    echo "<script>alert('Rejected Tie up!'); 
                        window.location.href='admin_panel.php';
                        </script>";
                }
                else
                {
                    echo "<script>alert('Cannot send mail!'); 
                        window.location.href='tie_requests_info.php';
                        </script>";
                }
        }   
    }

    
?>