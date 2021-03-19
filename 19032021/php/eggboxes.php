<?php
$eggbox = array();
$eggbox["土鸡"]=10;
$eggbox[]=20;
$eggbox[4]=21;
array_push($eggbox,"Apple");
$eggbox[2]="Pineapple";
print_r($eggbox);
array_pop($eggbox);
print_r($eggbox);
array_pop($eggbox);
print_r($eggbox);
$eggbox=array(10,20,21);
print_r($eggbox);
?>