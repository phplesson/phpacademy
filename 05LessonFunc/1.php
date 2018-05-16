<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 03.05.2018
 * Time: 20:03
 */

$f1 = fopen('file.log22.txt', 'a');
$f2 = fopen('file.log33.txt', 'r');

$val1 = feof($f1);
$val2 = feof($f2);
var_dump($val1, $val2);
exit();
var_dump($f1, $f2);

$bool = fwrite($f1, 'some text');


fclose($f1);

$s = fread($f2, 1000);

$s = '';
$readLimit = 100;

while(!feof($fileName) && ($readLimit > 0)) {
  $s = fread($fileName, 1024);
  $readLimit--;
}