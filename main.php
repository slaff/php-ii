<?php
require __DIR__.'/vendor/autoload.php';

use Libs\{Calc, SciCalc, Car, SuperCar};

$sciCalc = new SciCalc("Barbie");
$sciCalc->plus(1,2);
$sciCalc->clear();
echo $sciCalc->getMemoryAsFloat();

echo "\n";

$car = new Car("yellow");
echo $car->getColor();

echo "\n";

$superCar = new SuperCar();
$superCar->changeColor();
echo $superCar->getColor();
