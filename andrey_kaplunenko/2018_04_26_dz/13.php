<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/6/18
 * Time: 8:30 AM
 */
/*
 * 13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня'
 * Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите в виде списка в порядке уменьшения количества.
 * */

function wordCount($inString) {
    //удалим возможные лишние пробелы
    $inString = trim($inString); //удалим пробелы с начала и конца строки.
    $inString = preg_replace("/\s{2,}/"," ", $inString); //удалим повторяющиеся пробелы
    //ф-ей explode разобьем строку на массив
    $processingArray = explode(' ', $inString);
    //удалим дублирующиеся элементы массива, и получим таким образом массив уникальных значений
    $uniqArray = array_unique($processingArray, SORT_STRING);
    //теперь, так как массив uniqArray имеет уникальные значения, перевернем его так, чтобы значения стали ключами, а ключи значениями, потом будем в них хранить кол-во вхождений.
    $uniqArray = array_flip($uniqArray);
    //далее вложенным циклом сравним $uniqArrayKey со значениями массива $processingArray, и в переменной counter посчитаем кол-во совпадений
    //потом, присвоим значение переменной counter соответствующему элементу массива $uniqArray.
    //Таким образом у нас будет массив вида "слово" -> кол-во вхождений
    foreach ($uniqArray as $uniqArrayKey => &$uniqArrayValue) {
        $counter = 0;
        for($i=0; $i<count($processingArray); $i++) {
            if($uniqArrayKey == $processingArray[$i]) $counter+=1;
        }
        $uniqArrayValue = $counter;
    }
    arsort($uniqArray, SORT_NUMERIC);
    $outString = print_r($uniqArray, true);
    return($outString);
}

$wordCount_Alias = 'wordCount';

//Вспомогательная функция, которая будет составлять строку из случайного количества заданных слов.
if (!function_exists('aLotOfWords')) {
    function aLotOfWords()
    {
        $vocabulary = array('яблоко', 'черешня', 'вишня', 'груша', 'слива', 'малина', 'земляника');
        $outString = '';
        $maxIterations = rand(10,20);
        for($i=0; $i<$maxIterations; $i++) {
            $outString.=$vocabulary[rand(0,6)].' ';
        }
        $oneCellArray[0]=$outString;
        return ($oneCellArray);
    }
}

$aLotOfWords_Alias = 'aLotOfWords';

$interfaceArray = array(
    'text' => 'Задача 13. Функция, подсчитывает количество вхождений слова в строку. Возвращает список вхождений в порядке убывания',
    'paramCount' => '1',
    'func' => $wordCount_Alias,
    'paramGenerator' => $aLotOfWords_Alias,
);

return ($interfaceArray);