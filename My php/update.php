<?php
   
    $id=$_GET['id'];
    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = $_POST['password'];

    require("db.php");
	
    $sql = "UPDATE 'login' SET id='$id',firstName='$firstName',lastName='$lastName',address='$address',email='$email',password ='$password' ";
    if($conn->query($sql) === TRUE) 
    {
        echo "New record update successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
       $conn->close();
    ?>
