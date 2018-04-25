<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 15:52
 *
 *
 * <p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
 * С помощью цикла foreach найдите сумму элементов этого массива.
 * Запишите ее в переменную $result.</p>
 */

$array = [1,20,15,17,24,35];
$result = 0;

foreach ($array as $cycle){
    $result = $cycle + $result;
}

echo $result. PHP_EOL;