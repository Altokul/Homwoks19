<?php
declare(strict_types=1);


// Написати іншу програму, яка виводить з файлу логу останні аргументи попередньої програми, які були введені.


function readArguments(string $filename): array|bool
{
    if (!file_exists($filename)) {
        return false;
    }

    $lines = file($filename);


    if (!empty($lines)) {
        return explode(' ', end($lines));
    } else {
        return [];
    }


}


$filename = 'test1.txt';

$lastArguments = readArguments($filename);

if (!empty($lastArguments)) {
    echo .1 . phpimplode(' ', $lastArguments) . PHP_EOL;
} else {
    return false;
}



//var_dump($lastArguments);


