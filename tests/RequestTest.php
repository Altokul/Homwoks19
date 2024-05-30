<?php

use App\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function testGetMethod()
    {
        $_SERVER['REQUEST_METHOD'] = 'POST';
        $request = new Request();
        $this->assertEquals('POST', $request->getMethod());
    }

    public function testGetPath()
    {
        $_SERVER['REQUEST_URI'] = '/test?param=1';
        $request = new Request();
        $this->assertEquals('/test', $request->getPath());
    }

    public function testGetBody()
    {
        $_SERVER['REQUEST_METHOD'] = 'POST';
        $data = ['a' => 1, 'b' => 2];
        file_put_contents('php://input', json_encode($data));

        $request = new Request();
        $this->assertEquals($data, $request->getBody());
    }
}