<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:16
 */
/**Дан массив с элементами 26, 17, 136, 12, 79, 15.
 * С помощью цикла foreach найдите сумму квадратов элементов этого массива.
 * Результат запишите переменную $result. */


$array = array(26, 17, 136, 12, 79, 15);
$result = 0;

foreach ($array as $itemValue){
    $result += pow($itemValue,2);
}
echo "result: " . $result;