<?php
return [
    'description' => 'Функция которая считает количество уникальных слов в тексте',
    'func' => function ($a) {
			$arr = explode(' ', $a);
			$arr = array_unique($arr);
			$arrCount = count ($arr);
			return $arrCount;},
    'paramGenerator' => function() {
		$array = array ('one function to one zero and ten and multiple grow', 'football nine cloud course girl pow nine', 'girl number boy and girl enter and portmone time', 'higher to train enter future grow to cloud train',);
		$key = array_rand($array);
		$a = $array[$key];
		return [$a];
		},
    'argCount' => 1,
    'view' => 'view/countUnique.php',
];