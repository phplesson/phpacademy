<?php
/**
 * Created by PhpStorm.
 * User: fiksa
 * Date: 04.05.2018
 * Time: 14:49
 */
include '12.html';
$text = $_POST['text'];
function stringMod2($a)
{
    $workArr = explode (". ", trim($a));                    //перевод строки к массиву
    $result = implode(". ", array_reverse($workArr));           //сортировка в обратном порядке и склеивание в строку
    return $result;
}

echo stringMod2($text).'.';

//var_dump($_POST);


