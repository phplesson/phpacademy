<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 26.04.18
 * Time: 14:25
 */

$array = [];

$possible = ['_GET', '_POST', '_REQUEST', '_SERVER', '_SESSION', '_COOKIE', 'argc', 'argv'];
$possible = ['_GET', '_POST', '_REQUEST', '_SERVER', '_SESSION', '_COOKIE', '_ENV', 'argc', 'argv'];

foreach ($possible as $arrName) {
    if (isset($$arrName) && is_array($$arrName)) {
        $array[$arrName] = $$arrName;
    } else {
        $array[$arrName] = 'NOT EXISTS or NOT ARRAY';
    }
    
    $array[] = '===========================================================';
    $array[] = '===========================================================';
}

return $array;