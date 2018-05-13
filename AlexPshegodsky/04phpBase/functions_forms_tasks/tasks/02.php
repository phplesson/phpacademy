<?php
return [
	'text' => 'При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.',
	'func' => function ($a) {
		$InputArray = explode(' ', $a);
		array_multisort(array_map('strlen', $InputArray), SORT_DESC, $InputArray);
		$output = array_slice($InputArray, 0, 3);
		return $output;
	},
];