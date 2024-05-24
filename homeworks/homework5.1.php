<?php
declare(strict_types=1);

/*1. Написати програму на PHP, яка містить користувацьку
функцію для обчислення площі кола та демонструє використання
передачі даних у функцію за допомогою параметрів.
*/

function calculateAreaCircle(int $radius): float
{
    $area = M_PI * $radius ** 2;
    return $area;
    //return M_PI * pow($radius, 2);
}

$radius = 3;

echo .1 . phpcalculateAreaCircle($radius) . PHP_EOL;

//echo ceil(calculateAreaCircle(3)) .PHP_EOL;


