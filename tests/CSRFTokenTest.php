<?php

use App\CSRFToken;
use PHPUnit\Framework\TestCase;

class CSRFTokenTest extends TestCase
{
    public function testGenerateToken()
    {
        $token = CSRFToken::generateToken();
        $this->assertNotEmpty($token);
        $this->assertEquals($_SESSION['csrf_token'], $token);
    }

    public function testValidateToken()
    {
        $token = CSRFToken::generateToken();
        $this->assertTrue(CSRFToken::validateToken($token));
        $this->assertFalse(CSRFToken::validateToken('invalid_token'));
    }
}