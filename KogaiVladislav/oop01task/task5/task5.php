<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 14:38
 *
 *
 */

require_once ('Human5.php');
date_default_timezone_set('UTC');

Human5::createObj('Vasya',25);
var_dump(Human5::getObj());

Human5::createObj('Olya',21);
var_dump(Human5::getObj());