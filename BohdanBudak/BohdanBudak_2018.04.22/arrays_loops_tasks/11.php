<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:18
 */
/** Выведите столбец четных чисел в промежутке от нуля до 100. */
$i = 1;
while ($i <= 100) {
    if($i % 2 == 0) {
        echo "$i " . PHP_EOL;
    } $i++;
}

