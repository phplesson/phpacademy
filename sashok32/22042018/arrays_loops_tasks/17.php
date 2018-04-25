
<?php

$arr = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$month = date('F');
foreach ($arr as $arrs) {
	if ($arrs == $month ) {
		echo "<b>$arrs</b>".PHP_EOL;
		continue;
	}
	echo "$arrs".PHP_EOL;
}	
?>
