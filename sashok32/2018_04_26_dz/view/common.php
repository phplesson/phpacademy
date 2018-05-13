<p>Введите слова через пробел. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=1.php">
    <textarea name="param1" placeholder="some words"></textarea><br />
    <textarea name="param2" placeholder="some words"></textarea><br />
    <input type="submit" name="submit" value="Common Words" />
</form>
<p>Result: <?php print_r($viewData['result']);?></p>