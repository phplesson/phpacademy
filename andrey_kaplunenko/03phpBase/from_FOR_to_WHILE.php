<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/23/18
 * Time: 10:03 PM
 */
/* Задача: использовать циклы DO-WHILE и WHILE вместо FOR. В качестве исходного кода - алгоритм поиска простых чисел
 * состоящий из вложенных циклов FOR.
 */

//Исходный алгоритм на основе двух FOR:

for($i = 1; $i < 100; $i++) {

    $simple = true;

    for($j = 1; $j < $i; $j++) {
        if ($j == 1) {
            continue;
        }

        $div = (int)($i / $j);

        if (($i / $j) == $div) {
            $simple = false;
            break;
        }
    }

    if (!$simple) {
        continue;
    }

    echo "$i, ";
}

echo PHP_EOL.PHP_EOL;

//Модифицированный алгоритм на DO-WHILE и WHILE:

$i=1;
do {
    $simple = true;
    $j=1;
    while ($j<$i) {
        if ($j == 1) {
            $j++;
            continue;
        }

        $div = (int)($i/$j);

        if (($i/$j) == $div) {
            $simple = false;
            break;
        }
        $j++;
    }

    if (!$simple) {
        $i++;
        continue;
    }

    echo "$i, ";
    $i++;
} while ($i<100);

echo PHP_EOL.PHP_EOL;

//Еще один модифицированный алгоритм, гораздо более наглядный чем предыдущие два:

for ($i=1; $i<100; $i++) {
    $simplefactor=true; //предполагаем, что каждое проверяемое число является простым, и запускаем проверку
    for ($j = 1; $j < $i; $j++) {
        if ($j == 1) continue; //деление нацело на 1 нас не интересует, так как это тривиально
        //если нашелся хоть один целочисленный делитель (помимо 1), сбросить флаг что это число простое и прервать цикл:
        if ($i % $j == 0) {
            $simplefactor = false;
            break;
        }
    }
    if ($simplefactor) echo $i . ", "; //вывести на экран только числа с флагом simplefactor == true.
}