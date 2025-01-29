<?php

declare(strict_types=1);

use App\Pokemon;

$id = $_GET['id'];

$pokemonData = $database->select()->from('pokemon')->where('id', '=', $id)->first();

$pokemon = new Pokemon($pokemonData->id, $pokemonData->name);

require view('pokemon');
