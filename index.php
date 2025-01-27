<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/bootstrap.php';

$pokemon = $database->select()->from('pokemon')->where('id', '=', '149')->first();

echo $pokemon->name;
