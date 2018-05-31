<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 11:26
 */

function check($a) {
    return is_numeric($a);
}

function getZero() {
    return 0;
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

    return $a + $b;
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

    return $a - $b;
}