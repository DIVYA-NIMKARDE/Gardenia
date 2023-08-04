<?php
    /*$con = mysqli_connect("localhost", "root", "", "image");

    if(isset($_POST['upload']))
    {
        $file = $_FILES['image']['name'];
        $query = "INSERT INTO upload(image) VALUES('$file')";
        $res = mysqli_query($con, $query);

        if($res)
        {
            move_uploaded_file($_FILES['image']['tmp_name'], "$file" );
        }
    }*/
?>


<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
       <!-- <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center">UPLOAD IMAGE</h3>

                        <form action="" class="my-5" method="POST"  enctype="multipart/form-data">
                            <input type="file" name="image" class="form-control">
                            <input type="submit" name="upload" value="UPLOAD" class="btn btn-success my-3">
                        </form>
                    </div>
                    <div class="col-md-6">
                    <h3 class="text-center">DISPLAY IMAGE</h3>-->

                   
                    
<?php
$con = mysqli_connect("localhost", "root", "", "image");


if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
     
        $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
        
        $sql = "INSERT INTO output_images(imageType ,imageData)
	VALUES('{$imageProperties['mime']}', '{$imgData}')";
        $current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
        if (isset($current_id)) {
            header("Location: image-upload-test.php");
        }
    }
}
?>
<HTML>
<HEAD>
<TITLE>Upload Image to MySQL BLOB</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
    <form name="frmImage" enctype="multipart/form-data" action="viewimage.php"
        method="post" class="frmImageUpload">
        <label>Upload Image File:</label><br /> <input name="userImage"
            type="file" class="inputFile" /> <input type="submit"
            value="Submit" class="btnSubmit" />
    </form>
    </div>
</BODY>
</HTML>


