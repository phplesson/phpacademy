<p>Введите слова через пробел. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=13.php">
    <textarea name="param1" placeholder="some words"></textarea><br />
    <input type="submit" name="submit" value="Count common words" />
</form>
<p>Result: <?php if (!empty($viewData['result'])) {foreach ($viewData['result'] as $key => $value) {
				echo "<br/>".$key." - ".$value;}}?></p>