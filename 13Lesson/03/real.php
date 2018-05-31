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
    list($a, $b) = checkParams($a, $b);

    return $a + $b;
}

function sub($a, $b) {
    list($a, $b) = checkParams($a, $b);

    return $a - $b;
}