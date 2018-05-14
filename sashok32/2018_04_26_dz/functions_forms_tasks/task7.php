
<?php
if (!empty($_POST['text'])) {
		function guestBook($a) {
			$a = trim(htmlspecialchars($a));
			$filePut = file_put_contents ('comments.txt', $a.PHP_EOL, FILE_APPEND);
			$fileOpen = file('comments.txt');
			$i = 0;
			echo "<u>КОММЕНТАРИИ ПОЛЬЗОВАТЕЛЕЙ:</u><br/><br/>";
			foreach ($fileOpen as $value) {
				$i++;
				echo $i.')'.trim($value)."<br/><br/>";
			}
			
			//print_r ($fileOpen);
		}
			
			
			
	guestBook($_POST['text']);
}

?>

<form action="task7.php" method="POST">
<label>Добавить комментарий:<br/><textarea name="text" placeholder="Some text"></textarea></label><br/>
<input type="submit" value="Add"><br/>
</form>