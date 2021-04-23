<?php
require_once "Wash.php";
require_once "Pants.php";
require_once "Shirts.php";

$Pant = new Pant;
$Shirt = new Shirt;
$action = new Washer;
$action->doWash($Pant);
$action->doWash($Shirt);
?>