<?php

declare(strict_types=1);

use App\Exceptions\NotFoundHttpException;
use PHPUnit\Framework\TestCase;
use App\Http\Router;

class RouterTest extends TestCase
{
    public function test_route_request()
    {
        $router = new Router([
            '/' => 'controllers/pokedex.php',
        ]);

        $this->assertSame('controllers/pokedx.php', $router->direct('/'));
    }

    public function test_route_not_found()
    {

        $router = new Router([
            '/' => 'controllers/pokedex.php'
        ]);

        $this->expectException(NotFoundHttpException::class);
        $router->direct('/invalid-route');
    }
}
