<?php
/**
 * Created by PhpStorm.
 * User: fiksa
 * Date: 04.05.2018
 * Time: 14:49
 */
include '11.html';
$text = $_POST['text'];
function stringMod($a)
{
    $workArr = explode (". ", trim($a));
    for ($i=0; $i<count($workArr); $i++){
        $workArr[$i]= mb_strtoupper(mb_substr($workArr[$i], 0, 1)). mb_substr($workArr[$i],1);
        //для киррилицы, для латиницы есть ф-я ucfirst
    }
    $result = implode(". ", $workArr);
    return $result;
}

echo stringMod($text);

//var_dump($_POST);


