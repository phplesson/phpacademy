<?php
if (!empty($_SESSION['name'])) {
	echo "<br>Привет ".$_SESSION['name'];
	
	echo "<br><u>Статистика общая:</u><br>";
	echo "<br>- посещения  страницы с загрузкой файлов:".$_SESSION['countPage1'];
	echo "<br>- посещения  страницы со списком файлов:".$_SESSION['countPage2'];
	echo "<br>- загруженных файлов:".$_SESSION['countFile']."<br>";
	echo "<br><u>Статистика сессионная:</u><br>";
	echo "<br>- сессии:".$_SESSION['countSes']++;
} else {
	header('Location: ?page=form');
}
if (isset($_POST['resetCom'])) {
	$_SESSION['countPage1'] = 0;
	$_SESSION['countPage2'] = 0;
	header('Location: ?page=3');
} elseif (isset($_POST['resetSes'])) {
	$_SESSION['countSes'] = 0;
	header('Location: ?page=3');
}
?>
		<form action="" method="POST">
		<br/><b>Сброс общей статистики: </b><input type="submit" name="resetCom" value="Reset"><br/>
		<br/><b>Сброс сессионной статистики: </b><input type="submit" name="resetSes" value="Reset"><br/>
		</form>