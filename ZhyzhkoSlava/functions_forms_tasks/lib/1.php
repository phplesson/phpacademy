<?php

 return [
 'text' => 'функция которая возвращает Топ 3 длинных слова',
 'paramCount' => '1',
 'func' => function($a){
	$arr = array_flip(explode(' ', $a));
		foreach ($arr as $word => $length) {
    	$arr[$word] = mb_strlen($word);
		}
		asort($arr);
		$result = array_slice($arr, -3, 3);
	 	return $result;
	},
 'paramGenerator' => function() {
 	 //$a = $_POST ['a'];
	  return $result;
	 },
 'view' => 'view/3long.php',
 ];
