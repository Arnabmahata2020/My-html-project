<?php
require'connection.php'

$register = new $Register();

if(isset($_POST['submit'])){
  $result = $register->Registration($name = $data['name'];$email = $data['email'];$gender = $data['gender'];$address = $data['address'];$created_at = $data['created_at'];)

  if($result=1){
    echo"<script>alert('Registration Successful')</script>";
  }
}

?>

<html>
    <body style="background-image: url('background.jpg'); background-size: 60%;">
      <h1 align="center" style="color:red;">Please insert your details</h1>
    <center>
    <table style="border:red; background-color:white; opacity:0.8;" border="5">
      <form method="POST" action="">
     <tr>
      <td><lebel for="name"> Name:</lebel></td>
      <td><input type="text" name="name" id="name" placeholder="name" required></td>
     </tr>
     <tr>
      <td>Your Email :</td>
      <td><input type="email" name="email" id="email" placeholder="Please Enter Your Email" required></td>
    </tr>
    <tr>
    <td for="gender">Gender: </td>
		<td>
			<input type="radio" id="male" name="gender" value="male">male
			<input type="radio" id="female" name="gender" value="female">female
			<input type="radio" id="others" name="gender" value="others">others
		</td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input type="text" name="address" id="address" placeholder="Please Enter Your address" required></td>
    </tr>
    <tr>
      <td>Created At</td>
      <td><input type="time" name="created_at" id="created_at" placeholder="created_at" required></td>
    </tr>
    
    <tr align="center">
      <td><input type="submit" name="submit" value="submit"></td>
      <td><input type="reset" name="reset" value="reset"></td>
    </tr>
     </form>
     </table>
    </body>
  </center>
</html>

