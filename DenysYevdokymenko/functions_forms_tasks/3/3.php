<?php
/**
 * Created by PhpStorm.
 * User: fiksa
 * Date: 07.05.2018
 * Time: 17:24
 */



function sortByLenght()
{
    if ($_POST) {
        $text = $_POST['text'];
        $n = $_POST['n'];
        $f = fopen('Text.txt', 'w');
        fwrite($f, $text . PHP_EOL);
        fclose($f);
    }
    $file = file_get_contents('Text.txt');
    $arr = (explode(" ", $file));

    foreach ($arr as $key => $value) {
        if (mb_strlen($value) > $n) {
            unset($arr[$key]);
        }
    }
return $arr;
}
file_put_contents('newText.txt', implode(" ",sortByLenght()));

echo file_get_contents('newText.txt');

