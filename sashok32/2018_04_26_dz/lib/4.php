<?php
return [
    'description' => 'функция которая возвращает список файлов и папок в директории',
    'func' => function($a) {
	return scandir ($a);},
    'paramGenerator' => function() {
	 $array = array ("/xampp", "c:\\", "/program files", "/windows",);
	 $key = array_rand($array);
	 $a = $array[$key];
	 return [$a];
	 },
    'argCount' => 1,
    'view' => 'view/fileList.php',
];