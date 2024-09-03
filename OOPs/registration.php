
<html>
<head>
	<title>Registation Page</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo.jpg">
</head>
    <body style="background-image: url('background.jpg'); background-size: 100%;">
      <h1 align="center" style="color:white;">Please insert your details</h1>
    <center>
    <table style="border:red; background-color:white; opacity:0.8;" border="5">
      <form method="GET" action="dbRegistration.php">
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
    
    <tr align="center">
      <td><input type="submit" name="submit" value="submit"></td>
      <td><input type="reset" name="reset" value="reset"></td>
    </tr>
     </form>
     </table>
    </body>
  </center>
</html>