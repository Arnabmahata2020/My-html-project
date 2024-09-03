<?php
require'function.php';

$x = $_GET['id'];

$shw = new show();
$result = $shw->displayRecord($x);

foreach ($result as $row) {
}

?>

<html>
<head>
	<title>Edittg Page</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo.jpg">
</head>
    <body style="background-image: url('background.jpg'); background-size: 100%;">
      <h1 align="center" style="color:white;">Please insert your details</h1>
    <center>
    <table style="border:red; background-color:white; opacity:0.8;" border="5">

      <form method="GET" action="dbEdit.php">

        <input type="hidden" name="idForUpdate" value="<?php echo $x; ?>" />

     <tr>
      <td><lebel for="name"> Name:</lebel></td>
      <td><input type="text" name="cv" id="name" placeholder="name" value="<?php echo $row['name']; ?>" required /></td>
     </tr>
     <tr>
      <td>Your Email :</td>
      <td><input type="email" name="email" id="email" placeholder="Please Enter Your Email" value="<?php echo $row['email']; ?>" required></td>
    </tr>
    <tr>
    <td for="gender">Gender: </td>
		<td>
			<input type="radio" id="male" name="gender" value="male" <?php if($row['gender']=="male"){echo "checked";}?> >male
			<input type="radio" id="female" name="gender" value="female" <?php if($row['gender']=="female"){echo "checked";}?>>female
			<input type="radio" id="others" name="gender" value="others" <?php if($row['gender']=="others"){echo "checked";}?> >others
		</td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input type="text" name="address" id="address" placeholder="Please Enter Your address" value="<?php echo $row['address']; ?>" required></td>
    </tr>
    
    <tr align="center">
      <td><input type="submit" name="submit" value="Update"></td>
      <td><input type="reset" name="reset" value="reset"></td>
    </tr>
     </form>
     </table>
    </body>
  </center>
</html>