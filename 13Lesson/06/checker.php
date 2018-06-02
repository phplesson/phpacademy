<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 11:39
 */
return [
    'checkParams' => function(&$link) {
        $args = func_get_args();
        array_shift($args);

        foreach($args as $key => &$value) {
            if (!$link['check']($link, $value)) {
                trigger_error("bad input parameter '$key'" . print_r($value, true), E_USER_WARNING);
                $value = $link['getZero']($link);
            }
        }

        return $args;
    },
];
