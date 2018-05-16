<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/25/18
 * Time: 8:32 AM
 */
/*
 * 15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива.
 * Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.
 * */

$arr = [4, 2, 5, 19, 13, 0, 10];
$count = 0;

foreach ($arr as $arr_value) {
    $count+=1;
}

echo "Number of elements = ".$count.PHP_EOL;