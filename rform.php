<!DOCTYPE html>
<html>
<head>
	<title>user login and registration</title>
	<link rel="stylesheet" type="text/css" href="rform.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class = "col-md-6 login-left">
				<h2>Login Here</h2>
				<form action="logindb.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="Username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="Password" class="form-control" required>
					</div>
					<button type="submit" name = "login" value="Login" class="btn btn-primary"> Login </button>
				</form>
				
			</div>
			<div class = "col-md-6 login-right">
				<h2>Register Here</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control" required>
					</div>
					<button type="submit" name="register" value ="Register" class="btn btn-primary"> Register </button>
				</form>
				
			</div>
		</div>
		</div>
		
	</div>

</body>
</html>