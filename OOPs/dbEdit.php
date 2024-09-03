<?php

$ab = $_GET['cv'];
$br = $_GET['email'];
$da = $_GET['gender'];
$ha = $_GET['address'];
$ga = $_GET['idForUpdate'];

require'function.php';

$up = new update();
$up->updateRecord($ab,$br,$da,$ha,$ga);

header("Location:table.php");
?>