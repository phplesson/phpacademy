<?php
return [
    'description' => 'Функция подсчитывает, сколько раз слова встречаются строке и выводит в виде списка в порядке уменьшения количества',
    'func' => function ($a) {
			$arr = explode(' ', $a);
			$res = array_count_values($arr);
			arsort($res);
			return ($res);},
    'paramGenerator' => function() {
		$array = array ('Some text. Very hungry. This is talk about.', 'Football is a great play. This girl very simply. Go away.', 'Girl and boy. Tell me the true.', 'Higher boy. Talking cat. Slow down.',);
		$key = array_rand($array);
		$a = $array[$key];
		return [$a];
		},
    'argCount' => 1,
    'view' => 'view/countWords.php',
];