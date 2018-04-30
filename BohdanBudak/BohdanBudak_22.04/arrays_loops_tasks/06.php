<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:16
 */
/** Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой');*/

$arr = [
    'green' => 'зеленый',
    'red' => 'красный',
    'blue' => 'голубой'
];

$en = array();
$ru = array();

foreach ($arr as $itemIndex => $itemValue){
    $en [] = $itemIndex;
    $ru [] = $itemValue;
}
var_dump($en);
var_dump($ru);