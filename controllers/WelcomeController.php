<?php

namespace App\Controllers;

use App\CSRFToken;
use App\Response;

class WelcomeController
{
    public static function greet($request)
    {
        return new Response("Hello, welcome to our service!");
    }

    public static function getCSRFToken($request)
    {
        $token = CSRFToken::generateToken();
        return new Response(json_encode(['csrf_token' => $token]));
    }
}