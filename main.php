<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Libs\{Calc, SciCalc, Car, UsefulHouse, CarException};

$car1 = new Car("blue");
$car2 = new Car("red");
$car3 = new Car("yellow");

echo Car::$usage;
echo Car::getWheels();
