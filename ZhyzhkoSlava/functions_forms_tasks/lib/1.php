<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.05.18
 * Time: 23:44
 */

return [
    'description' => 'function show all files in given directory',
    'func' => function($a, $b) {
        return $a + $b;
    },
    'paramGenerator' => function () {
        return [mt_rand(1,1000), mt_rand(1, 1000)];
    },
    'argCount' => 2,
    'view' => 'view/sum.php',
];