
<?php
return [
 'text' => 'функция которая возвращает список файлов и папок в директории',
 'paramCount' => '1',
 'func' => function($a) {
	return scandir ($a);},
 'paramGenerator' => function() {
	 $array = array ("/xampp", "c:\\", "/program files", "/windows",);
	 $key = array_rand($array);
	 $a = $array[$key];
	 return [$a];
	 },
 ]

?>
