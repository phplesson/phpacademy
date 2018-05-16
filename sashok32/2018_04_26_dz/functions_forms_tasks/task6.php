
<?php
if (!empty($_FILES['pic'])) {
	function gallery() {
		//echo "<pre>";
		//print_r ($_FILES);
		//echo "</pre>";
		
		$filePut = 'gallery';
		if (!is_dir($filePut)) mkdir($filePut);
		
		foreach($_FILES['pic']['tmp_name'] as $key => $tmpName ){
			move_uploaded_file ($tmpName, $filePut.'/'.$_FILES["pic"]["name"][$key]);
		}
		
		$scan = scandir($filePut);
		//print_r ($scan);
		
		echo "<b><u>Загруженные картинки:</u></b><br><table border='1'cellspacing='0' cellpadding='5'>";
		foreach ($scan as $data) {
			if (is_dir($data)) {
				continue;
			} else {
				echo "<tr><td><a href='{$filePut}/{$data}' target='_blanc'>".$data."</a></td>
				<td><img src='{$filePut}/{$data}' width='30'></td></tr>";
			}
		}
		echo "</table><br>";
		
	}
		
	gallery();
}

?>

<form action="" enctype="multipart/form-data" method="POST">
<!-- <input type="hidden" name="MAX_FILE_SIZE" value="2097152" /> -->
Добавить файлы:<br/><input type="file" name="pic[]" multiple accept="image/*"><br/>
<br><input type="submit" value="Upload"><br/>
</form>