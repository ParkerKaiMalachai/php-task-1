<?php

declare(strict_types=1);

use src\Class\Cat;
use src\Class\Dog;
use src\Class\Bird;

$cat = new Cat("Musya");
$cat->about();

$dog = new Dog("Pakito");
$dog->about();

$bird = new Bird("Birdy");
$bird->about();

;