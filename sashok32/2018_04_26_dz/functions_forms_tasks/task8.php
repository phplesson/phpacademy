
<?php
if (!empty($_POST['text'])) {
		function guestBook($a) {
			$a = trim(strip_tags($a, '<b>'));
			$mats = ['бля','лох','мудак','пидар','сука','козел','ебуч'];
			foreach ($mats as $mat) {
				if (mb_stripos($a, $mat) > 0 || mb_stripos($a, $mat) === 0) {
					die ('Некорректный комментарий!');
				}
			}
			$filePut = file_put_contents ('comments_mat.txt', $a.PHP_EOL, FILE_APPEND);
			$fileOpen = file('comments_mat.txt');
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

<form action="" method="POST">
<label>Добавить комментарий:<br/><textarea name="text" placeholder="Some text"></textarea></label><br/>
<input type="submit" value="Add"><br/>
</form>