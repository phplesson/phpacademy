<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 13:54
 */
namespace Checker;

function checkParams() {
    global $current;
    $args = func_get_args();

    foreach($args as $key => &$value) {
        $func = $current . 'check';
        if (!$func($value)) {
            trigger_error("bad input parameter '$key'" . print_r($value, true), E_USER_WARNING);
            $value = getZero();
        }
    }

    return $args;
}