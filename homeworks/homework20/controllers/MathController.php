<?php

namespace App\Controllers;

use App\CSRFToken;
use App\Response;
use App\Validator;

class MathController
{
    public static function add($request)
    {
        $data = $request->getBody();

        // Перевірка CSRF токену
        $csrfToken = isset($data['csrf_token']) ? $data['csrf_token'] : '';
        if (!CSRFToken::validateToken($csrfToken)) {
            return new Response("Invalid CSRF token", 403);
        }

        // Валідація вхідних даних
        if (!Validator::validateNumbers($data)) {
            return new Response("Invalid input", 400);
        }

        $a = $data['a'];
        $b = $data['b'];
        $sum = $a + $b;
        return new Response("The sum is: " . $sum);
    }
}