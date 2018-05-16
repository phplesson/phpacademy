<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 15:58
 *
 * <p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
 *   помощью второго — столбец элементов.</p>
 *   $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 */

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
foreach ($arr as $itemValue) {

    echo $itemValue. PHP_EOL;
}