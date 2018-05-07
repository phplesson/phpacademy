<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 16.04.2018
 * Time: 21:56
 */

define("GRAVITY_G", 9.8);
$height = 10;
$distance = 0.5;
$Mass = 2;

$Energy = $Mass * GRAVITY_G * $height;
$Force = $Energy / $distance;

echo "Сила сопротевления = $Force";