<?php

declare(strict_types=1);

/*Створити абстрактний клас Figure з абстрактними методами area() та perimeter(). Створити нащадки цього класу: Rectangle та Circle, які будуть реалізовувати ці методи.

Кожен з класів повинен мати власні поля (наприклад, довжину, ширину для Rectangle та радіус для Circle) та конструктор, який буде ініціалізувати ці поля.

В конструкторах класів Rectangle та Circle можна додатково використовувати перевірку вхідних даних, щоб уникнути створення об'єктів з недопустимими значеннями.

У класах також можна додати методи, які будуть виводити інформацію про об'єкти: getArea() та getPerimeter() для обчислення та виведення значень площі та периметру відповідно.

В кінці домашнього завдання можна створити екземпляри класів Rectangle та Circle та вивести на екран їхні характеристики (наприклад, довжину, ширину та площу для Rectangle, радіус та площу для Circle).
*/

use homeworks\Circle;
use homeworks\Rectangle;

require 'vendor/autoload.php';


try {
    $rectangle = new Rectangle(7, 1);
    echo $rectangle->area() . PHP_EOL;
    echo $rectangle->perimeter() . PHP_EOL;
    echo $rectangle->getWidht() . PHP_EOL;
} catch (Exception $e) {
}

try {
    $circle = new Circle(3);
    echo $circle->getPerimeterCircle() . PHP_EOL;
    echo $circle->area() . PHP_EOL;
    echo $circle->perimeter() . PHP_EOL;
} catch (Exception $e) {
}

