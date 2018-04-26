<?php
//Вывести таблицу умножения с помощью двух циклов for.

for ($i = 2; $i < 10; $i++) {

    for ($j = 1; $j <= 10; $j++) {
        echo $i . ' * ' . $j . ' = ' . $i * $j;
        echo PHP_EOL;
    }

    echo PHP_EOL;
}


