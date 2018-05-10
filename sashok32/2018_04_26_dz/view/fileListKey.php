<p>Введите директорию и ключевые слова</p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=5.php">
    <textarea name="param1" placeholder="/xampp or c:\\"></textarea><br />
    <textarea name="param2" placeholder="prog"></textarea><br />
    <input type="submit" name="submit" value="List" />
</form>
<p>Result: <?="<pre>"; print_r($viewData['result']); echo "</pre>";?></p>