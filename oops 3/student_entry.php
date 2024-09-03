<?php
require'connection.php';
$input=new insert();

$nm=$_GET['s_name'];
$mr=$_GET['s_marks'];

$res=$input->insert_data($nm,$mr);
 header("Location:student_table.php")
?>