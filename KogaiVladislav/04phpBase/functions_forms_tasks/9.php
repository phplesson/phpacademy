<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 21:15
 * <p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
 * Ввод текста реализовать с помощью формы.</p>

 */
return [
    'text' => 'Функция возвращающая строку в обратном порядке',
    'paramCount' => 1,
    'func' => function($text){
        $row = strrev($text);

        return $row;
    },
    'paramGenerator' => function(){
        $text = 'abcde';
        return [$text];
    }
];