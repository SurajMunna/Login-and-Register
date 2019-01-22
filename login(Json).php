<?php include 'loginlink.php';?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> | Login</title>  
		    <link rel="stylesheet" type="text/css" href="style.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Login using Json file format</h3><br />                 
                <form method="post">  
                   <?php include 'error.php';?>
                     <br />  
                  
                     <label>E-Mail</label>  
                     <input type="email" required name="email" class="form-control" data-error-msg="Must enter your email?" /><br />  
					   <label>Password</label>  
                     <input type="text" required name="password" data-error-msg="Must enter your name?" class="form-control"/><br />  
                     					 
                     <a href="bootstrap.html"><input type="submit" name="submit" value="Append" class="btn btn-info" /><br />    
					 
                    <?php include 'message.php';?>
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  