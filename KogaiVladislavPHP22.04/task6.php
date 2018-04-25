<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 16:25
 *
 * 6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
 *   русские — в массив $ru.
 *   $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 *   $en = array('green', 'red','blue');
 *   $ru = array('зеленый', 'красный', 'голубой');
 */

$arr = [
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
];
$en = [];
$ru = [];
foreach ($arr as $itemIndex => $itemValue){
    array_push($en, $itemIndex);
    array_push($ru, $itemValue);
}

var_dump($en);
var_dump($ru);