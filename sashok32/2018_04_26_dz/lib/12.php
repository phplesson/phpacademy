<?php
return [
    'description' => 'Функция у которой предложения идут в обратном порядке.',
    'func' => function ($a) {
			$arr = explode('. ', $a);
			$res = array_reverse($arr);
			$res = implode('. ', $res);
			return ($res);},
    'paramGenerator' => function() {
		$array = array ('Some text. Very hungry. This is talk about.', 'Football is a great play. This girl very simply. Go away.', 'Girl and boy. Tell me the true.', 'Higher boy. Talking cat. Slow down.',);
		$key = array_rand($array);
		$a = $array[$key];
		return [$a];
		},
    'argCount' => 1,
    'view' => 'view/revSent.php',
];