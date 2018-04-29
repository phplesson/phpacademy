<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 19:44
 *
 * 28. Вывести таблицу умножения с помощью двух циклов for.
 */

for($a = 1; $a <= 9; $a++){
    for($b = 1; $b<= 9; $b++){
        echo $a. ' x '. $b. ' = '.$a*$b.PHP_EOL;
    }
    echo PHP_EOL;
}