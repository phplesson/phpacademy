<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 6:04 PM
 */
/*
 * 5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
 * цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'.
 * */

$arr = array ('Kolya' => 200, 'Vasiliy' => 300, 'Petya' => 4400);
foreach ($arr as $arrkey => $arrvalue) {
    printf('%10s\'s salary: $%.2f'.PHP_EOL, $arrkey, $arrvalue);
}