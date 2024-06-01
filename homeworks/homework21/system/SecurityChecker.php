<?php

namespace homeworks\homework21\system;

class SecurityChecker
{

    public static function sanitize($data)
    {
        return htmlspecialchars(trim($data));
    }

    public static function checkStringLength($str, $minLength, $maxLength)
    {
        $len = mb_strlen($str, 'UTF-8');
        return $len >= $minLength && $len <= $maxLength;
    }

    public static function hasSpecialCharacters($str)
    {
        return preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $str);
    }
}