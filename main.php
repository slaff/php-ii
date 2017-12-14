<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Libs\{User, Db\Repository };

$xml = simplexml_load_file( __DIR__.'/data/cars.xml' );

foreach($xml->car as $car) {
  if($car->color == "black") {
     echo $car->owner."\n";  
  }
}

$xml->car[1]->owner = "Aphrodite";

echo $xml->car[1]->owner;


exit;


// 1. using ORM => you get an object which is instance of the User class

$config = include __DIR__.'/config/application.config.php';

$repository = new Repository($config['db']);

$user = $repository->findById(3);

var_dump($user);

// 2. Persist information
$user->age = 34;

$repository->persist($user); // UPDATE ... SET age=34 WHERE id=13;
