<?php

 return [
 'text' => 'Функция при отправке формы должена выдавать только те слова, которые есть и в первом и во втором поле ввода.',
 'paramCount' => '2',
 'func' => function($a, $b){
        $a=explode(' ',$a);
        $b=explode(' ',$b);
        $res = array_intersect($a, $b);
        $result = implode(",", $res);
        return $result;
    },
 'paramGenerator' => function() {
     },
 'view' => 'view/dellen.php',
];
