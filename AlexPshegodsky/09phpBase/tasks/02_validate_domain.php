<?php
return [
	'name' => 'Domain format validator',
	'text' => 'Функция проверяет на корректность формата домена либо группы доменов (разделитель ",")',
	'func' => function ($a) {
		$result = array();
		$domains = $a;
		$pattern = '/^([a-z]([(\-)?a-z0-9]*[a-z0-9])*.)+(ru){1,2}/';
		var_dump($domains);
		if (!is_array($domains)){
			$domains = explode(',', $domains);
		}
		
		foreach ($domains as $domain) {
			$result[$domain] = preg_match($pattern, $domain); 
		}
		return $result;
	},
	'inputType' => ['textarea' => 1,],
	'view' => 'views/view02.php',
];