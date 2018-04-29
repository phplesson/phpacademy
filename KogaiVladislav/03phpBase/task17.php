
<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 17:53
 *
 * 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
 * месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
 */
date_default_timezone_set('UTC');

$month = date('F');
echo  $month.PHP_EOL;

$monthes = [
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

foreach ($monthes as $cycle){
    if($cycle == $month){
       echo $cycle.' - Текущий месяц'.PHP_EOL;
    } else
        echo $cycle.PHP_EOL;
}


