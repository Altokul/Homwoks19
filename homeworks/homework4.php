<?php


$value = 10;

$color = match ($value) {
    1 => "green",
    2 => "red",
    3 => "blue",
    4 => "brown",
    5 => "violet",
    6 => "black",
    default => "white",
};


echo "Значення $value відповідає кольору: $color" . "\n";
/*
 echo "Введи число: \n";
 $value = trim(fgets(STDIN));
function getColorName($value) {
    switch ($value) {
        case 1:
            return "green";
        case 2:
            return "red";
        case 3:
            return "blue";
        case 4:
            return "brown";
        case 5:
            return "violet";
        case 6:
            return "black";
        default:
            return "white\n";
    }
}
echo "Назва кольору: ".getColorName($value) ."\n";



// For
    $colorMap = [
    1 => "green",
    2 => "red",
    3 => "blue",
    4 => "brown",
    5 => "violet",
    6 => "black"
];

for ($i = 1; $i <= 6; $i++) {
    if ($value == $i) {
        echo "Назва кольору: " .$colorMap[$i] ."\n";
        break;
    }
}
if (!isset($colorMap[$value])) {
    echo "Невідомий колір\n";
}


//While

    $colorMap = [
    1 => "green",
    2 => "red",
    3 => "blue",
    4 => "brown",
    5 => "violet",
    6 => "black"
];


$i = 1;

while ($i <= 6) {
    if ($value == $i) {
        echo "Назва кольору: " .$colorMap[$i] ."\n";;
        break;
    }
    $i++;
}

if (!isset($colorMap[$value])) {
    echo "Невідомий колір\n";
}
*/
