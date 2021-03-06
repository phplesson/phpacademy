<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/30/18
 * Time: 3:18 PM
 */
/*
 * 9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
 * */

$interfaceArray = array(
    'description' => 'Задача 9. Функция, которая переворачивает строку',
    'argCount' => '1',
    'func' => function ($workingString) {
        $workingArray = str_split($workingString);
        $workingString = "";
        $workingArrayLenght = count($workingArray);
        for($i=0; $i<$workingArrayLenght/2; $i++) {
            $temporaryVariable = $workingArray[$i];
            $workingArray[$i] = $workingArray[$workingArrayLenght-$i-1];
            $workingArray[$workingArrayLenght-$i-1] = $temporaryVariable;
        }
        foreach ($workingArray as $value) {
            $workingString.=$value;
        }
        return($workingString);
    },

    //Напишем вспомогательную функцию, которая будет возвращать выбранное случайным образом слово из словаря,
    //будем использовать его (слово) как тестовый ввод для функции flipString:
    'paramGenerator' => function () {
        $selectedWord = array();
        $myDict = ['hello', 'world', 'this is test string for flip function', 'beautiful weather', 'some charachters for test: \\ % \' #@'];
        $selectedWord[0] = $myDict[rand(0,4)];
        return($selectedWord);
    },
    'view' => 'view/view9.php'
);

return ($interfaceArray);