<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 18:32
 * <p>11. Написать функцию, которая в качестве аргумента принимает строку,
 * и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.<br>

 */
return [
    'text' => 'Функция превращает начало предложения добвляя большую букву',
    'paramCount' => 1,
    'func' => function($a){

        $sentences = explode('.', $a);

        foreach ($sentences as &$sentence) {
            $sentenceTrimmed = ltrim($sentence);
            if (mb_strlen($sentence) && mb_strlen($sentenceTrimmed)) {
                if (mb_strlen($sentence) && mb_strlen($sentenceTrimmed)) {
                    $spaces = str_repeat(' ', mb_strlen($sentence) - mb_strlen($sentenceTrimmed));
                } else {
                    $spaces = '';
                }
                $sentence = $spaces . mb_strtoupper(mb_substr($sentenceTrimmed, 0, 1)) . mb_substr($sentenceTrimmed, 1);
            }
        }

        return implode('.', $sentences);
    },
    'paramGenerator' => function(){
        $text = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';
        return [$text];
    }
];