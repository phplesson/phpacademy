<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.05.18
 * Time: 8:53
 */


echo '<h1>SESSION</h1>';

session_start();
@session_start();


echo '<h3>Session id : ' . session_id() . '</h3>';
echo '<h3>Session name : ' . session_name() . '</h3>';
echo '<h3>Session path : ' . session_save_path() . '</h3>';


if (count($_GET) > 0) {
    foreach ($_GET as $key => $value) {        
        if (empty($value)) {
            unset($_SESSION[$key]);
        } else {
            $_SESSION[$key] = $value;
        }
    }
}


echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

