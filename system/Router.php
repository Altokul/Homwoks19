<?php

namespace App;

use Exception;

class Router
{
    private $routes = [];

    public function get($path, $handler)
    {
        $this->routes['GET'][$path] = $handler;
    }

    public function post($path, $handler)
    {
        $this->routes['POST'][$path] = $handler;
    }

    public function resolve($request)
    {
        $method = $request->getMethod();
        $path = $request->getPath();

        if (isset($this->routes[$method][$path])) {
            try {
                $handler = $this->routes[$method][$path];
                return call_user_func($handler, $request);
            } catch (Exception $e) {
                return new Response("Internal Server Error", 500);
            }
        } else {
            return new Response("Not Found", 404);
        }
    }
}