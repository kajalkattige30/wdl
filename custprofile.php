<?php
require(logindb.php);
function getUsersData($id)
{
	$array = array();
	$q = mysql_query("SELECT * FROM 'customer_info' WHERE 'id' = ".$id);
	while($r = mysql_fetch_assoc($q))
	{
		$array['username'] = $row['username'];
		$array['fname'] = $row['fname'];
		$array['lname'] = $row['lname'];
		$array['mobile'] = $row['mobile'];
		$array['email'] = $row['email'];
		$array['sex'] = $row['sex'];
		$array['address'] = $row['address'];
	}
	echo $array['username'];
}
?>
<!--
<!DOCTYPE html>
<html>
<head>
	<title>customer profile</title>
	<link rel="stylesheet" type="text/css" href="custprofile.css">
</head>
<body>
	<header>
		<div class="row">
		  <ul class="main-nav">    
        <li class="active"><a href=""> ABOUT ME </a></li>
        <li><a href=""> PLACE ORDER </a></li>
        <li><a href=""> VIEW ORDERS </a></li>
        <li><a href="#slider"> GALLERY </a></li>
    </ul>  
   <div id="slider" style="padding-bottom: 100px" >
        <h2><font color="green">GALLERIA</font></h2>
    <figure>
    <img src="i1.jpg">
    <img src="i2.jpg">
    <img src="i3.jpg">
    <img src="i4.jpg">
    <img src="i5.jpg">
    </figure>
    <marquee><font color="green">click on the images above for more details about them</font></marquee>
    </div>
    
     <div class="page1">
    <h1>WELCOME <font color="pink"></font></h1>
        
    <div class="button">
        <a href="" class="btn btn-one"> Watch Video</a>
        <a href="" class="btn btn-two"> Explore More</a>    
    </div>
    </header>
    
</body>
</html>
-->
