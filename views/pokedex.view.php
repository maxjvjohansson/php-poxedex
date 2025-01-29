<?php

declare(strict_types=1);

?>

<h1>Pokédex</h1>

<ul>
    <?php foreach ($pokemon as $p): ?>
        <li>
            <a href="/pokemon?id=<?= $p->getId(); ?>">
                <h2><?= $p->getName(); ?></h2>
                <img src="<?= $p->getImageUrl(); ?>" alt="<?= $p->getName(); ?>">
            </a>
        </li>
    <?php endforeach; ?>
</ul>