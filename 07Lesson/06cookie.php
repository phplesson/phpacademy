<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.05.18
 * Time: 10:09
 */
error_reporting(0xffffffff);

//setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
echo '<h1>test</h1>';

if (count($_GET) > 0) {
    foreach ($_GET as $key => $value) {
        if (empty($value)) {
            if (is_array($value)) {
                foreach($value as $index => $subValue) {
                    setcookie($key . "[$index]", $subValue, time() - 60*60*24, '/');
                }
            } else {
                $result = setcookie($key, $value, time() - 60*60*24, '/');
            }
        } else {

            if (is_array($value)) {
                foreach($value as $index => $subValue) {
                    setcookie($key . "[$index]", $subValue, time() + 30, '/');
                }
            } else {
                $result = setcookie($key, $value, time() + 30, '/');
            }
//            echo "<pre>$key :";
//            var_dump($result);
//            echo '</pre>';
        }
    }
}

echo '<h1>COOKIE</h1>';

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';
