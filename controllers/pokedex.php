<?php

declare(strict_types=1);

use App\Pokemon;

$pokemonData = $database->select()->from('pokemon')->get();

$pokemon = array_map(function ($data) {
    return new Pokemon($data->id, $data->name);
}, $pokemonData);

require view('pokedex');
