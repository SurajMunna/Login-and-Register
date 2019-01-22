<?php include 'session.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
<script type="text/javascript">
	<!--
	function validate(){
	

    var str2 = document.forms["form1"]["password"].value;
	var str3 = document.forms["form1"]["cpassword"].value;
	var illg = /^[a-zA-Z0-9]+$/;
	
    if(str2.localeCompare(str3)!=0)
	{
	alert("Passwords doesn't match");
	    
	return false;
	}
	if((str3.length<7)||(str3.length>16))
	{
	   alert("Your Password must be 7 to 16 Character");
	   return false;
	  }
	else if(!illg.test(str3))
	{
	alert("Your Password must be only integers");
	   return false;
	  }

}
</script>
	<div id="main-wrapper">
	<center><h2>Sign Up Form</h2></center>
		<form action="register.php" method="post" onsubmit="return validate(this)">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<label><b>E-Mail</b></label>
				<input type="email" placeholder="Enter E-Mail" name="email" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="cpassword" required>
				<button name="register" class="sign_up_btn" type="submit">Sign Up</button>
				
				<a href="index.php"><button type="button" class="back_btn"><< Back to Login</button></a>
			</div>
		</form>
		
<?php include 'database.php';?>
	</div>
</body>
</html>