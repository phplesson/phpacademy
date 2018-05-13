<p>Введите слова через пробел. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=10.php">
    <textarea name="param1" placeholder="some words"></textarea><br />
    <input type="submit" name="submit" value="CountUnique" />
</form>
<p>Result: <?=$viewData['result'];?></p>