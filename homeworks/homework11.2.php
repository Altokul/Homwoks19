<?php
declare(strict_types=1);


function getArgumentsConsole(): array
{
    global $argv;

    if (count($argv) < 2 || empty($argv[1])) {
        return [];
    }

    $filename = $argv[1];
    $data = array_slice($argv, 2);

    return [$filename, $data];
}

function writeArgumentsToFile(array $args): bool
{
    list($filename, $data) = $args;

    if (!file_exists($filename)) {
        if (!touch($filename)) {
            return false;
        }
        return true;
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


$args = getArgumentsConsole();


writeArgumentsToFile($args);