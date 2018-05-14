<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/6/18
 * Time: 10:50 PM
 */
/*
 * 3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
 * */

$interfaceArray = array(
    'description' => 'Задача 3. Функция, удаляет в файле все слова длиннее N символов. В демо-режиме N=3 и является параметром по умолчанию, как и путь к файлу - 3.txt',
    'argCount' => '2',
    'func' => function ($maxLength=3, $filePath='3.txt', $unusedReservedArray=null) {
        if(file_exists($filePath)){
            $inText = file_get_contents($filePath);
            $inText = preg_replace("/\s{2,}/"," ", $inText); //подрежем повторяющиеся пробелы, а вот знаки препинания трогать не будем, пока.
            $inArray = explode(' ', $inText);
            foreach ($inArray as $key => $value) {
                if(mb_strlen((rtrim($value, ".,!?")), "UTF-8")>$maxLength){
                    unset($inArray[$key]);
                }
            }
            $outText = implode(' ', $inArray);
            if((boolean)(file_put_contents($filePath, $outText)) === FALSE) return (0);
            else return ('File '.$filePath.' successfully written! See 3.txt in same as this script directory');
        } else return (0);
    },

    //Вспомогательная функция, которая будет генерировать файл со словами разной длины и знаками препинания в конце слов:
    'paramGenerator' => function () {
        $filePath='3.txt';
        $vocabulary = array('я', 'яя', 'яяя', 'йййй', 'йцукен', 'йцукенг', 'йцукенгш', 'я!', 'яя?', 'яяя.', 'йййй,', 'йцукен!', 'йцукенг?', 'йцукенгш.');
        $outString = '';
        $maxIterations = rand(10,20);
        for($i=0; $i<$maxIterations; $i++) {
            $outString.=$vocabulary[rand(0,(count($vocabulary)-1))].' ';
        }
        $threeCellArray[0]=(int)3;
        $threeCellArray[1]='3.txt';
        $threeCellArray[2]=$outString;

        if((boolean)(file_put_contents($filePath, $outString)) === FALSE) return (0);
        else return ($threeCellArray);
    },
);

return ($interfaceArray);