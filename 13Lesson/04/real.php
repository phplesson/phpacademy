<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 11:26
 */
namespace Real;

function check($a) {
    return is_numeric($a);
}

function getZero() {
    return 0;
}

function add($a, $b) {
    list($a, $b) = \Checker\checkParams($a, $b);

    return $a + $b;
}

function sub($a, $b) {
    list($a, $b) = \Checker\checkParams($a, $b);

    return $a - $b;
}

function getFromStr($str) {
    if (preg_match('/^[+-]?\\d+$/', $str, $data)) {
        return (int)$str;
    } else {
        trigger_error('bad param', E_USER_NOTICE);
        return $str;
    }
}