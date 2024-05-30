<?php

use App\Response;
use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
{
    public function testSend()
    {
        $response = new Response("Test Response", 200);
        ob_start();
        $response->send();
        $output = ob_get_clean();
        $this->assertEquals("Test Response", $output);
    }

    public function testStatus()
    {
        $response = new Response("Test Response", 404);
        $this->assertEquals(404, http_response_code());
    }
}