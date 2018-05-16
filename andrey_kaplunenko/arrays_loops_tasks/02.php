<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 3:07 PM
 */
/*
 * 2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
 * */

$numbers = [1, 20, 15, 17, 24, 35];
$result = 0;

foreach ($numbers as $value) {
    $result += $value;
}

printf ('%d'.PHP_EOL, $result);