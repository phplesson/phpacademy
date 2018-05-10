
<form action="" method="GET">
<label>Enter a phrase:<br/><textarea name="text" placeholder="Some text"></textarea></label><br/>
<input type="submit" value="Add"><br/>
</form>


<?php

if (!empty($_GET['text'])) {
		function wordReverse($a) {
			//$a = trim($_GET['text']);
			$res = '';
			for ($i = mb_strlen($a)-1; $i >= 0; $i--) {
				$res .= $a[$i];
			}
			
			echo $res;
			}
	
	wordReverse($_GET['text']);
}

?>

