<?php
    require('tieup_connection.php');

    $sql = "SELECT * FROM users_nurseries";
    $query = mysqli_query($tcon, $sql);

    
?>