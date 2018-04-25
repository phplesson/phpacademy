<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 17:47
 * 15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
 *   элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
 * 5, 19, 13, 0, 10
 */

$array =[4,2,5,19,13,0,10];
$count = 0;

foreach ($array as $cycle){
    $count++;
}
echo $count.PHP_EOL;

//есть фукнция count($array);