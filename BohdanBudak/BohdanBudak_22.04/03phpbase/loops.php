<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 28.04.2018
 * Time: 17:53
 */
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

echo PHP_EOL;

exit();


/** Переделаем с for на while, do while */

$i = 1;
do {
    $simple = true;
    $j = 1;
    while($j < $i){
        if ($j == 1) {
            continue;
        }
        $div = (int)($i / $j);

        if (($i / $j) == $div) {
            $simple = false;
            break;
        }
        $j++;
    }

    if (!$simple) {
        continue;
    }
    $i++;
    echo "$i, ";
}while($i < 100);
//// Еще один вариант(вначале while, а потом do while)
$i = 1;
while ($i < 100) {
    $simple = true;
    $j = 1;
    do {
        if ($j == 1) {
            continue;
        }
        $div = (int)($i / $j);

        if (($i / $j) == $div) {
            $simple = false;
            break;
        }
        $j++;
    }
    while($j < $i);

    if (!$simple) {
        continue;
    }
    $i++;
    echo "$i, ";
}