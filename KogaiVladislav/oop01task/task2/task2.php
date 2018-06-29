<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 13:55
 */

require_once ('Human2.php');

$obj = new Human2();
$obj->setAge(25);
$obj->setName("Vasya");

$obj2 = new Human2();
$obj2->setAge(21);
$obj2->setName("Olya");

var_dump($obj->__toString());
var_dump($obj2->__toString());