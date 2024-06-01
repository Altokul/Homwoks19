<?php


class CookieManager
{

    public function setCookie($name, $value, $expiry)
    {
        $name = $this->sanitizeInput($name);
        $value = $this->sanitizeInput($value);

        if ($this->isValidInput($name) && $this->isValidInput($value)) {
            setcookie($name, $value, time() + $expiry, "/");
        } else {
            throw new Exception("Недопустимі дані для створення кукі.");
        }
    }

    private function sanitizeInput($data)
    {
        return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
    }

    private function isValidInput($data)
    {
        return !empty($data);
    }

    public function deleteCookie($name)
    {
        $name = $this->sanitizeInput($name);

        if ($this->isValidInput($name)) {
            if (isset($_COOKIE[$name])) {
                setcookie($name, '', time() - 3600, "/");
                unset($_COOKIE[$name]);
            } else {
                throw new Exception("Кукі з ім'ям '{$name}' не існує.");
            }
        } else {
            throw new Exception("Недопустимі дані для видалення кукі.");
        }
    }

    public function getCookie($name)
    {
        $name = $this->sanitizeInput($name);

        if ($this->isValidInput($name)) {
            return $_COOKIE[$name] ?? null;
        } else {
            throw new Exception("Недопустиме ім'я кукі.");
        }
    }

    public function isCookieSet($name)
    {
        $name = $this->sanitizeInput($name);

        if ($this->isValidInput($name)) {
            return isset($_COOKIE[$name]);
        } else {
            throw new Exception("Недопустиме ім'я кукі.");
        }
    }

    public function verifyCookieValue($name, $value)
    {
        $name = $this->sanitizeInput($name);
        $value = $this->sanitizeInput($value);

        if ($this->isValidInput($name) && $this->isValidInput($value)) {
            return isset($_COOKIE[$name]) && $_COOKIE[$name] === $value;
        } else {
            throw new Exception("Недопустимі дані для перевірки кукі.");
        }
    }

    private function sanitize($data)
    {
        return htmlspecialchars(trim($data));
    }
}
