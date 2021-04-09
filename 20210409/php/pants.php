<?php
    include "clothes.php";
    class Pant extends Clothes{
        private $length;
        private $waist;
        public function __construct($outsideName,$outsidePrice,$outsideLength,$outsideWaist){
            parent::__construct($outsideName,$outsidePrice);
            $this->length=$outsideLength;
            $this->waist=$outsideWaist;
        }
    public function getLength(){
        return $this->length;
    }
    public function getWaist(){
        return $this->waist;
    }
    public function doWash(){
        $string="用手洗!再".parent::doWash();
        return $string;
    }
    public function __destruct(){
    }
}
?>