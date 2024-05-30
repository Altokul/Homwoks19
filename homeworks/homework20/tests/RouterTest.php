<?php

use App\Request;
use App\Response;
use App\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    public function testGetRoute()
    {
        $router = new Router();
        $router->get('/greet', function ($request) {
            return new Response("Hello, welcome to our service!");
        });

        $request = $this->createMock(Request::class);
        $request->method('getMethod')->willReturn('GET');
        $request->method('getPath')->willReturn('/greet');

        $response = $router->resolve($request);

        $this->assertEquals("Hello, welcome to our service!", $response->send());
    }

    public function testPostRoute()
    {
        $router = new Router();
        $router->post('/add', function ($request) {
            return new Response("Test POST");
        });

        $request = $this->createMock(Request::class);
        $request->method('getMethod')->willReturn('POST');
        $request->method('getPath')->willReturn('/add');

        $response = $router->resolve($request);

        $this->assertEquals("Test POST", $response->send());
    }
}