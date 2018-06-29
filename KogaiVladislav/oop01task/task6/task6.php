<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 15:18
 *
 *
 */

require_once ('Human6.php');

date_default_timezone_set('UTC');

$obj = new Human6('Vasya',25);

$obj2 = new Human6('Olya',21);

$obj->getObj();
$obj2->getObj();
$obj->__destruct();
$obj->getObj();