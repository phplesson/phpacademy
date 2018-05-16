<?php
return [
    'name' => 'Delete # words',
	'text' => ' Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму.',
	'func' => function ($a, $b) {

        $allow = "txt";
        $todir = '../uploads/';
        if (isset($_FILES['file']['tmp_name'])) {

            foreach ($_FILES['file']['name'] as $key => $file) {
                $info = explode('.', strtolower($file));// finding file extension
                if (end($info) == $allow) // checking if file extension allowed for upload
                {
                    $uploadDestination = $todir . basename($_FILES['file']['name'][$key]);
                    if (move_uploaded_file($_FILES['file']['tmp_name'][$key], $uploadDestination)) {
                        echo "<tr>";
                        echo "<td>$key</td>";
                        echo "<td>$file</td>";
                        echo "<td></td>";
                        //echo "File #$key with name \"$image\"  has been moved correctly";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td>$key</td>";
                    echo "<td>$file</td>";
                    echo "<td>Wrong file format!</td>";
                    echo "</tr>";
                }
            }
        }


		$fileContent = file_get_contents($a);
		$words = explode(' ', $fileContent);
		
		foreach ($words as $word) {
			if (iconv_strlen($word) <= $b) {
				$result[] = $word;
			}
		}
		
		$output = implode(' ', $result);
		file_put_contents($a, $output);
		return $output;
	},
    'argCount' => 2,
    'inputType' => 'fileForm',
];