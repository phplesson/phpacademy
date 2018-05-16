<?php
$options = getopt('a:');
$mass = $options['a'];

define("G_EARTH", 9.80665);


if ($mass <= 0) {
	die("Wrong mass value");
}

$weight = $mass * G_EARTH;

echo "Weight is $weight";