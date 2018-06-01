<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.05.18
 * Time: 1:26
 */

define('WEB_ROOT', dirname($_SERVER['SCRIPT_NAME']) . '/');
define('WEB_SCRIPT', basename($_SERVER['SCRIPT_NAME']));

function makeUrl($action = null, array $params = [], $anchor = null) {
    return $_SERVER['REQUEST_SCHEME'] . '://' .
        $_SERVER['SERVER_NAME'] .
        (($_SERVER['SERVER_PORT'] != 80)? ':' . $_SERVER['SERVER_PORT'] : '') .
        WEB_ROOT . WEB_SCRIPT;
}