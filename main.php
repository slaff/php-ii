<?php
declare(strict_types=1);

/**

             Throwable
         /                  \
       Error              Exception
     /       
  ArgumentCountError ...       \ 
                              CarException 
*/


require __DIR__.'/vendor/autoload.php';

use Libs\{Calc, SciCalc, Car, UsefulHouse, CarException};

$car = new Car("green");
$car->toggle();

if($car->isOpen()) {
  echo "The window is now open\n";
}

$house = new UsefulHouse();
$house->toggle();

try {
 $car->fillTank();
}
catch(CarException $ex) {
  echo "this is a car exception\n";
}
catch(\Error | \Exception $ex) {
 echo $ex->getMessage()."\n";
 echo $ex->getTraceAsString()."\n";
}
finally {
  echo "\nAlways executed\n";
}

echo "Works";

