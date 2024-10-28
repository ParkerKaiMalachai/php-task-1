<?php

declare(strict_types=1);

use src\Class\Cat;
use src\Class\Dog;
use src\Class\Bird;

$arrayOfClasses = [new Cat("Musya"), new Dog("Pakito"), new Bird("Birdy")];

foreach ($arrayOfClasses as $animal) {
    $animal->about();
}

;