<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:16
 */
/** Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
долларов.'. */

$arr =[
    'Коля' => '200',
    'Вася' => '300',
    'Петя' => '400'
];

foreach ($arr as $itemIndex => $itemValue){
    printf('%10s - зарплата %3s долларов',
        $itemIndex,
        (is_array($itemValue)? 'array' : $itemValue));
    echo PHP_EOL;
}