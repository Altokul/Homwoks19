<?php

include 'CookieManager.php';

$cookieManager = new CookieManager();
$message = '';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['set_cookie'])) {
            $name = $_POST['name'] ?? '';
            $value = $_POST['value'] ?? '';
            $expiry = intval($_POST['expiry'] ?? 0);
            $cookieManager->setCookie($name, $value, $expiry);
            $message = "Cookie '{$name}' створено.";
        } elseif (isset($_POST['delete_cookie'])) {
            $name = $_POST['name'] ?? '';
            $cookieManager->deleteCookie($name);
            $message = "Cookie '{$name}' видалено.";
        } elseif (isset($_POST['verify_cookie'])) {
            $name = $_POST['name'] ?? '';
            $value = $_POST['value'] ?? '';
            $message = $cookieManager->verifyCookieValue($name, $value) ? "Значення кукі '{$name}' підтверджено." : "Значення кукі '{$name}' не відповідає.";
        } elseif (isset($_POST['get_cookie'])) {
            $name = $_POST['name'] ?? '';
            $cookieValue = $cookieManager->getCookie($name);
            $message = $cookieValue !== null ? "Значення кукі '{$name}': $cookieValue" : "Кукі '{$name}' не існує.";
        }
    }
} catch (Exception $e) {
    $message = 'Помилка: ' . $e->getMessage();
}





