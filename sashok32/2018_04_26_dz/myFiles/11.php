
<form action="" method="GET">
<label>Enter words:<br/><textarea name="text" placeholder="Some text"></textarea></label><br/>
<input type="submit" value="Add"><br/>
</form>


<?php

if (!empty($_GET['text'])) {
		function bigLetter($a) {
			
			$arr = explode('. ', $a);
			
			foreach ($arr as $key){
				$res[] = ucfirst($key);
			}
			$res = implode('. ', $res);
			print_r ($res);
			}
	
	bigLetter($_GET['text']);
}

?>


