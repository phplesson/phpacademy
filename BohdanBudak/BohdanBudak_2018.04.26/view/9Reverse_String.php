<p>Введите ваше слово. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=9.php">
    <textarea name="words1" rows="5" cols="35" placeholder="Your Word"></textarea><br />
    <button type="reset" value="Reset">Reset</button>
    <button type="submit" name="submit" value="Flip this word">Flip this word</button>
</form>
<p>Result: <?=$viewData['result'];?></p>
