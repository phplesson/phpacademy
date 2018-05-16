<?php
$options = getopt('a::b::c::');
$r1 = $options['a'];
$r2 = $options['b'];
$r3 = $options['c'];

if (!isset($r1, $r2, $r3)) {
	die('Not enough parameters!');
}

$result = (($r1 + $r2) * $r3) / ($r1 + $r2 + $r3);

echo $result;
