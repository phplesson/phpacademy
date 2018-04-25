
<?php

for ($n = 1000, $num = 0; $n > 50, $num < 10; $n /= 2, $num++) {
	if ($n < 50) {
		echo $n.PHP_EOL;
		break;
	}
}
echo $num.PHP_EOL;
?>
