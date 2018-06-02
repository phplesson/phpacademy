<p>Input two numbers. Function returns their sum</p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=1.php">
    <input type="number" name="param1" /><br />
    <input type="number" name="param2" /><br />
    <input type="submit" name="submit" value="sum" />
</form>
<p>Result: <?=$viewData['result'];?></p>