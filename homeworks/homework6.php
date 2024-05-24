<?php
declare(strict_types=1);


/*
 Написати програму на PHP, яка містить іменовану функцію, що приймає три аргументи:

два обовʼязкових типу int і третій необовʼязковий типу closure

Функція має повертати результат множення першого і другого аргументів, а в разі передачі третього аргументу (анонімної функції), перед return має викликати анонімну функції і передати в неї результат обчислення.

Реалізувати аноннімну функцію, яка виводить на екран переданий аргумент.
 */


function named_multiplication(int $num1, int $num2, ?Closure $callback = null): int
{
    $result = $num1 * $num2;

    if ($callback !== null && $callback instanceof Closure) {
        $callback($result);
    }

    return $result;

}


function printAnonimusResult($result): string
{
    return $result . PHP_EOL;
}

$element = printAnonimusResult(6);

$named = named_multiplication(6, 7, function ($result) {
    echo $result . PHP_EOL;
});




//echo $element .PHP_EOL;
//echo $named .PHP_EOL;




