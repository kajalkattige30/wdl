<<?php
	if($_POST["submit"]=="submit")
	{
		session_start();
		$uname = $_SESSION['username'];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$mobile = $_POST["mobile"];
		$email = $_POST["email"];
		$sex = $_POST["sex"];
		$address = $_POST["add"];
		$dbcon = mysqli_connect("localhost","root","","shopdb");
		echo "$uname";
		echo "$fname";
		//name=localStorage.getItem("firstname");
		$s = "insert into customer_info(fname,lname,contact,email,sex,address) values('$uname','$lname',$mobile,'$email','$sex','$add') ";
		mysqli_query($dbcon,$s);
		echo "registeration Completed";
		//header('location:custprofile.html');
	} 
 ?>