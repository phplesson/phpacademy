<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 9:24 PM
 */
/*
 * 11. Выведите столбец четных чисел в промежутке от нуля до 100.
 * */

$i=0;
while ($i<=100) {
    if ($i%2==0) echo $i.PHP_EOL;
    $i++;
}