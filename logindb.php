<?php
			if(isset($_POST['login']))
			{
				@$email=$_POST['email'];
				@$password=$_POST['password'];
				$query = "select * from user where email='$email' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				//if($query_run)
				//{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;
					//include 'homepage.html';
					header( "Location: append_json_data.php");
					//header( "Location: homepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				/*}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}*/
			//else
			//{
			}
		?>