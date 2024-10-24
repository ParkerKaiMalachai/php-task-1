<?php

namespace src\Class;

use src\Interface\Animal;

class Cat implements Animal
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function makeSound()
    {
        echo "$this->name communicates through meow. \n";
    }

    public function eat()
    {
        echo "Name is $this->name. \n";
    }

    public function sleep()
    {
        echo "$this->name is sleeping all day. \n";
    }
}
;