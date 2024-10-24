<?php

use src\Class\Cat;
use src\Class\Dog;
use src\Class\Bird;

$cat = new Cat("Musya");
$cat->eat();
$cat->makeSound();
$cat->sleep();

$dog = new Dog("Pakito");
$dog->eat();
$dog->makeSound();
$dog->sleep();


$bird = new Bird("Birdy");
$bird->eat();
$bird->makeSound();
$bird->sleep();

;