<form action="task2.php" method="GET">
<label>Введите слова через пробел:<br/><textarea name="text" placeholder="Some text"></textarea></label><br/>
<input type="submit" value="OK"><br/>
</form>
<?php
if (!empty($_GET['text'])) {
		function top3words($a) {
		$a = strtr ($a, [','=>' ', '.'=>'']);
		$a = explode(" ", $a);

		foreach ($a as $key) {
			$arr[strlen($key)] = $key;
			
		}
		krsort($arr);
		foreach ($arr as $key2) {
			$arr2[] = $key2;
		}
		$result = $arr2[0].' - '.$arr2[1].' - '.$arr2[2];
		
		echo $result;
	}
	top3words($_GET['text']);
}

?>
