<?php
return [
    'name' => 'Scan selected dir',
	'text' => 'Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.',
	'func' => function ($a) {
		if (is_dir($a)) {
			return scandir($a);
		} else {
			return "Not a Dir";
		}
	},
    'argCount' => 1,
    'inputType' => 'webForm',
];