<p>Input text value. Function returns its md5 sum</p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=2.php">
    <input type="text" name="param1" /><br />
    <input type="submit" name="submit" value="sum" />
</form>

<p>Result: <?=$viewData['result'];?></p>