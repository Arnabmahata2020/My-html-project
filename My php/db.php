<?php
 $conn = new mysqli('localhost','root','','registation');
 if($conn->connect_error){
	 echo"Failed to connect".$conn->connect_error;
 }
?>