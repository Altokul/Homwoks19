<?php

namespace App;

class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position !== false) {
            $path = substr($path, 0, $position);
        }
        return $path;
    }

    public function getBody()
    {
        if ($this->getMethod() === 'POST') {
            return json_decode(file_get_contents('php://input'), true);
        }
        return [];
    }

    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}