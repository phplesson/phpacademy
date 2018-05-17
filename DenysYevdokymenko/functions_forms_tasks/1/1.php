<?php
/**
 * Created by PhpStorm.
 * User: fiksa
 * Date: 04.05.2018
 * Time: 14:49
 */
include '1.html';
$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
function getCommonWords($a,$b)
{
    $arr1 = explode(" ",$a);
    $arr2 = explode(" ",$b);
    $result = array_intersect($arr1,$arr2);
    if ($result)
    {
        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }
    else
    {
        echo "Одиннаковых слов нет";
    }
}
//var_dump($_POST);
getCommonWords($text1,$text2);