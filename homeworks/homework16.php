<?php

declare(strict_types=1);

use homeworks\Another;
use homeworks\LogUser;

require_once 'MathFunction.php';
require_once 'Logger.php';
require_once 'TextFunction.php';
require_once 'Another.php';

/*
 * Створити кілька класів, які мають спільний функціонал, але не мають спільного предка, винести спільну логіку в трейт
 * і підключити його в кожному класі
 */

try {
    $obj = new LogUser();
    $obj->isNumber(2);
    $obj->matchLog(12);

    $obj->tekstLog(" ");

} catch (Exception $e) {
}

try {
    $obj = new Another();
    $obj->isNumber(5);
    $obj->matchLog(0);

} catch (Exception $e) {
}