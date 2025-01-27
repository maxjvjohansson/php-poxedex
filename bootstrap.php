<?php

declare(strict_types=1);


require __DIR__ . '/vendor/autoload.php';

use App\Database\Connection;
use App\Database\QueryBuilder;

$config = require __DIR__ . '/config.php';

$database = new QueryBuilder(
    Connection::make($config['driver'], $config['host'], $config['database'], $config['user'], $config['password'])
);
