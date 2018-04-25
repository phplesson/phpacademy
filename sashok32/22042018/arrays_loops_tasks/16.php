
<?php

$arr = array ('1', '2', '3', '4', '5', '6', '7', '8', '9');

foreach ($arr as $arrs) {
	if ($arrs != 3 && $arrs != 6 && $arrs != 9) {
		printf ("%2s,",$arrs);
	} elseif ($arrs == 3 || $arrs == 6 || $arrs == 9) {
		printf ("%2s", $arrs);
		echo PHP_EOL;
	} 
}

?>
