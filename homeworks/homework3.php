<?php


$integer = 7;

$string = "php";

$boolean = true;

$array = [1, 2, 3];

$float = 17.9;

echo "\nЦіле число і рядок:";
echo "\nСуворе порівняння: ";
var_dump($integer === $string);
echo "Не суворе порівняння: ";
var_dump($integer == $string);

echo "\nЦіле число і логічне значення:";
echo "\nСуворе порівняння: ";
var_dump($integer === $boolean);
echo "Не суворе порівняння: ";
var_dump($integer == $boolean);

echo "\nЛогічне значення і масив:";
echo "\nСуворе порівняння: ";
var_dump($boolean !== $array);
echo "Не суворе порівняння: ";
var_dump($boolean != $array);


echo "\nПлаваюче число і рядок:";
echo "\nСуворе порівняння: ";
var_dump($float === $string);
echo "Не суворе порівняння: ";
var_dump($float == $string);

echo "\nПлаваюче число і масив:";
echo "\nСуворе порівняння: ";
var_dump($float === $array);
echo "Не суворе порівняння: ";
var_dump($float == $array);
