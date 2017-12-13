<?php
require __DIR__.'/vendor/autoload.php';

use Libs\{Calc, SciCalc, Car, SuperCar, PerfectCar};

$superCar = new SuperCar();
echo $superCar;

echo "\n";

unset($superCar);

