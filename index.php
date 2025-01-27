<?php

use App\Http\Router;
use App\Http\Request;
use App\Exceptions\NotFoundHttpException;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/bootstrap.php';

$router = new Router([
    '/' => 'controllers/pokedex.php',
    '/pokemon' => 'controllers/pokemon.php'
]);

try {
    $newUri = $router->direct(Request::uri());
    require $newUri;
} catch (NotFoundHttpException $nfhe) {
    echo $nfhe->getMessage();
}
