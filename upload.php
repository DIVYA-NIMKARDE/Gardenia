<?php


    if(isset($_POST['submit_image']) && $_FILES['myimage'])
    {
        echo "<pre>";
        print_r($_FILES['myimage']);
        echo "</pre>";

        $img_name = $_FILES['myimage']['name'];
        $img_size = $_FILES['myimage']['size'];
        $tmp_name = $_FILES['myimage']['tmp_name'];
        $error = $_FILES['myimage']['error'];

        if($error == 0)
        {
            if($img_size > 125000000)
            {
                $em = "Sorry, your file is too large";
                header("Location: image-upload-test.php?error=$em");
            }
            else
            {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                echo(img_ex);

            }
        }
        else
        {
            $em = "unknown error occurred";
            header("Location: image-upload-test.php?error=$em");
        }
    }
    else
    {
        header("Location: image-upload-test.php");
    }
?>