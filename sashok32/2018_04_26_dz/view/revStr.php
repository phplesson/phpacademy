<p>Введите слова. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=9.php">
    <textarea name="param1" placeholder="some words"></textarea><br />
    <input type="submit" name="submit" value="Reverse" />
</form>
<p>Result: <?=$viewData['result'];?></p>