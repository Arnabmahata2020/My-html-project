<?php
require'connection.php';

$sid= $_GET['id'];

$edt = new  update();
$result = $edt->display_data($sid);
foreach($result as $row) 

?>
<html>
<head>
	<title>Student Details</title>
	
</head>
    <body style="background-image: url('background.jpg'); background-size:100%;">
      <h1 align="center" style="color:rgb(145, 218, 222);">Please Insert Student Marks</h1>
    <center>
    <table style="border:rgb(11, 1, 1); background-color:white;" border="10">
      <form method="GET" action="edit.php">
      <input type="hidden" name="id" value="<?php echo $sid; ?>" />
     <tr>
      <td><lebel> Name:</lebel></td>
      <td><input type="text" name="s_name" id="name" placeholder="name" value="<?php echo $row['name']; ?>"></td>
     </tr>
     <tr>
      <td>Marks</td>
      <td><input type="int" name="s_marks" id="marks" placeholder="Please Enter Your Marks" value="<?php echo $row['marks']; ?>"></td>
    </tr>
    <tr align="center">
      <td><input type="submit" name="submit" value="update"></td>
      <td><input type="reset" name="reset" value="reset"></td>
    </tr>
  </form>
 </table>
    </body>
  </center>
</html>