<p>Добавить файлы. <?=$viewData['description'];?></p>
<form method="POST" enctype="multipart/form-data" action="index.php?action=6.php">
    <input type="file" name="pic[]" multiple accept="image/*"><br />
    <input type="submit" name="submit" value="Upload" />
</form>
<p>Result: <?php if (!empty($_FILES['pic'])) { echo "<br><b><u>Загруженные картинки:</u></b><br><table border='1'cellspacing='0' cellpadding='5'>";
 $filePut = 'lib/gallery';
 foreach ($viewData['result'] as $data) {
			if (is_dir($data)) {
				continue;
			} else {
				echo "<tr><td><a href='{$filePut}/{$data}' target='_blanc'>".$data."</a></td>
				<td><img src='{$filePut}/{$data}' width='30'></td></tr>";
			}
		}
echo "</table><br>";}?></p>