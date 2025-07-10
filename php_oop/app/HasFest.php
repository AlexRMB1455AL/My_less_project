<?php

namespace App;

trait HasFest
{
    
    public function rest(){
    
    print_r($this->getName() . 'has rest');
    }
    
}
