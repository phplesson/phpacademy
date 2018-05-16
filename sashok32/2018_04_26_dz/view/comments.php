<p>Оставьте свой комментарий. <?=$viewData['description'];?></p>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=7.php">
    <textarea name="param1" placeholder="some words"></textarea><br />
    <input type="submit" name="submit" value="Comment" />
</form>
<p>Result: <?php if ($viewData['result']) { echo "<u>КОММЕНТАРИИ ПОЛЬЗОВАТЕЛЕЙ:</u><br/><br/>";
$i = 0;
foreach ($viewData['result'] as $value) {
				$i++;
				echo $i.')'.trim($value)."<br/><br/>";
			}
			}
			?></p>