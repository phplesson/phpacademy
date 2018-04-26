<?php
//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

$weekDays = array(
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
);

$currentDay = date('l');

foreach ($weekDays as $weekDay) {

    if ($weekDay == $currentDay) {
        echo $weekDay . ' - THIS IS TODAY' . PHP_EOL;
        continue;
    }

    echo $weekDay . PHP_EOL;
}
