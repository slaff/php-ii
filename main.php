<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Libs\{User, Db\Repository };

$input = '+357 12 12-12 Limassol';
$pattern = '/^([\d|\+][\d-]*) ([\d\s-]*) (\w*)$/';

if(preg_match($pattern,$input, $matches)) {
   var_dump($matches);
}

exit;


// 1. using ORM => you get an object which is instance of the User class

$config = include __DIR__.'/config/application.config.php';

$repository = new Repository($config['db']);

$user = $repository->findById(3);

var_dump($user);

// 2. Persist information
$user->age = 34;

$repository->persist($user); // UPDATE ... SET age=34 WHERE id=13;
