
<?php
if (!empty($_GET['text'])) {
		function guestBook($a) {
			$a = $_GET['text'];
			static $com = '';
			echo $com .= $a."<br>";
			}
	
	guestBook($_GET['text']);
}

?>

<form action="task7.php" method="GET">
<label>Добавить комментарий:<br/><textarea name="text" placeholder="Some text"></textarea></label><br/>
<input type="submit" value="Add"><br/>
</form>