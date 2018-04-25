<?php
	$day = 3;
	switch ($day) {
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
		echo "Это рабочий день<hr />";
		break;
		case 6:
		case 7:
		echo "Это выходной день<hr />";
		break;
		default:
		echo "Неизвестный день<hr />";
	}
?>
