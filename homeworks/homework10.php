<?php
declare(strict_types=1);


//Написати програму на PHP, яка використовує генератор для створення послідовності чисел Фібоначчі, які менші за певне значення, передане в функцію.

function genereteNumbersFibonacci(int $num1): Generator
{
    $startNumber = 0;
    $nextNumber = 1;

    while ($nextNumber < $num1) {
        yield $nextNumber;

        $next = $startNumber + $nextNumber;
        $startNumber = $nextNumber;
        $nextNumber = $next;

    }

}

$generetNumbers = genereteNumbersFibonacci(99);

foreach ($generetNumbers as $number) {

    echo $number . "  " . PHP_EOL;
}