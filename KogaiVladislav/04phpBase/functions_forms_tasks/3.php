<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 17:00
 */
return [
    'text' => 'функция поиска топ3 длинных слов',
    'paramCount' => 1,
    'func' => function($text){
        $arr = array_flip(explode(' ', $text));

        foreach ($arr as $word => $length) {
            var_dump($word);
            $arr[$word] = mb_strlen($word);
        }

        asort($arr);

        return array_slice($arr, -3, 3);
    },
    'paramGenerator' => function(){
        $text = 'текст од два три школа университет обучение';
        return [$text];
    }
];