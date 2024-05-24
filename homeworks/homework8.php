<?php
declare(strict_types=1);


//Створити пустий масив і заповнити його випадковими значеннями. (створити функцію як на уроці)

function generateRandomArray(int $length = 20, int $min = 1, int $max = 17): array
{
    $randomArray = [];
    for ($i = 0; $i < $length; $i++) {
        $randomArray[] = rand($min, $max);
    }
    return $randomArray;
}

$newArray = generateRandomArray();

var_dump($newArray);


//Порахувати суму елементів масиву.

//$newArray = generateRandomArray();

$sumArray = 0;

foreach ($newArray as $value) {
    $sumArray += $value;
}

var_dump($sumArray);


//Порахувати добуток всіх елементів масиву.

//$newArray = generateRandomArray();

$multiplication = 1;

foreach ($newArray as $value) {
    $multiplication *= $value;
}

var_dump($multiplication);


//Перевірте скільки раз число 5 зустрічається у вас в масиві.

//$newArray = generateRandomArray();

$howManyAppears = 0;

foreach ($newArray as $value) {
    if ($value === 5) {
        $howManyAppears++;
    }
}

var_dump($howManyAppears);


//Виведіть на екран тільки числа, які націло діляться на 3


$newArray = generateRandomArray();

foreach ($newArray as $numbersDivisible) {
    if ($numbersDivisible % 3 === 0) {
        echo $numbersDivisible . " " . PHP_EOL;
    }
}