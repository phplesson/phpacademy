<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:16
 */
/**
 *Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.
 */
$arr = [2, 5, 9, 15, 0, 4];

foreach ($arr as $itemValue) {
    if ($itemValue > 3 && $itemValue < 10) {
        echo($itemValue . PHP_EOL);
    }
}