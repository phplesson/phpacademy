<?php
return [
    'description' => 'Функция у которой каждое новое предложение начинается с большой буквы',
    'func' => function ($a) {
			
			$arr = explode('. ', $a);
			
			foreach ($arr as $key){
				$res[] = ucfirst($key);
			}
			$res = implode('. ', $res);
			return ($res);},
    'paramGenerator' => function() {
		$array = array ('some text. very hungry. this is talk about.', 'football is a great play. this girl very simply. go away.', 'girl and boy. tell me the true.', 'higher boy. talking cat. slow down.',);
		$key = array_rand($array);
		$a = $array[$key];
		return [$a];
		},
    'argCount' => 1,
    'view' => 'view/firstBig.php',
];