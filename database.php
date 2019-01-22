<?php
			if(isset($_POST['register']))
			{
				@$email=$_POST['email'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from user where email='$email'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				//if($query_run)
					//{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						{
							$query = "insert into user values('$email','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['email'] = $email;
								$_SESSION['password'] = $password;
								header( "Location: homepage.php");
								//header( "Location: Form.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
				
				}
				
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
			     
			}
		
			
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	