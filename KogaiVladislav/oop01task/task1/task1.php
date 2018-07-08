<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 13:50
 *
 *
 */

require_once('Human1.php');


$obj = new Human1();
$obj->age = 25;
$obj->name='Vasya';

$obj2 = new Human1();
$obj2->age = 21;
$obj2->name='Olya';

var_dump($obj->__toString());
var_dump($obj2->__toString());