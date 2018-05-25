<p>Введите ваш текст. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=10.php">
    <textarea name="text" rows="5" cols="35" placeholder="text"></textarea><br />
    <button type="reset" value="Reset">Reset</button>
    <button type="submit" name="submit"  value="Submit">Submit</button>
</form>
<p>Result: <?=$viewData['result']?></p>

