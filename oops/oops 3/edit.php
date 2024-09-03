<?php

$id = $_GET['id'];
$nm = $_GET['s_name'];
$ma = $_GET['s_marks'];


require'connection.php';

$up = new update();
$up->edit_data($id,$nm,$ma);
header("Location:student_table.php")

?>