<?php
require __DIR__.'/vendor/autoload.php';

use Libs\{Calc, SciCalc, Car, UsefulHouse};

$car = new Car("green");

// Typehinting: int, float, string, array and classNames 
$house = new UsefulHouse();
$house->setCar($car);
