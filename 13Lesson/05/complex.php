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
        return is_array($a)
            && (count($a) === 2)
            && (isset($a['re']))
            && (isset($a['im']))
            && is_int($a['re'])
            && is_int($a['im']);
    },
    'getZero' => function() {
        return ['re' => 0, 'im' => 0];
    },
    'add' => function($link, $a, $b) {

        list($a, $b) = $link['checkParams']($link, $a, $b);

        return ['re' => $a['re'] + $b['re'], 'im' => $a['im'] + $b['im']];
    },
    'sub' => function($link, $a, $b) {

        list($a, $b) = $link['checkParams']($link, $a, $b);

        return ['re' => $a['re'] - $b['re'], 'im' => $a['im'] - $b['im']];
    },
    'getFromStr' => function($link, $str) {
        $data = [];
        if (preg_match_all('/^([+-]?\\d+)i([+-]?\\d+)$/', $str, $data)) {
            return ['re' => (int)$data[1][0], 'im' => (int)$data[2][0]];
        } else {
            trigger_error('bad param', E_USER_NOTICE);
            return $str;
        }
    }
];