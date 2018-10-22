<!DOCTYPE html>
<html>
<head>
	<title>GALLERY</title>
	<link rel="stylesheet" type="text/css" href="galleryStyle.css">
</head>
<body>
	<h2>Gallery</h2>
	<div id="content">
	<?php
		$db = mysqli_connect("localhost","root","","ShopDB");
		$sql = "SELECT * FROM gallery";
		$result = mysqli_query($db,$sql);
		while ($row = mysqli_fetch_array($result)) {
			echo "<div id='img_div'>";
			echo "<img src = 'gallery/".$row['image']."'>";
			echo $row['price'];
			echo $row['user'];
			echo $row['item_name'];
			echo "<p>".$row['description']."</p>";
			echo "<p>".$row['owner_review']."</p>";
			echo "</div>";
		}
	?>
	</div>
</body>
</html>
