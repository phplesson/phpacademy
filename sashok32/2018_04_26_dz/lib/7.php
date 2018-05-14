<?php
return [
    'description' => 'Функция гостевой книги',
    'func' => function ($a) {
			$a = trim(htmlspecialchars($a));
			$filePut = file_put_contents ('lib/comments.txt', $a.PHP_EOL, FILE_APPEND);
			$fileOpen = file('lib/comments.txt');
			return ($fileOpen);
		},
    'argCount' => 1,
    'view' => 'view/comments.php',
];