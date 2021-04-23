<?php
require_once "Clothes.php";

class Shirt extends Clothes{
    public function doWash(){
        printf("手洗....");
    }
}
?>