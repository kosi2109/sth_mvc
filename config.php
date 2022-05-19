<?php

use Dotenv\Dotenv;
$dotenv = Dotenv::createMutable(__DIR__);
$dotenv->load();

$config = [
    'db' => [
        'DB_TYPE' => $_ENV['DB_TYPE'],
        'DB_HOST' => $_ENV['DB_HOST'],
        'DB_USERNAME' => $_ENV['DB_USERNAME'],
        'DB_PASSWORD' => $_ENV['DB_PASSWORD'],
        'DB_NAME' => $_ENV['DB_NAME'],
    ]
];
