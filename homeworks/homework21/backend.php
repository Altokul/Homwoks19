<?php

require_once 'homeworks\homework21\system\SecurityChecker.php';
require_once 'homeworks\homework21\system\CookieManager.php.php';


$message = '';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['set_cookie'])) {
            $name = SecurityChecker::sanitize($_POST['name'] ?? '');
            $value = SecurityChecker::sanitize($_POST['value'] ?? '');
            $expiry = intval($_POST['expiry'] ?? 0);

            if (!SecurityChecker::checkStringLength($name, 1, 255) || !SecurityChecker::checkStringLength($value, 1, 255)) {
                throw new Exception("Ім'я та значення кукі мають бути від 1 до 255 символів.");
            }

            CookieManager::setCookie($name, $value, $expiry);
            $message = "Cookie '{$name}' створено.";

        } elseif (isset($_POST['delete_cookie'])) {
            $name = SecurityChecker::sanitize($_POST['name'] ?? '');

            CookieManager::deleteCookie($name);
            $message = "Cookie '{$name}' видалено.";

        } elseif (isset($_POST['verify_cookie'])) {
            $name = SecurityChecker::sanitize($_POST['name'] ?? '');
            $value = SecurityChecker::sanitize($_POST['value'] ?? '');
            $message = CookieManager::verifyCookieValue($name, $value) ? "Значення кукі '{$name}' підтверджено." : "Значення кукі '{$name}' не відповідає.";

        } elseif (isset($_POST['get_cookie'])) {
            $name = SecurityChecker::sanitize($_POST['name'] ?? '');

            $cookieValue = CookieManager::getCookie($name);
            $message = $cookieValue !== null ? "Значення кукі '{$name}': $cookieValue" : "Кукі '{$name}' не існує.";
        }
    }
} catch (Exception $e) {
    $message = 'Помилка: ' . $e->getMessage();
}







