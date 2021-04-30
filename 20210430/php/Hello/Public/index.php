<?php
require_once '../vendor/autoload.php';
    
use Cars\Car;
use Customers\Customer;
use Customers\Block\BlockList;
        
$mycar = new Car();
$mycar->setName("Ford...");
echo "My Car: ".$mycar->getName();
echo "
";

$myprofile = new Customer();
$myprofile->setName("Peter");
echo "My Name: ".$myprofile->getName();
echo "
";

$mystate = new BlockList();
$mystate->setState("Forzien...");
echo $mystate->getState();
?>