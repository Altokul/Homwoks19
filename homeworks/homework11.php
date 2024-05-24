<?php
declare(strict_types=1);


// Написати програму на PHP, яка приймає з консолі аргументи, які введені, і записує їх в файл


function writeArgumentsToFile(): bool
{
    global $argv;

    if (count($argv) < 2) {
        return false;
    }

    $filename = $argv[1];

    $data = array_slice($argv, 2);


    if (!file_exists($filename)) {
        if (!touch($filename)) {
            return false;
        }

    }

    $file = fopen($filename, 'a');

    if (!$file) {
        return false;
    }

    foreach ($data as $item) {
        fwrite($file, $item . PHP_EOL);
    }

    fclose($file);

    return true;
}


writeArgumentsToFile();
