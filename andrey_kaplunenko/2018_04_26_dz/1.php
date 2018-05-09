<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/6/18
 * Time: 2:22 PM
 */
/*
 * 1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
 * Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
 * */

function getCommonWords($string1, $string2) {
    $string1 = trim($string1); //удалим пробелы с начала и конца строки.
    $workingArray1 = preg_split("/[\s.,?!]+/", $string1); //разобьем по признаку пробел||.||,||?||!
    //последний элемент массива обычно пуст, так как точка стоит в конце абзаца и после нее ничего нет.
    //однако на всякий случай пройдемся по всем элементам и удалим пустые, нам ведь не жалко...
    foreach ($workingArray1 as $key1 => $value1){
        if(empty($value1)) unset($workingArray1[$key1]);
    }
    foreach ($workingArray1 as &$value1){ //здесь передача value по ссылке так как мы хотим менять value внутри конструкции foreach
        $value1 = trim($value1);          //подрежем пробелы в начале и в конце подстроки, если таковые вдруг затесались
    }

    $string2 = trim($string2); //удалим пробелы с начала и конца строки.
    $workingArray2 = preg_split("/[\s.,?!]+/", $string2); //разобьем по признаку пробел||.||,||?||!
    //последний элемент массива обычно пуст, так как точка стоит в конце абзаца и после нее ничего нет.
    //однако на всякий случай пройдемся по всем элементам и удалим пустые, нам ведь не жалко...
    foreach ($workingArray2 as $key2 => $value2){
        if(empty($value2)) unset($workingArray2[$key2]);
    }
    foreach ($workingArray2 as &$value2){ //здесь передача value по ссылке так как мы хотим менять value внутри конструкции foreach
        $value2 = trim($value2);          //подрежем пробелы в начале и в конце подстроки, если таковые вдруг затесались
    }

    //удалим дублирующиеся элементы массива, и получим таким образом массив уникальных значений
    $uniqArray1 = array_unique($workingArray1, SORT_STRING);

    //удалим дублирующиеся элементы массива, и получим таким образом массив уникальных значений
    $uniqArray2 = array_unique($workingArray2, SORT_STRING);

    //на данном этапе мы имеем два массива $uniqArray1 и $uniqArray2, в которых хранятся уникальные неповторяющиеся слова первой и второй строк соотв.

    $commonWords = array_intersect($uniqArray1, $uniqArray2); //с помощью ф-и array_intersect найдем общие слова

    $outString = print_r($commonWords, true); //массив представим в виде строки

    return($outString);
}

$getCommonWords_Alias = 'getCommonWords';

//Вспомогательная функция, которая будет генерировать две строки из случайного количества заданных слов.
if (!function_exists('aLotOfWordsTwoStrings')) {
    function aLotOfWordsTwoStrings()
    {
        $vocabulary = array('яблоко', 'яблоко?', 'яблоко,', 'яблоко !', 'черешня', 'вишня', 'груша', 'слива', 'малина', 'земляника');
        $outString1 = '';
        $maxIterations = rand(5,10);
        for($i=0; $i<$maxIterations; $i++) {
            $outString1.=$vocabulary[rand(0,9)].' ';
        }
        $twoCellArray[0]=$outString1;

        $outString2 = '';
        $maxIterations = rand(5,10);
        for($i=0; $i<$maxIterations; $i++) {
            $outString2.=$vocabulary[rand(0,9)].' ';
        }
        $twoCellArray[1]=$outString2;
        return ($twoCellArray);
    }
}

$aLotOfWordsTwoStrings_Alias = 'aLotOfWordsTwoStrings';

$interfaceArray = array(
    'description' => 'Задача 1. Функция возвращает слова, которые есть и в 1 и во 2 textarea.',
    'argCount' => '2',
    'func' => $getCommonWords_Alias,
    'paramGenerator' => $aLotOfWordsTwoStrings_Alias,
    'view' => 'view/view1.php',
);

return ($interfaceArray);