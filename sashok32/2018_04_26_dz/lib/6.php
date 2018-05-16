<?php
return [
    'description' => 'Функция загружает несколько файлов и выводит в виде таблицы',
    'func' => function () {
		$filePut = 'lib/gallery';
		if (!is_dir($filePut)) mkdir($filePut);
		
		if (!empty($_FILES['pic'])) {
			foreach($_FILES['pic']['tmp_name'] as $key => $tmpName ){
				move_uploaded_file ($tmpName, $filePut.'/'.$_FILES["pic"]["name"][$key]);
			}
		}
		$scan = scandir($filePut);
		return $scan;},
	'paramGenerator' => function() {;
		},
    'argCount' => 0,
    'view' => 'view/upload.php',
];