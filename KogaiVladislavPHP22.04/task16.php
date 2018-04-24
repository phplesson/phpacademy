<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 17:50
 * 16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
 * выведите на экран столбец элементов массива, как показано на картинке.
 */

$array = [1,2,3,4,5,6,7,8,9];
$counter=1;

foreach ($array as $cycle){
    if($counter>3){
        echo PHP_EOL;
        $counter = 1;
    }
    echo $cycle.' ';
    $counter ++;
}