<?php
return [
    'description' => 'Функция которая переворачивает строку',
    'func' => function ($a) {
			//$a = trim($_GET['text']);
			$res = '';
			for ($i = mb_strlen($a)-1; $i >= 0; $i--) {
				$res .= $a[$i];
			}
			return $res;},
    'paramGenerator' => function() {
		$array = array ('one day', 'football', 'girl number', 'higher man',);
		$key = array_rand($array);
		$a = $array[$key];
		return [$a];
		},
    'argCount' => 1,
    'view' => 'view/revStr.php',
];