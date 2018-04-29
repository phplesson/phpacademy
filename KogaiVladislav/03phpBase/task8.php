<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 16:35
 * 8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
 *   '­1­2­3­4­5­6­7­8­9­'.
 *   Циклы while и for
 */

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($array as $cycle){
    $result .= '-'. $cycle;
}
//$result = implode('-',$array);
echo $result.'-'.PHP_EOL;