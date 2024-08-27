<?php
require("db.php");

$sql = "SELECT * FROM `login`";

if ($result = $conn -> query($sql)) {
  while ($row = $result -> fetch_assoc()) {
    $students[] = $row;
  }
}
$result -> free_result();
$conn -> close();
?>
<h1 align="center">Register List</h1>
<br>
<table border="3" align="center">
  <thead>
    <th>sl</th>
    <th> FirstName</th>
    <th> LastName</th>
    <th>Address</th>
    <th>Email</th>
    <th>Password</th>
    <th>Option</th>
    </thead>
   <tbody>
  

    <?php $sl=1; foreach($students as $list){ ?>
      <tr>
      <td><?php echo $sl; ?></td>
      <td><?php echo $list['firstName']; ?></td>
      <td><?php echo $list['lastName']; ?></td>
      <td><?php echo $list['address']; ?></td>
      <td><?php echo $list['email']; ?></td>
      <td><?php echo $list['password']; ?></td>
      <td>
						<a href="edit.php?id=<?php echo $list['id']; ?>">Edit</a>
						<a onclick="return confirm('Are you sure want to delete?')" href="delete.php?id=<?php echo $list['id']; ?>" style="color: #f00;">Delete</a>
					</td>

      </tr>

      <?php $sl++; }?>
  </tbody>
</table>
<h1 align="center"><a href="register.html"> HOME </a></h1>


