<?php
return [
	'text' => ' Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму.',
	'func' => function ($a, $b) {
		$fileContent = file_get_contents($a);
		$words = explode(' ', $fileContent);
		
		foreach ($words as $word) {
			if (iconv_strlen($word) <= $b) {
				$result[] = $word;
			}
		}
		
		$output = implode(' ', $result);
		file_put_contents($a, $output);
		return $output;
	},
];