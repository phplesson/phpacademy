<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/25/18
 * Time: 10:26 AM
 */
/*
 * 16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран
 * столбец элементов массива, как показано на картинке.
 * 1, 2, 3
 * 4, 5, 6
 * 7, 8, 9
 * */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$counter=0;
foreach ($arr as $arr_value) {
    $counter++;
    echo $arr_value;
    if ($counter == 3) {
        echo PHP_EOL;
        $counter=0;
    } else {
        echo ", ";
    }
}