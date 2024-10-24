<?php

namespace src\Class;

use src\Interface\Animal;

class Dog implements Animal
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function makeSound()
    {
        echo "$this->name communicates through woof. \n";
    }

    public function eat()
    {
        echo "Name is $this->name. \n";
    }

    public function sleep()
    {
        echo "$this->name sleeps when his owner is out of home or sleeps too. \n";
    }
}
;