
<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 18:10
 * 18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
 *   выходные дни следует вывести жирным.
 */

$array = ['Sunday', 'Monday', 'Tuesday', 'Wednesday','Thursday','Friday', 'Saturday'];

foreach ($array as $cycle){
    if($cycle == 'Saturday' or $cycle == 'Sunday'){
        echo $cycle.' - выходной день'.PHP_EOL;
    }else
        echo $cycle. PHP_EOL;
}