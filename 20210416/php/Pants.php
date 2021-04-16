<?php
    include "clothes.php";
    class Pant extends Clothes{
        private $length;
        private $waist;
        public function __construct($outsideName,$outsidePrice,$outsideLength,$outsideWaist,$mark){
            parent::__construct($outsideName,$outsidePrice);
            $this->setName($outsideName);
            $this->setPrice($outsidePrice);
            $this->setMark($mark);
            $this->length=$outsideLength;
            $this->waist=$outsideWaist;
        }
        public function setName($outsideName){
            $this->name = $outsideName;
        }
        public function setPrice($outsidePrice){
            $this->price = $outsidePrice;
        }
        public function setMark(Mark $mark){
            $this->mark = $mark;
        }
        public function getName(){
            return $this->name;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getMark(){
            return $this->mark;
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