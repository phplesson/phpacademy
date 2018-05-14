<p>Введите число символов слова. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=3.php">
    <input type="number" name="param1" /><br />
    <input type="submit" name="submit" value="Submit" />
</form>
<p>Result: <?=$viewData['result']?></p>