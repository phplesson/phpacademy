<?php
//Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.

$numbers = array(
    26,
    17,
    136,
    12,
    79,
    15,
);

$result = 0;

foreach ($numbers as $number) {

    $square = $number * $number;

    $result = $result + $square;

}

echo $result . PHP_EOL;