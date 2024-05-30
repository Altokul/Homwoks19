<?php

use App\Validator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    public function testValidateNumbers()
    {
        $this->assertTrue(Validator::validateNumbers(['a' => 1, 'b' => 2]));
        $this->assertFalse(Validator::validateNumbers(['a' => 'one', 'b' => 2]));
        $this->assertFalse(Validator::validateNumbers(['a' => 1]));
        $this->assertFalse(Validator::validateNumbers([]));
    }
}