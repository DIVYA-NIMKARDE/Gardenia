<?php
    $tcon = mysqli_connect("localhost", "root", "", "tie_up_users");
    if(mysqli_connect_error())
    {
        echo "<script>alert('Cannot connect to database') </script>";
        
        exit();
    }
?>