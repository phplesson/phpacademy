
<form action="" method="GET">
<label>Enter words:<br/><textarea name="text" placeholder="Some text"></textarea></label><br/>
<input type="submit" value="Add"><br/>
</form>


<?php

if (!empty($_GET['text'])) {
		function wordUniq($a) {
			
			$arr = explode(' ', $a);
			$arr = array_unique($arr);
			
			print_r ($arr);
			}
	
	wordUniq($_GET['text']);
}

?>




