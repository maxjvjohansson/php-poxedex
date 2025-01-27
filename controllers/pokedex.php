<?php

declare(strict_types=1);

$pokemon = $database->select()->from('pokemon')->get();

require view('pokedex');
