<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 26.04.18
 * Time: 14:24
 */


echo 'file ' . __FILE__ . EOL;
echo 'line ' . __LINE__ . EOL;

if (!defined('EOL')) {
    define('EOL', '  <br />' . PHP_EOL);
}