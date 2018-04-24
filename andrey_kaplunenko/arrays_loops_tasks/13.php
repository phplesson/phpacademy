<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 9:45 PM
 */

/*
 * 13. Вывести таблицу умножения
 * */

$mult=0;
for ($i=1; $i<10; $i++) {
    printf("==============".PHP_EOL);
    for ($j = 1; $j < 10; $j++) {
        $mult = $i * $j;
        printf("|%2d x%2d = %-2d |" . PHP_EOL, $i, $j, $mult);
    }
}
printf("==============".PHP_EOL);