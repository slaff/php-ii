<?php
require __DIR__.'/vendor/autoload.php';

use Libs\Calc;

$calc = new Calc();
$calc->plus(2,3);
echo $calc->getMemory();
