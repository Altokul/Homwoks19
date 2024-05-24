<?php

/*
 * Написати консольну програму на PHP, яка робить кілька дій:

- запитує імʼя і виводить в консоль кілька рядків привітання по імені

- приймає кілька числових аргументів і виводить їх суму та середне арифметичне
 */


echo "Enter name: ";
$name = trim(fgets(STDIN));

echo "Hi " . $name . PHP_EOL;
echo "Welcome aboard the Titanic\n";
echo "You'll like it " . $name . PHP_EOL;

echo "Enter two numbers separated by a space\n and you will find out the number of the Lucky Ticket: ";
$number = explode(' ', trim(fgets(STDIN)));

$calculatedNumberSum = $number[0] + $number[1];
$calculatedNumberAverage = $number[0] / $number[1];

echo "Your the Lucky Ticket is: " . $calculatedNumberSum . PHP_EOL;
echo "Your discount is: " . ceil($calculatedNumberAverage) . PHP_EOL;

