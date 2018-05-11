<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.05.18
 * Time: 9:45
 */

ini_set('xdebug.var_display_max_depth', 15);
/**
 * @param array $data
 * @param array $storage
 */
function processData(array $data, array &$storage) {
    foreach ($data as $key => $value) {
        if (empty($value)) {
            unset($storage[$key]);
        } elseif (is_array($value)) {

            if (!array_key_exists($key, $storage)) {
                $storage[$key] = [];
            }

            if (!is_array($storage[$key])) {
                $tempVal = $storage[$key];
                $storage[$key] = [];
                $storage[$key]['oldValue'] = $tempVal;
            }

            processData($value, $storage[$key]);
        }  else {
            $storage[$key] = $value;
        }
    }
}

echo '<h1>SESSION</h1>';

session_start();


echo '<h3>Session id : ' . session_id() . '</h3>';
echo '<h3>Session name : ' . session_name() . '</h3>';
echo '<h3>Session path : ' . session_save_path() . '</h3>';


if (count($_GET) > 0) {
    processData($_GET, $_SESSION);
}


echo '<pre>';
var_dump($_SESSION);
echo '</pre>';








































//xdebug.var_display_max_depth = 15

//echo '<pre>';
//echo ini_get('xdebug.var_display_max_depth');
//echo '</pre>';
//ini_set('xdebug.var_display_max_depth', 15);
//
//echo '<pre>';
//echo ini_get('xdebug.var_display_max_depth');
//echo '</pre>';







//
//