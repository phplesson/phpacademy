
<?php

$arr = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
foreach ($arr as $arrs) {
	if ($arrs == 'Saturday' || $arrs == 'Sunday' ) {
		echo "<b>$arrs</b>".PHP_EOL;
		continue;
	}
	echo "$arrs".PHP_EOL;
}	
?>
