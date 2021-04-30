<?php
namespace Customers\Block;

use Customers\Customer;

class BlockList extends Customer{
    protected $state;
    public function setState($state){
        $this->state = $state;
        return "Complete...";
    }
    public function getState(){
        return $this->state;
    }
} 
?>