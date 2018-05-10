<?php

function ($a, $b) {
			$a = scandir($a);
			$b = $_GET['text2'];
			$arrFiles = array ();
			foreach ($a as $value) {
			  if (strpos($value, $b) > 0 || strpos($value, $b) === 0) {
					//$arrFiles[] = $value;
					$arrFiles[] = $value."<br>";
				}
			}
		return $arrFiles;
}
listName($a, $b);


?>
