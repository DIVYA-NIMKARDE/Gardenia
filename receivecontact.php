<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendMail($email, $name, $subject, $msg)
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
            //Server settings
                                
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'websitegardenia@gmail.com';                     //SMTP username
            $mail->Password   = 'qwfnjhmmutkogbbh';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('websitegardenia@gmail.com');
            
        
            
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $msg;
            
        
            $mail->send();
            return true;
        } 
        catch (Exception $e) 
        {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            //return false;
        }
    }

    if(isset($_POST['sendmsg']))
    {
        $email=$_POST['email'];
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];

        if(sendMail($email, $name, $subject, $msg))
        {
            echo "<script>alert('Message sent! We will contact with you soon.'); 
                            window.location.href='contact.php';
                            </script>";
        }
        else
        {
            echo "<script>alert('Could not send message. Please try again later.'); 
                            window.location.href='contact.php';
                            </script>";
        }
        
    }

?>