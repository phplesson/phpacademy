<form action="task5.php" method="GET">
<label>Введите директорию:<br/><input name="text" placeholder="/xampp" ></label><br/>
<label>Введите искомое слово в файле: <br/><input name="text2" placeholder="read" ></label><br/>
<input type="submit" value="OK"><br/>
</form>
<?php
if (!empty($_GET['text']) && !empty($_GET['text2'])) {
		function listName($a, $b) {
			$a = scandir($a);
			$b = $_GET['text2'];
			$arrFiles = array ();
			foreach ($a as $value) {
		if (strpos($value, $b) > 0 || strpos($value, $b) === 0) {
					//$arrFiles[] = $value;
					echo $value."<br>";
				}
		/* echo "<pre>";
		print_r ($arrFiles);
		echo "</pre>"; */
			}
		
	}
	listName($_GET['text'], $_GET['text2']);
}

?>
