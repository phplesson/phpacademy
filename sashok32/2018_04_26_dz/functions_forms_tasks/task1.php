<form action="task1.php" method="GET">
<label>Введите слова через пробел:<br/><textarea name="text1" placeholder="Some text 1"></textarea></label><br/>
<label>Введите слова через пробел:<br/><textarea name="text2" placeholder="Some text 2"></textarea></label><br/>
<input type="submit" value="OK"><br/>
</form>
<?php
if (!empty($_GET['text1']) && !empty($_GET['text2'])) {
		function getCommonWords($a, $b) {
	
		$a = explode(" ", $_GET['text1']);
		$b = explode(" ", $_GET['text2']);

	$result = array_intersect ($a, $b);
		print_r ($a).PHP_EOL;
		print_r ($b).PHP_EOL;
		print_r ($result).PHP_EOL;
	}
	getCommonWords($_GET['text1'], $_GET['text2']);
}

?>
