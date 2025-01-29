<?php

declare(strict_types=1);

namespace App\Http;

use App\Exceptions\NotFoundHttpException;

class Router
{

    public array $routes;
    public string $uri;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function direct(string $uri): string
    {
        if (!array_key_exists($uri, $this->routes)) {
            throw new NotFoundHttpException('404 Page Not Found');
        }
        return $this->routes[$uri];
    }
}
