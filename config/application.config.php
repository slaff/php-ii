<?php

return [
    'db' => [
        'dsn' => 'mysql:unix_socket=/var/run/mysqld/mysqld.sock;dbname=course',
        'username' => 'vagrant',
        'password' => 'vagrant',
        'options'  => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    ],
];
