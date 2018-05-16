
<?php
// goto для цикла do while:

/* $i = 1;
do {
	echo $i.PHP_EOL;
	$i++;
	if ($i == 13) {
		break;
	}
}
while ($i < 100);
 */

$i = 1;
start_:
echo $i.PHP_EOL;
if ($i == 13) goto end_;
$i++;
if ($i == 13) goto end_;
goto start_;
end_:
echo PHP_EOL;
?>
