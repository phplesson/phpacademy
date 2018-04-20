<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 15.04.18
 * Time: 23:23
 *
 *
 *
 * 2 - Первую половину времени автомобиль двигался со средней скоростью v1 = x км/ч,
 * а вторую — со средней скоростью v2 = y км/ч. Определить среднюю скорость автомобиля на всем пути.
 */

$options = getopt('x:y:');
$x = $options['x'];
$y = $options['y'];

$V = ($x+$y)/2;

echo 'avarage speed = '. $V. PHP_EOL;