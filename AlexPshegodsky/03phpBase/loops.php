<?php
/*Задача: взять любой пример с каждым типом цикла(for while do-while) - и спомощью
* обыного if и goto воосоздать логику работы.*/

//---------------------------------------for

/*
* for ($i=0;$i<=10;$i++){
*   print_r("My loop iteration is: $i".PHP_EOL);
* }
*/

$i = 0;
forLoop:{
	if ($i <= 10) {
		print_r("My loop iteration is: $i" . PHP_EOL);
		$i++;
		goto forLoop;
	}
}

//---------------------------------------while

/*
* $x = 10;
* while ($x > 0) {
*	print_r("X value is: $x" . PHP_EOL);
*	$x--;
* }
*/

whileLoop:{
	if ($i > 10) {
		print_r("X value is: $x" . PHP_EOL);
		$x--;
		goto whileLoop;
	}
}

//---------------------------------------doWhile

/*$z=0;
* do {
*	print_r("Z value is: $z" . PHP_EOL);
*	$z++;
* } while ($z < 10);
*/

$z = 0;

doWhileLoop:{
	$z++;
}

if ($z < 10) {
	print_r("Z value is: $z" . PHP_EOL);
	goto doWhileLoop;
}


//-----------------------------------------------------
//переделать циклы for на аналоги while / do while
//-----------------------------------------------------
/*for ($i = 1; $i < 100; $i++) {
*
*	$simple = true;
*
*	for ($j = 1; $j < $i; $j++) {
*
*		if ($j == 1) {
*			continue;
*		}
*		$div = (int)($i / $j);
*		if (($i / $j) == $div) {
*			$simple = false;
*			break;
*		}
*	}
*
*	if (!$simple) {
*		continue;
*	}
*
*	echo "$i, ";
*
*}
*/

$i = 1;

do {
	$simple = true;
	$j = 1;
	
	while ($j < $i) {
		if ($j == 1) {
			$j++;
			continue;
		}
		$div = (int)($i / $j);
		if (($i / $j) == $div) {
			$simple = false;
			break;
		}
		$j++;
	}
	
	if (!$simple) {
		$i++;
		continue;
	}
	echo "$i, ";
	$i++;
} while ($i < 100);


