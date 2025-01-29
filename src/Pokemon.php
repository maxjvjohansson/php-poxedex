<?php

namespace App;

class Pokemon
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    private function formatPokemonName(string $name): string
    {
        $name = strtolower($name);
        $name = str_replace(' ', '-', $name);
        $name = str_replace(['♀', '♂'], ['-f', '-m'], $name);
        $name = str_replace(['.', "’"], '', $name);
        return $name;
    }

    public function getImageUrl()
    {
        $formattedName = $this->formatPokemonName($this->name);
        return "https://img.pokemondb.net/sprites/bank/normal/{$formattedName}.png";
    }
}
