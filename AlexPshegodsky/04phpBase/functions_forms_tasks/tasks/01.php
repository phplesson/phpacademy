<?php
return [
	'text' => 'Функция должна выдавать только те слова, которые есть и в первом и во втором поле ввода.',
	'func' => function ($a, $b) {
		$InputArrayFirst = explode(' ',$a);
		$InputArraySecond = explode(' ',$b);
		return array_intersect($InputArrayFirst, $InputArraySecond);
	},
];