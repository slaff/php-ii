<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Libs\{User, Db\Repository };

// 1. using ORM => you get an object which is instance of the User class

$repository = new Repository();

$user = $repository->findById(13);


// 2. Persist information
$user->age = 34;

$repository->persist($user); // UPDATE ... SET age=34 WHERE id=13;
