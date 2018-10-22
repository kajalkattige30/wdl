<?php
	if($_POST["submit"]=="submit")
	{
		//$uname = "mm";
		session_start();
		$uname = $_SESSION['username'];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$mobile = $_POST["mobile"];
		$email = $_POST["email"];
		$sex = $_POST["sex"];
		$address = $_POST["add"];
		$dbcon = mysqli_connect("localhost","root","","shopDB");
		//name=localStorage.getItem("firstname");
		$s = "insert into customer_info(uname,fname,lname,contact,email,sex,address) values('$uname','$fname','$lname',$mobile,'$email','$sex','$address') ";
		$q = mysqli_query($dbcon,$s);
		echo "registeration Completed";
		//header('location:custprofile.html');
	} 
 ?>