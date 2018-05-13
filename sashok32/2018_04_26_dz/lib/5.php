<?php
return [
 'description' => 'Функция которая показывает список файлов и папок по ключевому слову',
 'func' => function ($a, $b) {
	$a = scandir($a);
	$arrFiles = array ();
	foreach ($a as $value) {
		if (strpos($value, $b) > 0 || strpos($value, $b) === 0) {
			$arrFiles[] = $value."<br>";
		}
	}
	return $arrFiles;},
 'paramGenerator' => function() {
	 $array = array ("/xampp", "c:\\", "/program files", "/windows",);
	 $array2 = array ("prog", "read", "win", "cat",);
	 $key = array_rand($array);
	 $key2 = array_rand($array2);
	 $a = $array[$key];
	 $b = $array[$key2];
	 return [$a, $b];
	 },
 'argCount' => '2',
 'view' => 'view/fileListKey.php',
 ];