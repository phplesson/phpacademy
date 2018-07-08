<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 14:03
 *
 *
 */

require_once ('Human4.php');
date_default_timezone_set('UTC');

$obj = new Human4('Vasya',25);

var_dump($obj->__toString());

