<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/25/18
 * Time: 2:47 PM
 */
/*
 * 18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.
 * */

$week_days = array ('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
foreach ($week_days as $week_days_index => $week_days_value){
    if ($week_days_index >= 0 && $week_days_index <=4) {
        echo $week_days_value.", "; //выводим будни, после каждого дня ставим запятую
    } elseif ($week_days_index == 5) {
        echo "***".$week_days_value."***, "; //выводим субботу, жирным, после субботы ставим запятую
    } else {
        echo "***".$week_days_value."***".PHP_EOL; // выводим воскресенье жирным, после воскресенья запятую не ставим, вместо этого ставим конец строки
    }
}