<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 15:54
 *
 *
 * <p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
 * С помощью цикла foreach найдите сумму квадратов элементов этого массива.
 * Результат запишите переменную $result.</p>
 */

$array = [26,17,136,12,79,15];
$result = 0;

foreach ($array as $cycle){
    $result = pow($cycle,2) + $result;
}

echo $result. PHP_EOL;