
<?php

$arr = array ('4', '2', '5', '19', '13', '0', '10');

foreach ($arr as $e) {
	if ($e == 2 || $e == 3 || $e == 4) {
		echo "Есть!".PHP_EOL;
		break;
	} else {
		echo "Нет!".PHP_EOL;
		break;
	}
}

?>
