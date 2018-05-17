<?php
/**
 * Created by PhpStorm.
 * User: fiksa
 * Date: 04.05.2018
 * Time: 14:49
 */
include '2.html';
$text = $_POST['text'];
function getTop3Words($a)
{
    $arr1 = explode(" ",$a);
    for ($i=0; $i<3; $i++){
        $tmpKey="";
        $tmpMax="";
        foreach ($arr1 as $key =>$value){
            $tmpRez= mb_strlen($value);
            if($tmpRez > $tmpMax){      // ищем максимально длинное слово и запоминаем его
                $tmpMax = $tmpRez;          //
                $tmpKey = $key;                  // запоминаем ключ
            }
        }
        $top[]= $arr1[$tmpKey];                      // создаем массив с длинными словами
        unset($arr1[$tmpKey]);                   // убираем текущее максимально длинное слово и ищем следущее
    }
    return $top;
}
//var_dump($_POST);
$top = getTop3Words($text);
echo '<h3> Три самых длинных слова:</h3><ul>';
foreach ($top as $word){
    echo "<li>{$word}</li>";
}
echo '</ul>';