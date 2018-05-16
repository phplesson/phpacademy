<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:20
 */
/** Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным. */

$days = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
];
foreach ($days as $itemValue) {
    if ($itemValue == 'Saturday' || $itemValue == 'Sunday') {
        echo "'<b>'Weekend'</b>' - " . $itemValue . PHP_EOL;
    } echo $itemValue . PHP_EOL;

}