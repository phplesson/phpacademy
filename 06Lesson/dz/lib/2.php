<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.05.18
 * Time: 23:44
 */

return [
    'description' => 'function calculates md5 sum of given text',
    'func' => function($a) {
        return md5($a);
    },
    'paramGenerator' => function () {
        $symbols = 'qwertyuiop asdfghjkl zxcvbnm ';
        $maxIndex = strlen($symbols) - 1;
        
        $strLen = mt_rand(10,50);
        
        $str = '';
        
        while(strlen($str) < $strLen) {
            $str .= $symbols[mt_rand(0, $maxIndex)];
        }
        
        return [$str];
    },
    'argCount' => 1,
    'view' => 'view/md5sum.php',
];