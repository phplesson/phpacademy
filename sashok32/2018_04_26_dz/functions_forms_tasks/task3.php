<form action="" method="GET">
<label>Введите слова через пробел:<br/><input type="number" name="text"></label><br/>
<input type="submit" value="OK"><br/>
</form>
<?php
if (!empty($_GET['text'])) {
		function changeStr($a) {
			echo file_get_contents('3.txt')."<br>";
			//$text = str_replace ([',', '.', '*', '-', '/'], [' '], file_get_contents('3.txt'));
			
			$text = explode (' ', file_get_contents('3.txt'));
			$textNew = '';
			foreach ($text as $value) {
				if (strlen($value)/2 > $a) continue;
				$textNew .= $value.' ';
			}
			
			echo ($textNew);
		
			
		
		
		
		
		/* $a = explode(" ", $a);

		foreach ($a as $key) {
			$arr[strlen($key)] = $key;
			
		}
		krsort($arr);
		foreach ($arr as $key2) {
			$arr2[] = $key2;
		}
		$result = $arr2[0].' - '.$arr2[1].' - '.$arr2[2];
		
		echo $result; */
	}
	changeStr($_GET['text']);
}

?>
