<?php
declare(strict_types=1);

//3. Використайте функцію в двох варіантах: коли вона повертає нове число і змінює передане.


function construction(int $number, int $exponent): float
{
    return pow($number, $exponent);
}

$radius = 3;
$exponent = 5;
$power = 4;

$result = construction($radius, $exponent);
$result1 = construction($radius, $power);

echo $result . PHP_EOL;
echo $result1 . PHP_EOL;


function construction_modified(int &$number, int &$exponent): void
{
    $number = pow($number, $exponent);
    $exponent = pow($number, $exponent);

}

$number = 4;
$exponent = 6;
$number1 = 5;
$exponent1 = 7;

.3 . phpconstruction_modified($number, $exponent) . PHP_EOL;
.3 . phpconstruction_modified($number1, $exponent1) . PHP_EOL;

echo $number . " : " . $number1 . PHP_EOL;














