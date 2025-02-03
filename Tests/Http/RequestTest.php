<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Http\Request;

class RequestTest extends TestCase
{
    public function test_get_uri()
    {
        $_SERVER['REQUEST_URI'] = 'http://localhost:8000/';
        $this->assertSame('/', Request::uri());
    }
}
