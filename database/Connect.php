<?php
class Connect
{
private static ?PDO $instance = null;

private function __construct()
{
}

public static function getInstance(): PDO
{
if (is_null(self::$instance)) {
$dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;
self::$instance = new PDO($dsn, DB_USER, DB_PASSWORD);
self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

return self::$instance;
}

public function __wakeup()
{
throw new Exception("Cannot unserialize singleton");
}

private function __clone()
{
}
}