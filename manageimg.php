
<?php
$db = mysqli_connect("localhost", "root","","image");

if(mysqli_connect_error())
{
    echo "<script>alert('Cannot connect to database') </script>";
    
    exit();
}
error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./Final_Project/image/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "geeksforgeeks");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>