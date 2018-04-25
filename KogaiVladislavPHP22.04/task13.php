<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 17:14
 *
 * 13. Вывести таблицу умножения
 */
for($a = 1; $a <= 9; $a++){
    for($b = 1; $b<= 9; $b++){
        echo $a. ' x '. $b. ' = '.$a*$b.PHP_EOL;
    }
    echo PHP_EOL;
}