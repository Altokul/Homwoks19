<?php


class CookieManager
{

    public static function setCookie(string $name, string $value, int $expiry): void
    {
        setcookie($name, $value, time() + $expiry, "/");
    }


    private function isValidInput($data)
    {
        return !empty($data);
    }

    public static function deleteCookie(string $name): void
    {
        if (isset($_COOKIE[$name])) {
            setcookie($name, '', time() - 3600, "/");
            unset($_COOKIE[$name]);
        }
    }

    public static function getCookie(string $name): ?string
    {
        return $_COOKIE[$name] ?? null;
    }

    public static function isCookieSet(string $name): bool
    {
        return isset($_COOKIE[$name]);
    }

    public static function verifyCookieValue(string $name, string $value): bool
    {
        return isset($_COOKIE[$name]) && $_COOKIE[$name] === $value;
    }


}
