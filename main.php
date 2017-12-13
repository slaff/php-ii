<?php
require __DIR__.'/vendor/autoload.php';

use Libs\{Calc, SciCalc};

$calc = new Calc("John");
$calc->plus(2,3);
echo $calc->getMemory();

// pizza 20cm diameter
echo $calc->areaCircle(10);
echo "\n";
echo $calc->multiply(3,4);
echo "\n";
echo Calc::PI;

echo "\n";
$sciCalc = new SciCalc("Barbie");
echo $sciCalc->getMemoryAsFloat();
