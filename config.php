<?php

declare(strict_types=1);

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

return [
    'driver' => $_ENV['DATABASE_DRIVER'] ?? 'mysql',
    'host' => $_ENV['DATABASE_HOST'] ?? '127.0.0.1',
    'database' => $_ENV['DATABASE_NAME'] ?? '',
    'user' => $_ENV['DATABASE_USER'] ?? '',
    'password' => $_ENV['DATABASE_PASSWORD'] ?? '',
];
