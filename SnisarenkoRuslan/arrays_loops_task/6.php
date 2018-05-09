<?php
	$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
	foreach ($arr as $key => $value) {
			$en[] = $key;
			$ru[] = $value;}	
	print_r($en); 
	echo "<br/>"; 
	print_r($ru);

?>