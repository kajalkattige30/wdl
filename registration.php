<?php
$uname = "";
$con = mysqli_connect('localhost','root',"","shopdb");
if($_POST["register"]=="Register")
{
session_start();
header('location:rform.php');
//$con = mysqli_connect('localhost','root',"","shopdb");
//mysqli_select_db($con, 'shopdb');
$name = $_POST['user'];
$uname = $name;
$pass = $_POST['pass'];
$_SESSION['username'] = $name;
$s = "select * from customers where Username = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
	echo "Username already taken";
}
else{
	$reg = "insert into customers(Username,Password) values ('$name','$pass')";
	mysqli_query($con, $reg);
	echo "registration successful";
	//localStorage.setItem("uname", "$name");
	header("location:registerpage.html");
}
}
if($_POST["submit"]=="submit")
	{
		echo "entered";
		//session_start();
		//$uname = $_SESSION['username'];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$mobile = $_POST["mobile"];
		$email = $_POST["email"];
		$sex = $_POST["sex"];
		$address = $_POST["add"];
		//$dbcon = mysqli_connect("localhost","root","","shopDB");
		echo "$uname";
		echo "$fname";
		//name=localStorage.getItem("firstname");
		$sc = "insert into customer_info(fname,lname,contact,email,sex,address) values('$uname','$lname',$mobile,'$email','$sex','$address') ";
		$q = mysqli_query($con,$sc);
		echo "registeration Completed";
		//header('location:custprofile.html');
	}
?>