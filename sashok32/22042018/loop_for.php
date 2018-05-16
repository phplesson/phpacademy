
<?php
// goto для цикла for:

/* for ($i = 0; $i < 10; $i++) {
	if ($i == 5) {
		continue;
	}
	echo $i.PHP_EOL;
} */



$i = 0;
start_:
if ($i == 10) goto end_;
if ($i == 5) goto next_;
echo $i.PHP_EOL;
next_:
$i++;
goto start_;
end_:
echo PHP_EOL;
?>
