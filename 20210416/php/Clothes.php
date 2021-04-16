<?php
include "doWash.php";
abstract class clothes implements doWash{
    private $name;
    private $price;
    public function __construct($outsidename,$outsideprice){
        $this->name=$outsidename;
        $this->price=$outsideprice;
    }   
    public function setname($outsidename){
        //$this->name=$outsidename;
    }
    public function getName(){
        //return $this->name;
    }
    public function setprice($outsideprice){
        //$this->price=$outsideprice;
    }
    public function getPrice(){
        //return $this->price;
    }
    public function doWash(){
        //return "用洗衣机清洗!";
    }
    public function __destruct(){

    }
}
?>