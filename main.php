<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Libs\{User, Db\Repository };

// TODO: load composer.json

$content = file_get_contents(__DIR__.'/composer.json');

//       turn composer.json content into an array
$data = json_decode($content, true);

//       display that array
// var_dump($data);

$newArray = [
   "key" => "value",
   "key2" => [ "oho" => "one", "two", "three"],
   0 => "ten"
];

$content = json_encode($newArray);
echo $content;



exit;


// 1. using ORM => you get an object which is instance of the User class

$config = include __DIR__.'/config/application.config.php';

$repository = new Repository($config['db']);

$user = $repository->findById(3);

var_dump($user);

// 2. Persist information
$user->age = 34;

$repository->persist($user); // UPDATE ... SET age=34 WHERE id=13;
