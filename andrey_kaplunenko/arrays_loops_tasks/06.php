<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 6:35 PM
 */
/*
 * 6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
 * $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 * $en = array('green', 'red','blue');
 * $ru = array('зеленый', 'красный', 'голубой');
 * */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();

foreach ($arr as $arrkey => $arrvalue) {
    $en[] = $arrkey;
    $ru[] = $arrvalue;
}

var_dump($en);
var_dump($ru);