<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 18:36
 * 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
 * текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
 */
date_default_timezone_set('UTC');

$day = date('l');

$array = ['Sunday', 'Monday', 'Tuesday', 'Wednesday','Thursday','Friday', 'Saturday'];

foreach ($array as $cycle){
    if($cycle == $day){
        echo $cycle.' - Текущий день'.PHP_EOL;
    }else
        echo $cycle. PHP_EOL;
}