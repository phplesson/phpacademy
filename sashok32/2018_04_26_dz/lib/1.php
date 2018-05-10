<?php
return [
 'description' => 'функция которая возвращает массив с общими словами',
 'func' => function($a, $b) {
	$a = explode(" ", $a);
	$b = explode(" ", $b);
	 $result = array_intersect ($a, $b);
	 return $result;},
 'paramGenerator' => function() {
	 $array = array ('one net zero ten boy grow', 'net nine cloud zero girl pow', 'girl ten boy enter exit time', 'net boy enter pow grow cloud');
	 $key = array_rand($array, 2);
	 $a = $array[$key[0]];
	 $b = $array[$key[1]];
	 return [$a, $b];
	 },
 'argCount' => '2',
 'view' => 'view/common.php',
 ];