<?php

declare(strict_types=1);

namespace App\Http;

class Request
{
    public static function uri(): string
    {
        $parsedUrl = parse_url($_SERVER['REQUEST_URI']);

        return $parsedUrl['path'] ?? '/';
    }
}
