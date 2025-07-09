<?php

namespace App;

class Worker {

public string $name;
public int $age;
public  array $hours;
protected int $gnum;
public function work()
{
    
    print_r ('i am working');
  

}

public function __construct(string $name, int $age, array $hours, int $gnum)
{

    $this->name = $name;
    $this->age = $age;
    $this->hours = $hours;
    $this->gnum = $gnum;

}
}