<?php

declare(strict_types=1);

$id = $_GET['id'];

$pokemon = $database->select()->from('pokemon')->where('id', '=', $id)->first();

function formatPokemonName(string $name): string
{
    $name = strtolower($name);
    $name = str_replace(' ', '-', $name);
    $name = str_replace(['♀', '♂'], ['-f', '-m'], $name);
    $name = str_replace(['.', "’"], '', $name);
    return $name;
}

require view('pokemon');
