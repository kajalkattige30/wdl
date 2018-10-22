<?php
if($_POST["login"]=="Login")
{
	$uname = $_POST["Username"];
	$pw = $_POST["Password"];
	$dbcon = mysqli_connect("localhost","root","","ShopDB");
	$s = "SELECT * FROM customers WHERE Username = '".$uname."' and Password = '".$pw."'";
	$q = mysqli_query($dbcon,$s);
	if(mysqli_num_rows($q)>0)
	{
		echo "LOGIN successfull, open next page.";
		header("location:custprofile.php");
	}
	else
	{
		echo "Wrong username or password";

	}
}
?> 