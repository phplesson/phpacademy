<?php
return [
	'text' => 'Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово. Директория и искомое слово задаются как параметры функции.',
	'func' => function ($a, $b) {
		if (is_dir($a)) {
			$fileList = scandir($a);
			foreach ($fileList as $file) {
				if (is_file($a . $file)) {
					if (is_readable($a . $file)) {
						$fileContent = file_get_contents($a . $file);
						preg_match_all('#(?<=\b)([a-zA-Zа-яА-Я0-9]+)(?=\b)#', $fileContent, $matches);
						if (in_array("$b", $matches[1])) {
							$result[] = "Нашел $b в файле $file";
						}
					} else {
						$result[] = "Не могу прочитать $file";
					}
				}
			}
			
			return $result;
			
		} else {
			return "Not a Dir";
		}
	},
];