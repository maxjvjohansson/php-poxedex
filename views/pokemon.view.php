<?php

declare(strict_types=1);

?>

<h1><?= $pokemon->name; ?></h1>
<img src="https://img.pokemondb.net/sprites/bank/normal/<?= formatPokemonName($pokemon->name); ?>.png">