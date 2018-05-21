<?php
if (!empty($_SESSION['name'])) {
	$_SESSION['countSes']++;
	$_SESSION['countPage2']++;
	$_SESSION['countFile'] = 0;
	$filePut = 'gallery';
	echo "<br><b><u>Загруженные файлы:</u></b><br><table border='1'cellspacing='0' cellpadding='5'>";
	foreach (scandir($filePut) as $data) {
		if (is_dir($data)) {
			continue;
		} else {
			if (strpos($data, 'jpg')) {
				echo "<tr><td><a href='{$filePut}/{$data}' target='_blanc'><img src='{$filePut}/{$data}' width='75'></a></td></tr>";
				$_SESSION['countFile']++;
				continue;
			}
			echo "<tr><td><a href='{$filePut}/{$data}' target='_blanc'>{$data}</a></td></tr>";
			$_SESSION['countFile']++;
		}
	}
	echo "<br></table><br>";
} else {
	header('Location: ?page=form');
}
?>



