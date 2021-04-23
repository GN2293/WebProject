<?php
//修改後的 index.php
include_once __DIR__ . "FirstAutoLoad.php";
include_once __DIR__ . "SecondAutoLoad.php";

$first = new First();
$first->doSomething();

$second = new Second();
$second->doSomething();
?>