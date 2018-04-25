<?php
	// запускать через командную строку: php 23.php -a[num1][num2]...[num-n] -b[num]
	$options = getopt("a:b:");
	$a = $options['a'];
	$b = $options['b'];
	
	$count = 0;
	
	
	if (is_numeric($a) && is_numeric($b)) {
		for ($i = 0; $i < strlen($a); $i++) {
			if ($b == $a[$i]) {
				$count += 1;
			}
		}
		echo $count.PHP_EOL;
	} else {
		echo 'Enter correct numbers example: php 23.php -a[num1][num2]...[num-n] -b[num]'.PHP_EOL;
	}
?>