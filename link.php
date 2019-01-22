 <?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Gender</label>";  
      }  
      else if(empty($_POST["degree"]))  
      {  
           $error = "<label class='text-danger'>Enter degree</label>";  
      }  
	   else if(empty($_POST["Address"]))  
      {  
           $error = "<label class='text-danger'>Enter Address</label>";  
      }  
	   else if(empty($_POST["CourseCompleted"]))  
      {  
           $error = "<label class='text-danger'>Enter CourseCompletedYear</label>";  
      }  
	   else if(empty($_POST["PhoneNumber"]))  
      {  
           $error = "<label class='text-danger'>Enter PhoneNumber</label>";  
      }  
      else  
      {  
           if(file_exists('employee_data.json'))  
           {  
                $current_data = file_get_contents('employee_data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],  
                     'degree'     =>     $_POST["degree"],
					   'Address'     =>     $_POST["Address"],
					   'CourseCompleted'     =>     $_POST["CourseCompleted"],
					     'PhoneNumber'     =>     $_POST["PhoneNumber"]
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('employee_data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Successfully</p>";  
					 	header( "Location: bootstrap.html");
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  