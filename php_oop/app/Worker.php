<?php

namespace App;

class Worker {

public string $name;
public int $age;
public  array $hours;

public function work()
{
    
    print_r ('i am working');
  

}

public function __construct(string $name, int $age, array $hours)
{

    $this->name = $name;
    $this->age = $age;
    $this->hours = $hours;

}
}