<?php
    require('tieup_connection.php');

    if(isset($_POST['submitproducts']))
    {
        $details = "SELECT * FROM `users_nurseries` WHERE `owneremail` = '$_POST[email]'";
        $result = mysqli_query($tcon, $details);

        if($result)
        {
            $query = "UPDATE `users_nurseries` SET `p1name`='$_POST[p1name]', `p1price`='$_POST[p1price]', `p2name`='$_POST[p2name]', `p2price`='$_POST[p2price]', `p3name`='$_POST[p3name]', `p3price`='$_POST[p3price]', `p4name`='$_POST[p4name]', `p4price`='$_POST[p4price]', `p5name`='$_POST[p5name]', `p5price`='$_POST[p1price]' WHERE `owneremail` = '$_POST[email]' ";
            if(mysqli_query($tcon, $query))
            {
                echo "<script>alert('Data Inserted successfully!'); 
                window.location.href='nurserydetails.php';
                </script>";

            }
            else
            {
                /*echo "<script>alert('failed!'); 
                window.location.href='nurserydetails.php';
                </script>";*/
            }
        }

    }
?>