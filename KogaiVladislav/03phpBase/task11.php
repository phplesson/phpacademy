<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 17:01
 * 11. Выведите столбец четных чисел в промежутке от нуля до 100
 */

$counter = 1;

while($counter<=100){
    if($counter%2 == 0){
        echo $counter.PHP_EOL;
    }
    $counter++;
}