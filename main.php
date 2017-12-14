<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Libs\{User, Db\Repository };

/*
Restful service example

http://<something>/user


POST http://<something>/user and include in the body the data for the car
DELETE http://<something>/user/<id>
GET http://<something>/user/<id>
PUT http://<something>/user/<id>
*/


exit;


// 1. using ORM => you get an object which is instance of the User class

$config = include __DIR__.'/config/application.config.php';

$repository = new Repository($config['db']);

$user = $repository->findById(3);

var_dump($user);

// 2. Persist information
$user->age = 34;

$repository->persist($user); // UPDATE ... SET age=34 WHERE id=13;
