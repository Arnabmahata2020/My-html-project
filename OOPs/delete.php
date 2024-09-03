<?php
require"function.php";

$a = $_GET['id'];

$dlt=new delete;
$dlt->deleteRecord($a);

header("Location:table.php");

?>