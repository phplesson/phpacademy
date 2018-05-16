<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/25/18
 * Time: 4:58 PM
 */
/*
 * 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
 * Текущий день должен храниться в переменной $day.
 * */

date_default_timezone_set('Europe/Kiev'); //надо установить часовой пояс для корректной работы date();
$current_day_numeric = (int) date('w');
$week_days = array ('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
$day='';

foreach ($week_days as $week_days_index => $week_days_value) {
    if ($week_days_index == ($current_day_numeric-1)) {
        echo "___".$week_days_value."___";
        $day = $week_days_value;
    } else {
        echo $week_days_value;
    }

    if ($week_days_index == 6) { //у нас массив от 0 до 6, поэтому 6 это воскресенье, после воскресенья запятую не ставим
        echo PHP_EOL;
    } else {
        echo ", ";
    }
}

var_dump($day);