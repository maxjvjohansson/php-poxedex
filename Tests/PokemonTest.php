<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Pokemon;

class PokemonTest extends TestCase
{
    public function test_create_pokemon()
    {
        $pokemon = new Pokemon(1, "Charizard");
        $this->assertSame(1, $pokemon->getId());

        $this->assertSame("Charizard", $pokemon->getName());

        $expectedUrl = "https://img.pokemondb.net/sprites/bank/normal/charizard.png";
        $this->assertSame($expectedUrl, $pokemon->getImageUrl());
    }
}
