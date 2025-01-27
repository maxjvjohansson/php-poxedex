<?php

declare(strict_types=1);

function view(string $name): string
{
    $baseDir = __DIR__ . '/../views/';
    $filePath = $baseDir . $name . '.view.php';

    return $filePath;
}
