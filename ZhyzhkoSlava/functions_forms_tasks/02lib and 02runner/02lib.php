<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.04.18
 * Time: 10:55
 */

return [
    'text' => 'функция которая складывает два числа',
    'paramCount' => 2,
    'func' => function($a, $b) {return $a + $b;},
    'paramGenerator' => function() {
        return [rand(1,10), rand(1,10)];},
];
return [
    'text' => 'функция которая находит файлы в директории',
    'paramCount' => 2,
    'func' => function($a, $b) {return $a + $b;},
    'paramGenerator' => function() {
        return [rand(1,10), rand(1,10)];},
];
