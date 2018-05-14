<?php

$options = getopt('x:y:z:');
$x = $options['x'];
$y = $options['y'];
$z = $options['z'];

$xyz=($z+$y)*$z/($x+$y+$z);

echo $xyz;