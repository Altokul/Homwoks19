<?php

namespace App;

class Validator
{
    public static function validateNumbers($data)
    {
        if (!isset($data['a']) || !isset($data['b'])) {
            return false;
        }

        if (!is_numeric($data['a']) || !is_numeric($data['b'])) {
            return false;
        }

        return true;
    }
}