<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 14:25
 */
require_once ('Human3.php');
$obj = new Human3("Vasya",25);

$obj2 = new Human3("Olya",21);

var_dump($obj->__toString());
var_dump($obj2->__toString());