<p>Введите слова через пробел. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=4.php">
    <textarea name="param1" placeholder="/xampp or c:\\"></textarea><br />
    <input type="submit" name="submit" value="List" />
</form>
<p>Result: <?="<pre>"; print_r($viewData['result']); echo "</pre>";?></p>