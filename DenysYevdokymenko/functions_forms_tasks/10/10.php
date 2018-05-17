<?php
/**
 * Created by PhpStorm.
 * User: fiksa
 * Date: 04.05.2018
 * Time: 14:49
 */
include '10.html';
$text = $_POST['text'];
function countUnique($a)
{
    $workArr = explode (" ", trim($a));     //перевод строки в массив
    $workArr = array_unique($workArr);               //поиск уникальных слов
    $count = count($workArr);                           // количество уникальных слов
    return $count;
}

echo "В строке \"{$text}\" имеется ".countUnique($text)." уникальных слов(а)";
//var_dump($_POST);


