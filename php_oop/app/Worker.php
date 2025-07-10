<?php

namespace App;

class Worker {

use HasFest;
public string $name;
public int $age;
public  array $hours;
protected int $gnum;
private string $dress;
public function work()
{
   
    print_r ('i am working');

}
public function getName(){

    return $this->name;
}
public function setName(){

    print_r('i am getName');
}

public function __construct(string $name, int $age, array $hours, int $gnum)
{

    $this->name = $name;
    $this->age = $age;
    $this->hours = $hours;
    $this->gnum = $gnum;

}
}