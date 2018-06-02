<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 11:26
 */

return [
    'checkParams' => function($link) {
        trigger_error('this function should be implemented', E_USER_ERROR);
        return null;    
    },
    'check' => function($link, $a) {
        return is_int($a);
    },
    'getZero' => function($link) {
        return 0;
    },
    'add' => function($link, $a, $b) {

        list($a, $b) = $link['checkParams']($link, $a, $b);
    
        return $a + $b;
    },
    'sub' => function($link, $a, $b) {

        list($a, $b) = $link['checkParams']($link, $a, $b);
    
        return $a - $b;
    },
    'getFromStr' => function($link, $str) {
        if (preg_match('/^[+-]?\\d+$/', $str, $data)) {
            return (int)$str;
        } else {
            trigger_error('bad param', E_USER_NOTICE);
            return $str;
        }
    }
];