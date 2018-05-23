<?php
return [
	'name' => 'Ukraine phone number validator',
	'text' => 'Функция проверяет на корректность формата номера либо группы номеров (разделитель ",")',
	'func' => function ($a) {
		$result = array();
		$phones = $a;
		$pattern = '/^(\+)?(38)( |-| - )?(\()?0( )?(4){2}(\))?( |-| - )?[0-9]{3}( |-| - )?[0-9]{2}( |-| - )?[0-9]{2}$/';
		var_dump($phones);
	if (!is_array($phones)){
		$phones = explode(',', $phones);
		}
		
		foreach ($phones as $phone) {
			$result[$phone] = preg_match($pattern, $phone);
		}
		return $result;
	},
	'inputType' => ['textarea' => 1,],
	'view' => 'views/view01.php',
];