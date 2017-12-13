<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Libs\{Calc, SciCalc, Car, UsefulHouse, CarException};

$class = new class() {
  public function doSomething() {
     echo "Done from anonymous class";
  }
};


$f = function() {
  echo "123";
};


$f();

echo "\n";

$class->doSomething();
