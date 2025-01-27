<?php

declare(strict_types=1);

$pokemon = $database->select()->from('pokemon')->get();

require __DIR__ . '/../views/pokedex.view.php';
