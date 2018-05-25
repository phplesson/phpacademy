<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 17:00
 * Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму.
 * Проверить работу на кириллических строках - найти ошибку, найти решение.
 */
return [
    'text' => 'функция удаления слов длина которых выше N символов',
    'paramCount' => 2,
    'func' => function($a,$n){
        $delimiters = '/(\W+)/u';
        $parts = preg_split($delimiters, $a, -1, PREG_SPLIT_DELIM_CAPTURE);

        $isLongWord = function ($s) use ($n, $delimiters) {
            return preg_match($delimiters, $s) || mb_strlen($s) <= $n;
        };
        $parts = array_filter($parts, $isLongWord);

        return join($parts);
    },
    'paramGenerator' => function(){
        $text = 'текст од два три школа университет университет обучение';
        return [$text];
    }
];