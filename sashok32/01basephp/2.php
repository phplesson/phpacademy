<?php
// Формула рассчета площади основания и объема цилиндра (нужно задать радиус и высоту)

define("PI", "3.14");
$options = getopt('a:b:');
$radius = $options['a'];
$height = $options['b'];

if ($radius <=0 || $height <=0) {
    echo "Enter the correct radius and height\n php 2.php -a[] -b[]\n";
    exit ();
} else {
	$area = $radius*$radius*PI;
	$amount = $area*$height;
    echo "\nПлощадь снования цилиндра: ".$area." м2\n";
	echo "Объем цилиндра: ".$amount." м3\n";
}
?>