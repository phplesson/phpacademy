<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 20:53
 * <p>10. Написать функцию, которая считает количество уникальных слов в тексте.
 * Слова разделяются пробелами. Текст должен вводиться с формы.</p>

 */
return [
    'text' => 'Функция подсчета уникальных слов',
    'paramCount' => 1,
    'func' => function($a){

        $punctuation = ['.', ',', ';', ':', '–', '- ', '!', '?', '"'];
        $aFiltered = str_replace($punctuation, ' ', $a);

        $arrA = explode(' ', $aFiltered);

        $arrA = array_filter($arrA);

        $arrA = array_unique($arrA);

        return count($arrA);
    },
    'paramGenerator' => function(){
        $text = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';
        return [$text];
    }
];