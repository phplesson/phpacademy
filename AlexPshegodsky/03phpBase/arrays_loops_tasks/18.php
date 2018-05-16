<?php
//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.

$weekDays = array(
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
);

foreach ($weekDays as $weekDay) {

    if ($weekDay == 'Sunday' || $weekDay == 'Saturday') {
        echo $weekDay . ' - THIS IS WEEKEND' . PHP_EOL;
        continue;
    }

    echo $weekDay . PHP_EOL;

}