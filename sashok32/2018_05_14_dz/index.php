<?php session_start();?>
<h1>Главная</h1><hr/>


<?php

echo "<a href='?page=form'>Логин</a>_|_<a href='?page=1'>Загрузка файлов</a>_|_<a href='?page=2'>Список файлов</a>_|_<a href='?page=3'>Статистика</a>";

if (!empty($_GET['page'])) {
	include $_GET['page'].'.php';
} else {
	header('Location: ?page=form');
}
?>


<hr/><h2>Футер</h2>