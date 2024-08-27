<?php
   

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	require("db.php");
 

	$sql = "INSERT INTO `login`(`firstname`, `lastName`, `address`, `email`, `password`) VALUES ('".$firstName."','".$lastName."','".$address."','".$email."','".$password."')";

	if($conn->query($sql) === TRUE) 
	{
	  echo "New record created successfully";
	} 
	else 
	{
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// 	if (empty($_POST["email"])) {
	// 		$emailErr = "You Forgot to Enter Your Email!";
	// 	} else {
	// 		$email = test_input($_POST["email"]);
	// 		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
	// 			$emailErr = "You Entered An Invalid Email Format"; 
	// 		}
	// 	}
	// }
	

	$conn->close();


?>
