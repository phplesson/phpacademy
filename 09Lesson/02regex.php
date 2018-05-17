<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.05.18
 * Time: 15:56
 */

function l($str, $count = 1) {
    echo $str . str_repeat(PHP_EOL, $count);
}

$str = 'It is a big string!With no space parts,and also with space, and something yet. Также немного кирилицы';


l('PREG MATCH 1');
$pattern = '/^(It (?:\\w+\\s)*)([^.]+)\\.(.*)$/';

l('pattern = ' . $pattern);
l('str = ' . $str);
$matches = [];
$result = preg_match($pattern, $str, $matches);
var_dump($result);
var_dump($matches);



l('PREG MATCH 2');

$pattern = '/\\w+\\b/';

l('pattern = ' . $pattern);
l('str = ' . $str);
$matches = [];
$result = preg_match($pattern, $str, $matches);
var_dump($result);
var_dump($matches);


l('PREG MATCH ALL 1');

l('pattern = ' . $pattern);
l('str = ' . $str);
$matches = [];
$result = preg_match_all($pattern, $str, $matches);
var_dump($result);
var_dump($matches);



l('PREG MATCH ALL 2');
$pattern = '/\\w+\\b/u';

l('pattern = ' . $pattern);
l('str = ' . $str);
$matches = [];
$result = preg_match_all($pattern, $str, $matches);
var_dump($result);
var_dump($matches);





exit();
preg_replace();
preg_replace_callback();
preg_replace_callback_array();

preg_split();

preg_filter();

preg_grep();