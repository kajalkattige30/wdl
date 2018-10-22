<?php
$user = "";
session_start();
if (isset($_POST["upload"])) {
	echo "enteredphp";
	
 	$target = "gallery/".basename($_FILES['image']['name']);
 	$gallerycon = mysqli_connect("localhost","root","","ShopDB");
 	$image = $_FILES['image']['name'];
 	$price = $_POST['price'];
 	$user = $_SESSION['username'];
 	$type = $_POST['type'];
 	$Description = $_POST['Description'];
 	$review = $_POST['owner_review'];
 	$s = "INSERT INTO gallery (image, price, user, owner_review, item_name, description) VALUES ('$image','$price', '$user', '$review', '$type', '$Description')";
 	$t = mysqli_query($gallerycon,$s);
 	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
 		echo "files uploaded successfully";
 	}
 	else
 	{
 		echo "error in uploading";
 	}
 } 
?>



<!DOCTYPE html>
<html>
<head>
	<title>Gallery Upload</title>
	<link rel="stylesheet" type="text/css" href="galleryStyle.css">

</head>
<body>
	<h2>Upload to Gallery</h2>
	<div id="content">
		<form method="POST" action="gallery.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">
			<div>
				<input type="file" name="image">
			</div>
			<div>
			<label>Price</label>
				<input type="number" name="price" id="price">
			</div>
			<div>
			<label>Item Type</label>
    			<select id="type" name="type">
      			<option value="none">None</option>
      			<option value="kurti">Kurti</option>
      			<option value="Salwar-suit">Salwar-suit</option>
      			<option value="One-piece">One-piece</option>
      			<option value="Lehnga">Lehnga</option>
    			</select>
    		</div>
    		<div>
				<textarea name="Description" cols="40" rows="4" placeholder="Description of the product"></textarea>
			</div>
			<div>
				<textarea name="owner_review" cols="40" rows="4" placeholder="owner's review of the product"></textarea>
			</div>
			<input type="submit" name="upload" value="upload">

			
		</form>
	</div>
</body>
</html>