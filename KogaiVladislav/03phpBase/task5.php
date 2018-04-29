<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 16:15
 *
 * 5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
 *    цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
 *    долларов.'
 */

$arr =[
    'Коля' => '200',
    'Вася' => '300',
    'Петя' => '400'
];

foreach ($arr as $itemIndex => $itemValue){
    printf('%8s - зарплата %2s долларов', $itemIndex, (is_array($itemValue)? 'array' : $itemValue));
    echo PHP_EOL;
}