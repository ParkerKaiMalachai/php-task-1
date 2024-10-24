<?php

namespace src\Class;

use src\Interface\Animal;

class Bird implements Animal
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function makeSound()
    {
        echo "$this->name communicates through chirik. \n";
    }

    public function eat()
    {
        echo "Name is $this->name. \n";
    }

    public function sleep()
    {
        echo "$this->name sleeps while flying. \n";
    }
}
;