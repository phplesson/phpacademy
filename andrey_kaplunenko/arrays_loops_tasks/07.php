<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 8:48 PM
 */
/*
 * 7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
 * выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.
 * */

$numbers = [2, 5, 9, 15, 0, 4];
foreach ($numbers as $numers_value) {
    if ($numers_value > 3 && $numers_value <10) print_r((string)($numers_value).PHP_EOL);
}