<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 11:26
 */

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
    if (!check($a)) {
        trigger_error("Bad input 'a' parameter:" . print_r($a, true), E_USER_WARNING);
        $a = getZero();
    }
    
    if (!check($b)) {
        trigger_error("Bad input 'b' parameter:" . print_r($b, true), E_USER_WARNING);
        $b = getZero();
    }
    
    return ['re' => $a['re'] + $b['re'], 'im' => $a['im'] + $b['im']];
}

function sub($a, $b) {
    if (!check($a)) {
        trigger_error("Bad input 'a' parameter:" . print_r($a, true), E_USER_WARNING);
        $a = getZero();
    }

    if (!check($b)) {
        trigger_error("Bad input 'b' parameter:" . print_r($b, true), E_USER_WARNING);
        $b = getZero();
    }

    return ['re' => $a['re'] - $b['re'], 'im' => $a['im'] - $b['im']];
}