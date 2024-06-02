<?php

namespace homeworks\homework21\system;

class SecurityChecker
{

    public static function sanitize(string $data): string
    {
        return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
    }

    public static function checkStringLength(string $str, int $minLength, int $maxLength): bool
    {
        $len = mb_strlen($str, 'UTF-8');
        return $len >= $minLength && $len <= $maxLength;
    }

    public static function hasSpecialCharacters(string $str): bool
    {
        return (bool)preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $str);
    }
}