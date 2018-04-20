<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 16.04.2018
 * Time: 21:56
 */
$options = getopt('a::b::c::');
$i1 = $options['a'];
$i2 = $options['b'];
$i3 = $options['c'];
$result = (($i1 + $i2) * $i3) / ($i1 + $i2 + $i3);
echo $result;