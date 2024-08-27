<?php
 $id=$_GET['id'];
require ("db.php");
$sql = "DELETE FROM `login` WHERE id=$id";

if(mysqli_query($conn , $sql)){
    echo"<br><br><h1 align='center' style='color : #60e607'>Record Deleted Successfully<br><br><a href='register.html'>Add More Student</a>
    <br><br>
    <a href='table.php'>View Student List</a></h1>";
}
else{
    echo "Error deleting record" . $conn->error;
}
$conn->close();
?>