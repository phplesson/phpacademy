<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 21:22
 * p>8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
Реализовать проверку на наличие в тексте запрещенных слов, матов. При наличии таких слов - выводить сообщение
 * "Некорректный комментарий". Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</p>

 */
return [
    'text' => 'Функция добавления комментариев с фильтрами от тегов и матов',
    'paramCount' => 1,
    'func' => function($string){
        $delimiters = '/\W+/u';
        $parts = preg_split($delimiters, $string, -1, PREG_SPLIT_NO_EMPTY);

        $parts = array_map('mb_strtolower', $parts);

        $result = array_intersect($parts, getForbiddenWords());
        return !count($result);
    },
    'paramGenerator' => function(){
        $text = 'NONE';
        return [$text];
    }
];

