<?php
$options = getopt('a:b:');
$a = $options['a'];
$b = $options['b'];

$c = $a / $b;
$d = $a * $b;
$e = $a + $b;
$f = $a - $b;

if ($c != 0) { echo 'Durch=' . ($a / $b) . PHP_EOL;}
else { echo ' Fehler. Sie müssen die korrekten Werte eingeben' . PHP_EOL; }

if ($d != 0) { echo 'Multiplikation=' . ($a * $b) . PHP_EOL;}
else { echo 'Sie haben immer 0' . PHP_EOL; }

if ($e = $a + $b) { echo 'Plus=' . ($a + $b) . PHP_EOL;}

if ($f = $a + $b) { echo 'Minus=' . ($a - $b) . PHP_EOL;}
