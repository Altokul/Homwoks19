<?php
declare(strict_types=1);

//Виведіть на екран всі числа від 1 до 10 використовуючи цикл while


$number = 1;

while ($number < 11) {

    echo $number . " ";
    $number++;

}

//Обчисліть факторіал числа 5 використовуючи цикл while.


$number = 5;
$faktorial = 1;


while ($number > 1) {
    $faktorial *= $number;
    $number--;

}

echo PHP_EOL . $faktorial . PHP_EOL;


//Виведіть на екран всі парні числа від 1 до 20 використовуючи цикл while.


$number = 1;

while ($number < 20) {
    if ($number % 2 === 0) {
        echo $number . " ";
    }

    $number++;
}

echo $number . " " . PHP_EOL;
