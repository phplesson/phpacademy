
<form action="" method="GET">
<label>Enter words:<br/><textarea name="text" placeholder="Some text"></textarea></label><br/>
<input type="submit" value="Add"><br/>
</form>


<?php

if (!empty($_GET['text'])) {
		function reverse($a) {
			
			$arr = explode('. ', $a);
			
			$res = array_reverse($arr);
			
			$res = implode('. ', $res);
			print_r ($res);
			}
	
	reverse($_GET['text']);
}

?>


