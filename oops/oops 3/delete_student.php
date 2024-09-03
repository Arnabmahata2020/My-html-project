<?php
require"connection.php";

$sid = $_GET['id'];

$dlt=new view;
$dlt->delete_data($sid);

header("Location:student_table.php");
?>