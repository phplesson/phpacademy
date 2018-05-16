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
    'func' => function($text){
        $arr = explode(". ",$text);
        foreach ($arr as $key => $sent){
            $arr[$key]= iconv('windows-1251','utf-8',ucfirst(iconv('utf-8','windows-1251',$arr[$key])));
        }
        return $arr;
    },
    'paramGenerator' => function(){
        $text = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';
        return [$text];
    }
];