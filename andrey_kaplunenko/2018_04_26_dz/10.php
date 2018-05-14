<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/1/18
 * Time: 2:41 PM
 */
/*
 * 10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.
 * */

$interfaceArray = array(
    'description' => 'Задача 10. Функция, которая считает кол-во уникальных слов в тексте',
    'argCount' => '1',
    'func' => function ($inputString) {
        $wordsArray = explode(" ", $inputString);
        $wordsArrayLength = count($wordsArray);
        //циклом for пройдемся по массиву со словами и преобразуем все слова в нижний регистр:
        for($i=0; $i<$wordsArrayLength; $i++) {
            $wordsArray[$i] = strtolower($wordsArray[$i]);
        }
        $wordCounter = 0;
        $uniqWords = array();
        for($i=0; $i<$wordsArrayLength; $i++) {
            for($j=0; $j<$wordsArrayLength; $j++) {
                if($i!=$j) {
                    if($wordsArray[$i] == $wordsArray[$j]) {
                        $wordCounter++;
                    }
                }
            }
            if($wordCounter == 0) {
                $uniqWords[] = $wordsArray[$i];
            }
            $wordCounter = 0;
        }
        return (count($uniqWords));
    },

    //вспомогательная функция, которая будет формировать предложение с однократным или многократным вхождением слов:
    'paramGenerator' => function () {
        $words = ['street', 'car', 'apple', 'Apple', 'Linux', 'Miscrosoft', 'TV', 'window', 'PHPStorm', 'house', 'php-Академия'];
        $randSentenceArray = array();
        $cycles = rand(3, 6);
        for($i=0; $i<$cycles; $i++) {
            $randSentenceArray[] = $words[rand(0, 10)];
        }
        $randSentenceString = implode(" ", $randSentenceArray);
        //Преобразуем строку обратно в массив, но уже не будем разбивать по словам, а всю строку сделаем первым эдементом массива.
        //Это нужно для того чтобы не менять в index.php приемную часть - она ожидает список параметров именно в виде массива.
        $oneCellArray[0]=$randSentenceString;
        return ($oneCellArray);
    },
);

return ($interfaceArray);