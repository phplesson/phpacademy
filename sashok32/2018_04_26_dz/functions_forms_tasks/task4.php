<form action="task4.php" method="GET">
<label>Введите директорию:<br/><input name="text" placeholder="/xampp" ></label><br/>
<input type="submit" value="OK"><br/>
</form>
<?php
if (!empty($_GET['text'])) {
		function fileList($a) {
		echo "<pre>";
		print_r (scandir ($a));
		echo "</pre>";
	}
	fileList($_GET['text']);
}

?>
