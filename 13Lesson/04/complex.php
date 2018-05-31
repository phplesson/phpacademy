<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 11:26
 */
namespace Complex;

function check($a) {
    return is_array($a)
        && (count($a) === 2)
        && (isset($a['re']))
        && (isset($a['im']))
        && is_numeric($a['re'])
        && is_numeric($a['im']);
}

function getZero() {
    return ['re' => 0, 'im' => 0];
}

function add($a, $b) {
    list($a, $b) = \Checker\checkParams($a, $b);
    
    return ['re' => $a['re'] + $b['re'], 'im' => $a['im'] + $b['im']];
}

function sub($a, $b) {
    list($a, $b) = \Checker\checkParams($a, $b);

    return ['re' => $a['re'] - $b['re'], 'im' => $a['im'] - $b['im']];
}

function getFromStr($str) {
    $data = [];
    if (preg_match_all('/^([+-]?\\d+)i([+-]?\\d+)$/', $str, $data)) {
        return ['re' => (int)$data[1][0], 'im' => (int)$data[2][0]];
    } else {
        trigger_error('bad param', E_USER_NOTICE);
        return $str;
    }
}