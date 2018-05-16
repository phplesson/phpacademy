<?php
//Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.

$currentMonth = date('M');

$allMonths = array(
    'Jan',
    'Feb',
    'Mar',
    'Apr',
    'May',
    'Jun',
    'Jul',
    'Aug',
    'Sep',
    'Oct',
    'Nov',
    'Dec',
);

foreach ($allMonths as $month) {

    if ($month == $currentMonth) {
        echo $month . ' - THIS IS CURRENT MONTH' . PHP_EOL;
        continue;
    }

    echo $month . PHP_EOL;
}