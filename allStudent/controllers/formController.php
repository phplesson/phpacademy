<?php

if (isset($_POST['data'])) {
	$normalizeData = json_decode($_POST['data'], true);
	
	if (in_array('file', $normalizeData['inputType'])) {
		$additionalAttr = "enctype='multipart/form-data'";
	} else {
		$additionalAttr = NULL;
	}
	var_dump($normalizeData);
	echo "<form method='post' enctype='multipart/form-data' id='form' name='$normalizeData[key]'>";
	
	foreach ($normalizeData['inputType'] as $input => $count) {
		
		$keywords = preg_split("/[\s,]+/", $input);
		
		if ($keywords[0] == 'textarea') {
			for ($i = 0; $i < $count; $i++) {
				echo "<textarea name='$keywords[0]$i' id='$keywords[0]$i' $keywords[1]></textarea><br>";
			}
		} else {
			if (($keywords[1]) == 'multiple') {
				$addition = '[]';
			} else {
				$addition = NULL;
			}
			for ($i = 0; $i < $count; $i++) {
				echo "<input type='$keywords[0]' name='$keywords[0]$i$addition' id='$keywords[0]$i' $keywords[1]><br>";
			}
		}
	}
	echo "<input type='submit' id='sf'>";
	echo "</form>";
}


?>