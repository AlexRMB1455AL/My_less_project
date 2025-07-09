<?php

namespace App;

class Turist

{

    public $namet;
    public $aget;
    public $hourst;
    public $familyt;

    public function figaro()
    {
    
        print_r(ucfirst('hello!'));
        print_r("dratuti");

    }

    public function __construct($namet, $aget, $hourst, $familyt)
    {
    
        $this->namet = $namet;
        $this->aget = $aget;
        $this->hourst = $hourst;
        $this->familyt = $familyt;

    
    }


}
