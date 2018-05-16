<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 16:33
 * 7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
 * выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.
 */

$array =[2, 5, 9, 15, 0, 4];

foreach ($array as $cycle){
    if($cycle > 3 && $cycle<10){
        echo $cycle. PHP_EOL;
    }
}