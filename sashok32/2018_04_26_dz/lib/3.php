<?php
return [
    'description' => 'Функция удаляет из файла все слова, длина которых превыщает N символов(кирилица)',
    'func' => function ($a) {
			//echo file_get_contents('3.txt')."<br>";
			//$text = str_replace ([',', '.', '*', '-', '/'], [' '], file_get_contents('3.txt'));
			
			$text = explode (' ', file_get_contents('lib/3.txt'));
			$textNew = '';
			foreach ($text as $value) {
				if (strlen($value)/2 > $a) continue;
				$textNew .= $value.' ';
			}
			return $textNew;},     // правильно по задаче будет file_put_contents('lib/3.txt', $textNew); но тогда затрется информация в файле и неьзя будет сделать полноценную повторную проверку
	'paramGenerator' => function() {
		$array = array ('3', '7', '10', '12',);
		$key = array_rand($array);
		$a = $array[$key];
		return [$a];
		},
    'argCount' => 1,
    'view' => 'view/lessLen.php',
];