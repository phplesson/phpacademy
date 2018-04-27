<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 26.04.18
 * Time: 14:18
 */

include('include/eol.php');

include ('include/magic-const.php');


$magicArrays=include('include/collect-arrays.php');

if (php_sapi_name() === 'cli') {
    var_dump($magicArrays);
} else {
    echo '<PRE>';
    var_dump($magicArrays);
    echo '</PRE>';
}