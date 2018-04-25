<?php
	// запускать через командную строку: php 23.php -a[num1][num2]...[num-n]
	$options = getopt("a:");
	$a = $options['a'];
	$sum = 0;
	if (is_numeric($a)) {
		for ($i = 0; $i < strlen($a); $i++) {
			$sum += $a[$i];
		}
		echo $sum.PHP_EOL;
	} else {
		echo 'Enter correct numbers example: php 23.php -a[num1][num2]...[num-n]'.PHP_EOL;
	}
?>