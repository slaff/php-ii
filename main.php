<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Libs\{Calc, SciCalc, Car, UsefulHouse};


function test(?string $x) {
  echo "Test $x";
}


$car = new Car("green");

// Typehinting: int, float, string, array and classNames 
$house = new UsefulHouse();
$house->setCar($car);


test(null);
