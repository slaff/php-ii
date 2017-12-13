<?php
require __DIR__.'/vendor/autoload.php';

use Libs\{Calc, SciCalc, Car, SuperCar, PerfectCar, House, UsefulHouse};

// NOT ALLOWED: create objects from abstract classes
// $house = new House();

$house = new UsefulHouse();
echo $house->getBathRooms();
