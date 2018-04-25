<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 21.04.2018
 * Time: 11:19
 */
$s = 100;
$t = 3;
$vKmH = $s / $t;
$vMS = $vKmH * 1000 / 3600;
echo "Скорость автомобиля в км/час :" . $vKmH . "в м/сек : " . $vMS;