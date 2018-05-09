<?php

$text = file_get_contents('3.txt');
$lenght_world=$_POST['a'];

$arr=(explode(' ',$text));
for ($i = 0; $i < count($arr); $i++) {
     if ((mb_strlen($arr[$i])<=($lenght_world))){
         unset($arr[$i]);
     }
}
//file_put_contents('3new.txt',implode(" ", $arr));
$arr2 = (implode(" ", $arr));
print_r($arr2);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="3.php">
		<textarea name="a"></textarea><br>
	    <input type="submit" value="ok">
	</form>
</body>
</html>

