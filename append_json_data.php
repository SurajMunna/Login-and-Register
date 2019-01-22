<?php include 'link.php';?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> | Form-Json</title>  
		    <link rel="stylesheet" type="text/css" href="style.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Please fill the details</h3><br />                 
                <form method="post">  
                         <?php include 'error.php';?>
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" data-error-msg="Must enter your name?" class="form-control"/><br />  
                     <label>E-Mail</label>  
                     <input type="email" required name="email" class="form-control" data-error-msg="Must enter your email?" /><br />  
                     <label>Degree</label>  
                     <input type="text" name="degree" class="form-control" data-error-msg="Must enter your degree?"/><br />  
					  <label>Address</label>  
                     <input type="text" name="Address" class="form-control" data-error-msg="Must enter your address?"/><br />  
					  <label>CourseCompletedYear</label>  
                     <input type="text" name="CourseCompleted" class="form-control" data-error-msg="Must enter your CourseCompletedYear?"/><br />  
					  <label>PhoneNumber</label>  
                     <input type="text" name="PhoneNumber" class="form-control" data-error-msg="Must enter your PhoneNumber?" /><br /> 
                       DOB  <input type="date" required id="namebox2" /><br><br><br>					 
                     <a href="bootstrap.html"><input type="submit" name="submit" value="Append" class="btn btn-info" /><br />    
					 
                    <?php include 'message.php';?>
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  