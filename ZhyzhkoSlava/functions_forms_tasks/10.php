<form method="post" action="10.php">
	<input type="text" name="form1">
	<input type="submit" name="button1">
</form>
<?php
function uniq($str){
	echo count(array_unique(str_word_count($str, 1)));
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button1'])){
	$str=htmlspecialchars($_POST['form1']);
    uniq($str);
}
