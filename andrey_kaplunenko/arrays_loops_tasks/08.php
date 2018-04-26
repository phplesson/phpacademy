<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 8:56 PM
 */
/*
 * 8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '123456789'.
 * */

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$string = null;

foreach ($numbers as $numbers_value) {
    $string.=$numbers_value;
}

var_dump($string);