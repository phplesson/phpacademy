<?php
return [
    'description' => 'Функция гостевой книги',
    'func' => function ($a) {
			$a = trim(htmlspecialchars($a));
			$filePut = file_put_contents ('lib/comments.txt', $a.PHP_EOL, FILE_APPEND);
			$fileOpen = file('lib/comments.txt');
			return ($fileOpen);
		},
	'paramGenerator' => function() {
		$array = array ('Some text. Very hungry. This is talk about.', 'Football is a great play. This girl very simply. Go away.', 'Girl and boy. Tell me the true.', 'Higher boy. Talking cat. Slow down.',);
		$key = array_rand($array);
		$a = $array[$key];
		return [$a];
		},
    'argCount' => 1,
    'view' => 'view/comments.php',
];