<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 12.05.2018
 * Time: 12:10
 */

echo "<p>simple text</p>";

header("Content-Type: text/html; charset=UTF-8", false);
//header("Content-Type: text/html; charset=UTF-6", false);
//header("Content-Type: text/html; charset=UTF-7", false);
//
//header("Server: Apache/2.4.26 (Win32) OpenSSL/1.0.2l PHP/7.1.3", false);
//header("Server: Apache/2.4.26 (Win32) OpenSSL/1.0.2l PHP/7.1.2", false);
//
//header("My-Mark: some value1", false);
//header("My-Mark: some value2", false, 404);

//header(":", true, 404);

if (!function_exists("http_response_code")) {
  function http_response_code($code) {
    header(":", true, $code);
  }
}

if (!function_exists("other")) {
  function other($code) {
    header(":", true, $code);
  }
}

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  header("Allow: GET", true, 405);
}

echo "<p>{$_SESSION['a']}</p>";
$a='aa';
echo <<<"T_EMPTY"
<form action="00simple.php" method="POST">
  <input type="text" name="a" /><br />$a
  <input type="submit" name="aa" /><br />
</form>
T_EMPTY;
