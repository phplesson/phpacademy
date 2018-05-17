<p>Введите слова через пробел. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=1.php">
    <textarea name="words1" rows="5" cols="35" placeholder="Your Words"></textarea><br />
    <textarea name="words2" rows="5" cols="35" placeholder="Your Words"></textarea><br />
    <button type="reset" value="Reset">Reset</button>
    <button type="submit" name="submit" value="Common Words">Common Words</button>
</form>
<p>Result: <?php print_r($viewData['result']);?></p>
