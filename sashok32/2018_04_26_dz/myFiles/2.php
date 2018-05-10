
<?php
 return [
 'text' => 'функция которая возвращает Топ 3 длинных слова',
 'paramCount' => '1',
 'func' => function($a) {
	$a = explode(" ", $a);
		foreach ($a as $key) {
			$arr[mb_strlen($key)] = $key;	
		}
		krsort($arr);
		foreach ($arr as $key2) {
			$arr2[] = $key2;
		}
		$result = $arr2[0].' - '.$arr2[1].' - '.$arr2[2];
	 return $result;},
 'paramGenerator' => function() {
	 $array = array ('one function zero ten multiple grow', 'football nine cloud course girl pow', 'girl number boy enter portmone time', 'higher train enter future grow cloud',);
	 $key = array_rand($array);
	 $a = $array[$key];
	 return [$a];
	 },
 ]

?>
