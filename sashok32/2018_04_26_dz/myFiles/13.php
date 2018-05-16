
<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

		function wordRepeat($a) {
			
			$arr = explode(' ', $a);
			
			$res = array_count_values($arr);
			
			arsort($res);
			print_r ($res);
			foreach ($res as $key => $value) {
				echo $key." - ".$value."<br/>";
			}
			
		}
	
	wordRepeat($string);


?>


