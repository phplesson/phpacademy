<?php
/**
 * Created by PhpStorm.
 * User: fiksa
 * Date: 04.05.2018
 * Time: 14:49
 */
include '13.html';
$string = $_POST['text'];
function countFruits($a)
{
    $workArr = explode (" ", trim($a));         //перевод строки в массив
    $result = array_count_values($workArr);             //подсчет уникальных значений
    asort($result);                              //сортировка по значению
    return array_reverse($result);                      //постановка максимального значения в начало массива
}

echo '<h3> Количество слов по убыванию: </h3><ul>';      //вывод списком значений и количество попаданий
foreach (countFruits($string) as $key => $count){
    echo "<li>{$key} "."-"." {$count} </li>";
}
echo '</ul>';

