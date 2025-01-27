<ul>
    <?php foreach ($pokemon as $pokemonItem): ?>
        <li>
            <a href="/pokemon?id=<?= htmlspecialchars($pokemonItem->id); ?>">
                <?= htmlspecialchars($pokemonItem->name); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>