<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Libs\{Calc, SciCalc, Car, UsefulHouse, CarException};

$car = new Car("green");


try {
 $car->fillTank();
}
catch(CarException $ex) {
  echo "this is a car exception\n";
}
catch(\Error $ex) {
  // doSomethingHer()
}
catch(\Exception $ex) {
 echo $ex->getMessage()."\n";
 echo $ex->getTraceAsString()."\n";

 throw $ex;
}
finally {
  echo "\nAlways executed\n";
}

echo "Works";

