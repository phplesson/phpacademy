<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:19
 */
/** Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

$counter=0;
foreach ($arr as $itemValue) {
    $counter++;
    echo $itemValue;
    if ($counter == 3) {
        echo PHP_EOL;
        $counter=0;
    } else {
        echo ",";
    }
}