<?php
declare(strict_types=1);

//2. Написати програму на PHP, яка приймає число і підносить його до ступеню

function construction(int $number, int $exponent): float
{
    return pow($number, $exponent);
}

$number = 4;
$exponent = 5;

echo .2 . phpconstruction($number, $exponent) . PHP_EOL;

//echo construction(4, 5) .PHP_EOL;