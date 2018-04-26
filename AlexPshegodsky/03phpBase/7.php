<?php
//Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.

$numbers = array(
    2,
    5,
    9,
    15,
    0,
    4,
);

foreach ($numbers as $number) {

    if ($number > 3 && $number < 10) {
        echo $number . PHP_EOL;
    }
}