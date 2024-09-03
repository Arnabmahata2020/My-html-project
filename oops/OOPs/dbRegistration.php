<?php
require'function.php';

$rgstr = new register();

$nm = $_GET['name'];
$eml = $_GET['email'];
$gndr = $_GET['gender'];
$adr = $_GET['address'];

$result = $rgstr->registration($nm, $eml, $gndr, $adr);

header("Location:table.php")
?>