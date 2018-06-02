<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 26.04.18
 * Time: 14:22
 */

if (php_sapi_name() === 'cli') {
    define('EOL', PHP_EOL);
} else {
    define('EOL', '<br />');
}