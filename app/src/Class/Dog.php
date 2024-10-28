<?php

declare(strict_types=1);

namespace src\Class;

use src\Interface\Animal;

class Dog implements Animal
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function makeSound(): void
    {
        echo "$this->name communicates through woof. \n";
    }

    public function eat(): void
    {
        echo "Name is $this->name. \n";
    }

    public function sleep(): void
    {
        echo "$this->name sleeps when his owner is out of home or sleeps too. \n";
    }

    public function about(): void
    {
        $this->makeSound();

        $this->eat();

        $this->sleep();
    }
}
;