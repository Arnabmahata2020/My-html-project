<?php
$id = $_GET['id'];
 
require("db.php");

$selectWhereQuery = "SELECT * FROM `login` WHERE id = $id";

$details = $conn->query($selectWhereQuery)->fetch_assoc();

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
</head>
<body>
	<center>
	<table style="border-color: white; background-color: white; opacity:0.7" border="5">
 <form method="POST" action="update.php">
<tr>
      <td><lebel for="firstname"> First Name:</lebel></td>
      <td><input type="text" name="firstName" id="First Name" placeholder="First Name" required></td>
     </tr>
     <tr>
      <td>Last Name:</td>
      <td><input type="text" name="lastName" id="Last Name" placeholder="Last Name" required></td>
     </tr>
     
    <tr>
      <td>Your Address:</td>
      <td><textarea cols="30" rows="3" name="address" placeholder="Write your full address........" required></textarea></td><br><br>
    </tr>
   
    <tr>
      <td>Your Email :</td>
      <td><input type="email" name="email" id="email" placeholder="Please Enter Your Email" required></td>
    </tr>    
     
    <tr>
	 <td>Password : </td>
	 <td><input type="text" name="password" id="password" placeholder="Enter Your password" required ></td>
    </tr>
    <tr>
    <td>
    <input type="submit" value="update"></td>
	</tr>
    </form>
</table>
<br>
<a href="register.html">HOME</a>
</center>

</body>
</html>