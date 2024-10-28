<?php

declare(strict_types=1);

namespace src\Class;

use src\Interface\Animal;

class Cat implements Animal
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function makeSound(): void
    {
        echo "$this->name communicates through meow. \n";
    }

    public function eat(): void
    {
        echo "Name is $this->name. \n";
    }

    public function sleep(): void
    {
        echo "$this->name is sleeping all day. \n";
    }

    public function about(): void
    {
        $this->makeSound();

        $this->eat();

        $this->sleep();
    }
}
;