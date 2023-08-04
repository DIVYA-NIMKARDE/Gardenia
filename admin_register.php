<?php

require('admin_connection.php');
session_start();

#for Login
    if(isset($_POST['adminlogin']))
    {
        $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[adminusername]'";
        $result = mysqli_query($con, $query);

        if($result)
        {   
             $result_fetch=mysqli_fetch_assoc($result);
                if($result_fetch['Admin_Name']==$_POST['adminusername'] && $result_fetch['Admin_Password']==$_POST['adminpassword'])
                {
                    $_SESSION['adminlogged_in']=true;
                    echo "<script>alert('Logged in successfully!'); 
                            window.location.href='admin_panel.php';
                            </script>";
                }
                else
                {
                    echo "<script>alert('Incorrect username or password!'); 
                    window.location.href='admin_login.php';
                            </script>";
                }
        }
        else
        {
            echo "<script>alert('Cannot Run Query!'); 
            window.location.href='admin_login.php';
            </script>";   
        }

    }    


?>            