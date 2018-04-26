<?php
//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке.
// 1, 2, 3
// 4, 5, 6
// 7, 8, 9

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
$iteration = 1;
foreach ($numbers as $number) {

    if ($iteration == 3) {
        echo $number . PHP_EOL;
        $iteration = 1;
        continue;
    }

    $iteration++;
    echo $number . ',';
}
