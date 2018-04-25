<?php
$count1 = $_GET['count1'];
$count2 = $_GET['count2'];
$count3 = $_GET['count3'];

echo $count1 . $count3 . $count2 . '=';

switch ($count3) {
    case '+':
        echo $count1 + $count2;
        break;
  case '-':
        echo $count1 - $count2;
        break;
    case '*':
        echo $count1 * $count2;
        break;
   case '/':
   	if ($count2==0){
	   	echo "Na 0 delit nelzya";
	   	break;}
   	else{
		echo $count1 / $count2;
    	break;
   		}
        
}
?>
<head>
<meta charset="utf-8">
<title>Калькулятор</title>
<body>

<form method="get" action="calc.php">

<label for="username">Чило №1<br></label><input type="text" name="count1"><br>
<label for="username">Чило №2<br></label><input type="text" name="count2"><br>
<select name="count3">
  <option>+</option>
  <option>-</option>
  <option>*</option>
  <option>/</option>
</select><br><br>
<input type="submit" value="посчитать">
</form>
</body>
</html>