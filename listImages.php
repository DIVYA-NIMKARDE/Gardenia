<?php
    $con = mysqli_connect("localhost", "root", "", "image");
    $sql = "SELECT imageId FROM output_images ORDER BY imageId DESC"; 
    $result = mysqli_query($con, $sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>

</HEAD>
<BODY>
<?php
	while($row = mysqli_fetch_array($result)) {
	?>
		<img src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" /><br/>
	
<?php		
	}
    mysqli_close($con);
?>
</BODY>
</HTML>