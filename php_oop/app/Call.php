<?php

namespace App;

class Call
{
    public static $countCal = 0;
    public int $num1;
    public int $num2;
    public function __construct($num1, $num2){
    
    $this->num1 = $num1;
    $this->num2 = $num2; 
    }

    public static function calK($num1, $num2)
    {
    

        // self->num1 = $num1;
        // self->num2 = $num2;
        // echo $countCal;
       return self::$countCal = $num1 + $num2;
    
        
    }
    
        public function getCountCal(){
        
        return self::$countCal;
        }

}
