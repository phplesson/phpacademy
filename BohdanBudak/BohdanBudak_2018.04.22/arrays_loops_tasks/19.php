<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:20
 */
/** Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day. */

date_default_timezone_set('UTC');
$day = date('l');
$days = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
];

foreach ($days as $itemValue){

    if ($itemValue == $day){
        echo "'<i>'Текущий день'</i>' - $itemValue".PHP_EOL;
    } else {
        echo $itemValue . PHP_EOL;
    }
}