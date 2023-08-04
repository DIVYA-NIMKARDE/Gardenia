<?php

    require("tieup_connection.php");
    if(isset($_GET['email']))
    {
        $query="SELECT * FROM `users_nurseries` WHERE `owneremail`='$_GET[email]'";
        $result=mysqli_query($tcon, $query);

        if($result)
        {
            if(mysqli_num_rows($result)==1)
            {
                $result_fetch = mysqli_fetch_assoc($result);

                if($result_fetch['is_approved'] == 0 )
                {
                    $update="UPDATE `users_nurseries` SET `is_approved`='1' WHERE `owneremail`='$result_fetch[owneremail]'";
                    if(mysqli_query($tcon,$update))
                    {
                        echo "<script>alert('Tie up confirmation successful!'); 
                            window.location.href='nurserydetails.php';
                        </script>";
                    }
                    else
                    {
                        echo "<script>alert('Cannot run query'); 
                            window.location.href='connect_with_us.php';
                        </script>";
                    }
                    
                }
                else
                {
                    echo "<script>alert('Already Confirmed'); 
                            window.location.href='Login.php';
                        </script>";

                }
            }
        }
        else
        {
            echo "<script>alert('Cannot run query'); 
                    window.location.href='Login.php';
                </script>";
        }
    }
?>