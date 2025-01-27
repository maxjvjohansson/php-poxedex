<?php

declare(strict_types=1);

$id = $_GET['id'];

$pokemon = $database->select()->from('pokemon')->where('id', '=', $id)->first();

require __DIR__ . '/../views/pokemon.view.php';
