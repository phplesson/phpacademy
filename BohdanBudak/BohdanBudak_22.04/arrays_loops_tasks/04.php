<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:16
 */
/**Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов. */

$arr = [
    'green' => 'зеленый',
    'red' => 'красный',
    'blue' => 'голубой'
];

echo 'Столбец ключей:'.PHP_EOL;
foreach ($arr as $itemIndex => $itemValue) {

    echo $itemIndex. PHP_EOL;
}

echo 'Столбец элементов:'.PHP_EOL;
foreach ($arr as $itemIndex => $itemValue) {

    echo $itemValue. PHP_EOL;
}