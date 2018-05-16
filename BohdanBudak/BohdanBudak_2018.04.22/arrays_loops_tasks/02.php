<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:16
 */

/** Дан массив с элементами 1, 20, 15, 17, 24, 35.
 * С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
 */
$array = array (1, 20, 15, 17, 24, 35);
$result = 0;

foreach ($array as $itemValue){
    $result += $itemValue;
}

echo "result: " . $result;