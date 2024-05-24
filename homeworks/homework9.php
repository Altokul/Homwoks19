<?php
declare(strict_types=1);


//Написати програму на PHP, яка використовує генератор для створення послідовності чисел Фібоначчі, які менші за певне значення, передане в функцію.


$array = [];

$randomValuesCount = rand(1, 15);

for ($i = 0; $i < $randomValuesCount; $i++) {
    $randomNumberArray = rand(5, 20);
    array_push($array, $randomNumberArray);
}

$arrayRandom = $array;

var_dump($arrayRandom);


//- знаходить найбільший та найменший елемент масиву


$min = min($arrayRandom);
$max = max($arrayRandom);


var_dump($min, $max);


//- сортує масив та виводить його у відсортованому вигляді


sort($arrayRandom);

foreach ($arrayRandom as $value) {
    echo $value . " " . PHP_EOL;
}

echo PHP_EOL;

rsort($arrayRandom);

foreach ($arrayRandom as $value) {
    echo $value . " " . PHP_EOL;
}