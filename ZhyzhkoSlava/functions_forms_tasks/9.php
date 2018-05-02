<form method="post" action="9.php">
	<input type="text" name="form1">
	<input type="submit" name="button1" value="Revert">
</form>
<?php
function revert($arg){
	echo strrev($arg);
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button1'])){
	$arg=htmlspecialchars($_POST['form1']);
    revert($arg);
}
