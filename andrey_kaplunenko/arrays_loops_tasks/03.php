<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 3:13 PM
 */
/*
 * 3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива.
 * Результат запишите переменную $result.
 * */

$numbers = [26, 17, 136, 12, 79, 15];
$result = 0;

foreach ($numbers as $value) {
    $result += $value**2;
}

printf ('%d'.PHP_EOL, $result);