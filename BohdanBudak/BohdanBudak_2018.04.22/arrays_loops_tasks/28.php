<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:20
 */
/** Вывести таблицу умножения с помощью двух циклов for. */

for ($i = 1; $i <= 10; $i++) {

    for ($j = 1; $j <= 10 ; $j++) {
       $mult = $i * $j;
       echo "$i * $j = $mult" . PHP_EOL;
    }
}


