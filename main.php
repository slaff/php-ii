<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Libs\{Calc, SciCalc, Car, UsefulHouse, CarException};

$car = new Car("green");
$anotherCar = clone $car;


$house = new UsefulHouse();
$house->setCar($car);


echo $anotherCar->getColor()."\n";

echo "Works";
