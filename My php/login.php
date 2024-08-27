<?php
  require("db.php");
   
  if(isset($_POST['submit']))
  {
   $email = $_POST['email'];
   $password = $_POST['password'];
   $sql="SELECT * FROM `login` where email='$email' AND password='$password'";
   $result = $conn->query($sql);
   if($result->num_rows>0){
   session_start();
  $row = $result -> fetch_assoc();
   $_SESSION['email']=$row['email'];
   $_SESSION['password']=$row['password'];
   echo "Login Succesful";
   exit();
   }
   else{
	   echo"Not Found,Incorrect Email or password";
   }
   
  }
  	   
	
  
    
 

	
?>