<?php
return [
    'description' => 'Функция гостевой книги, фильтрует маты и тэги',
    'func' => function ($a) {
			$a = trim(strip_tags($a, '<b>'));
			$mats = ['бля','лох','мудак','пидар','сука','козел','ебуч', 'наху', 'хуй'];
			foreach ($mats as $mat) {
				if (mb_stripos($a, $mat) > 0 || mb_stripos($a, $mat) === 0) {
					exit ('Некорректный комментарий!<br/><a href="index.php?action=8">Вернуться к форме</a>');
				}
			}
			
			$filePut = file_put_contents ('lib/comments_mat.txt', $a.PHP_EOL, FILE_APPEND);
			$fileOpen = file('lib/comments_mat.txt');
			return ($fileOpen);
		},
	'paramGenerator' => function() {
		$array = array ('Some text. Ты мудак. This is talk about.', 'Football is a great play. This girl very simply. Go away.', 'Girl <b>and</b> boy. Tell me the true.', 'Higher boy. Talking cat. Slow down.',);
		$key = array_rand($array);
		$a = $array[$key];
		return [$a];
		},
    'argCount' => 1,
    'view' => 'view/commentsMat.php',
];