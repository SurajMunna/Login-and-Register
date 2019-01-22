   <?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'samplelogindb');
   $db = mysqli_connect('localhost','root',"",'samplelogindb');
 ?>
 <?php
   
   if(isset($_POST['change']))
  {
      @$email = $_POST['ename1'];
      @$password = md5($_POST['pass1']); 
      
	  $sql = "UPDATE user SET password = '$password' WHERE email = '$email'";
	 
	  echo "<br/><br/><br/><center><h3>password updation successful</h3></center>";
	  }
   else{
	   echo "<br/><br/><br/><center><h3>database error</h3></center>";
   }
  
?>
