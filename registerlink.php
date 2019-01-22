 <?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
     
      if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter email</label>";  
      } 
     else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter password</label>";  
      }  	  
	  else if(empty($_POST["cpassword"]))  
      {  
           $error = "<label class='text-danger'>Enter cpassword</label>";  
      }  	  
      
      else  
      {  
           if(file_exists('register_data.json'))  
           {  
                $current_data = file_get_contents('register_data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'email'               =>     $_POST['email'],  
                     'password'          =>     $_POST["password"],  
					 'cpassword'          =>     $_POST["cpassword"]
                    
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('register_data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Successfully</p>";  
					 	header( "Location: login.php");
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  