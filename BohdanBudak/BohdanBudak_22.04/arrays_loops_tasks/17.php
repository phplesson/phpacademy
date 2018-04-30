<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:19
 */
/** Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month. */
date_default_timezone_set('UTC');
$month = date('F');
$months = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
];

foreach ($months as $itemValue){

    if ($itemValue == $month){
        echo "'<b>'Текущий месяц'</b>' - $itemValue".PHP_EOL;
    } else {
        echo $itemValue . PHP_EOL;
    }
}