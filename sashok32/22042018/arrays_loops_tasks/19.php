
<?php

$arr = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$day = date('l');
foreach ($arr as $arrs) {
	if ($arrs == $day) {
		echo "<i>$arrs</i>".PHP_EOL;
		continue;
	}
	echo $arrs.PHP_EOL;
}	
?>
