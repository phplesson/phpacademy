<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/25/18
 * Time: 1:16 PM
 */
/*
 * 17.Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
 * Текущий месяц должен храниться в переменной $month.
 * */

date_default_timezone_set('Europe/Kiev'); //надо установить часовой пояс для корректной работы date();
$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$current_month_numeric = 0; //текущий месяц в числовом представлении
$current_month_text = null; //текущий месяц в текстовом представлении

$current_month_numeric = (int) date('n');

foreach ($months as $month_index => $month_value) {
    if (($month_index+1) == $current_month_numeric) {
        echo "***".$month_value."***";
        $current_month_text = $month_value;
    } else {
        echo $month_value;
    }

    if (($month_index+1) != 12) {
        echo ", ";
    } else {
        echo PHP_EOL;
    }
}

echo "Current month is: ".$current_month_text.PHP_EOL;