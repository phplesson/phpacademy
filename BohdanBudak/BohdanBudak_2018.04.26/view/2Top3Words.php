<p>Введите свои слова. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=2.php">
    <textarea name="words" rows="5" cols="35" placeholder="Your Words"></textarea><br />
    <button type="reset" value="Reset">Reset</button>
    <button type="submit" name="submit" value="Find top 3 the longest words">Find top 3 the longest words</button>
</form>
<p>Result: <?php print_r($viewData['result']);?></p>