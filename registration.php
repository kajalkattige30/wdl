<?php
if($_POST["register"]=="Register")
{
session_start();
header('location:rform.php');
$con = mysqli_connect('localhost','root',"","shopdb");
//mysqli_select_db($con, 'shopdb');
$name = $_POST['user'];
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
?>