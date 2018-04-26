<?php
//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'.


$numbers = array(
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
);

$arrayKeys = array_keys($numbers);
$lastArrayKey = array_pop($arrayKeys);

foreach ($numbers as $key => $value) {
    $last = end($numbers);
    $resultString = $resultString . '-' . $value;
    if ($key == $lastArrayKey) {
        $resultString = $resultString . '-';
    }
}

echo $resultString . PHP_EOL;