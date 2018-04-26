<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 4:03 PM
 */
/*
 * 4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
 * помощью второго — столбец элементов.
 * $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 * */

$arr = array('green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой');

foreach ($arr as $arrindex => $arrvalue) {
    echo $arrindex.PHP_EOL;
}

echo PHP_EOL;

foreach ($arr as $arrindex => $arrvalue) {
    echo $arrvalue.PHP_EOL;
}