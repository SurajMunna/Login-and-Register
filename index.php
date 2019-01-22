<?php include 'session.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Login Form</h2></center>
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
		<form action="index.php" method="post">
		
			<div class="inner_container">
				<label><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button class="login_button" name="login" type="submit" href="Form.html">Login</button>
				<a href="register.php"><button type="button" class="register_btn">Register</button></a>
				<a href="forget.html"><button type="button" class="forgot_btn">Forgot Password</button></a>
			</div>
		</form>
		
<?php include 'logindb.php';?>
		
	</div>
</body>
</html>