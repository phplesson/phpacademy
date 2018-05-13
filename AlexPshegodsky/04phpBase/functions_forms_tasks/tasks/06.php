<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            padding: 15px;
        }

        img {
            max-width: 50%;
            height: auto;
        }
    </style>
</head>
<form action="06.php" method="post" enctype="multipart/form-data">
    Файлы:<br/>
    <input name="images[]" type="file" multiple/><br/>
    <input type="submit" value="Отправить"/>
</form>
<table style="width:100%">
    <tr>
        <th>#</th>
        <th>Filename</th>
        <th>preview</th>
    </tr>
	
	<?php
	$allow = array("jpg", "jpeg", "gif", "png");
	$todir = '../gallery/';
	if (isset($_FILES['images']['tmp_name'])) {
		foreach ($_FILES['images']['name'] as $key => $image) {
			$info = explode('.', strtolower($image));// finding file extension
			if (in_array(end($info), $allow)) // checking if file extension allowed for upload
			{
				$uploadDestination = $todir . basename($_FILES['images']['name'][$key]);
				if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $uploadDestination)) {
					echo "<tr>";
					echo "<td>$key</td>";
					echo "<td>$image</td>";
					echo "<td><img src='$uploadDestination' alt='image$key'></td>";
					//echo "File #$key with name \"$image\"  has been moved correctly";
					echo "</tr>";
				}
			} else {
				echo "<tr>";
				echo "<td>$key</td>";
				echo "<td>$image</td>";
				echo "<td>Wrong file format!</td>";
				echo "</tr>";
			}
		}
	}
	?>
</table>
<body>
</body>
</html>
