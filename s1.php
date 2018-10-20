<html>
<head>
    <title>DHAGA</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: purple;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: green;
}

.contact{
    border-radius: 5px;
    background-color: #DBC2F7;
    padding: 5px;
}
</style>
</head> 
<body>
    <header>
        
    <div class="row">
        <div class="logo">
        <img src="logo3.jpg"
        </div>
            
    <ul class="main-nav">    
        <li class="active"><a href=""> HOME </a></li>
        <li><a href="#slider"> GALLERY </a></li>
        <li><a href="#contact"> CONTACT US </a></li>
        <li><a href="#about"> ABOUT </a></li>
        <li><a href="login.html"> LOGIN </a></li>
        
        <li><a href=""> FAQ </a></li>
    </ul>    
        
    </div>
        
    <div class="page1">
    <h1>MASTERPIECES WITH SUI <font color="pink">DHAGA</font></h1>
        
    <div class="button">
        <a href="" class="btn btn-one"> Watch Video</a>
        <a href="" class="btn btn-two"> Explore More</a>    
    </div>    
            
    </div>
    
    </header>
    <!--<div class="page2">
        <font>page 2</font>

    </div>
    <div class="page3">
        <font>page3</font>
    </div>-->
    
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
    

<div class="contact" id="contact" style="padding-right:350px; padding-left: 350px;padding-bottom: 10px ">

<h2><font color="purple">Contact Form</font></h2>
  <form method="POST" action="">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Email-id</label>
    <input type="text" id="email" name="email" placeholder="Your Email-id..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="usa">India</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="usa">Pakistan</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name ="submit" value="Submit" onclick="myfun()">
  </form>
</div>
<!--<div class="about" id="about" style="background-color: #A4FFBF; padding-bottom: 600px ;" >
    <h2><font color="red">its all about us : JANHAVI,KAJAL,SWARA</h2>
</div>-->
<script type="text/javascript">
	function myfun()
		alert (submitted successfully);
</script>
</body>    
</html>
<?php

	//echo $_POST['firstname'];
	if($_POST["submit"]=="Submit")
	{
		$fname = $_POST['firstname'];
		$email = $_POST['email'];
		$country = $_POST['country'];
		$subject = $_POST['subject'];

		$dbcon=mysqli_connect("localhost","root","","ShopDB");
		//mysqli_select_db("ShopDB");


		$s="insert into Contact(fname,email,country,subject) values('".$fname."','".$email."','".$country."','".$subject."')";
		mysqli_query($dbcon,$s);
	}
?>