<?php
if (!empty($_SESSION['name'])) {	
	$_SESSION['countSes']++;
	$_SESSION['countPage1']++;
	if (!empty($_FILES['pic'])) {
		if ($_FILES['pic']['size'] == 0 || $_FILES['pic']['size'] > 1024*1024*2) {
			exit ("Файл больше 2 мегабайт<br><a href = '?page=1'>Вернуться</a>");
		}
		elseif (($_FILES['pic']['type'] != 'image/jpeg') && ($_FILES['pic']['type'] != 'application/pdf') && ($_FILES['pic']['type'] != 'text/plain')) {
			exit ("Файл имеет тип отличный от PDF, JPG или текстового файла<br><a href = '?page=1'>Вернуться</a>");
		} else {
		$filePut = 'gallery';
		if (!is_dir($filePut)) mkdir($filePut);
		move_uploaded_file ($_FILES['pic']['tmp_name'], $filePut.'/'.$_FILES["pic"]["name"]);
		if ($_POST['submit']=='UploadView') {
			header("Location: ?page=2");
		} else {
			echo "<br>Файл успешно загружен";
		}
		}
	}
?>
	<form action="" enctype="multipart/form-data" method="POST">
	Добавить файл:<br/><input type="file" name="pic"><br/>
	<br>Загрузить и посмотреть: <input type="submit" name="submit" value="UploadView"><br/>
	<br>Загрузить: <input type="submit" name="submit" value="Upload"><br/>
	</form>
<?php
} else {
	header('Location: ?page=form');
}
?>



