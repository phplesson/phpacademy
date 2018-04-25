
<?php
// goto для цикла while:

/* $i = 1;
while ($i <= 10) {
	echo $i.PHP_EOL;
	$i++;
} */


$i = 1;
start_:
if ($i == 11) goto end_;
echo $i.PHP_EOL;
$i++;
goto start_;
end_:
echo PHP_EOL;
?>
